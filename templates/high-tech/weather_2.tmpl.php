<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
?>

<body>
    <section class="view-2-ht-container">

        <div class="view-2-ht-1 <?php if($_REQUEST['transpar'] == 1) {echo 'view-2-ht-2';} ?>">
            <div class="view-2-ht-content">
                <div class="view-2-ht-sunrise-sunset-time">
                    <div class="view-2-ht-sunrisetime">
                        Восход: <span class="time"><span class="time"><?php echo $abstractData->getGmtTime($object['gmtMin'], $mainObject['sr']); ?></span>
                    </div>
                    <div class="view-2-ht-sunsettime">
                        Закат: <span class="time"><?php echo $abstractData->getGmtTime($object['gmtMin'], $mainObject['ss']); ?></span>
                    </div>
                </div>
                <div class="view-2-ht-content-dayofweek">
                    <?php echo $abstractData->getWeek() ?>
                </div>

                <ul class="view-2-ht-daysweek-1">
                    <?php for ($i=0; $i < 6; $i++) {
    if ($i == 0) {
        $className = 'monday';
    }
    if ($i == 1) {
        $className = 'tuesday';
    }
    if ($i == 2) {
        $className = 'wednesday';
    }
    if ($i == 3) {
        $className = 'thursday';
    }
    if ($i == 4) {
        $className = 'friday';
    }
    if ($i == 5) {
        $className = 'saturday';
    } ?>

                        <li class="view-2-ht-<?php echo $className ?>-1">
                            <div class="view-2-ht-weekday <?php if($_REQUEST['transpar'] == 1) {echo 'white-font';} ?>">
                                <?php echo $abstractData->getNameOfTheDate($forecatsArr[$i]['dt']); ?>
                            </div>
                            <div class="view-2-ht-daynumber <?php if($_REQUEST['transpar'] == 1) {echo 'white-font';} ?>">
                                <?php echo $abstractData->getMonthFromString($forecatsArr[$i]['dt']); ?>
                                <?php echo $abstractData->getDateFromString($forecatsArr[$i]['dt'], 'd'); ?>
                            </div>
                            <div class="view-2-ht-dayimage <?php if($_REQUEST['transpar'] == 1) {echo 'white-font';} ?>">
                                <?php if($_REQUEST['transpar'] == 1) {
                                    echo $abstractData->getWeatherIcon($forecatsArr[$i], '', 'white');
                                } else {
                                    echo $abstractData->getWeatherIcon($forecatsArr[$i], '');
                                }?>
                            </div>
                            <div class="view-2-ht-temp view-2-ht-temp-mon <?php if($_REQUEST['transpar'] == 1) {echo 'white-font';} ?>">
                                <?php echo $forecatsArr[$i]['tempC']; ?>°
                            </div>
                        </li>
                        <?php
}?>

                    <div class="main-information-1">
                        <div class="view-2-ht-timegmt">
                            <?php echo $abstractData->getDate('H:i') ?>
                        </div>
                        <div class="view-2-ht-gmt">
                            GMT<?php echo '+' .$object['gmtMin']/60 ?>
                        </div>
                        <div class="main-information-inside">
                            <div class="view-2-ht-selectedcity">
                                <?php echo $object['name'] ?>
                            </div>
                            <div class="view-2-ht-selectedcountry">
                                <?php echo $object['country'] ?>
                            </div>
                            <div class="view-2-ht-selectedweather">
                                <p>
                                    <?php echo $object['tempC'] ?>°
                                    <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
        echo $_REQUEST['weather_tip_img'] . '/icons';
    } else {
        echo 'classic';
    } ?>/icon_<?php echo $object['icon'] ?>.svg'/>
                                </p>
                            </div>

                            <div class="view-2-ht-params">
                                <ul>
                                    <li class="view-2-ht-typeofwind">
                                        <?php echo $abstractData->getWwindDirection($object['wd']) ?>
                                    </li>
                                    <li class="view-2-ht-windspeed">
                                        <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
                                    </li>
                                    <li class="view-2-ht-degrees">
                                        <?php echo $object['gmtMin'] ?>°
                                    </li>
                                </ul>
                                <ul>
                                    <li class="view-2-ht-wet">
                                        <?php echo $object['rh'] ?>%
                                    </li>
                                    <li class="view-2-ht-pressure">
                                        <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм рт.ст.
                                    </li>
                                    <li class="view-2-ht-dpf">
                                        dpF <?php echo $mainObject['dpF'] ?>°
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="view-2-ht-population">
                            <?php echo $abstractData->getPopulate((string)$object['pop']) ?> млн жителей
                        </div>
                    </div>
                </ul>
            </div>
        </div>

    </section>
</body>