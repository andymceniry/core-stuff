<?php

function removeArrayKeyPrefix($aaData, $prefix)
{
    $returnData = array();
    foreach ($aaData as $key => $val) {
        if (substr($key, 0, strlen($prefix)) == $prefix) {
            $key = substr($key, strlen($prefix));
        }
        $returnData[$key] = $val;
    }
    return $returnData;

}

?>