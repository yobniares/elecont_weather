<?php

// Include css and js
$farbasticCss = 'assets/farbtastic/farbtastic.css';
$farbasticJs = 'assets/farbtastic/farbtastic.js';
$mediaQueries = 'assets/media_queries.css';

if (!empty($_REQUEST['weather_tip_img'])) {
    $geometria = 'assets/' .$_REQUEST['weather_tip_img'] .'/fonts/geometria/stylesheet.css';
    $css = 'assets/' . $_REQUEST['weather_tip_img'] . '/weather_' . $_REQUEST['weather_tip'] . '_'. $_REQUEST['weather_tip_img'] . '.css';
} else {
    $css = 'assets/css_inform.css';
}

if (empty($_REQUEST['weather_tip'])) {
    include_once 'templates/partials/headers/header.php';
    include_once 'templates/partials/headers/media_queries.php';
} else {
    include_once 'templates/partials/headers/header_weather.php';
    include_once 'templates/partials/headers/media_queries.php';
}

// Include classes
require_once('Classes/AbstractClass.php');
require_once('Classes/XmlDataClass.php');
require_once('Classes/RenderClass.php');

$iniArr = parse_ini_file('app.ini');
$key = $iniArr['key'];
$abstractData = new AbstractClass();
$additionalParams = 'la=ru&weather=1&aqi=0&day=0&number=4';

if (!empty($_REQUEST['weather_tip'])) {
    if ($_REQUEST['weather_tip'] == '2') {
        $additionalParamsSingeObject = 'la=ru&weather=1&aqi=0';
        $additionalParams = 'la=ru&weather=1&aqi=0&day=0&number=7';
        $xmlDataSingeObject = new XmlDataClass($key, $additionalParamsSingeObject);
        $mainObjects = $xmlDataSingeObject->getObjects(); // Sometimes we need to send different requests for get diff responces
        $mainObject = $mainObjects['0'];
    } elseif (
        $_REQUEST['weather_tip'] == '1' ||
        $_REQUEST['weather_tip'] == '4' ||
        $_REQUEST['weather_tip'] == '5' ||
        $_REQUEST['weather_tip'] == '7' ||
        $_REQUEST['weather_tip'] == '8' ||
        $_REQUEST['weather_tip'] == '9') {
        $additionalParamsSingeObject = 'la=ru&weather=1&aqi=0';
        $additionalParams = 'la=ru&weather=1&aqi=0&hour=0&number=5&step=3';
        $xmlDataSingeObject = new XmlDataClass($key, $additionalParamsSingeObject);
        $mainObjects = $xmlDataSingeObject->getObjects(); // Sometimes we need to send different requests for get diff responces
        $mainObject = $mainObjects['0'];
    } else {
        $mainObject = [];
    }
}

if (isset($_REQUEST['city']) && $_REQUEST['city'] == '') {
    $_REQUEST['city'] = 'Москва';
}

if (!isset($_REQUEST['transpar'])) {
    $_REQUEST['transpar'] = '0';
}

$xmlData = new XmlDataClass($key, $additionalParams);
$objects = $xmlData->getObjects();
$template = new RenderClass();

//if (isset($_POST['submit'])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Render informer with params // Get dynamic template
    $abstractData->getTemplate($template, $objects, $mainObject, $abstractData);
    echo $template->renderTemplate('partials/code_informer_form', ['requestArray' => $_REQUEST, 'abstractData' => $abstractData]);
} else {
    // Render informer without params
    if (empty($_REQUEST['weather_tip'])) {
        // Informers ifrmaes
        echo $template->renderTemplate('partials/iframes/iframe');
        // Select params form
        echo $template->renderTemplate('partials/select_form');
    } else {
        // Get dynamic template
        $abstractData->getTemplate($template, $objects, $mainObject, $abstractData);
    }
}

// Include footer
include 'templates/partials/footer.php';
