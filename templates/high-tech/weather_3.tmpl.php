<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
?>

<body>
    <section class="view-3-ht-container">
        <div class="view-3-ht-1">
            <div class="view-3-ht-top black-icons">
                <p class="view-3-ht-city">
                    <?php echo $object['name'] ?>
                </p>
                <p class="view-3-ht-selected-timeofday">
                    <?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?>
                </p>
                <p class="view-3-ht-daynumber">
                    <?php echo $abstractData->getDate('d.m.Y') ?>
                </p>
                <p class="view-3-ht-weekday">
                    <?php echo $abstractData->getWeek() ?>
                </p>

                <div class="view-3-ht-iconday">
                    <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'] . '/icons';
} else {
    echo 'classic';
} ?>/icon_<?php echo $object['icon'] ?>.svg'/>
                </div>
                <div class="view-3-ht-temp">
                    <?php echo $object['tempC']; ?>°
                </div>
                <div class="view-3-ht-line"></div>

                <div class="view-3-ht-params black-icons">
                    <p class="view-3-ht-typeofwind">
                        <?php echo $abstractData->getWwindDirection($object['wd']) ?>
                    </p>
                    <p class="view-3-ht-windspeed">
                        <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
                    </p>
                    <p class="view-3-ht-degree">
                        <?php echo $object['gmtMin'] ?>°
                    </p>
                    <p class="view-3-ht-wet">
                        Влажность:<?php echo $object['rh'] ?>%
                    </p>
                    <p class="view-3-ht-pressure">
                        <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм. рт. ст.
                    </p>
                </div>
            </div>

            <div class="view-3-ht-bottom">
                <?php
                for ($i=0; $i < 3; $i++) {
                    if ($i == 0) {
                        $iterator = '1';
                    }
                    if ($i == 1) {
                        $iterator = '2';
                    }
                    if ($i == 2) {
                        $iterator = '3';
                    }

                    if ($i == 0) {
                        $className = 'thu';
                    }
                    if ($i == 1) {
                        $className = 'fri';
                    }
                    if ($i == 2) {
                        $className = 'sat';
                    } ?>
                    <div class="view-3-ht-day<?php echo $iterator?> black-icons">
                        <div class="v3c-container">
                            <div class="view-3-ht-weekday-next">
                                <?php echo $abstractData->getNameOfTheDate($forecatsArr[$i]['dt']); ?>
                            </div>
                            <div class="view-3-ht-daynumber-next">
                                <?php echo $abstractData->getDateFromString($forecatsArr[$i]['dt'], 'd.m'); ?>
                            </div>
                        </div>
                        <div class="view-3-ht-temp-next">
                            <?php echo $forecatsArr[$i]['tempC']; ?>
                        </div>
                        <div class="view-3-ht-icon-<?php echo $className ?>">
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
    </section>
</body>