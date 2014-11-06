<?php

//  config - core
$cfg['DS'] = DIRECTORY_SEPARATOR;
$cfg['PS'] = PATH_SEPARATOR;
$cfg['root'] = realpath(dirname(__FILE__));

//  config - folders
$cfg['examples'] = $cfg['root'] . $cfg['DS'] . 'examples';
$cfg['functions'] = $cfg['root'] . $cfg['DS'] . 'functions';
$cfg['frameworks'] = $cfg['root'] . $cfg['DS'] . 'frameworks';

//  config - includes
$cfg['include_path'] = $cfg['frameworks'];
$cfg['include_path'] .= $cfg['PS'] . $cfg['frameworks'];

//  config - view
#echo '<pre style="font-size:90%;">'.var_export($cfg, TRUE).'</pre>';

//  set include path
ini_set('include_path', $cfg['include_path']);

//  include core files
include_once('functions/_import.php');

?>