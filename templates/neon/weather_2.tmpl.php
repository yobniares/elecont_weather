<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
?>
<body>
<section class="view-2-neon-container">
    <div class="view-2-neon-1">
        <div class="view-2-neon-content">
            <div class="view-2-neon-sunrise-sunset-time">
                <div class="view-2-neon-sunrisetime">
                    Восход: <span class="time"><?php echo $abstractData->getGmtTime($object['gmtMin'], $mainObject['sr']); ?></span>
                </div>
                <div class="view-2-neon-sunsettime">
                    Закат: <span class="time"><?php echo $abstractData->getGmtTime($object['gmtMin'], $mainObject['ss']); ?></span>
                </div>
            </div>
            <div class="view-2-neon-content-dayofweek">
                <?php echo $abstractData->getWeek() ?>
            </div>

            <ul class="view-2-neon-daysweek-1">

                <?php for ($i=0; $i < 6; $i++) {
                    if ($i == 0) {$className = 'monday';}
                    if ($i == 1) {$className = 'tuesday';}
                    if ($i == 2) {$className = 'wednesday';}
                    if ($i == 3) {$className = 'thursday';}
                    if ($i == 4) {$className = 'friday';}
                    if ($i == 5) {$className = 'saturday';}
                    ?>

                    <li class="view-2-neon-<?php echo $className; ?>-1">
                        <div class="view-2-neon-weekday">
                            <?php echo $abstractData->getNameOfTheDate($forecatsArr[$i]['dt']); ?>
                        </div>
                        <div class="view-2-neon-daynumber">
                            <?php echo $abstractData->getMonthFromString($forecatsArr[$i]['dt']); ?>
                            <?php echo $abstractData->getDateFromString($forecatsArr[$i]['dt'], 'd'); ?>
                        </div>
                        <div class="view-2-neon-dayimage">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[$i], 'view-9-classic-weather-info-img') ?>
                        </div>
                        <div class="view-2-neon-temp view-2-neon-temp-mon">
                            <?php echo $forecatsArr[$i]['tempC']; ?>°
                        </div>
                    </li>
                    <?php
                }?>

                <div class="view-2-neon-temp view-2-neon-temp-sat">
                    <?php echo $object['tempC']; ?>°
                </div>
                <div class="main-information-1">
                    <div class="view-2-neon-timegmt">
                        <?php echo $abstractData->getDate('H:i') ?>
                    </div>
                    <div class="view-2-neon-gmt">
                        GMT<?php echo '+' .$object['gmtMin']/60 ?>
                    </div>
                    <div class="main-information-inside">
                        <div class="view-2-neon-selectedcity">
                            <?php echo $object['name'] ?>
                        </div>
                        <div class="view-2-neon-selectedcountry">
                            <?php echo $object['country'] ?>
                        </div>
                        <div class="view-2-neon-selectedweather">
                            <p class="shine-font"><?php echo $object['tempC']; ?>°</p>
                            <?php echo $abstractData->getWeatherIcon($object) ?>
                        </div>

                        <div class="view-2-neon-params">
                            <ul>
                                <li class="view-2-neon-typeofwind">
                                    <?php echo $abstractData->getWwindDirection($object['wd']) ?>
                                </li>
                                <li class="view-2-neon-windspeed">
                                    <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
                                </li>
                                <li class="view-2-neon-degrees">
                                    <?php echo $object['gmtMin'] ?>°
                                </li>
                            </ul>
                            <ul>
                                <li class="view-2-neon-wet">
                                    <?php echo $object['rh'] ?>%
                                </li>

                                <li class="view-2-neon-pressure">
                                    <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм рт.ст.
                                </li>

                                <li class="view-2-neon-dpf">
                                    dpF <?php echo $mainObject['dpF'] ?>°
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="view-2-neon-population">
                        <?php echo $abstractData->getPopulate((string)$object['pop']) ?> жителей
                    </div>
                </div>
            </ul>
        </div>
    </div>
</section>
</body>