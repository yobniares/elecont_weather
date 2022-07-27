<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}

?>

<body>
<section class="view-2-classic-container">
    <div class="view-2-classic">
        <div class="view-2-classic-content">
            <div class="view-2-classic-sunrise-sunset-time">
                <div class="view-2-classic-sunrisetime">
                    Восход: <span class="time"><?php echo $abstractData->getGmtTime($object['gmtMin'], $mainObject['sr']); ?></span>
                </div>
                <div class="view-2-classic-sunsettime">
                    Закат: <span class="time"><?php echo $abstractData->getGmtTime($object['gmtMin'], $mainObject['ss']); ?></span>
                </div>
            </div>
            <div class="view-2-classic-content-dayofweek">
                <?php echo $abstractData->getWeek() ?>
            </div>

            <ul class="view-2-classic-daysweek-1">
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

                    <li class="view-2-classic-<?php echo $className ?>-1 <?php if($_REQUEST['transpar'] == 1) {echo 'view-2-classic-' .$className.'-2';} ?>">
                        <div class="view-2-classic-weekday">
                            <?php echo $abstractData->getNameOfTheDate($forecatsArr[$i]['dt']); ?>
                        </div>
                        <div class="view-2-classic-daynumber">
                            <?php echo $abstractData->getMonthFromString($forecatsArr[$i]['dt']); ?>
                            <?php echo $abstractData->getDateFromString($forecatsArr[$i]['dt'], 'd'); ?>
                        </div>
                        <div class="view-2-classic-dayimage">
                            <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
        echo $_REQUEST['weather_tip_img'] . '/icons';
    } else {
        echo 'classic';
    } ?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg'/>
                        </div>
                        <div class="view-2-classic-temp view-2-classic-temp-<?php echo $className ?>">
                            <?php echo $forecatsArr[$i]['tempC']; ?>°
                        </div>
                    </li>
                    <?php
}?>

                <div class="main-information-1">
                    <div class="view-2-classic-timegmt">
                        <?php echo $abstractData->getDate('H:i') ?>
                    </div>
                    <div class="view-2-classic-gmt">
                        GMT<?php echo '+' .$object['gmtMin']/60 ?>
                    </div>
                    <div class="main-information-inside">
                        <div class="view-2-classic-selectedcity">
                            <?php echo $object['name'] ?>
                        </div>
                        <div class="view-2-classic-selectedcountry">
                            <?php echo $object['country'] ?>
                        </div>
                        <div class="view-2-classic-selectedweather">
                            <p>
                                <?php echo $object['tempC'] ?>°
                                <?php echo $abstractData->getWeatherIcon($object) ?>
                            </p>
                        </div>
                        <div class="view-2-classic-params">
                            <ul>
                                <li class="view-2-classic-typeofwind">
                                    <?php echo $abstractData->getWwindDirection($object['wd']) ?>
                                </li>
                                <li class="view-2-classic-windspeed">
                                    <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
                                </li>
                                <li class="view-2-classic-degrees">
                                    <?php echo $object['gmtMin'] ?>°
                                </li>
                            </ul>
                            <ul>
                                <li class="view-2-classic-wet">
                                    <?php echo $object['rh'] ?>%
                                </li>
                                <li class="view-2-classic-pressure">
                                    <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм рт.ст.
                                </li>
                                <li class="view-2-classic-dpf">
                                    dpF <?php echo $mainObject['dpF'] ?>°
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="view-2-classic-population">
                        <?php echo $abstractData->getPopulate((string)$object['pop']) ?> жителей
                    </div>
                </div>
            </ul>
        </div>
    </div>

</section>

</body>