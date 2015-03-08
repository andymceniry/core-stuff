<?php

require_once 'class.mp3tagedit.php';

$oTag = new mp3tagedit();

$oTag->path = 'tracks';

$oTag->defaultTags = array(
    'artist' => 'Sante Les Amis',
    'album' => 'Sudamericana',
    'year' => '2012'
);

$oTag->addTrackTags('z-00', array('title' => 'El Rayo, El Trueno Y El Silbido'));
$oTag->addTrackTags('z-01', array('title' => 'The Byte Of Love'));
$oTag->addTrackTags('z-02', array('title' => 'Brasil'));
$oTag->addTrackTags('z-03', array('title' => 'Huracan'));
$oTag->addTrackTags('z-04', array('title' => 'Robot'));
$oTag->addTrackTags('z-06', array('title' => 'El Ultimo Verano'));
$oTag->addTrackTags('z-07', array('title' => 'The Road'));
$oTag->addTrackTags('z-08', array('title' => 'She Gets Me Excited'));
$oTag->addTrackTags('z-09', array('title' => 'Dormido'));
$oTag->addTrackTags('z-11', array('title' => 'The River'));
$oTag->addTrackTags('z-12', array('title' => 'Black Rain'));


$oTag->updateTracks();
?>