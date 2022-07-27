<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
    $time = date('d.m.Y', time());

if($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-6-ht-2 {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'svg', '' ) ?>");
        }
    </style>
<?php }?>

<body>
<section class="view-6-ht-container">
    <div class="view-6-ht-1 <?php if($_REQUEST['transpar'] == 0) echo 'black-icons'; ?>
    <?php if($_REQUEST['transpar'] == 1) {
        echo 'view-6-ht-2';
    } else {
        echo 'view-6-ht-1 black-icons';
    } ?>">

        <div class="view-6-ht-icon">
            <?php if($_REQUEST['transpar'] == 1) {
                echo $abstractData->getWeatherIcon($object, '', 'white');
            } else {
                echo $abstractData->getWeatherIcon($object, '');
            }?>

        </div>
        <div class="view-6-ht-time <?php if($_REQUEST['transpar'] == 0) echo 'black-font'; ?>">
            <?php echo $abstractData->getDate('H:i') ?>
        </div>
        <div class="view-6-ht-date <?php if($_REQUEST['transpar'] == 0) echo 'black-font'; ?>">
            <?php echo $abstractData->getNameOfTheDate($time); ?>,
            <?php echo $abstractData->getDate('d') ?><br />
            <?php echo $abstractData->getMonthFromString($time); ?>
        </div>
        <div class="view-6-ht-temp <?php if($_REQUEST['transpar'] == 0) echo 'black-font'; ?>">
            <?php echo $object['tempC']; ?>°
        </div>
        <div class="view-6-ht-city <?php if($_REQUEST['transpar'] == 0) echo 'black-font'; ?>">
            <?php echo $object['name']; ?>
        </div>
    </div>
</section>
</body>