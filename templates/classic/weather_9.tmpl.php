<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}
if($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-9-classic-content-bg {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'png', 'right' ) ?>");
            background-repeat: no-repeat;
        }
    </style>
<?php }?>

<body>
    <section class="view-9-classic-container">

        <div class="view-9-classic">
            <div class="view-9-classic-content <?php if($_REQUEST['transpar'] == 1) {echo 'view-9-classic-content-bg';} ?>">
                <div class="view-9-classic-day-city">
                    <p class="view-9-classic-city"><?php echo $mainObject['name']; ?></p>
                    <p class="view-9-classic-day"><?php echo $abstractData->getDate('d.m.Y') ?></p>
                </div>

                <div class="view-9-classic-weekday-weather">
                    <p class="view-9-classic-weather"><?php echo $abstractData->getWeatherDescription($mainObject['icon']) ?></p>
                    <p class="view-9-classic-weekday"><?php echo $abstractData->getWeek() ?></p>
                </div>

                <div class="view-9-classic-icon">
                    <?php echo $abstractData->getWeatherIcon($mainObject) ?>
                </div>

                <div class="view-9-classic-cels">
                    <?php echo $mainObject['tempC'] ?>°C
                </div>

                <div class="view-9-classic-far">
                    <?php echo $mainObject['tempF'] ?>°F
                </div>

                <ul class="view-9-classic-weather-info">
                    <?php for ($i=0; $i < 3; $i++) {
    ?>
                        <li>
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[$i], 'view-9-classic-weather-info-img') ?>
                            <div class="view-9-classic-time">
                                <?php echo $abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i'); ?>
                            </div>
                            <div class="view-9-classic-temp">
                                <?php echo $forecatsArr[$i]['tempC']; ?>°C
                            </div>
                        </li>
                        <?php
}?>
                </ul>
            </div>
        </div>

    </section>
</body>