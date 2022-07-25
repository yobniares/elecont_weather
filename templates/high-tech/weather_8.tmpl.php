<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
    $time = date('H:i', time())
?>

<body>
<section class="view-8-ht-container">
    <div class="view-8-ht">
        <div class="view-8-ht-main">
            <ul class="view-8-ht-city-day">
                <li class="view-8-ht-city-icon">
                    <img src="<?php echo $abstractData->getDomain(). 'assets/ht/icons/place-b.svg' ?>">
                </li>
                <li class="view-8-ht-city-right">
                    <?php echo $mainObject['name'] ?>
                </li>
                <li class="view-8-ht-city-time">
                    <?php echo $abstractData->getDate('H:i') ?>
                </li>
                <li class="view-8-ht-weekday">
                    <?php echo $abstractData->getWeek() ?>
                </li>
            </ul>
            <ul class="view-8-ht-time-temp">
                <li class="view-8-ht-temp-cels">
                    <?php echo $mainObject['tempC']; ?>°
                </li>
                <li class="view-8-ht-temp-far">
                    <?php echo $mainObject['tempF']; ?>°F
                </li>
            </ul>
            <ul class="view-8-ht-daytime-info black-icons">
                <li class="view-8-ht-daytime-name">
                    <?php echo $abstractData->getTimesOfDay($time) ?>
                </li>
                <li class="view-8-ht-daytime-icon">
                    <?php echo $abstractData->getWeatherIcon($mainObject) ?>
                </li>
                <li class="view-8-ht-type">
                    <?php echo $abstractData->getWeatherDescription($mainObject['icon']) ?>
                </li>
            </ul>
            <ul class="view-8-ht-city-params black-icons">
                <li class="view-8-ht-wind">
                    <?php echo $abstractData->getWwindDirection($mainObject['wd']) ?>: <?php echo $abstractData->getMetersPerSecond($mainObject['ws']) ?> м/с
                </li>
                <li class="view-8-ht-degrees">
                    <?php echo $mainObject['gmtMin'] ?>°
                </li>
                <li class="view-8-ht-wet">
                    Влажность: <?php echo $mainObject['rh'] ?>%
                </li>
                <li class="view-8-ht-pressure">
                    Давление: <?php echo $abstractData->getMillimetersOfMercury($mainObject['psl']) ?> мм рт.ст.
                </li>
                <li class="view-8-ht-dpf">
                    dpF <?php echo $mainObject['dpF'] ?>°
                </li>
            </ul>
        </div>

        <div class="view-8-ht-infobox">
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

                <div class="view-8-ht-info black-icons">
                    <p class="view-8-ht-daytime-next">
                        <?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?>
                    </p>
                    <div class="view-8-ht-<?php echo $className ?>">
                        <?php echo $abstractData->getWeatherIcon($forecatsArr[$i]) ?>
                    </div>
                    <p class="view-8-ht-next-temp">
                        <?php echo $forecatsArr[$i]['tempC']; ?>°
                    </p>
                </div>

                <?php
}?>
        </div>
    </div>
</section>
</body>