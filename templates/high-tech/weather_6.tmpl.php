<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
    $time = date('d.m.Y', time());
?>

<body>
<section class="view-6-ht-container">
    <div class="view-6-ht-1  black-icons">

        <div class="view-6-ht-icon">
            <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'] . '/icons';
} else {
    echo 'classic';
} ?>/icon_<?php echo $object['icon'] ?>.svg'/>
        </div>
        <div class="view-6-ht-time black-font">
            <?php echo $abstractData->getDate('H:i') ?>
        </div>
        <div class="view-6-ht-date black-font">
            <?php echo $abstractData->getNameOfTheDate($time); ?>,
            <?php echo $abstractData->getDate('d') ?><br />
            <?php echo $abstractData->getMonthFromString($time); ?>
        </div>
        <div class="view-6-ht-temp black-font">
            <?php echo $object['tempC']; ?>°
        </div>
        <div class="view-6-ht-city black-font">
            <?php echo $object['name']; ?>
        </div>
    </div>
</section>
</body>