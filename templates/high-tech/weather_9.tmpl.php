<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
?>

<body>
<section class="view-9-ht-container">
    <div class="view-9-ht-1">
        <div class="view-9-ht-day-city">
            <p class="view-9-ht-city"><?php echo $mainObject['name']; ?></p>
            <p class="view-9-ht-day"><?php echo $abstractData->getDate('d.m.Y') ?></p>
        </div>
        <div class="view-9-ht-weekday-weather">
            <p class="view-9-ht-weather"><?php echo $abstractData->getWeatherDescription($mainObject['icon']) ?></p>
            <p class="view-9-ht-weekday"><?php echo $abstractData->getWeek() ?></p>
        </div>
        <div class="view-9-ht-icon">
            <?php echo $abstractData->getWeatherIcon($mainObject, '') ?>
        </div>
        <div class="view-9-ht-cels">
            <?php echo $mainObject['tempC'] ?>°C
        </div>
        <div class="view-9-ht-far">
            <?php echo $mainObject['tempF'] ?>°F
        </div>

        <ul class="view-9-ht-weather-info">
            <?php for ($i=0; $i < 3; $i++) {
    if ($i == 0) {
        $className = 'left';
    }
    if ($i == 1) {
        $className = 'middle';
    }
    if ($i == 2) {
        $className = 'right';
    } ?>
                <li class="<?php echo $className; ?>">
                    <?php echo $abstractData->getWeatherIcon($forecatsArr[$i], '') ?>
                    <div class="view-9-ht-time">
                        <?php echo $abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i'); ?>
                    </div>
                    <div class="view-9-ht-temp">
                        <?php echo $forecatsArr[$i]['tempC']; ?>°C
                    </div>
                </li>
                <?php
}?>
        </ul>
    </div>
</section>
</body>