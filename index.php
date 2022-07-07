<?php

// Include css and js
$css = 'assets/style.css';
$farbasticCss = 'assets/farbtastic/farbtastic.css';
$mainJs = 'assets/main.js';
$farbasticJs = 'assets/farbtastic/farbtastic.js';
include 'templates/partials/header.php';

// Include classes
require_once('Classes/AbstractClass.php');
require_once('Classes/XmlDataClass.php');
require_once('Classes/RenderClass.php');

// Get xml data and variables
$mainUrl = 'http://airquality.elecont.com/ElecontAirQuality/?top=55.9&left=36.8&bottom=55.1&right=38.2&numberX=8&numberY=8&type=999&srcT=2';
$iniArr = parse_ini_file('app.ini');
$key = $iniArr['key'];

$additionalParams = 'la=ru&weather=1&aqi=0&day=0&number=4';
$xmlData = new XmlDataClass($mainUrl, $key, $additionalParams);
$objects = $xmlData->getObjects();
$abstractData = new AbstractClass();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
    // Render ifrmae with params
    echo 'Render with params';
} else {
    // Render ifrmae without params
    $template = new RenderClass();
    //echo $template->renderTemplate('iframes/iframe1');

    // Render informer 1
    echo $template->renderTemplate('informer_1', ['object' => $objects['0'], 'objects' => $objects, 'abstractData' => $abstractData]);
}

// Render select form template
$template = new RenderClass();
echo $template->renderTemplate('select_form');

// Include footer
include 'templates/partials/footer.php';
?>