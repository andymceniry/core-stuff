<?php

//  http://php.net/manual/en/function.json-decode.php

if (!function_exists('json_decode')) {
    function json_decode($json)
    {
        $comment = false;
        $out = '$x=';

        for ($i = 0; $i < strlen($json); $i++) {
            if (!$comment) {
                if ($json[$i] == '{' || $json[$i] == '[') {
                    $out .= ' array(';
                } elseif ($json[$i] == '}' || $json[$i] == ']') {
                    $out .= ')';
                } elseif ($json[$i] == ':') {
                    $out .= '=>';
                } else {
                    $out .= $json[$i];
                }
            } else {
                $out .= $json[$i];
            }
            if ($json[$i] == '"') {
                $comment = !$comment;
            }
        }
        eval($out . ';');
        return $x;

    }
}
?>