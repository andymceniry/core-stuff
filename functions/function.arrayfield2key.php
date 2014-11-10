<?php

function arrayField2Key($aaArray, $field)
{
    $aReturnArray = array();
    foreach ($aaArray as $aArray) {
        $aReturnArray[$aArray[$field]] = $aArray;
    }
    return $aReturnArray;
}

?>