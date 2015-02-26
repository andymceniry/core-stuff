<?php

function arrayChangeKeys($aaData, $aaNewKeys)
{

    foreach ($aaNewKeys as $old => $new) {
        if (array_key_exists($old, $aaData)) {
            $aaData[$new] = $aaData[$old];
            unset($aaData[$old]);
        }
    }
    return $aaData;

}
?>