<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
?>

<body>
<section class="view-4-ht-container">
    <div class="view-4-ht-1">
        <div class="view-4-ht-day-city">
            <p class="view-4-ht-city"><?php echo $object['name'] ?></p>
            <p class="view-4-ht-day"><?php echo $abstractData->getDate('d.m.Y') ?></p>
        </div>

        <div class="view-4-ht-weekday-weather">
            <p class="view-4-ht-weather"><?php echo $abstractData->getWeatherDescription($object['icon']) ?></p>
            <p class="view-4-ht-weekday"><?php echo $abstractData->getWeek() ?></p>
        </div>

        <div class="view-4-ht-wind-pressure">
            <p class="view-4-ht-wind"><?php echo $abstractData->getWwindDirection($object['wd']) ?>
                <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с</p>
            <p class="view-4-ht-pressure"><?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм. рт. ст.</p>
        </div>

        <div class="view-4-ht-wet-degree-dpf">
            <p class="view-4-ht-wet">Влажность: <?php echo $object['rh'] ?>%</p>
            <p class="view-4-ht-degree"><?php echo $object['gmtMin'] ?>°</p>
            <p class="view-4-ht-dpf">dpF <?php echo $mainObject['dpF'] ?>°</p>
        </div>

        <div class="view-4-ht-plates">
            <ul class="view-4-ht-time">
                <?php for ($i=0; $i < 4; $i++) {
                    if ($i == 0) {$number = '1';}
                    if ($i == 1) {$number = '2';}
                    if ($i == 2) {$number = '3';}
                    if ($i == 3) {$number = '4';}
                    ?>
                    <li class="view-4-ht-time<?php echo $number ?>"><?php echo $abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i'); ?></li>
                    <?php
                }?>
            </ul>

            <ul class="view-4-ht-icons">
                <?php for ($i=0; $i < 4; $i++) {
                    if ($i == 0) {$number = '1';}
                    if ($i == 1) {$number = '2';}
                    if ($i == 2) {$number = '3';}
                    if ($i == 3) {$number = '4';}
                    ?>
                    <li class="view-4-ht-icon<?php echo $number ?>">
                        <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
                            echo $_REQUEST['weather_tip_img'] . '/icons';
                        } else {
                            echo 'classic';
                        } ?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg'/>
                    </li>
                    <?php
                }?>
            </ul>

            <ul class="view-4-ht-temps">
                <?php for ($i=0; $i < 4; $i++) {
                    if ($i == 0) {$number = '1';}
                    if ($i == 1) {$number = '2';}
                    if ($i == 2) {$number = '3';}
                    if ($i == 3) {$number = '4';}
                    ?>
                    <li class="view-4-ht-temp<?php echo $number ?>">
                        <p class="view-4-ht-cels"><?php echo $forecatsArr[$i]['tempC']; ?>°C</p>
                        <p class="view-4-ht-far"><?php echo $forecatsArr[$i]['tempF']; ?>°F</p>
                    </li>
                    <?php
                }?>
            </ul>
        </div>
</section>
</body>