<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }

if ($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-5-ht-2 {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'svg', 'cover') ?>");
            background-size:100% 100%;
        }
    </style>
<?php }?>

<div class="informer5-table-box">

    <div class="informer5-grey__background">
        <table class="informer5-grey">

            <tbody>
            <tr class="informer5-grey__tr">
                <td  class="informer5-grey__td">
                    <p class="informer5__number-font"><?php echo $abstractData->getFullDate(); ?></p>
                    <p class="informer5-grey__text-big informer5__number-font-time"><?php echo $abstractData->getDate('H:i') ?></p>
                    <p class="informer5-grey__day"><?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?></p>
                    <p class="informer5-grey__day-week"><?php echo $abstractData->getWeek() ?></p>
                </td>
                <td class="informer5-grey__td">
                    <div class="informer5-grey__box-big-icons">
                        <?php echo $abstractData->getWeatherIcon($object, 'informer5-grey__box-big-icons-img', '', '', '100%', '100%') ?>
                        <p class="informer5-grey__text-small"><?php echo $abstractData->getWeatherDescription($object['icon']) ?></p>
                    </div>
                </td>
                <td class="informer5-grey__td">
                    <p class="informer5-grey__city"><?php echo $object['name'] ?>, <?php echo $object['country'] ?></p>
                    <p class="informer5-grey__text-big informer5__number-font"><?php echo $object['tempC'] ?>°</p>
                    <p class="informer5-grey__text-small informer5__number-font"><?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с, <?php echo $object['rh'] ?>%</p>
                    <p class="informer5-grey__text-small informer5__number-font"><?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм рт. ст.</p>
                </td>
            </tr>

            <tr class="informer5-grey__tr">
                <?php for ($i=0; $i < 3; $i++) {?>
                    <td class="informer5-grey__td">
                        <p class="informer5-grey__text-big">Ночь</p>
                        <div class="informer5-grey__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[$i], 'informer5-grey__box-middle-icons-img', '', '', '100%', '100%') ?>
                        </div>
                        <p class="informer5-grey__temperature informer5__number-font"><?php echo $forecatsArr[$i]['tempC']; ?>°</p>
                    </td>
                    <?php
                }?>
            </tr>
            <tr class="informer5-grey__background-1"></tr>
            </tbody>
        </table>
    </div>
</div>