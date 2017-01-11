<!DOCTYPE html>

<?php

$dataWebPage = file_get_contents('http://www.ns.nl/actuele-vertrektijden/avt?station=alm');

$dom = new DOMDocument();
$dom->loadHTML($dataWebPage);

$data = new ArrayObject();

$divs = $dom->getElementsByTagName('div');
foreach ($divs as $div) {
    foreach ($div->attributes as $attr) {
      $name = $attr->nodeName;
      $value = $attr->nodeValue;
      if($name == "class" && $value == "container"){
        $data->append($div);
      var_dump($div);}
      echo "Attribute '$name' :: '$value'<br />";
    }
}

?>
<!--

url: http://www.ns.nl/actuele-vertrektijden/avt?station=alm

-->

<html lang="nl_NL">
    <head>
        <title>Je fucking treintijden BITCH!</title>
        <meta charset="utf-8" />
        <link style="text/css" rel="stylesheet" href="css/style.css" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
    </head>
    <body>
        <?php echo $dataWebPage;?>
    </body>
</html>
