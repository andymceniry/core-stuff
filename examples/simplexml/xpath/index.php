<?php


require_once '../../../_config.php';



$file = '../demo.xml';
#$file = file_get_contents($file);


$j = xml2array($file);

echo '<pre style="font-size:90%;">'.var_export($j, TRUE).'</pre>';
die("<br/>".date("H:i:s").' => "'.__FILE__.'": Line '.__LINE__);



?>