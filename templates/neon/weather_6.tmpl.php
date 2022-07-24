<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
    $time = date('d.m.Y', time());
?>

<body>
<section class="view-6-neon-container">
    <div class="view-6-neon-1">
        <div class="view-6-neon-city">
            <?php echo $object['name'] ?>
        </div>
        <div class="view-6-neon-gmt">
            GMT <?php echo '+' .$object['gmtMin']/60 ?>
        </div>
        <div class="view-6-neon-time shine-font">
            <?php echo $abstractData->getDate('H:i') ?>
        </div>
        <div class="view-6-neon-date">
            <?php echo $abstractData->getNameOfTheDate($time); ?>,
            <?php echo $abstractData->getDate('d') ?><br />
            <?php echo $abstractData->getMonthFromString($time); ?>
        </div>

        <div class="view-6-neon-icons">
            <!--<img src="icons/cloud-night-shine.png">
            <img src="icons/one-cloud-shine-b.png">
            <img src="icons/two-clouds-sun-b.png">
            <img src="icons/sun-shine-b.svg">
            <img src="icons/two-clouds-shine-b.png">-->
            <?php
            // ToDo: set 5 icons
            for ($i=0; $i < 3; $i++) {
                echo $abstractData->getWeatherIcon($forecatsArr[$i], 'view-6-neon-icons-img');
            }
            ?>
        </div>
    </div>


</section>
</body>