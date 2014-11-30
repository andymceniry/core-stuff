<?php

require_once '../../../../jamesheinrich/getID3/getid3/getid3.php';
require_once '../../../../jamesheinrich/getID3/getid3/write.php';

class mp3tagedit
{

    function __construct()
    {
        $this->path = '/';
        $this->defaultTags = array();
        $this->trackTags = array();
        $this->initWriter();

    }

    function initWriter()
    {
        $this->writer = new getid3_writetags;
        $this->writer->tagformats = array('id3v2.3');
        $this->writer->overwrite_tags = true;
        $this->writer->remove_other_tags = true;
        $this->writer->tag_encoding = 'UTF-8';

    }


    function addTrackTags($file, $aaData)
    {
        $this->trackTags[$file] = $aaData;

    }

    function updateTracks()
    {

        $i = 1;
        foreach ($this->trackTags as $file => $data) {

            $aaTagData = array();

            foreach ($this->defaultTags as $k => $v) {
                $aaTagData[$k] = $v;
                if (!is_array($v)) {
                    $aaTagData[$k] = array($v);
                }
            }

            foreach ($data as $k => $v) {
                $aaTagData[$k] = $v;
                if (!is_array($v)) {
                    $aaTagData[$k] = array($v);
                }
            }

            $aaTagData['filename'] = $aaTagData['title'][0] .'.mp3';

            $aaTagData['track'] = array($i);

            $this->writer->filename = $this->path."/$file.mp3";
            $this->writer->tag_data = $aaTagData;

            if ($this->writer->WriteTags()) {
                echo 'Successfully wrote tags for '.$file.'.mp3<br>';
                if (!empty($this->writer->warnings)) {
                    echo 'There were some warnings:<br>'.implode('<br><br>', $this->writer->warnings);
                }
                rename($this->path."/$file.mp3", $this->path."/".$aaTagData['filename']);
            } else {
                echo 'Failed to write tags for '.$file.'.mp3!<br>'.implode('<br><br>', $this->writer->errors);
            }

            $i++;

        }

    }

}

?>