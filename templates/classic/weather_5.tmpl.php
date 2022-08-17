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
            <?php }
        ?>

        /* Background */
        <?php
        if(isset($_REQUEST['color_fon']) && $_REQUEST['color_fon'] !=='#') {?>
        .informer5-blue__background-1,
        .informer5-blue__tr .informer5-blue__td {
            background:<?php echo $_REQUEST['color_fon'] ?>
        }
        :root {
            --dark-blue: <?php echo $_REQUEST['color_fon'] ?>;
            --light-blue: <?php echo $_REQUEST['color_fon'] ?>;
        }
        .informer5-blue__tr:nth-child(1) .informer1-blue__td:nth-child(1) {
            background-color: <?php echo $_REQUEST['color_fon'] ?>;
        }
        <?php
        }
        ?>

        /* Text color */
        <?php
        if(isset($_REQUEST['font_text']) && $_REQUEST['font_text'] !=='#') {?>
        .informer5-blue {
            color: <?php echo  $_REQUEST['font_text'] ?>;
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }

        <?php }
        ?>

        /* Temperature color and font */
        <?php
         if(isset($_REQUEST['font_tempo']) && $_REQUEST['font_tempo'] !=='#') {?>
        .temp {
            color: <?php echo  $_REQUEST['font_tempo'] ?>;
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php }
        ?>

    </style>
<?php }?>

<div class="informer5-table-box">
    <div class="informer5-blue__background">
        <table class="informer5-blue">
            <tbody>
            <tr class="informer5-blue__tr">
                <td  class="informer5-blue__td">
                    <p class="informer5__number-font"><?php echo $abstractData->getFullDate(); ?></p>
                    <p class="informer5-blue__text-big informer5__number-font-time"><?php echo $abstractData->getDate('H:i') ?></p>
                    <p class="informer5-blue__day"><?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?></p>
                    <p class="informer5-blue__day-week"><?php echo $abstractData->getWeek() ?></p>
                </td>
                <td class="informer5-blue__td">
                    <div class="informer5-blue__box-big-icons">
                        <?php echo $abstractData->getWeatherIcon($object, 'informer5-blue__box-middle-icons-img', '', '', '100%', '100%') ?>
                        <p class="informer5-blue__text-small"><?php echo $abstractData->getWeatherDescription($object['icon']) ?></p>
                    </div>
                </td>
                <td class="informer5-blue__td">
                    <p class="informer5-blue__city"><?php echo $object['name'] ?>, <?php echo $object['country'] ?></p>
                    <p class="informer5-blue__text-big informer5__number-font temp"><?php echo $object['tempC'] ?>°</p>
                    <p class="informer5-blue__text-small informer5__number-font"><?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с, <?php echo $object['rh'] ?>%</p>
                    <p class="informer5-blue__text-small informer5__number-font"><?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм рт. ст.</p>
                </td>
            </tr>
            <tr class="informer5-blue__tr">
                <?php for ($i=0; $i < 3; $i++) {?>
                    <td class="informer5-blue__td">
                        <p class="informer5-blue__text-big"><?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?></p>
                        <div class="informer5-blue__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[$i], 'informer5-blue__box-middle-icons-img', '', '', '100%', '100%') ?>
                        </div>
                        <p class="informer5-blue__temperature informer5__number-font temp"><?php echo $forecatsArr[$i]['tempC']; ?>°</p>
                    </td>
                    <?php
                }?>
            </tr>
            </tbody>
        </table>
    </div>
</div>