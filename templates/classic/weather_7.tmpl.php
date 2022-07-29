<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}
if ($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-7-classic-main-bg {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'png', '') ?>");
            background-repeat: no-repeat;
        }
    </style>
<?php }?>

<body>
    <section class="view-7-classic-container">
        <div class="view-7-classic">
            <div class="view-7-classic-content">

                <div class="view-7-classic-main <?php if ($_REQUEST['transpar'] == 1) {
    echo 'view-7-classic-main-bg';
} ?>">
                    <ul class="view-7-classic-time-temp">
                        <li class="view-7-classic-gmt">
                            GMT<?php echo '+' .$object['gmtMin']/60 ?>
                        </li>
                        <li class="view-7-classic-time">
                            <?php echo $abstractData->getDate('H:i') ?>
                        </li>
                        <li class="view-7-classic-temp-cels">
                            <?php echo $object['tempC'] ?>°
                        </li>
                        <li class="view-7-classic-temp-far">
                            <?php echo $object['tempF'] ?>°F
                        </li>
                    </ul>
                    <ul class="view-7-classic-daytime-info">
                        <li class="view-7-classic-daytime-name">
                            <?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?>
                        </li>

                        <li class="view-7-classic-daytime-icon">
                            <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'] . '/icons';
} else {
    echo 'classic';
} ?>/icon_<?php echo $object['icon'] ?>.svg'/>
                        </li>
                    </ul>

                    <ul class="view-7-classic-city-params">
                        <li class="view-7-classic-city-type">
                            <p class="view-7-classic-city">
                                <?php echo $object['name'] ?>
                            </p>
                            <p class="view-7-classic-type">
                                <?php echo $abstractData->getWeatherDescription($object['icon']) ?>
                            </p>
                        </li>

                        <li class="view-7-classic-wind">
                            <?php echo $abstractData->getWwindDirection($object['wd']) ?>: <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
                        </li>

                        <li class="view-7-classic-degrees">
                            <?php echo $object['gmtMin'] ?>°
                        </li>

                        <li class="view-7-classic-wet">
                            Влажность: <?php echo $object['rh'] ?>%
                        </li>

                        <li class="view-7-classic-pressure">
                            Давление: <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм рт.ст.
                        </li>

                        <li class="view-7-classic-dpf">
                            dpF <?php echo $mainObject['dpF'] ?>°
                        </li>
                    </ul>
                </div>

                <div class="view-7-classic-infobox">
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

                        <div class="view-7-classic-info">
                            <p class="view-7-classic-daytime-next">
                                <?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?>
                            </p>

                            <div class="view-7-classic-<?php echo $className ?>">
                                <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
        echo $_REQUEST['weather_tip_img'] . '/icons';
    } else {
        echo 'classic';
    } ?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg'/>
                            </div>

                            <p class="view-7-classic-next-temp">
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