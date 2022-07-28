<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
    $time = date('H:i', time());

if($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-8-neon-4-bg {
            width: 1380px;
            height: 375px;
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'svg', '' ) ?>");
            border-radius: 35px;
            background-repeat: no-repeat;
            background-position: center;
            box-sizing: border-box;
            padding-top: 50px;
            padding-left: 50px;
        }
    </style>
<?php }?>

<body>
<div class="view-8-neon-4 <?php if($_REQUEST['transpar'] == 1) {echo 'view-8-neon-4-bg';} ?>">
    <div class="view-8-neon-citytime">
        <?php echo $mainObject['name'] ?> - <?php echo $abstractData->getWeek() ?>, <?php echo $abstractData->getFullDate() ?>
    </div>
    <div class="view-8-neon-main-3">
        <ul class="view-8-neon-time-temp">
            <li class="view-8-neon-temp-cels shine-font">
                <?php echo $mainObject['tempC']; ?>°
            </li>
            <li class="view-8-neon-temp-far shine-font">
                <?php echo $mainObject['tempF']; ?>°F
            </li>
        </ul>

        <ul class="view-8-neon-daytime-info black-icons daytime-info-2">
            <li class="view-8-neon-daytime-name">
                <?php echo $abstractData->getTimesOfDay($time) ?>
            </li>
            <li class="view-8-neon-daytime-icon">
                <?php echo $abstractData->getWeatherIcon($mainObject) ?>
            </li>
            <li class="view-8-neon-type-2">
                <?php echo $abstractData->getWeatherDescription($mainObject['icon']) ?>
            </li>
        </ul>

        <ul class="view-8-neon-city-params black-icons params-2">
            <li class="view-8-neon-wind">
                <?php echo $abstractData->getWwindDirection($mainObject['wd']) ?>: <?php echo $abstractData->getMetersPerSecond($mainObject['ws']) ?> м/с
            </li>
            <li class="view-8-neon-degrees">
                <?php echo $mainObject['gmtMin'] ?>°
            </li>
            <li class="view-8-neon-wet">
                Влажность: <?php echo $mainObject['rh'] ?>%
            </li>
            <li class="view-8-neon-pressure">
                Давление: <?php echo $abstractData->getMillimetersOfMercury($mainObject['psl']) ?> мм рт.ст.
            </li>
            <li class="view-8-neon-dpf">
                dpF <?php echo $mainObject['dpF'] ?>°
            </li>
        </ul>
    </div>

    <div class="view-8-neon-infobox-4">
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

            <div class="view-8-neon-info">
                <p class="view-8-neon-daytime-next next-4">
                    <?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?>
                </p>
                <div class="view-8-neon-<?php echo $className ?>">
                    <?php echo $abstractData->getWeatherIcon($forecatsArr[$i]) ?>
                </div>
                <p class="view-8-neon-next-temp">
                    <?php echo $forecatsArr[$i]['tempC']; ?>°
                </p>
            </div>

            <?php
}?>
    </div>
</div>
</body>