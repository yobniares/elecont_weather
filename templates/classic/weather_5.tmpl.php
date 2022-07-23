<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}
?>

<body>
<section class="view-5-classic-container">
    <div class="view-5-classic">
        <div class="view-5-classic-content">
            <div class="view-5-classic-plates">
                <ul class="view-5-classic-main-info">
                    <li class="view-5-classic-day-info">
                        <p class="view-5-classic-daynumber">
                            <?php echo $abstractData->getFullDate(); ?>
                        </p>
                        <p class="view-5-classic-time">
                            <?php echo $abstractData->getDate('H:i') ?>
                        </p>
                        <p class="view-5-classic-daytime">
                            <?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?>
                        </p>
                        <p class="view-5-classic-weekday">
                            <?php echo $abstractData->getWeek() ?>
                        </p>
                    </li>

                    <li class="view-5-classic-weather-info">
                        <div class="view-5-classic-weather-icon">
                        </div>

                        <p class="view-5-classic-weather-type">
                            <?php echo $abstractData->getWeatherDescription($object['icon']) ?>
                        </p>
                    </li>

                    <li class="view-5-classic-place-info">
                        <p class="view-5-classic-city">
                            <?php echo $object['name'] ?>, <?php echo $object['country'] ?>
                        </p>

                        <p class="view-5-classic-temp">
                            <?php echo $object['tempC'] ?>°
                        </p>

                        <p class="view-5-classic-wind-wet">
                            <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с, <?php echo $object['rh'] ?>%
                        </p>

                        <p class="view-5-classic-pressure">
                            <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм рт. ст.
                        </p>
                    </li>
                </ul>

                <ul class="view-5-classic-daytimes">
                    <?php for ($i=0; $i < 3; $i++) {
                        if ($i == 0) {$className = 'morning';}
                        if ($i == 1) {$className = 'day';}
                        if ($i == 2) {$className = 'evening';}
                        ?>
                        <li class="view-5-classic-next-<?php echo $className ?>">
                            <p class="view-5-classic-daytime-next">
                                <?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?>
                            </p>
                            <div class="view-5-classic-morning"></div>
                            <p class="view-5-classic-next-temp">
                                <?php echo $forecatsArr[$i]['tempC']; ?>°
                            </p>
                        </li>
                        <?php
                    }?>
                </ul>

            </div>
        </div>
    </div>
</section>

</body>