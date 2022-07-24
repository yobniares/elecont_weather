<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
    $time = date('d.m.Y', time());
?>

<body>
<section class="view-7-ht-container">
    <div class="view-7-ht-1">
        <div class="view-7-ht-main-1">
            <ul class="view-7-ht-time-temp">
                <li class="view-7-ht-gmt">
                    GMT<?php echo '+' .$object['gmtMin']/60 ?>
                </li>
                <li class="view-7-ht-time">
                    <?php echo $abstractData->getDate('H:i') ?>
                </li>
                <li class="view-7-ht-temp-cels">
                    <?php echo $object['tempC'] ?>°
                </li>
                <li class="view-7-ht-temp-far">
                    <?php echo $object['tempF'] ?>°F
                </li>
            </ul>
            <ul class="view-7-ht-daytime-info black-icons">
                <li class="view-7-ht-daytime-name">
                    <?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?>
                </li>
                <li class="view-7-ht-daytime-icon">
                    <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
                        echo $_REQUEST['weather_tip_img'] . '/icons';
                    } else {
                        echo 'classic';
                    } ?>/icon_<?php echo $object['icon'] ?>.svg'/>
                </li>
            </ul>

            <ul class="view-7-ht-city-params black-icons">
                <li class="view-7-ht-city-type">
                    <p class="view-7-ht-city">
                        <?php echo $object['name'] ?>
                    </p>
                    <p class="view-7-ht-type">
                        <?php echo $abstractData->getWeatherDescription($object['icon']) ?>
                    </p>
                </li>
                <li class="view-7-ht-wind">
                    <?php echo $abstractData->getWwindDirection($object['wd']) ?>: <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
                </li>
                <li class="view-7-ht-degrees">
                    <?php echo $object['gmtMin'] ?>°
                </li>
                <li class="view-7-ht-wet">
                    Влажность: <?php echo $object['rh'] ?>%
                </li>
                <li class="view-7-ht-pressure">
                    Давление: <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм рт.ст.
                </li>
                <li class="view-7-ht-dpf">
                    dpF <?php echo $mainObject['dpF'] ?>°
                </li>
            </ul>
        </div>

        <div class="view-7-ht-infobox">
            <?php for ($i=0; $i < 3; $i++) {
                if ($i == 0) {$className = 'morning';}
                if ($i == 1) {$className = 'day';}
                if ($i == 2) {$className = 'evening';}

                if ($i == 0) {$position = 'top-1';}
                if ($i == 1) {$position = 'middle-1';}
                if ($i == 2) {$position = 'bottom-1';}
                ?>

                <div class="view-7-ht-info-1 <?php echo $position ?>">
                    <p class="view-7-ht-daytime-next">
                        <?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?>
                    </p>
                    <div class="view-7-ht-<?php echo $className ?>">
                        <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
                            echo $_REQUEST['weather_tip_img'] . '/icons';
                        } else {
                            echo 'classic';
                        } ?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg'/>
                    </div>
                    <p class="view-7-ht-next-temp">
                        <?php echo $forecatsArr[$i]['tempC']; ?>
                    </p>
                </div>
                <?php
            }?>

        </div>
    </div>
</section>
</body>