<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
?>

<body>
<section class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-container">
<div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>" >

    <div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-content">
            <div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-city-day">
                <div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-city-day-info-container">
                    <p class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-city-day-info"><?php echo $object['name'] ?></p>
                    <p class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-city-day-info"><?php echo $abstractData->getWeek() ?>,</p>
                    <p class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-city-day-info"><?php echo $abstractData->getDate('d.m.Y') ?></p>
                </div>
            </div>

            <div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-maincontent">
                <div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-weather"><?php echo $abstractData->getWeatherDescription($object['icon']) ?></div>
                <div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-weather-icon"></div>
                <div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-dergees-cels">
                    <?php echo $object['tempC'] ?>°
                </div>
                <div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-dergees-far">
                    <?php echo $object['tempF'] ?>F
                </div>
                <div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-typeofwind">
                    <?php echo $abstractData->getWwindDirection($object['wd']) ?>
                </div>
                <div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-windspeed">
                    <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
                </div>
                <div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-degrees">
                    <?php echo $object['gmtMin'] ?>°
                </div>
                <div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-wet">
                    Влажность: <?php echo $object['rh'] ?>%
                </div>
                <div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-pressure">
                    Давление: <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм. рт. ст.
                </div>
            </div>
            <?php for ($i=0; $i < 3; $i++) {
    if ($i == 0) {
        $className = 'morning';
    }
    if ($i == 1) {
        $className = 'day';
    }
    if ($i == 2) {
        $className = 'evening';
    } ?>
                <div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-<?php echo $className ?>" >
                    <p class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-timeofday" >
                        <?php echo $forecatsArr[$i]['dt']; ?>
                    </p>
                    <div class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-timeofday-icon">
                        <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
        echo $_REQUEST['weather_tip_img'] . '/icons';
    } else {
        echo 'classic';
    } ?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg'/>
                    </div>
                    <p class="view-1-<?php echo $_REQUEST['weather_tip_img']?>-temp">
                        <?php echo $forecatsArr[$i]['tempC']; ?>°
                    </p>
                </div>
            <?php
}?>
        </div>
    </div>

</section>
</body>