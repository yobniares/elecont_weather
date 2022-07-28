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
        <link href='https://fonts.googleapis.com/css?family=<?php echo $_REQUEST['font_family'] ?>&display=swap' rel='stylesheet' type='text/css'>
    <?php } else {?>
        <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
    <?php }?>
    <link rel="stylesheet" href="<?php echo($geometria); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo($css); ?>" type="text/css">

    <?php if (!empty($_REQUEST['weather_tip'])) {?>
        <style>
            body {
                font-family:<?php echo $_REQUEST['font_family'] ?>;
            }
            /* Background */

            <?php
                if(isset($_REQUEST['transpar']) && $_REQUEST['transpar'] == 1) { ?>

                /* Some bg styles maybe here */

               <?php } else { ?>
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-1,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-maincontent,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-morning,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-day,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-evening,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-city-day,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-day1,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-day2,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-day3,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-plates,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-day-info,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-weather-info,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-place-info,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-next-morning,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-next-day,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-next-evening,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-type-1,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-main,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-main-1,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-info,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-info-1,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-info-top,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-info-middle,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-info-bottom,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-right,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-4,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-time,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-time1,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-time2,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-time3,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-time4,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-icon1,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-icon2,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-icon3,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-icon4,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-temp1,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-temp2,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-temp3,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-temp4,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-weather-info li {
                background:<?php echo $_REQUEST['color_fon'] ?>;
            }
                <?php }
            ?>

            /* Text color and font */
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-city-day-info,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-city,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-day,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-weather,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-typeofwind,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-windspeed,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-degrees,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-wet,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-timeofday,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-selected-timeofday,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-population,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-sunrisetime,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-sunsettime,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-content-dayofweek,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-timegmt,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-gmt,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-selectedcity,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-selectedcountry,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-dpf,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-weekday,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-daynumber,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-weekday-next,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-daynumber-next,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-degree,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-wind,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-daytime,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-time,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-time1,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-time2,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-time3,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-time4,
            .time,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-daytime-next,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-weather-type,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-date,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-daytime-name,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-type,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-pressure,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-city-time,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-city-right {
                color: <?php echo  $_REQUEST['font_text'] ?> !important;
                font-family:<?php echo $_REQUEST['font_family'] ?>;
            }

            /* Temperature color and font */
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-dergees-cels,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-dergees-far,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-temp,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-temp-next,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-selectedweather p,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-cels,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-far,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-temp-cels,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-temp-far,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-next-temp,
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-wind-wet {
                color: <?php echo  $_REQUEST['font_tempo'] ?>;
                font-family:<?php echo $_REQUEST['font_family'] ?>;
            }
        </style>
    <?php }?>
</head>
