<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
    $time = date('H:i', time());
?>

<body>
<section class="view-7-neon-container">
    <div class="view-7-neon-1">
        <div class="view-7-neon-main-1">
            <ul class="view-7-neon-time-temp">
                <li class="view-7-neon-gmt">
                    GMT<?php echo '+' .$object['gmtMin']/60 ?>
                </li>
                <li class="view-7-neon-time shine-font">
                    <?php echo $abstractData->getDate('H:i') ?>
                </li>
                <li class="view-7-neon-temp-cels shine-font">
                    <?php echo $object['tempC'] ?>°
                </li>
                <li class="view-7-neon-temp-far shine-font">
                    <?php echo $object['tempF'] ?>°F
                </li>
            </ul>

            <ul class="view-7-neon-daytime-info">
                <li class="view-7-neon-daytime-name">
                    <?php echo $abstractData->getTimesOfDay($time) ?>
                </li>
                <li class="view-7-neon-daytime-icon">
                    <?php echo $abstractData->getWeatherIcon($object) ?>
                </li>
            </ul>

            <ul class="view-7-neon-city-params">
                <li class="view-7-neon-city-type">
                    <p class="view-7-neon-city">
                        <?php echo $object['name'] ?>
                    </p>
                    <p class="view-7-neon-type">
                        <?php echo $abstractData->getWeatherDescription($object['icon']) ?>
                    </p>
                </li>
                <li class="view-7-neon-wind">
                    <?php echo $abstractData->getWwindDirection($object['wd']) ?>: <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
                </li>
                <li class="view-7-neon-degrees">
                    <?php echo $object['gmtMin'] ?>°
                </li>
                <li class="view-7-neon-wet">
                    Влажность: <?php echo $object['rh'] ?>%
                </li>
                <li class="view-7-neon-pressure">
                    Давление: <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм рт.ст.
                </li>
                <li class="view-7-neon-dpf">
                    dpF <?php echo $mainObject['dpF'] ?>°
                </li>
            </ul>
        </div>

        <div class="view-7-neon-infobox">
            <?php for ($i=0; $i < 3; $i++) {
                if ($i == 0) {$className = 'morning';}
                if ($i == 1) {$className = 'day';}
                if ($i == 2) {$className = 'evening';}

                if ($i == 0) {$position = 'top-1';}
                if ($i == 1) {$position = 'middle-1';}
                if ($i == 2) {$position = 'bottom-1';}
                ?>

                <div class="view-7-neon-info-1 <?php echo $position?>">
                    <p class="view-7-neon-daytime-next">
                        <?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?>
                    </p>
                    <div class="view-7-neon-<?php echo $className ?>">
                        <?php echo $abstractData->getWeatherIcon($forecatsArr[$i]) ?>
                    </div>
                    <p class="view-7-neon-next-temp">
                        <?php echo $forecatsArr[$i]['tempC']; ?>
                    </p>
                </div>
                <?php
            }?>
        </div>
    </div>

</section>
</body>