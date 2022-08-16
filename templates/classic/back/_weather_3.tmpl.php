<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}

if ($_REQUEST['transpar'] == 1) {?>
    <style>
        .view-3-classic-custom-light {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'png', '') ?>");
            background-size:100% 100%;
        }
    </style>
<?php }?>

<body>
<section class="view-3-classic-container">

    <div class="view-3-classic <?php if ($_REQUEST['transpar'] == 1) {
    echo 'view-3-classic-custom-light';
} ?>">
        <div class="view-3-classic-content">
            <div class="view-3-classic-top">
                <p class="view-3-classic-city">
                    <?php echo $object['name'] ?>
                </p>
                <p class="view-3-classic-selected-timeofday">
                    <?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?>
                </p>
                <p class="view-3-classic-daynumber">
                    <?php echo $abstractData->getDate('d.m.Y') ?>
                </p>
                <p class="view-3-classic-weekday">
                    <?php echo $abstractData->getWeek() ?>
                </p>

                <div class="view-3-classic-iconday">
                    <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'] . '/icons';
} else {
    echo 'classic';
} ?>/icon_<?php echo $object['icon'] ?>.svg'/>
                </div>

                <div class="view-3-classic-temp">
                    <?php echo $object['tempC']; ?>°
                </div>
                <div class="view-3-classic-line">
                </div>

                <div class="view-3-classic-params">
                    <p class="view-3-classic-typeofwind">
                        <?php echo $abstractData->getWwindDirection($object['wd']) ?>
                    </p>
                    <p class="view-3-classic-windspeed">
                        <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
                    </p>
                    <p class="view-3-classic-degree">
                        <?php echo $object['gmtMin'] ?>°
                    </p>
                    <p class="view-3-classic-wet">
                        Влажность:<?php echo $object['rh'] ?>%
                    </p>
                    <p class="view-3-classic-pressure">
                        <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм. рт. ст.
                    </p>
                </div>
            </div>

            <div class="view-3-classic-bottom">
                <?php
                for ($i=0; $i < 3; $i++) {
                    if ($i == 0) {
                        $className = '1';
                    }
                    if ($i == 1) {
                        $className = '2';
                    }
                    if ($i == 2) {
                        $className = '2';
                    } ?>
                <div class="view-3-classic-day<?php echo $className?>">
                    <div class="v3c-container">
                        <div class="view-3-classic-weekday-next">
                            <?php echo $abstractData->getNameOfTheDate($forecatsArr[$i]['dt']); ?>
                        </div>
                        <div class="view-3-classic-daynumber-next">
                            <?php echo $abstractData->getDateFromString($forecatsArr[$i]['dt'], 'd.m'); ?>
                        </div>
                    </div>
                    <div class="view-3-classic-temp-next">
                        <?php echo $forecatsArr[$i]['tempC']; ?>°
                    </div>
                    <div class="view-3-classic-icon-<?php echo $className?>">
                        <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
                        echo $_REQUEST['weather_tip_img'] . '/icons';
                    } else {
                        echo 'classic';
                    } ?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg'/>
                    </div>
                </div>
                <?php
                }?>
            </div>
        </div>
    </div>

</section>

</body>