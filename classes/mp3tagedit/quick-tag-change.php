<?php

require_once 'class.mp3tagedit.php';

$oTag = new mp3tagedit();
$oTag = new getid3_writetags;
$oTag->tagformats = array('id3v2.3');
$oTag->overwrite_tags = true;
$oTag->remove_other_tags = false;
$oTag->tag_encoding = 'UTF-8';

if ($handle = opendir('tunes')) {

    while (false !== ($entry = readdir($handle))) {
        if($entry != '.' AND $entry != '..') {
            echo "<br/>$entry\n";

            $aaTagData['album'] = array('Turn Up the Bass');

            $oTag->filename = "tunes/$entry";
            $oTag->tag_data = $aaTagData;

            if ($oTag->WriteTags()) {
                echo 'Successfully wrote tags for '.$entry.'<br>';
                if (!empty($oTag->warnings)) {
                    echo 'There were some warnings:<br>'.implode('<br><br>', $oTag->warnings);
                }

            } else {
                echo 'Failed to write tags for '.$entry.'!<br>'.implode('<br><br>', $oTag->errors);
            }


        }
    }

    closedir($handle);
}

?>
