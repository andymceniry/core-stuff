<?php

function deepdelete($path)
{
    if (is_dir($path) === true) {
        $files = array_diff(scandir($path), array('.', '..'));
        foreach ($files as $file) {
            deepdelete(realpath($path) . '/' . $file);
        }
        return rmdir($path);
    } elseif (is_file($path) === true) {
        return unlink($path);
    }
    return true;

}

?>