<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
if ($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-9-ht-1-bg {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'png', '') ?>");
            width: 350px;
            height: 400px;
            border-radius: 35px;
        }
    </style>
<?php }?>

<body>
<section class="view-9-ht-container">
    <div class="view-9-ht-1 <?php if ($_REQUEST['transpar'] == 1) {
    echo 'view-9-ht-1-bg';
} ?>">
        <div class="view-9-ht-day-city">
            <p class="view-9-ht-city <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>"><?php echo $mainObject['name']; ?></p>
            <p class="view-9-ht-day <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>"><?php echo $abstractData->getDate('d.m.Y') ?></p>
        </div>
        <div class="view-9-ht-weekday-weather">
            <p class="view-9-ht-weather <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>"><?php echo $abstractData->getWeatherDescription($mainObject['icon']) ?></p>
            <p class="view-9-ht-weekday <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>"><?php echo $abstractData->getWeek() ?></p>
        </div>
        <div class="view-9-ht-icon">
            <?php if ($_REQUEST['transpar'] == 1) {
    echo $abstractData->getWeatherIcon($mainObject, '', 'white');
} else {
    echo $abstractData->getWeatherIcon($mainObject, '');
}?>
        </div>
        <div class="view-9-ht-cels <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
            <?php echo $mainObject['tempC'] ?>°C
        </div>
        <div class="view-9-ht-far <?php if ($_REQUEST['transpar'] == 1) {
    echo 'white-font';
} ?>">
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