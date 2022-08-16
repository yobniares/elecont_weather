<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
    $time = date('d.m.Y', time());

    if ($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-6-neon-2 {
            background-image: url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'svg', '') ?>");
        }
    </style>
<?php }?>

<div class="informer6-table-box">

    <div class="informer6-neon__background">
        <table class="informer6-neon">
            <tbody>

            <tr class="informer6-neon__tr">
                <td class="informer6-neon__td">
                    <p class="informer6-neon__text-small"> <?php echo $object['name'] ?></p>
                </td>
                <td rowspan="3" class="informer6-neon__td">
                    <div class="informer6-neon__box-middle-icons">
                        <?php
                        for ($i=0; $i < 3; $i++) {
                            echo $abstractData->getWeatherIcon($forecatsArr[$i], 'informer6-neon__box-middle-icons-img', '', '', '100%', '100%');
                        }
                        ?>
                    </div>
                </td>
            </tr>
            <tr class="informer6-neon__tr">
                <td class="informer6-neon__td">
                    <p class="informer6-neon__text-middle">GMT <?php echo '+' .$object['gmtMin']/60 ?></p>
                    <p class="informer6-neon__text-big shine-neon"><?php echo $abstractData->getDate('H:i') ?></p>
                </td>
            </tr>
            <tr class="informer6-neon__tr">
                <td class="informer6-neon__td">
                    <div class="informer6-neon__flexbox-cell">
                        <p class="informer6-neon__number-middle">
                            <!-- Неразравный пробел в span &nbsp;-->
                            <span class="informer6-neon__text-font"> <?php echo $abstractData->getNameOfTheDate($time); ?>, &nbsp;</span>
                            <span class="informer6-neon__number-font"><?php echo $abstractData->getDate('d') ?></span>
                        </p>
                        <p class="informer6-neon__number-middle-1">
                            <span class="informer6-neon__text-font"><?php echo $abstractData->getMonthFromString($time); ?></span>
                        </p>
                    </div>
                </td>
            </tr>
            <tr class="informer6-neon__background-1"></tr>

            </tbody>
        </table>
    </div>
</div>