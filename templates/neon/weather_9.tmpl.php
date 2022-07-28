<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
    $time = date('H:i', time());

    if($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-9-neon-1 {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'svg', '' ) ?>");
        }
    </style>
<?php }?>

<body>
<section class="view-9-neon-container">
    <div class="view-9-neon-1 <?php if($_REQUEST['transpar'] == 1) {echo 'view-9-neon-1';} ?>">
        <div class="view-9-neon-day-city">
            <p class="view-9-neon-city"><?php echo $mainObject['name']; ?></p>
            <p class="view-9-neon-day"><?php echo $abstractData->getDate('d.m.Y') ?></p>
        </div>

        <div class="view-9-neon-weekday-weather">
            <p class="view-9-neon-weather"><?php echo $abstractData->getWeatherDescription($mainObject['icon']) ?></p>
            <p class="view-9-neon-weekday"><?php echo $abstractData->getWeek() ?></p>
        </div>

        <div class="view-9-neon-icon">
            <?php echo $abstractData->getWeatherIcon($mainObject, '') ?>
        </div>

        <div class="view-9-neon-cels">
            <!--Temperature as image???!!!-->
            <!--<img src="icons/15.svg">-->
            <?php echo $mainObject['tempC'] ?>°C
        </div>

        <div class="view-9-neon-far">
            <!--<img src="icons/59.svg">-->
            <?php echo $mainObject['tempF'] ?>°F
        </div>

        <ul class="view-9-neon-weather-info">

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
                <li class="left">
                    <?php echo $abstractData->getWeatherIcon($forecatsArr[$i], '') ?>
                    <div class="view-9-neon-time">
                        <?php echo $abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i'); ?>
                    </div>
                    <div class="view-9-neon-temp">
                        <?php echo $forecatsArr[$i]['tempC']; ?>°C
                    </div>
                </li>
                <?php
}?>

            <!--<li class="left">
                <img src="icons/one-cloud-neon.svg">
                <div class="view-9-neon-time">
                    3:00
                </div>
                <div class="view-9-neon-temp">
                    15°C
                </div>
            </li>

            <li class="middle">
                <img src="icons/sun-neon.svg">
                <div class="view-9-neon-time">
                    6:00
                </div>
                <div class="view-9-neon-temp">
                    22°C
                </div>
            </li>

            <li class="right">
                <img src="icons/two-clouds-neon.svg">
                <div class="view-9-neon-time">
                    9:00
                </div>
                <div class="view-9-neon-temp">
                    10°C
                </div>
            </li>-->


        </ul>
    </div>
</section>
</body>