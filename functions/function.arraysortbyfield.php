<?php

function arraySortByField($aArrayToSort, $sKeyToSort, $sDir = 'a', $bIsNumber = false)
{
    foreach ($aArrayToSort as $key => $data) {
        if (!array_key_exists($sKeyToSort, $aArrayToSort[$key])) {
            return $aArrayToSort;
        }
        $aArrayTmp[$key] = $aArrayToSort[$key][$sKeyToSort] . '----' . $key;
    }
    if ($bIsNumber == false) {
        if ($sDir == 'a') {
            asort($aArrayTmp);
        } else {
            rsort($aArrayTmp);
        }
    } else {
        natsort($aArrayTmp);
        if ($sDir != 'a') {
            $aArrayTmp = array_reverse($aArrayTmp);
        }
    }

    foreach ($aArrayTmp as $key => $val) {
        $aArrayToSortTmp = explode('----', $val);
        $aSortedArray[$aArrayToSortTmp[1]] = $aArrayToSort[$aArrayToSortTmp[1]];
    }
    return $aSortedArray;

}
?>