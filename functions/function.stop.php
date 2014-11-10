<?php

function stop($message = '', $hidden = 0) {

    $sPreStyles = 'background:#d4d4d4;padding:10px;font-size:90%;';
    
    $details = '';
    $aDebugStack = debug_backtrace();
    foreach( $aDebugStack as $aDebugStackItem ) {
        $details .= JSON_encode($aDebugStackItem);
        $details .= $hidden == 0 ? "\n\n" : "\n";
    }
    $details = trim($details);        
    
    echo $hidden == 0 ? '<pre style="' . $sPreStyles . '">' : "\n<!--\n";
    echo $hidden == 0 ? "<p title='$details'>" : '';
    echo date('H:i:s') . " - Stop function called at line ".$aDebugStack[0]['line']." of ".basename($aDebugStack[0]['file'])."";
    echo $message == '' ? '' : " with message:\n'$message'";
    echo $hidden == 0 ? '' : "\n$details";
    echo $hidden == 0 ? "</p>" : '';
    echo $hidden == 0 ? '</pre>' : "\n-->\n";
    
    die();
}

?>