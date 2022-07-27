<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }

if($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-5-ht-2 {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'svg', 'cover' ) ?>");
            background-size:100% 100%;
        }
    </style>
<?php }?>

<body>
<section class="view-5-ht-container">
    <div class="view-5-ht-1 <?php if($_REQUEST['transpar'] == 1) {echo 'view-5-ht-2';} ?>">
        <div class="view-5-ht-plates">
            <ul class="view-5-ht-main-info">
                <li class="view-5-ht-day-info">
                    <p class="view-5-ht-daynumber">
                        <?php echo $abstractData->getFullDate(); ?>
                    </p>
                    <p class="view-5-ht-time">
                        <?php echo $abstractData->getDate('H:i') ?>
                    </p>
                    <p class="view-5-ht-daytime">
                        <?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?>
                    </p>
                    <p class="view-5-ht-weekday">
                        <?php echo $abstractData->getWeek() ?>
                    </p>
                </li>

                <li class="view-5-ht-weather-info">
                    <div class="view-5-ht-weather-icon">
                    </div>
                    <p class="view-5-ht-weather-type">
                        <?php echo $abstractData->getWeatherDescription($object['icon']) ?>
                    </p>
                </li>
                <li class="view-5-ht-place-info">
                    <p class="view-5-ht-city">
                        <?php echo $object['name'] ?>, <?php echo $object['country'] ?>
                    </p>
                    <p class="view-5-ht-temp">
                        <?php echo $object['tempC'] ?>°
                    </p>
                    <p class="view-5-ht-wind-wet">
                        <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с, <?php echo $object['rh'] ?>%
                    </p>
                    <p class="view-5-ht-pressure">
                        <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм рт. ст.
                    </p>
                </li>
            </ul>

            <ul class="view-5-ht-daytimes">
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
                    <li class="view-5-ht-next-<?php echo $className ?>">
                        <p class="view-5-ht-daytime-next">
                            <?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?>
                        </p>
                        <div class="view-5-ht-<?php echo $className ?>">
                            <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
        echo $_REQUEST['weather_tip_img'] . '/icons';
    } else {
        echo 'ht';
    } ?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg'/>
                        </div>
                        <p class="view-5-ht-next-temp">
                            <?php echo $forecatsArr[$i]['tempC']; ?>°
                        </p>
                    </li>
                    <?php
}?>
            </ul>
        </div>
    </div>
</section>
</body>