<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
?>

<?php if (!empty($_REQUEST['weather_tip'])) {?>
    <style>
        body,
        .view-1-classic-city-day-info,
        .view-1-classic-weather,
        ._view-1-classic-dergees-cels,
        ._view-1-classic-dergees-far,
        .view-1-classic-timeofday,
        ._view-1-classic-temp,
        ._view-1-classic-typeofwind,
        ._view-1-classic-windspeed,
        ._view-1-classic-degrees,
        ._view-1-classic-wet {
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        .view-1-classic-city-day-info,
        .view-1-classic-weather,
        .view-1-classic-typeofwind,
        .view-1-classic-windspeed,
        .view-1-classic-degrees,
        .view-1-classic-wet,
        .view-1-classic-pressure,
        .view-1-classic-timeofday {
            color: <?php echo  $_REQUEST['font_text'] ?>;
        }
        .view-1-classic-dergees-cels,
        .view-1-classic-dergees-far,
        .view-1-classic-temp {
            color: <?php echo  $_REQUEST['font_tempo'] ?>;
        }
    </style>
<?php }?>

<body>
<section class="view-1-classic-container">
<div class="view-1-classic"
    <?php if (isset($_REQUEST['color_fon'])) {
    echo 'style="background:' . $_REQUEST['color_fon'] . '"';
} ?> >
        <div class="view-1-classic-content">
            <div class="view-1-classic-city-day">
                <div class="view-1-classic-city-day-info-container">
                    <p class="view-1-classic-city-day-info"><?php echo $object['name'] ?></p>
                    <p class="view-1-classic-city-day-info"><?php echo $abstractData->getWeek() ?>,</p>
                    <p class="view-1-classic-city-day-info"><?php echo $abstractData->getDate('d.m.Y') ?></p>
                </div>
            </div>

            <div class="view-1-classic-maincontent">
                <div class="view-1-classic-weather"><?php echo $abstractData->getWeatherDescription($object['icon']) ?></div>
                <div class="view-1-classic-weather-icon"></div>
                <div class="view-1-classic-dergees-cels">
                    <?php echo $object['tempC'] ?>°
                </div>
                <div class="view-1-classic-dergees-far">
                    <?php echo $object['tempF'] ?>F
                </div>
                <div class="view-1-classic-typeofwind">
                    <?php echo $abstractData->getWwindDirection($object['wd']) ?>
                </div>
                <div class="view-1-classic-windspeed">
                    <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
                </div>
                <div class="view-1-classic-degrees">
                    <?php echo $object['gmtMin'] ?>°
                </div>
                <div class="view-1-classic-wet">
                    Влажность: <?php echo $object['rh'] ?>%
                </div>
                <div class="view-1-classic-pressure">
                    Давление: <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм. рт. ст.
                </div>
            </div>

            <?php for ($i=0; $i < 3; $i++) {?>
                <div class="view-1-classic-<?php echo $i ?>" >
                    <p class="view-1-classic-timeofday" >
                        <?php echo $forecatsArr[$i]['dt']; ?>
                    </p>
                    <div class="view-1-classic-timeofday-icon">
                        <img src='assets/classic/icons/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'];
} else {
    echo 'img_1_svg';
} ?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg'/>

                    </div>
                    <p class="view-1-classic-temp">
                        <?php echo $forecatsArr[$i]['tempC']; ?>°
                    </p>
                </div>
            <?php }?>
        </div>
    </div>

</section>
</body>