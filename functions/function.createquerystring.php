<?php

function createquerystring($data = NULL, $merge = true)
{
    if ($data == NULL) {
        $data = array();
    }

    if ($merge) {
        $array = array_filter(array_merge($_GET, $data));
    } else {
        $array = $data;
    }

    $keyvalarray = array();
    $string = '';

    foreach ($array as $k => $v) {
        $keyvalarray[] = "$k=$v";
    }
    $string = implode('&', $keyvalarray);

    return $string;

}

?>