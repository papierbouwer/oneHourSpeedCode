<!DOCTYPE html>

<?php

$dataWebPage = file_get_contents('http://www.ns.nl/actuele-vertrektijden/avt?station=alm');

$doc = new DOMDocument();
$doc->loadHTML('<?xml encoding="UTF-8">' . $dataWebPage);

$doc = $doc->getElementById("id3");
?>
<!--

http://www.ns.nl/actuele-vertrektijden/avt?station=alm

-->

<html lang="nl_NL">
    <head>
        <title>Je fucking treintijden BITCH!</title>
    </head>
    <body>
        <?php echo $doc->saveHTML();?>
    </body>
</html>
