<?php

require_once 'class.mp3tagedit.php';

$artist = 'Richard Cheese';
$trackOrder = true;
$doTagUpdates = true;



$oTag = new mp3tagedit();
$oTag = new getid3_writetags;
$oTag->tagformats = array('id3v2.3');
$oTag->overwrite_tags = true;
$oTag->remove_other_tags = false;
$oTag->tag_encoding = 'UTF-8';

$idx = 0;
if ($handle = opendir('tracks')) {

    while (false !== ($entry = readdir($handle))) {
        if($entry != '.' AND $entry != '..') {
            $resultData['file'] = $entry;

            //  title
            $title = $entry;
            $title = str_replace($artist . ' - ', '', $title);  //  remove artist name from start of tracks
            $title = str_replace('.mp3', '', $title);  //  remove file extension
            $title = preg_replace('/[0-9]+ - /', '', $title);  //  remove numbers from start of tracks
            $aaTagData['title'] = array('title' => $title);

            //  track number
            if (isset($trackOrder)) {
                if (is_array($trackOrder)) {
                    $orderArray = explode(',', $trackOrder);
                    $aaTagData['track'] = array('track' => $orderArray[$idx]);
                } else {
                    $aaTagData['track'] = array('track' => $idx + 1);
                }
            }

            //  process
            if ($doTagUpdates) {
                $oTag->filename = "tracks/$entry";
                $oTag->tag_data = $aaTagData;

                if ($oTag->WriteTags()) {
                    $resultData['result'] = 'Successfully wrote tags';
                    if (!empty($oTag->warnings)) {
                        $resultData['warnings'] = $oTag->warnings;
                    }

                } else {
                    $resultData['result'] = 'Failed to write tags';
                    $resultData['errors'] = $oTag->errors;
                }
            } else {
                $resultData['result'] = 'Tag not written as doTagUpdates not set to true';
            }

            $resultData['tags'] = call_user_func_array('array_merge', $aaTagData);
            echo '<pre>' . var_export($resultData, TRUE) . '</pre>';

            $idx++;
        }

    }

    closedir($handle);
}

?>
