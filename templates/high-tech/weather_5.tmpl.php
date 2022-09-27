<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
?>

<?php if (!empty($_REQUEST['weather_tip'])) {?>
    <style>
        /* Font family */
        <?php
         if(isset($_REQUEST['font_family']) && $_REQUEST['font_family'] !=='') {?>
        .informer5__text-font,
        .informer5__text-font span,
        .informer5__number-font {
            font-family:<?php echo $_REQUEST['font_family'] ?> !important;
        }
        <?php } ?>

        /* Background */
        <?php
        if(isset($_REQUEST['color_fon']) && $_REQUEST['color_fon'] !=='#') {?>
        .informer5-grey__background-1,
        .informer5-grey__tr .informer5-grey__td {
            background:<?php echo $_REQUEST['color_fon'] ?>;
            border-radius: 30px;
        }
        :root {
            --dark-grey: <?php echo $_REQUEST['color_fon'] ?>;
            --light-grey: <?php echo $_REQUEST['color_fon'] ?>;
        }
        .informer5-grey__tr:nth-child(1) .informer1-blue__td:nth-child(1) {
            background-color: <?php echo $_REQUEST['color_fon'] ?>;
        }
        <?php } ?>

        /* Text color */
        <?php
        if(isset($_REQUEST['font_text']) && $_REQUEST['font_text'] !=='#') {?>
        .informer5-grey {
            color: <?php echo  $_REQUEST['font_text'] ?>;
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php } ?>

        /* Temperature color and font */
        <?php
         if(isset($_REQUEST['font_tempo']) && $_REQUEST['font_tempo'] !=='#') {?>
        .temp {
            color: <?php echo  $_REQUEST['font_tempo'] ?>;
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php } ?>
    </style>
<?php }?>

<div class="informer5-table-box">

    <div class="informer5-grey__background">
    <div class="informer5-grey__background-1"></div>

        <table class="informer5-grey">

            <tbody>
            <tr class="informer5-grey__tr">
                <td class="informer5-grey__td">
                    <p class="informer5__number-font informer5-grey__text-middle"><?php echo $abstractData->getFullDate(); ?></p>
                    <p class="informer5-grey__text-big informer5__number-font-time"><?php echo $abstractData->getDate('H:i') ?></p>
                    <p class="informer5-grey__day informer5-grey__text-middle"><?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?></p>
                    <p class="informer5-grey__day-week informer5-grey__text-middle"><?php echo $abstractData->getWeek() ?></p>
                </td>
                <td class="informer5-grey__td">
                    <div class="informer5-grey__box-big-icons">
                        <?php echo $abstractData->getWeatherIcon($object, 'informer5-grey__box-big-icons-img', '', '', '100%', '100%') ?>
                    </div>
                    <p class="informer5-grey__text-middle"><?php echo $abstractData->getWeatherDescription($object['icon']) ?></p>
                </td>
                <td class="informer5-grey__td">
                    <p class="informer5-grey__city informer5-grey__text-middle">
                        <span class="informer5__text-font"><?php echo $object['name'] ?>,</span><br>
                        <span class="informer5__text-font"><?php echo $object['country'] ?></span><br>
                    </p>
                    <p class="informer5-grey__text-big-1 informer5__number-font informer5__number-font-time temp"><?php echo $object['tempC'] ?>°</p><br>
                    <p class="informer5-grey__text-middle informer5__number-font"><?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с, <?php echo $object['rh'] ?>%</p><br>
                    <p class="informer5-grey__text-middle informer5__number-font"><?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм рт. ст.</p>
                </td>
            </tr>

            <tr class="informer5-grey__tr">
                <?php for ($i=0; $i < 3; $i++) {?>
                    <td class="informer5-grey__td">
                        <p class="informer5-grey__text-big">Ночь</p>
                        <div class="informer5-grey__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[$i], 'informer5-grey__box-middle-icons-img', '', '', '100%', '100%') ?>
                        </div>
                        <p class="informer5-grey__text-big informer5-grey__temperature informer5__number-font temp"><?php echo $forecatsArr[$i]['tempC']; ?>°</p>
                    </td>
                    <?php
                }?>
            </tr>
            </tbody>
        </table>
    </div>
</div>