<!DOCTYPE html>

<?php

$dataWebPage = file_get_contents('http://www.ns.nl/actuele-vertrektijden/avt?station=alm');

$dom = DOMDocument();
$dom.loadHTML($dataWebPage);

$divs = $dom->getElementsByTagName('div');
foreach ($divs as $div) {
    foreach ($div->attributes as $attr) {
      $name = $attr->nodeName;
      $value = $attr->nodeValue;
      echo "Attribute '$name' :: '$value'<br />";
    }
}

?>
<!--

http://www.ns.nl/actuele-vertrektijden/avt?station=alm

-->

<html lang="nl_NL">
    <head>
        <title>Je fucking treintijden BITCH!</title>
    </head>
    <body>
        <?php echo $dataWebPage;?>
    </body>
</html>
