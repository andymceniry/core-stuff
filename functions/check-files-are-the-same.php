<?php
echo '<style>';
echo 'p { margin:0; font-weight:bold; }';
echo 'pre.hashes { margin-top:0; }';
echo '.diffromlast { color:#900; }';
echo '</style>';

$folders[] = 'folder1';
$folders[] = 'folder2';
$folders[] = 'folder3';

$files[] = '/js/file1.js';
$files[] = '/js/file2.js';
$files[] = '/js/file3.js';

$regreplace[] = '/\$Id.*\$/';

foreach ($files as $file) {
    echo '<p>'.$file.'</p>';
    echo '<pre class="hashes">';
    $lasthash = '';
    foreach ($folders as $folder) {
        $URL = $folder.$file;
        $file_content = file_get_contents($URL);
        if (isset($regreplace) && count($regreplace) > 0) {
            foreach ($regreplace as $reg) {
                $file_content = preg_replace($reg, '', $file_content);
            }
        }
        $hash = md5($file_content);
        echo ($lasthash != '' AND $lasthash != $hash) ? '<span class="diffromlast">'.$hash.': '.$folder.'</span><br/>' : $hash.': '.$folder.'<br/>';
        $lasthash = $hash;
    }
    echo '</pre>';
}

?>