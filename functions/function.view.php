<?php

function view($data, $hidden = 0) {

    $sPreStyles = 'background:#d4d4d4;padding:10px;font-size:90%;';
    
    $type = 'unknown';
    
    $type = is_bool($data) ? 'bool' : $type;
    $type = is_string($data) ? 'string' : $type;
    $type = is_array($data) ? 'array' : $type;
    $type = is_object($data) ? 'object' : $type;

    if ($type == 'string') {
        json_decode($data);
        if (function_exists('json_last_error') AND json_last_error() == JSON_ERROR_NONE) {
            $type = 'json';
        }
    }

    if ($type == 'string') {
        $trim = trim($data);
        if (substr(strtoupper($trim), 0, 11) == 'DELETE FROM' AND strpos(strtoupper($data), ' WHERE ') > -1) {
            $type = 'SQL';
        }
        if (substr(strtoupper($trim), 0, 11) == 'INSERT INTO' AND strpos(strtoupper($data), ' VALUES ') > -1) {
            $type = 'SQL';
        }
        if (substr(strtoupper($trim), 0, 6) == 'SELECT' AND strpos(strtoupper($data), ' FROM ') > -1) {
            $type = 'SQL';
        }
        if (substr(strtoupper($trim), 0, 6) == 'UPDATE' AND strpos(strtoupper($data), ' SET ') > -1) {
            $type = 'SQL';
        }

    }
  
    echo $hidden == 0 ? '<pre style="' . $sPreStyles . '">' : "\n<!--\n";
    
    switch($type) {
    
        case'array':
        case'object':
            echo str_replace('  ', '    ', var_export($data, TRUE));
            break;

        case'string':
            echo $data;
            break;

        case'bool':
            echo $data == true ? 'true' : 'false';
            break;

        case'SQL':
            $newLine = $hidden == 0 ? "<br/>" : "\n";
            $data = trim($data);
            $data = str_replace(array("\r", "\n"), '', $data);
            $data = str_replace(' AND ', $newLine . 'AND ', $data);
            $data = str_replace(' DELETE ', $newLine . 'DELETE ', $data);
            $data = str_replace(' FROM ', $newLine . 'FROM ', $data);
            $data = str_replace(' GROUP BY ', $newLine . 'GROUP BY ', $data);
            $data = str_replace(' LEFT JOIN ', $newLine . 'LEFT JOIN ', $data);
            $data = str_replace(' LIMIT ', $newLine . 'LIMIT ', $data);
            $data = str_replace(' OFFSET ', $newLine . 'OFFSET ', $data);
            $data = str_replace(' ORDER BY ', $newLine . 'ORDER BY ', $data);
            $data = str_replace(' SET ', $newLine . 'SET ', $data);
            $data = str_replace(' WHERE ', $newLine . 'WHERE ', $data);
            $data = str_replace(' VALUES ', $newLine . 'VALUES ', $data);
            $data = str_replace(' (', $newLine . '(', $data);
            echo $data;
            break;

        case'json':
            $result      = '';
            $pos         = 0;
            $strLen      = strlen($data);
            $indentStr   = $hidden == 0 ? "    " : "\t";
            $newLine     = $hidden == 0 ? "<br/>" : "\n";
            $prevChar    = '';
            $outOfQuotes = true;

            for ($i = 0; $i < $strLen; $i++) {
                // Grab the next character in the string
                $char = substr($data, $i, 1);
                // Are we inside a quoted string?
                if ($char == '"' && $prevChar != '\\') {
                    $outOfQuotes = !$outOfQuotes;
                }
                // If this character is the end of an element,
                // output a new line and indent the next line
                else if (($char == '}' || $char == ']') && $outOfQuotes) {
                    $result .= $newLine;
                    $pos--;
                    for ($j = 0; $j < $pos; $j++) {
                        $result .= $indentStr;
                    }
                }
                // eat all non-essential whitespace in the input as we do our own here and it would only mess up our process
                else if ($outOfQuotes && false !== strpos(" \t\r\n", $char)) {
                    continue;
                }
                // Add the character to the result string
                $result .= $char;
                // always add a space after a field colon:
                if ($char == ':' && $outOfQuotes) {
                    $result .= ' ';
                }
                // If the last character was the beginning of an element,
                // output a new line and indent the next line
                if (($char == ',' || $char == '{' || $char == '[') && $outOfQuotes) {
                    $result .= $newLine;
                    if ($char == '{' || $char == '[') {
                        $pos++;
                    }
                    for ($j = 0; $j < $pos; $j++) {
                        $result .= $indentStr;
                    }
                }
                $prevChar = $char;
            }
            echo $result;            
            break;
            
    }  //  end switch
    
    echo $hidden == 0 ? '</pre>' : "\n-->\n";
    
}

?>