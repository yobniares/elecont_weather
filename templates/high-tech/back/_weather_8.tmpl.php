<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
    $time = date('H:i', time());

if ($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-8-ht-main-bg {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'svg', '') ?>");
        }
    </style>
<?php }?>

<body>
<section class="view-8-ht-container">
    <div class="view-8-ht">
        <div class="view-8-ht-main <?php if ($_REQUEST['transpar'] == 1) {
    echo 'view-8-ht-main-bg';
} ?>">
            <ul class="view-8-ht-city-day">
                <li class="view-8-ht-city-icon">
                    <?php if ($_REQUEST['transpar'] == 1) {?>
                        <img src="<?php echo $abstractData->getDomain(). 'assets/ht/icons/place-w.svg' ?>">
                   <?php } else { ?>
                        <img src="<?php echo $abstractData->getDomain(). 'assets/ht/icons/place-b.svg' ?>">
                    <?php } ?>
                </li>
                <li class="view-8-ht-city-right <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                    <?php echo $mainObject['name'] ?>
                </li>
                <li class="view-8-ht-city-time <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                    <?php echo $abstractData->getDate('H:i') ?>
                </li>
                <li class="view-8-ht-weekday <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                    <?php echo $abstractData->getWeek() ?>
                </li>
            </ul>
            <ul class="view-8-ht-time-temp">
                <li class="view-8-ht-temp-cels <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                    <?php echo $mainObject['tempC']; ?>°
                </li>
                <li class="view-8-ht-temp-far <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                    <?php echo $mainObject['tempF']; ?>°F
                </li>
            </ul>
            <ul class="view-8-ht-daytime-info <?php if ($_REQUEST['transpar'] == 0) {
    echo 'black-icons';
} ?>">
                <li class="view-8-ht-daytime-name <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                    <?php echo $abstractData->getTimesOfDay($time) ?>
                </li>
                <li class="view-8-ht-daytime-icon <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                    <?php if ($_REQUEST['transpar'] == 1) {
    echo $abstractData->getWeatherIcon($mainObject, '', 'white');
} else {
    echo $abstractData->getWeatherIcon($mainObject, '');
}?>
                </li>
                <li class="view-8-ht-type <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                    <?php echo $abstractData->getWeatherDescription($mainObject['icon']) ?>
                </li>
            </ul>
            <ul class="view-8-ht-city-params <?php if ($_REQUEST['transpar'] == 0) {
    echo 'black-icons';
} ?>">
                <li class="view-8-ht-wind <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                    <?php echo $abstractData->getWwindDirection($mainObject['wd']) ?>: <?php echo $abstractData->getMetersPerSecond($mainObject['ws']) ?> м/с
                </li>
                <li class="view-8-ht-degrees <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                    <?php echo $mainObject['gmtMin'] ?>°
                </li>
                <li class="view-8-ht-wet <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                    Влажность: <?php echo $mainObject['rh'] ?>%
                </li>
                <li class="view-8-ht-pressure <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
                    Давление: <?php echo $abstractData->getMillimetersOfMercury($mainObject['psl']) ?> мм рт.ст.
                </li>
                <li class="view-8-ht-dpf <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
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