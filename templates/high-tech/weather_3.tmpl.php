<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }

if($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-3-ht-2 {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'png', '' ) ?>");
            background-size:100% 100%;
        }
    </style>
<?php }?>

<body>
    <section class="view-3-ht-container">
        <div class="view-3-ht-1 <?php if($_REQUEST['transpar'] == 1) {echo 'view-3-ht-2';} ?>">
            <div class="view-3-ht-top <?php if($_REQUEST['transpar'] == '') {echo 'black-icons';} ?>">
                <p class="view-3-ht-city <?php if($_REQUEST['transpar'] == 1) {echo 'white-font';} ?>">
                    <?php echo $object['name'] ?>
                </p>
                <p class="view-3-ht-selected-timeofday <?php if($_REQUEST['transpar'] == 1) {echo 'white-font';} ?>">
                    <?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?>
                </p>
                <p class="view-3-ht-daynumber <?php if($_REQUEST['transpar'] == 1) {echo 'white-font';} ?>">
                    <?php echo $abstractData->getDate('d.m.Y') ?>
                </p>
                <p class="view-3-ht-weekday <?php if($_REQUEST['transpar'] == 1) {echo 'white-font';} ?>">
                    <?php echo $abstractData->getWeek() ?>
                </p>

                <div class="view-3-ht-iconday">
                    <?php if(isset($_REQUEST['transpar']) && $_REQUEST['transpar'] == '1') {
                        echo $abstractData->getWeatherIcon($object, '', 'white');
                    } else {
                        echo $abstractData->getWeatherIcon($object, '');
                    }?>
                </div>
                <div class="view-3-ht-temp <?php if($_REQUEST['transpar'] == 1) {echo 'white-font';} ?>">
                    <?php echo $object['tempC']; ?>°
                </div>
                <div class="view-3-ht-line"></div>

                <div class="view-3-ht-params <?php if($_REQUEST['transpar'] == '') {echo 'black-icons';} ?>">
                    <p class="view-3-ht-typeofwind <?php if($_REQUEST['transpar'] == 1) {echo 'white-font';} ?>">
                        <?php echo $abstractData->getWwindDirection($object['wd']) ?>
                    </p>
                    <p class="view-3-ht-windspeed <?php if($_REQUEST['transpar'] == 1) {echo 'white-font';} ?>">
                        <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
                    </p>
                    <p class="view-3-ht-degree <?php if($_REQUEST['transpar'] == 1) {echo 'white-font';} ?>">
                        <?php echo $object['gmtMin'] ?>°
                    </p>
                    <p class="view-3-ht-wet <?php if($_REQUEST['transpar'] == 1) {echo 'white-font';} ?>">
                        Влажность:<?php echo $object['rh'] ?>%
                    </p>
                    <p class="view-3-ht-pressure <?php if($_REQUEST['transpar'] == 1) {echo 'white-font';} ?>">
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