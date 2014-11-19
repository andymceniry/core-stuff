<?php

function ipaddress2number($ip)
{
    $aParts = explode('.', $ip);
    $aParts = array_reverse($aParts);

    $number = 0;
    for ($i = 0; $i < count($aParts); $i++) {
        $val = $aParts[$i] * pow(256, $i);
        $number = $number + $val;
    }

    return $number;

}
?>