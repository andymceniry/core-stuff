<?php

function arraySortByField($aArrayToSort, $sKeyToSort, $sDir = 'a')
{
    for ($i = 0; $i < count($aArrayToSort); $i++) {
        if (!array_key_exists($sKeyToSort, $aArrayToSort[$i])) {
            return $aArrayToSort;
        }
        $aArrayTmp[$i] = $aArrayToSort[$i][$sKeyToSort] . '----' . $i;
    }
    if ($sDir == 'a') {
        asort($aArrayTmp);
    } else {
        rsort($aArrayTmp);
    }
    foreach ($aArrayTmp as $key => $val) {
        $aArrayToSortTmp = explode('----', $val);
        $aSortedArray[] = $aArrayToSort[$aArrayToSortTmp[1]];
    }
    return $aSortedArray;

}
?>