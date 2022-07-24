<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
?>
<body>
<section class="view-4-neon-container">
    <div class="view-4-neon-1">
        <div class="view-4-neon-day-city">
            <p class="view-4-neon-city"><?php echo $object['name'] ?></p>
            <p class="view-4-neon-day"><?php echo $abstractData->getDate('d.m.Y') ?></p>
        </div>

        <div class="view-4-neon-weekday-weather">
            <p class="view-4-neon-weather"><?php echo $abstractData->getWeatherDescription($object['icon']) ?></p>
            <p class="view-4-neon-weekday"><?php echo $abstractData->getWeek() ?></p>
        </div>

        <div class="view-4-neon-wind-pressure">
            <p class="view-4-neon-wind"><?php echo $abstractData->getWwindDirection($object['wd']) ?>
                <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с</p>
            <p class="view-4-neon-pressure"><?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм. рт. ст.</p>
        </div>

        <div class="view-4-neon-wet-degree-dpf">
            <p class="view-4-neon-wet">Влажность: <?php echo $object['rh'] ?>%</p>
            <p class="view-4-neon-degree"><?php echo $object['gmtMin'] ?>°</p>
            <p class="view-4-neon-dpf">dpF <?php echo $mainObject['dpF'] ?>°</p>
        </div>

        <div class="view-4-neon-plates">
            <ul class="view-4-neon-time">
                <?php for ($i=0; $i < 4; $i++) {
                    if ($i == 0) {$number = '1';}
                    if ($i == 1) {$number = '2';}
                    if ($i == 2) {$number = '3';}
                    if ($i == 3) {$number = '4';}
                    ?>
                    <li class="view-4-neon-time<?php echo $number ?>"><?php echo $abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i'); ?></li>
                    <?php
                }?>
            </ul>

            <ul class="view-4-neon-icons">
                <?php for ($i=0; $i < 4; $i++) {
                    if ($i == 0) {$number = '1';}
                    if ($i == 1) {$number = '2';}
                    if ($i == 2) {$number = '3';}
                    if ($i == 3) {$number = '4';}
                    ?>
                    <li class="view-4-neon-icon<?php echo $number ?>">
                        <?php echo $abstractData->getWeatherIcon($forecatsArr[$i]) ?>
                    </li>
                    <?php
                }?>
            </ul>

            <ul class="view-4-neon-temps">
                <?php for ($i=0; $i < 4; $i++) {
                    if ($i == 0) {$number = '1';}
                    if ($i == 1) {$number = '2';}
                    if ($i == 2) {$number = '3';}
                    if ($i == 3) {$number = '4';}
                    ?>
                    <li class="view-4-neon-temp<?php echo $number ?>">
                        <p class="view-4-neon-cels shine-font"><?php echo $forecatsArr[$i]['tempC']; ?>°C</p>
                        <p class="view-4-neon-far"><?php echo $forecatsArr[$i]['tempF']; ?>°F</p>
                    </li>
                    <?php
                }?>
            </ul>
        </div>

    </div>
</section>
</body>