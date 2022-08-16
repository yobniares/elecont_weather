<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }

if ($_REQUEST['transpar'] == 1) {?>
    <style>
        .view-1-ht-custom-1 {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'png', '') ?>");
            background-size:100% 100%;
        }
    </style>
<?php }?>

<body>
<section>
    <div class="view-1-ht-1">
        <div class="view-1-ht-maincontent <?php if ($_REQUEST['transpar'] == 1) {
    echo 'view-1-ht-custom-1 white-icons';
} ?>">
            <div class="view-1-ht-city-day">
                <div class="view-1-ht-city-day-info-container">
                    <p class="view-1-ht-city-day-info <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>"><?php echo $object['name'] ?></p>
                    <p class="view-1-ht-city-day-info <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>"><?php echo $abstractData->getWeek() ?>,</p>
                    <p class="view-1-ht-city-day-info <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>"><?php echo $abstractData->getDate('d.m.Y') ?></p>
                </div>
            </div>
            <div class="view-1-ht-weather-time <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                <?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?>
            </div>
            <div class="view-1-ht-weather <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                <?php echo $abstractData->getWeatherDescription($object['icon']) ?>
            </div>
            <div class="view-1-ht-weather-icon <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                <?php if ($_REQUEST['transpar'] == 1) {
    echo $abstractData->getWeatherIcon($object, '', 'white');
} else {
    echo $abstractData->getWeatherIcon($object, '');
}?>
            </div>
            <div class="view-1-ht-dergees-cels <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                <?php echo $object['tempC'] ?>°
            </div>
            <div class="view-1-ht-dergees-far <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                <?php echo $object['tempF'] ?>F
            </div>
            <div class="view-1-ht-typeofwind <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                <?php echo $abstractData->getWwindDirection($object['wd']) ?>
            </div>
            <div class="view-1-ht-windspeed <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
            </div>
            <div class="view-1-ht-degrees <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                <?php echo $object['gmtMin'] ?>°
            </div>
            <div class="view-1-ht-wet <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                Влажность: <?php echo $object['rh'] ?>%
            </div>
            <div class="view-1-ht-pressure <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
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