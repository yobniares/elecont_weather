<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
    $time = date('d.m.Y', time());

if ($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-6-ht-2 {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'png', '') ?>");
            background-size:100% 100%;
        }
    </style>
<?php }?>

<div class="informer6-table-box">
    <div class="informer6-grey__background">
        <table class="informer6-grey">
            <tbody>

            <tr class="informer6-grey__tr">
                <td colspan="2" class="informer6-grey__td">
                    <div class="informer6-grey__box-middle-icons">
                        <?php echo $abstractData->getWeatherIcon($object, 'informer6-grey__box-middle-icons-img', '', '', '80%', '100%') ?>
                    </div>
                </td>
            </tr>

            <tr class="informer6-grey__tr">
                <td colspan="2" class="informer6-grey__td">
                    <p class="informer6-grey__number-big">
                        <span class="informer6-grey__number-font"><?php echo $abstractData->getDate('H:i') ?></span>
                    </p>
                </td>
            </tr>

            <tr class="informer6-grey__tr">
                <td class="informer6-grey__td">
                    <div class="informer6-grey__flexbox-cell">
                        <p class="informer6-grey__number-middle">
                            <!-- Неразравный пробел в span &nbsp;-->
                            <span class="informer6-grey__text-font informer6-grey__text-font-light"> <?php echo $abstractData->getNameOfTheDate($time); ?>, &nbsp;</span>
                            <span class="informer6-grey__number-font"><?php echo $abstractData->getDate('d') ?></span>
                        </p>
                        <p class="informer6-grey__number-middle-1">
                            <span class="informer6-grey__text-font informer6-grey__text-font-light"><?php echo $abstractData->getMonthFromString($time); ?></span>
                        </p>
                    </div>
                </td>
                <td class="informer6-grey__td">
                    <p class="informer6-grey__number-big-1">
                        <span class="informer6-grey__number-font"><?php echo $object['tempC']; ?>°</span>
                    </p>
                </td>
            </tr>

            <tr class="informer6-grey__tr">
                <td colspan="2" class="informer6-grey__td">
                    <p class="informer6-grey__number-small">
                        <span class="informer6-grey__text-font informer6-grey__text-font-light"><?php echo $object['name']; ?></span>
                    </p>
                </td>
            </tr>

            <tr class="informer6-grey__background-1"></tr>
            </tbody>
        </table>
    </div>
</div>