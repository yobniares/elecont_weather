<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }

if($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-1-neon-custom-1 {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'svg', '' ) ?>");
            background-size:100% 100%;
        }
    </style>
<?php }?>
<body>


<section class="view-1-neon-container">
    <div class="view-1-neon-1">
        <div class="view-1-neon-maincontent <?php if($_REQUEST['transpar'] == 1) {echo 'view-1-neon-custom-1';} ?>">
            <div class="view-1-neon-city-day">
                <div class="view-1-neon-city-day-info-container">
                    <p class="view-1-neon-city-day-info"><?php echo $object['name'] ?></p>
                    <p class="view-1-neon-city-day-info"><?php echo $abstractData->getWeek() ?>,</p>
                    <p class="view-1-neon-city-day-info"><?php echo $abstractData->getDate('d.m.Y') ?></p>
                </div>
            </div>
            <div class="view-1-neon-weather-time">
                <?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?>
            </div>
            <div class="view-1-neon-weather">
                <?php echo $abstractData->getWeatherDescription($object['icon']) ?>
            </div>
            <div class="view-1-neon-weather-icon">
                <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'] . '/icons';
} else {
    echo 'ht';
} ?>/icon_<?php echo $object['icon'] ?>.svg'/>
            </div>
            <div class="view-1-neon-dergees-cels">
                <?php echo $object['tempC'] ?>°
            </div>
            <div class="view-1-neon-dergees-far">
                <?php echo $object['tempF'] ?>°F
            </div>
            <div class="view-1-neon-typeofwind">
                <?php echo $abstractData->getWwindDirection($object['wd']) ?>
            </div>
            <div class="view-1-neon-windspeed">
                <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
            </div>
            <div class="view-1-neon-degrees">
                <?php echo $object['gmtMin'] ?>°
            </div>
            <div class="view-1-neon-wet">
                Влажность: <?php echo $object['rh'] ?>%
            </div>
            <div class="view-1-neon-pressure">
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
            <div class="view-1-neon-<?php echo $className ?>">
                <p class="view-1-neon-timeofday">
                    <?php echo $forecatsArr[$i]['dt']; ?>
                </p>
                <div class="view-1-neon-timeofday-icon">
                    <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
        echo $_REQUEST['weather_tip_img'] . '/icons';
    } else {
        echo 'classic';
    } ?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg'/>
                </div>
                <p class="view-1-neon-temp">
                    <?php echo $forecatsArr[$i]['tempC']; ?>°
                </p>
            </div>
        <?php
}?>
    </div>

</section>

</body>