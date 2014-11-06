<style>
* { font-family:calibri; font-size:14px; }
.selector { float:left; width:22%; margin:0 1% 0 0; background:#ddd; padding:1%; }
.result { float:left; width:96%; padding:2% 2% 20px 2%; border-bottom:1px solid #333;}
h2 { margin:0; color:#a00; background:#bbb; padding:2%;  }
h3 { margin:5px 0 0 0; }
</style>

<?php

require_once '../../../_config.php';
require_once '/Zend/Dom/Query.php';

$data = file_get_contents('test.html');
view(htmlentities($data));
$dom = new Zend_Dom_Query($data);

$selectors[] = '.foo .bar a';
$selectors[] = '.foo .bar';
$selectors[] = '.foo .bar a';
$selectors[] = '.foo .bar';

foreach ($selectors as $selector) {

    echo '<div class="selector">';
    echo "<h2>$selector</h2>";
    $results = $dom->query($selector);

    foreach ($results as $result) {
        echo '<div class="result">';
        echo "<h3>nodeValue</h3>" . $result->nodeValue;
        echo "<h3>textContent</h3>" . $result->textContent;
        echo "<h3>c14n()</h3>" . $result->c14n();
        echo "<h3>getAttribute('id')</h3>" . $result->getAttribute('id');
        echo "<h3>parentNode->textContent</h3>" . $result->parentNode->textContent;
        echo "<h3>parentNode->c14n</h3>" . $result->parentNode->c14n();
        echo "<h3>parentNode->parentNode->c14n</h3>" . $result->parentNode->parentNode->c14n();
        #echo '<pre style="font-size:90%;">'.var_export($result->parentNode, TRUE).'</pre>';
        #echo '<pre style="font-size:90%;">'.var_export($result->nextSibling, TRUE).'</pre>';
        echo '</div>';
    }
    echo '</div>';
}

?>