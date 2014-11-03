<?php

function getFile($file) {

    $fp = fopen($file, 'r');
    $data = file_get_contents($file);
    return $data;
}

?>