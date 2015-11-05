<?php

require_once 'class.mp3tagedit.php';

$oTag = new mp3tagedit();

$oTag->path = 'tracks';

$oTag->defaultTags = array(
    'artist' => 'Artist',
    'album' => 'Album',
    'year' => 'YYYY'
);

$oTag->addTrackTags('01', array('title' => 'Title'));
$oTag->addTrackTags('02', array('title' => 'Title'));
$oTag->addTrackTags('03', array('title' => 'Title'));
$oTag->addTrackTags('04', array('title' => 'Title'));
$oTag->addTrackTags('05', array('title' => 'Title'));
$oTag->addTrackTags('06', array('title' => 'Title'));
$oTag->addTrackTags('07', array('title' => 'Title'));
$oTag->addTrackTags('08', array('title' => 'Title'));
$oTag->addTrackTags('09', array('title' => 'Title'));
$oTag->addTrackTags('10', array('title' => 'Title'));


$oTag->updateTracks();
?>