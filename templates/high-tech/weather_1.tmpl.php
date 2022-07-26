<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
?>

<body>
<section>
    <div class="view-1-ht-1">
        <div class="view-1-ht-maincontent">
            <div class="view-1-ht-city-day">
                <div class="view-1-ht-city-day-info-container">
                    <p class="view-1-ht-city-day-info"><?php echo $object['name'] ?></p>
                    <p class="view-1-ht-city-day-info"><?php echo $abstractData->getWeek() ?>,</p>
                    <p class="view-1-ht-city-day-info"><?php echo $abstractData->getDate('d.m.Y') ?></p>
                </div>
            </div>
            <div class="view-1-ht-weather-time">
                <?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?>
            </div>
            <div class="view-1-ht-weather">
                <?php echo $abstractData->getWeatherDescription($object['icon']) ?>
            </div>
            <div class="view-1-ht-weather-icon">
                <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'] . '/icons';
} else {
    echo 'ht';
} ?>/icon_<?php echo $object['icon'] ?>.svg'/>
            </div>
            <div class="view-1-ht-dergees-cels">
                <?php echo $object['tempC'] ?>°
            </div>
            <div class="view-1-ht-dergees-far">
                <?php echo $object['tempF'] ?>F
            </div>
            <div class="view-1-ht-typeofwind">
                <?php echo $abstractData->getWwindDirection($object['wd']) ?>
            </div>
            <div class="view-1-ht-windspeed">
                <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
            </div>
            <div class="view-1-ht-degrees">
                <?php echo $object['gmtMin'] ?>°
            </div>
            <div class="view-1-ht-wet">
                Влажность: <?php echo $object['rh'] ?>%
            </div>
            <div class="view-1-ht-pressure">
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
            <div class="view-1-ht-<?php echo $className ?>">
                <p class="view-1-ht-timeofday">
                    <?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?>
                </p>
                <div class="view-1-ht-timeofday-icon">
                    <?php echo $abstractData->getWeatherIcon($forecatsArr[$i]) ?>
                </div>
                <p class="view-1-ht-temp">
                    <?php echo $forecatsArr[$i]['tempC']; ?>°
                </p>
            </div>
        <?php
}?>
    </div>


</section>
</body>