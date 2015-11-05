<link rel="stylesheet" href="test.dategroup.css" type="text/css" />
<?php
require_once '../../functions/_import.php';
require_once 'class.dategroup.php';

/*
$options['start_date'] = '1974/08/02';
$options['total_days'] = 100;
$oCal = new dategroup($options);
$dates = $oCal->days;
$HTML = $oCal->html;
echo $HTML;
*/

$options['start_date'] = '1978/07/24';
$options['total_days'] = 50;
$options['css_calendar_id'] = 'calendarLI';
$oCal = new dategroup($options);
$dates = $oCal->days;
$HTML = $oCal->html;
echo $HTML;


?>

<div style="clear:both;"> . </div>
<?php
#view($dates);
?>