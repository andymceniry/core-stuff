<?php

function arrayMustHaveKey($aNames = NULL, $aDataToCheck = NULL)
{
    if ($aDataToCheck == NULL) {
        GLOBAL $_VALUES;
        $aDataToCheck = $_VALUES;
    }

    if (!is_array($aNames)) {
        $aNames = array($aNames);
    }

    foreach ($aNames as $name) {
        if (!array_key_exists($name, $aDataToCheck) OR $aDataToCheck[$name] == '') {
            return $name;
        }
    }
    return true;

}

?>