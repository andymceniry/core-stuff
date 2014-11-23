<?php

function makeurlfromstring($string, $options = null)
{
    //  if no options provided then create empty array
    $options = $options == null ? array() : $options;

    //  here are the defaults
    $defaults = array(
        'errorString' => 'n-a',
        'replacements' => array(
            '&' => ''
        ),
        'seperator' => '-'
    );

    //  merge provided options with defaults to create settings
    $settings = array_merge($defaults, $options);

    //  replace unwanted characters
    foreach ($settings['replacements'] as $before => $after) {
        $string = str_replace($before, $after, $string);
    }

    //  strip unwanted characters (leave spaces)
    $string = preg_replace('/[^A-Za-z0-9_ -]+/', '', $string);

    //  replace spaces
    $string = str_replace(' ', $settings['seperator'], $string);

    //  remove duplicate
    $string = preg_replace('/['.$settings['seperator'].']+/', $settings['seperator'], $string);

    // trim
    $string = trim($string);

    // lowercase
    $string = strtolower($string);

    if (empty($string)) {
        return $settings['errorString'];
    }

    return $string;

}

?>