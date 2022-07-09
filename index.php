<?php

// Include css and js
//$css = 'assets/style.css';
$css = 'assets/css_inform.css';
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
$template = new RenderClass();

//if (isset($_POST['submit'])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Render informer with params // Get dynamic template
    $abstractData->getTemplate($template, $objects, $abstractData);
    echo $template->renderTemplate('partials/code_informer_form', ['requestArray' => $_REQUEST, 'abstractData' => $abstractData]);
} else {
    // Render informer without params
    if (empty($_POST) || empty($_GET)) {
        echo '<h4>Информер № 1 (узкий, на всю ширину слайда)</h4>';
        echo '<p><br /></p>';
        echo '<div style="width:100%;">';
        echo $template->renderTemplate('weather_1', ['object' => $objects['0'], 'objects' => $objects, 'abstractData' => $abstractData]);
        echo '</div>';
        echo '<p class="otst"><br /></p>';

        echo '<h4>ИНФОРМЕР № 2 (КОМПАКТНЫЙ)</h4>';
        echo '<p><br /></p>';
        echo '<div style="width:50%;">';
        echo $template->renderTemplate('weather_2', ['object' => $objects['0'], 'objects' => $objects, 'abstractData' => $abstractData]);
        echo '</div>';
        echo '<p class="otst"><br /></p>';

        echo '<h4>ИНФОРМЕР № 3 (МИНИМАЛЬНОЙ ВЫСОТЫ)</h4>';
        echo '<p><br /></p>';
        echo '<div style="width:100%;">';
        echo $template->renderTemplate('weather_3', ['object' => $objects['0'], 'objects' => $objects, 'abstractData' => $abstractData]);
        echo '</div>';
        echo '<p class="otst"><br /></p>';

        echo '<h4>ИНФОРМЕР № 4 (ДЕЛОВОЙ)</h4>';
        echo '<div style="width:65%;">';
        echo $template->renderTemplate('weather_4', ['object' => $objects['0'], 'objects' => $objects, 'abstractData' => $abstractData]);
        echo '</div>';
        echo '<p class="otst"><br /></p>';

        // Select params form
        echo $template->renderTemplate('partials/select_form');
    } else {
        // Get dynamic template
        $abstractData->getTemplate($template, $objects, $abstractData);
    }
}

// Include footer
include 'templates/partials/footer.php';
