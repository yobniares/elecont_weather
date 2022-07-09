<?php

// Include css and js
$farbasticCss = 'assets/farbtastic/farbtastic.css';
$mainJs = 'assets/main.js';
$farbasticJs = 'assets/farbtastic/farbtastic.js';

if (empty($_REQUEST['weather_tip'])) {
    $css = 'assets/css_inform.css';
    include_once 'templates/partials/header.php';
} else {
    if ($_REQUEST['weather_tip'] =='weather_1' || $_REQUEST['weather_tip'] =='weather_2' || $_REQUEST['weather_tip'] =='weather_3') {
        $css = 'assets/css_inform_flexible.css';
        include_once 'templates/partials/header_weather.php';
    }
    if ($_REQUEST['weather_tip'] =='weather_5') {
        $css = 'assets/css_inform_flexible.css';
        include_once 'templates/partials/header_weather5.php';
    }
}

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
    // ToDo: make something with request
    //if (empty($_POST) || empty($_GET)) {

    if (empty($_REQUEST['weather_tip'])) {
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

        echo '<h4>ИНФОРМЕР № 5</h4>';
        echo '<div style="width:65%;">';
        //echo $template->renderTemplate('weather_5', ['object' => $objects['0'], 'objects' => $objects, 'abstractData' => $abstractData]);
        echo '<iframe src="https://yandexinformers.ddev.site/?weather_tip=weather_5&weather_tip_img=img_7_svg&font_family=Roboto&color_fon=%23dcdcdc&font_text=%23000000&font_tempo=%23000000" frameborder="0" width="100%" height="700"></iframe>';
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
