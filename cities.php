<?php

require_once('Classes/AbstractClass.php');
$abstractData = new AbstractClass();
$iniArr = parse_ini_file('app.ini');
$scriptPath = $iniArr['scriptPath'];

if (isset($_POST['name'])) {
    $searchword = $_POST['name'];
    $char = mb_strtoupper(substr($searchword, 0, 2), "utf-8"); // первый символ в верхний регистр
    $searchword[0] = $char[0];
    $searchword[1] = $char[1];
} else {
    echo json_encode('Город не найден');
}

$jsonFile = $abstractData->getDomain() . $scriptPath . 'data/cities.json';
$content = file_get_contents($jsonFile);

if ($content == '') {
    $cities = array();
} else {
    $cities = json_decode($content);
}

$city = array();

foreach ($cities as $val) {
    if (stripos($val->name, $searchword) === 0) {
        if (isset($val->utcoffset)) {
            $city[] = array('name'=>$val->name, 'value'=>$val->utcoffset);
        } else {
            //$city[] = array('name'=>$val->name);
            $city[] = array('name'=>$val->name, 'value'=>$val->utcoffset);
        }
    }
}
$_POST['maxRows'] = '5';

if (count($city)>0) {
    if (count($city)>$_POST['maxRows']) {
        $city = array_slice($city, 0, $_POST['maxRows']);
    }
    echo json_encode($city);
} else {
    $err[] = array('name'=>'Город не найден', 'utcoffset'=>'');
    echo json_encode($err);
}
