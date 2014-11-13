<?php

//  uses simplexml which ignores attributes on nodes that do not have child nodes

function xml2json($xml)
{

    if (is_file($xml)) {
        $xml = simplexml_load_file($xml);
    } else {
        $xml = file_get_contents($xml);
        $xml = simplexml_load_string($xml);
    }

    $json = json_encode($xml);

    return $json;

}

?>