<?php

/**
 * Copy a file, or recursively copy a folder and its contents
 * @param       string   $src    Source path
 * @param       string   $dst      Destination path
 * @param       string   $permissions New folder creation permissions
 * @return      bool     Returns true on success, false on failure
 */
function deepcopy($src, $dst, $options = null)
{
    //  set default settings
    $defaults['permissions'] = '0755';
    $defaults['ext_exc'] = '';
    $defaults['ext_inc'] = '';

    //  merge with user options
    if ($options != null and is_array($options)) {
        $opts = array_merge($defaults, $options);
    } else {
        $opts = $defaults;
    }

    //  add helper objects into opts
    $opts['ext_exc'] = str_replace(' ', '', $opts['ext_exc']);
    $opts['ext_exc_arr'] = explode(',', strtolower($opts['ext_exc']));
    $opts['ext_inc'] = str_replace(' ', '', $opts['ext_inc']);
    $opts['ext_inc_arr'] = explode(',', strtolower($opts['ext_inc']));

    //  symlinks
    if (is_link($src)) {
        return symlink(readlink($src), $dst);
    }

    //  files
    if (is_file($src)) {
        return copy($src, $dst);
    }

    //  make dest folder
    if (!is_dir($dst)) {
        mkdir($dst, $opts['permissions']);
    }

    //  loop through the folder
    $dir = dir($src);
    while (false !== $entry = $dir->read()) {

        //  ignore pointers
        if ($entry == '.' || $entry == '..') {
            continue;
        }

        //  check if we want to include this filetype
        $path_parts = pathinfo("$src/$entry");
        if (array_key_exists('extension', $path_parts) AND in_array($path_parts['extension'], $opts['ext_exc_arr'])) {
            continue;
        }
        if ($opts['ext_inc'] != '' AND array_key_exists('extension', $path_parts) AND !in_array($path_parts['extension'], $opts['ext_inc_arr'])) {
            continue;
        }

        //  do copy
        deepcopy("$src/$entry", "$dst/$entry", $options);
    }

    //  tidy up
    $dir->close();

    return true;

}

?>