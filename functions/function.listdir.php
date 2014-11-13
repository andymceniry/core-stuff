<?php

function listdir($dir)
{

    //  invalid directory
    if (!is_dir($dir) OR !$handle = opendir($dir)) {
        return false;
    }

    $dir_info = array();

    while (false !== ($entry = readdir($handle))) {
        $full_path = $dir.'/'.$entry;
        if ($entry != '.' AND $entry != '..') {
            $type = '?';
            if (is_dir($full_path)) {
                $type = 'folder';
            }
            if (is_file($full_path)) {
                $type = 'file';
            }
            $dir_info['entries'][$entry] = array('type' => $type);
            $dir_info[$type.'s'][] = $entry;
        }
    }

    closedir($handle);
    return $dir_info;

}

?>