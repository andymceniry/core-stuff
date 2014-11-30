<?php

require_once 'class.mp3tagedit.php';

$oTag = new mp3tagedit();

$oTag->path = 'tracks';

$oTag->defaultTags = array(
    'artist' => 'Artist Name Tag',
    'album' => 'Album Name Tag',
    'year' => '1234'
);

$oTag->addTrackTags('existing_filename', array('title' => 'Track Title', 'artist' => array('Artist')));

$oTag->update_tracks();
?>