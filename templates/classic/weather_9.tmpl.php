<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}
?>

<body>
    <section class="view-9-classic-container">

        <div class="view-9-classic">
            <div class="view-9-classic-content">
                <div class="view-9-classic-day-city">
                    <p class="view-9-classic-city"><?php echo $mainObject['name']; ?></p>
                    <p class="view-9-classic-day"><?php echo $abstractData->getDate('d.m.Y') ?></p>
                </div>

                <div class="view-9-classic-weekday-weather">
                    <p class="view-9-classic-weather"><?php echo $abstractData->getWeatherDescription($mainObject['icon']) ?></p>
                    <p class="view-9-classic-weekday"><?php echo $abstractData->getWeek() ?></p>
                </div>

                <div class="view-9-classic-icon">
                    <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
                        echo $_REQUEST['weather_tip_img'] . '/icons';
                    } else {
                        echo 'classic';
                    } ?>/icon_<?php echo $mainObject['icon'] ?>.svg'/>
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
                            <img class="view-9-classic-weather-info-img" src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
                                echo $_REQUEST['weather_tip_img'] . '/icons';
                            } else {
                                echo 'classic';
                            } ?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg'/>
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