<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }

 if($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-3-neon-2 {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'svg', '' ) ?>");
            background-size:100% 100%;
        }
    </style>
<?php }?>

<body>

<section class="view-3-neon-container">
    <div class="view-3-neon-1 <?php if($_REQUEST['transpar'] == 1) {echo 'view-3-neon-2';} ?>">
        <div class="view-3-neon-top">
            <p class="view-3-neon-city">
                <?php echo $object['name'] ?>
            </p>
            <p class="view-3-neon-selected-timeofday">
                <?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?>
            </p>
            <p class="view-3-neon-daynumber">
                <?php echo $abstractData->getDate('d.m.Y') ?>
            </p>
            <p class="view-3-neon-weekday">
                <?php echo $abstractData->getWeek() ?>
            </p>
            <div class="view-3-neon-iconday">
                <?php echo $abstractData->getWeatherIcon($object) ?>
            </div>
            <div class="view-3-neon-temp shine-font">
                <?php echo $object['tempC']; ?>°
            </div>
            <div class="view-3-neon-time shine-font">
                <?php echo $abstractData->getDate('H:i') ?>
            </div>
            <div class="view-3-neon-line">
            </div>
            <div class="view-3-neon-params">
                <p class="view-3-neon-typeofwind">
                    <?php echo $abstractData->getWwindDirection($object['wd']) ?>
                </p>
                <p class="view-3-neon-windspeed">
                    <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
                </p>
                <p class="view-3-neon-degree">
                    <?php echo $object['gmtMin'] ?>°
                </p>
                <p class="view-3-neon-wet">
                    Влажность:<?php echo $object['rh'] ?>%
                </p>
                <p class="view-3-neon-pressure">
                    <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм. рт. ст.
                </p>
            </div>
        </div>

        <div class="view-3-neon-bottom">
            <?php
            for ($i=0; $i < 3; $i++) {
                if ($i == 0) {
                    $number = '1';
                }
                if ($i == 1) {
                    $number = '2';
                }
                if ($i == 2) {
                    $number = '3';
                }

                if ($i == 0) {
                    $className = 'thu';
                }
                if ($i == 0) {
                    $className = 'fri';
                }
                if ($i == 0) {
                    $className = 'sat';
                } ?>

                <div class="view-3-neon-day<?php echo $number ?>">
                    <div class="v3c-container">
                        <div class="view-3-neon-weekday-next">
                            <?php echo $abstractData->getNameOfTheDate($forecatsArr[$i]['dt']); ?>
                        </div>
                        <div class="view-3-neon-daynumber-next">
                            <?php echo $abstractData->getDateFromString($forecatsArr[$i]['dt'], 'd.m'); ?>
                        </div>
                    </div>
                    <div class="view-3-neon-temp-next">
                        <?php echo $forecatsArr[$i]['tempC']; ?>°
                    </div>
                    <div class="view-3-neon-icon-<?php echo $className ?>">
                        <?php echo $abstractData->getWeatherIcon($forecatsArr[$i]) ?>
                    </div>
                </div>
            <?php
            }?>
        </div>
    </div>

</section>


</body>