<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }

    $time = date('H:i', time());

if ($_REQUEST['transpar'] == 1) {?>
    <style>
        .view-1-classic-longcustom {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'png', 'longcustom') ?>");
            background-size:100% 100%;
        }
        .view-1-classic-custom {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'png', 'custom') ?>");
            background-size: cover;
            background-position: center;
        }
    </style>
<?php }?>

<body>
<table class="informers1" id="fon_table">
    <tbody>
    <tr>
        <td class="td-blue ">
            <h3><?php echo $object['name'] ?> <?php echo $abstractData->getWeek() ?>, <?php echo $abstractData->getDate('d.m.Y') ?></h3>
        </td>
    </tr>
    <tr>
        <td class="td-blue">

        </td>
    </tr>
    <tr>
        <td class="td-blue">
            <?php echo $abstractData->getTimesOfDay($time) ?>
        </td>
    </tr>

    <tr>
        <td class="td-blue" >
            <p><?php echo $abstractData->getWeatherDescription($object['icon']) ?></p>
        </td>
    </tr>

    <tr>
        <td class="td-blue td-icons" >
            <?php echo $abstractData->getWeatherIcon($object, '', '', 'max-width: 65%;') ?>
        </td>
    </tr>
    <tr>
        <td class="td-blue temperature">
            <?php echo $object['tempC'] ?>°
        </td>
    </tr>
    <tr>
        <td class="td-blue">
            <?php echo $object['tempF'] ?>F
        </td>
    </tr>

    <tr>
        <td class="td-blue td-icons" >
            <img src="<?php echo $abstractData->getDomain(). 'assets/classic/icons/wind-route-2.svg' ?>" style="max-width: 45%;" alt="">
        </td>
    </tr>
    <tr>
        <td class="td-blue td-text" >
            <p> <?php echo $abstractData->getWwindDirection($object['wd']) ?></p>
        </td>
    </tr>
    <tr>
        <td class="td-blue td-icons" >
            <img src="<?php echo $abstractData->getDomain(). 'assets/classic/icons/speed-2.svg' ?>" style="max-width: 65%;" alt="">
        </td>
    </tr>
    <tr>
        <td class="td-blue td-text" >
            <p><?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с </p>
        </td>
    </tr>

    <tr>
        <td class="td-blue td-icons" >
            <img src="<?php echo $abstractData->getDomain(). 'assets/classic/icons/grade.svg' ?>" style="max-width: 45%;" alt="">
        </td>
    </tr>
    <tr>
        <td class="td-blue td-text" >
            <p><?php echo $object['gmtMin'] ?>°</p>
        </td>
    </tr>
    <tr>
        <td class="td-blue td-icons" >
            <img src="<?php echo $abstractData->getDomain(). 'assets/classic/icons/wet-2.svg' ?>" style="max-width: 45%;" alt="">
        </td>
    </tr>
    <tr>
        <td class="td-blue td-text" >
            <p>Влажность: <?php echo $object['rh'] ?>%</p>
        </td>
    </tr>
    <tr>
        <td class="td-blue td-icons" >
            <img src="<?php echo $abstractData->getDomain(). 'assets/classic/icons/pressure.svg' ?>" style="max-width: 45%;" alt="">
        </td>
    </tr>

    <tr>
        <td class="td-blue td-text" >
            <p> Давление: <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм. рт. ст.</p>
        </td>
    </tr>


    <?php for ($i=0; $i < 3; $i++) {
        if ($i == 0) {
            $className = 'morning';
        }
        if ($i == 1) {
            $className = 'day';
        }
        if ($i == 2) {
            $className = 'evening';
        }
        ?>
        <tr>
            <td class="td-blue">
                <?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?>
            </td>
        </tr>
        <tr>
            <td class="td-blue" >
                <?php echo $abstractData->getWeatherIcon($forecatsArr[$i], '', '', 'max-width: 45%;') ?>
            </td>
        </tr>
        <tr>
            <td class="td-blue">
                <p class="tempo"> <?php echo $forecatsArr[$i]['tempC']; ?>°</p>
            </td>
        </tr>
        <?php
    }?>
    </tbody>
</table>
</body>