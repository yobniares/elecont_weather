<?php 
if (isset($_POST['name'])) {
	$searchword = $_POST['name'];
	$char = mb_strtoupper(substr($searchword,0,2), "utf-8"); // первый символ в верхний регистр
	$searchword[0] = $char[0];
	$searchword[1] = $char[1];
} else echo json_encode('Город не найден');


/*$searchword = 'москв';
$char = mb_strtoupper(substr($searchword,0,2), "utf-8"); // первый символ в верхний регистр
$searchword[0] = $char[0];
$searchword[1] = $char[1];*/

//$content = file_get_contents('https://s.prtv.su/informers/cities.json');
$content = file_get_contents('https://yandexinformers.ddev.site/data/cities.json');

if($content == '')
	$cities = array();
else
	$cities = json_decode($content);

$city = array();

foreach ($cities as $val) {
	//if(stristr($val->name, $searchword) !== FALSE) {
	if(stripos($val->name,$searchword) === 0) {
		//$city[] = array('name'=>$val->name, 'value'=>$val->utcoffset);
        if(isset($val->utcoffset)) {
            $city[] = array('name'=>$val->name, 'value'=>$val->utcoffset);
        } else {
            $city[] = array('name'=>$val->name);
        }

	}
}
$_POST['maxRows'] = '5';

if (count($city)>0) {
	if (count($city)>$_POST['maxRows'])	{ $city = array_slice($city, 0, $_POST['maxRows']); }
	echo json_encode($city);
}
else {
	$err[] = array('name'=>'Город не найден', 'utcoffset'=>'');
	echo json_encode($err);
}

?>
