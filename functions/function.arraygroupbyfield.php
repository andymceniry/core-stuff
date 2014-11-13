<?php

//  take an array and group the data by a set field,
//  param aaData - the array to be grouped
//  param sField - the field to groupd by (the values will be new keys)
//  param bKeepField - should the field be kept in value data or just set as new key
function arrayGroupByField($aaData, $sField, $bKeepField = true)
{
    $aaReturnData = array();
    foreach ($aaData as $aItem) {
        $key = $aItem[$sField];
        if ($bKeepField == false) {
            unset($aItem[$sField]);
        }
        $aaReturnData[$key][] = $aItem;
    }
    return $aaReturnData;

}
?>