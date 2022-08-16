<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}
if ($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-8-classic-right-bg {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'png', 'right') ?>");
            background-repeat: no-repeat;
        }
        .view-8-classic-main-bg {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'png', 'main') ?>");
            background-repeat: no-repeat;
        }
    </style>
<?php }?>

<body>
    <section class="view-8-classic-container">

        <div class="view-8-classic">
            <div class="view-8-classic-content">

                <div class="view-8-classic-right <?php if ($_REQUEST['transpar'] == 1) {
    echo 'view-8-classic-right-bg';
} ?>">
                    <ul class="view-8-classic-city-day">
                        <li class="view-8-classic-city-icon">
                            <img src="<?php echo $abstractData->getDomain(). 'assets/classic/icons/place.svg' ?>">
                        </li>
                        <li class="view-8-classic-city-right">
                            <?php echo $mainObject['name'] ?>
                        </li>
                        <li class="view-8-classic-city-time">
                            <?php echo $abstractData->getDate('H:i') ?>
                        </li>
                        <li class="view-8-classic-weekday">
                            <?php echo $abstractData->getWeek() ?>
                        </li>
                    </ul>
                </div>

                <div class="view-8-classic-main <?php if ($_REQUEST['transpar'] == 1) {
    echo 'view-8-classic-main-bg';
} ?>">
                    <ul class="view-8-classic-time-temp">
                        <li class="view-8-classic-temp-cels">
                            &nbsp;<?php echo $mainObject['tempC']; ?>°
                        </li>
                        <li class="view-8-classic-temp-far">
                            <?php echo $mainObject['tempF']; ?>°F
                        </li>
                    </ul>

                    <ul class="view-8-classic-daytime-info">
                        <li class="view-8-classic-daytime-name">
                            <?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?>
                        </li>
                        <li class="view-8-classic-daytime-icon">
                            <?php echo $abstractData->getWeatherIcon($mainObject) ?>
                        </li>
                    </ul>

                    <ul class="view-8-classic-city-params">
                        <li class="view-8-classic-city-type">
                            <p class="view-8-classic-city">
                                <?php echo $mainObject['name'] ?>
                            </p>
                            <p class="view-8-classic-type">
                                <?php echo $abstractData->getWeatherDescription($mainObject['icon']) ?>
                            </p>
                        </li>
                        <li class="view-8-classic-wind">
                            <?php echo $abstractData->getWwindDirection($mainObject['wd']) ?>: <?php echo $abstractData->getMetersPerSecond($mainObject['ws']) ?> м/с
                        </li>
                        <li class="view-8-classic-degrees">
                            <?php echo $mainObject['gmtMin'] ?>°
                        </li>
                        <li class="view-8-classic-wet">
                            Влажность: <?php echo $mainObject['rh'] ?>%
                        </li>
                        <li class="view-8-classic-pressure">
                            Давление: <?php echo $abstractData->getMillimetersOfMercury($mainObject['psl']) ?> мм рт.ст.
                        </li>
                        <li class="view-8-classic-dpf">
                            dpF <?php echo $mainObject['dpF'] ?>°
                        </li>
                    </ul>
                </div>

                <div class="view-8-classic-infobox">
                    <?php for ($i=0; $i < 3; $i++) {
    if ($i == 0) {
        $className = 'morning';
    }
    if ($i == 1) {
        $className = 'day';
    }
    if ($i == 2) {
        $className = 'evening';
    }

    if ($i == 0) {
        $blockName = 'top';
    }
    if ($i == 1) {
        $blockName = 'middle';
    }
    if ($i == 2) {
        $blockName = 'bottom';
    } ?>
                        <div class="view-8-classic-info-<?php echo $blockName ?>">
                            <p class="view-8-classic-daytime-next">
                                <?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?>
                            </p>
                            <div class="view-8-classic-<?php echo $className ?>">
                                <?php echo $abstractData->getWeatherIcon($forecatsArr[$i]) ?>
                            </div>
                            <p class="view-8-classic-next-temp">
                                <?php echo $forecatsArr[$i]['tempC']; ?>°
                            </p>
                        </div>
                        <?php
}?>
                </div>

            </div>
        </div>

    </section>
</body>