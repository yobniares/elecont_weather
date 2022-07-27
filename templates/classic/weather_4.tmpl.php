<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}

if($_REQUEST['transpar'] == '1') {?>
    <style>
        .custom-icon-1  {
            background-image: url("assets/classic/img/moon-4-2.png");
            background-size:100% 100%;
        }
        .custom-icon-2  {
            background-image: url("assets/classic/img/night-cloud-4-2.png");
            background-size:100% 100%;
        }
        .custom-icon-3  {
            background-image: url("assets/classic/img/sunny-3-2.png");
            background-size:100% 100%;
        }
        .custom-icon-4  {
            background-image: url("assets/classic/img/day-cloud-4-2.png");
            background-size:100% 100%;
        }
    </style>
<?php }?>
<body>

<section class="view-4-classic-container">

    <div class="view-4-classic">
        <div class="view-4-classic-content">
            <div class="view-4-classic-day-city">
                <p class="view-4-classic-city"><?php echo $object['name'] ?></p>
                <p class="view-4-classic-day"><?php echo $abstractData->getDate('d.m.Y') ?></p>
            </div>

            <div class="view-4-classic-weekday-weather">
                <p class="view-4-classic-weather"><?php echo $abstractData->getWeatherDescription($object['icon']) ?></p>
                <p class="view-4-classic-weekday"><?php echo $abstractData->getWeek() ?></p>
            </div>

            <div class="view-4-classic-wind-pressure">
                <p class="view-4-classic-wind">
                    <?php echo $abstractData->getWwindDirection($object['wd']) ?>
                    <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
                </p>
                <p class="view-4-classic-pressure"><?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм. рт. ст.</p>
            </div>

            <div class="view-4-classic-wet-degree-dpf">
                <p class="view-4-classic-wet">Влажность: <?php echo $object['rh'] ?>%</p>
                <p class="view-4-classic-degree"><?php echo $object['gmtMin'] ?>°</p>
                <p class="view-4-classic-dpf">dpF <?php echo $mainObject['dpF'] ?>°</p>
            </div>

            <div class="view-4-classic-plates">
                <ul class="view-4-classic-time">
                    <?php for ($i=0; $i < 4; $i++) {
    if ($i == 0) {
        $number = '1';
    }
    if ($i == 1) {
        $number = '2';
    }
    if ($i == 2) {
        $number = '3';
    }
    if ($i == 3) {
        $number = '4';
    } ?>
                        <li class="view-4-classic-time<?php echo $number ?> <?php if($_REQUEST['transpar'] == 1) {echo 'custom-time-'.$number;} ?>">
                            <?php echo $abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i'); ?>
                        </li>
                        <?php
}?>
                </ul>

                <ul class="view-4-classic-icons">
                    <?php for ($i=0; $i < 4; $i++) {
        if ($i == 0) {
            $number = '1';
        }
        if ($i == 1) {
            $number = '2';
        }
        if ($i == 2) {
            $number = '3';
        }
        if ($i == 3) {
            $number = '4';
        } ?>
                        <li class="view-4-classic-icon<?php echo $number ?> <?php if($_REQUEST['transpar'] == 1) {echo 'custom-icon-'.$number;} ?>">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[$i]) ?>
                        </li>
                        <?php
    }?>
                </ul>

                <ul class="view-4-classic-temps">
                    <?php for ($i=0; $i < 4; $i++) {
        if ($i == 0) {
            $number = '1';
        }
        if ($i == 1) {
            $number = '2';
        }
        if ($i == 2) {
            $number = '3';
        }
        if ($i == 3) {
            $number = '4';
        } ?>
                        <li class="view-4-classic-temp<?php echo $number ?> <?php if($_REQUEST['transpar'] == 1) {echo 'custom-temp-'.$number;} ?>">
                            <p class="view-4-classic-cels"><?php echo $forecatsArr[$i]['tempC']; ?>°C</p>
                            <p class="view-4-classic-far"><?php echo $forecatsArr[$i]['tempF']; ?>°F</p>
                        </li>
                        <?php
    }?>
                </ul>
            </div>
        </div>
    </div>

</section>

</body>