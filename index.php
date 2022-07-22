<?php

// Include css and js
$farbasticCss = 'assets/farbtastic/farbtastic.css';
$mainJs = 'assets/main.js';
$farbasticJs = 'assets/farbtastic/farbtastic.js';
$geometria = 'assets/' .$_REQUEST['weather_tip_img'] .'/fonts/geometria/stylesheet.css';

/*if (!empty($_REQUEST['weather_tip_img'])) {
    if($_REQUEST['weather_tip_img'] == 'classic') {
        $css = 'assets/classic/view-1-classic.css';
    }
    if($_REQUEST['weather_tip_img'] == 'ht') {
        $css = 'assets/ht/view-1-ht.css';
    }
    if($_REQUEST['weather_tip_img'] == 'neon') {
        $css = 'assets/neon/view-1-neon.css';
    }
}*/

if (!empty($_REQUEST['weather_tip_img'])) {
    $css = 'assets/' . $_REQUEST['weather_tip_img'] . '/' . $_REQUEST['weather_tip'] . '_'. $_REQUEST['weather_tip_img'] . '.css';
} else {
    $css = 'assets/css_inform.css';
}

if (empty($_REQUEST['weather_tip'])) {
    include_once 'templates/partials/headers/header.php';
} else {
    include_once 'templates/partials/headers/header_weather.php';
}

// Include classes
require_once('Classes/AbstractClass.php');
require_once('Classes/XmlDataClass.php');
require_once('Classes/RenderClass.php');

// Get xml data and variables
$mainUrl = 'http://airquality.elecont.com/ElecontAirQuality/?top=55.9&left=36.8&bottom=55.1&right=38.2&numberX=8&numberY=8&type=999&srcT=2';
$iniArr = parse_ini_file('app.ini');
$key = $iniArr['key'];

$additionalParams = 'la=ru&weather=1&aqi=0&day=0&number=7';
if ($_REQUEST['weather_tip'] == 'weather_2') {
    ///$additionalParams = 'la=ru&weather=1&aqi=0';
}

//$additionalParams = 'la=ru&weather=1&aqi=0&hour=1&number=4&step=4';
$xmlData = new XmlDataClass($mainUrl, $key, $additionalParams);
$objects = $xmlData->getObjects();
$abstractData = new AbstractClass();
$template = new RenderClass();

//var_dump($objects[0]);

//if (isset($_POST['submit'])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Render informer with params // Get dynamic template
    $abstractData->getTemplate($template, $objects, $abstractData);
    echo $template->renderTemplate('partials/code_informer_form', ['requestArray' => $_REQUEST, 'abstractData' => $abstractData]);
} else {
    // Render informer without params
    if (empty($_REQUEST['weather_tip'])) {

        /*echo '<h4>Информер № 1 (узкий, в столбик)</h4>';
        echo '<p><br /></p>';
        echo '<div style="width:100%;">';
        echo '<iframe src="' . $abstractData->getDomain() .'?weather_tip=weather_1&weather_tip_img=classic&font_family=Aldrich&color_fon=%232A88CD&font_text=%23fff&font_tempo=%23fff" frameborder="0" height="700"></iframe>';
        echo '</div>';
        echo '<p class="otst"><br /></p>';*/

        // Select params form
        echo $template->renderTemplate('partials/select_form');
    } else {
        // Get dynamic template
        $abstractData->getTemplate($template, $objects, $abstractData);
    }
}

// Include footer
include 'templates/partials/footer.php';
