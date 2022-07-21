<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Moscow');
?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php if (!empty($_REQUEST['font_family'])) {?>
        <link href='https://fonts.googleapis.com/css?family=<?php echo $_REQUEST['font_family'] ?>' rel='stylesheet' type='text/css'>
    <?php } else {?>
        <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
    <?php }?>
    <link rel="stylesheet" href="<?php echo($geometria); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo($css); ?>" type="text/css">
    <?php if (!empty($_REQUEST['weather_tip'])) {?>
        <style>
            body,
            ._view-1-<?php echo $_REQUEST['weather_tip_img']?>-city-day-info,
            ._view-1-<?php echo $_REQUEST['weather_tip_img']?>-weather,
            ._view-1-<?php echo $_REQUEST['weather_tip_img']?>-dergees-cels,
            ._view-1-<?php echo $_REQUEST['weather_tip_img']?>-dergees-far,
            .view-1-<?php echo $_REQUEST['weather_tip_img']?>-timeofday,
            ._view-1-<?php echo $_REQUEST['weather_tip_img']?>-temp,
            ._view-1-<?php echo $_REQUEST['weather_tip_img']?>-typeofwind,
            ._view-1-<?php echo $_REQUEST['weather_tip_img']?>-windspeed,
            ._view-1-<?php echo $_REQUEST['weather_tip_img']?>-degrees,
            ._view-1-<?php echo $_REQUEST['weather_tip_img']?>-wet {
                font-family:<?php echo $_REQUEST['font_family'] ?>;
            }
            .view-1-<?php echo $_REQUEST['weather_tip_img']?>-1,
            .view-1-<?php echo $_REQUEST['weather_tip_img']?> {
                background:<?php echo $_REQUEST['color_fon'] ?>;
            }
            .view-1-<?php echo $_REQUEST['weather_tip_img']?>-city-day-info,
            .view-1-<?php echo $_REQUEST['weather_tip_img']?>-weather,
            .view-1-<?php echo $_REQUEST['weather_tip_img']?>-typeofwind,
            .view-1-<?php echo $_REQUEST['weather_tip_img']?>-windspeed,
            .view-1-<?php echo $_REQUEST['weather_tip_img']?>-degrees,
            .view-1-<?php echo $_REQUEST['weather_tip_img']?>-wet,
            .view-1-<?php echo $_REQUEST['weather_tip_img']?>-pressure,
            .view-1-<?php echo $_REQUEST['weather_tip_img']?>-timeofday {
                color: <?php echo  $_REQUEST['font_text'] ?>;
            }
            .view-1-<?php echo $_REQUEST['weather_tip_img']?>-dergees-cels,
            .view-1-<?php echo $_REQUEST['weather_tip_img']?>-dergees-far,
            .view-1-<?php echo $_REQUEST['weather_tip_img']?>-temp {
                color: <?php echo  $_REQUEST['font_tempo'] ?>;
            }
        </style>
    <?php }?>

</head>
<body>
