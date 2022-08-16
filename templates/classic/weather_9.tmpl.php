<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}
if ($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-9-classic-content-bg {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'png', '') ?>");
            background-repeat: no-repeat;
        }
    </style>
<?php }?>

<div class="informer9-table-box">
    <div class="informer9-blue__background">
        <table class="informer9-blue">
            <tbody>
            <tr class="informer9-blue__tr">
                <td class="informer9-blue__td" colspan="2" rowspan="2">
                    <p class="informer9-blue__text-middle">
                        <span class="informer9__text-font informer9__number-font-light"><?php echo $mainObject['name'] ?></span>
                        <span class="informer9__text-font informer9__number-font-light"><?php echo $abstractData->getWeatherDescription($mainObject['icon']) ?></span>
                    </p>
                    <div class="informer9-blue__box-big-icons">
                        <?php echo $abstractData->getWeatherIcon($object, 'informer5-blue__box-middle-icons-img', '', '', '100%', '100%') ?>
                    </div>
                </td>
                <td class="informer9-blue__td" colspan="2" rowspan="2">
                    <p class="informer9-blue__text-middle"><?php echo $abstractData->getDate('d.m.Y') ?></p>
                    <p class="informer9-blue__text-middle">
                        <span class="informer9__text-font informer9__number-font-light"><?php echo $abstractData->getWeek() ?></span>
                    </p>
                    <p class="informer9-blue__text-big">
                        <span class="informer9__number-font informer9__number-font-big"><?php echo $mainObject['tempC'] ?>°C</span>
                    </p>
                    <p class="informer9-blue__text-big">
                        <span class="informer9__number-font informer9__number-font-big-1"><?php echo $mainObject['tempF'] ?>°F</span>
                    </p>
                </td>
            </tr>
            <tr>
            </tr>
            <tr class="informer9-blue__tr">
                <td class="informer9-blue__td">
                    <div class="informer9-blue__box-middle-icons">
                        <?php echo $abstractData->getWeatherIcon($forecatsArr[0], 'informer5-blue__box-middle-icons-img', '', '', '100%', '100%') ?>
                    </div>
                </td>
                <td class="informer9-blue__td" colspan="2">
                    <div class="informer9-blue__box-middle-icons">
                        <?php echo $abstractData->getWeatherIcon($forecatsArr[1], 'informer5-blue__box-middle-icons-img', '', '', '100%', '100%') ?>
                    </div>
                </td>
                <td class="informer9-blue__td">
                    <div class="informer9-blue__box-middle-icons">
                        <?php echo $abstractData->getWeatherIcon($forecatsArr[2], 'informer5-blue__box-middle-icons-img', '', '', '100%', '100%') ?>
                    </div>
                </td>
            </tr>

            <tr class="informer9-blue__tr">
                <td class="informer9-blue__td">
                    <p class="informer9-blue__text-middle">
                        <span class="informer9__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[0]['dt'], 'H:i'); ?></span>
                    </p>
                </td>
                <td class="informer9-blue__td" colspan="2">
                    <p class="informer9-blue__text-middle">
                        <span class="informer9__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[1]['dt'], 'H:i'); ?></span>

                    </p>
                </td>
                <td class="informer9-blue__td">
                    <p class="informer9-blue__text-middle">
                        <span class="informer9__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[2]['dt'], 'H:i'); ?></span>
                    </p>
                </td>
            </tr>

            <tr class="informer9-blue__tr">
                <td class="informer9-blue__td">
                    <p class="informer9-blue__text-big">
                        <span class="informer9__number-font"><?php echo $forecatsArr[0]['tempC']; ?>°C</span>
                    </p>
                </td>
                <td class="informer9-blue__td" colspan="2">
                    <p class="informer9-blue__text-big">
                        <span class="informer9__number-font"><?php echo $forecatsArr[1]['tempC']; ?>°C</span>
                    </p>
                </td>
                <td class="informer9-blue__td">
                    <p class="informer9-blue__text-big">
                        <span class="informer9__number-font"><?php echo $forecatsArr[2]['tempC']; ?>°C</span>
                    </p>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
</div>
