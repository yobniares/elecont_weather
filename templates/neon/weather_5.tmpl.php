<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }

    if($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-5-neon-2 {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'svg', '' ) ?>");
            background-size:100% 100%;
        }
    </style>
<?php }?>

<body>
<section class="view-5-neon-container">
    <div class="view-5-neon-1 <?php if($_REQUEST['transpar'] == 1) {echo 'view-5-neon-2';} ?>">
        <div class="view-5-neon-plates">
            <ul class="view-5-neon-main-info">
                <li class="view-5-neon-day-info">
                    <p class="view-5-neon-daynumber">
                        <?php echo $abstractData->getFullDate(); ?>
                    </p>
                    <p class="view-5-neon-time shine-font">
                        <?php echo $abstractData->getDate('H:i') ?>
                    </p>
                    <p class="view-5-neon-daytime">
                        <?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?>
                    </p>
                    <p class="view-5-neon-weekday">
                        <?php echo $abstractData->getWeek() ?>
                    </p>
                </li>

                <li class="view-5-neon-weather-info">
                    <div class="view-5-neon-weather-icon">
                        <?php echo $abstractData->getWeatherIcon($object) ?>
                    </div>
                    <p class="view-5-neon-weather-type">
                        <?php echo $abstractData->getWeatherDescription($object['icon']) ?>
                    </p>
                </li>

                <li class="view-5-neon-place-info">
                    <p class="view-5-neon-city">
                        <?php echo $object['name'] ?>, <?php echo $object['country'] ?>
                    </p>
                    <p class="view-5-neon-temp shine-font">
                        <?php echo $object['tempC'] ?>°
                    </p>
                    <p class="view-5-neon-wind-wet">
                        <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с, <?php echo $object['rh'] ?>%
                    </p>
                    <p class="view-5-neon-pressure">
                        <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм рт. ст.
                    </p>
                </li>
            </ul>

            <div class="view-5-neon-params">
                <p class="view-5-neon-typeofwind">
                    <?php echo $abstractData->getWwindDirection($object['wd']) ?>
                </p>
                <p class="view-5-neon-windspeed">
                    <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
                </p>
                <p class="view-5-neon-degree">
                    <?php echo $object['gmtMin'] ?>°
                </p>
                <p class="view-5-neon-wet">
                    Влажность:<?php echo $object['rh'] ?>%
                </p>
                <p class="view-5-neon-pressures">
                    <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм. рт. ст.
                </p>
            </div>

            <ul class="view-5-neon-daytimes">
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
                    <li class="view-5-neon-next-morning">
                        <p class="view-5-neon-daytime-next">
                            <?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?>
                        </p>
                        <div class="view-5-neon-<?php echo $className ?>">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[$i]) ?>
                        </div>
                        <p class="view-5-neon-next-temp">
                            <?php echo $forecatsArr[$i]['tempC']; ?>°
                        </p>
                    </li>
                    <?php }?>

            </ul>
        </div>
    </div>
</section>
</body>