<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
    $time = date('d.m.Y', time());
?>

<?php if (!empty($_REQUEST['weather_tip'])) {?>
    <style>
        /* Font family */
        <?php
         if(isset($_REQUEST['font_family']) && $_REQUEST['font_family'] !=='') {?>
        .informer6-grey__number-font,
        .informer6-grey__text-font-light,
        .informer6__text-font span,
        .informer6-grey__number-middle .informer6-grey__text-font  {
            font-family:<?php echo $_REQUEST['font_family'] ?> !important;
        }
        <?php } ?>

        /* Background */
        <?php
        if(isset($_REQUEST['color_fon']) && $_REQUEST['color_fon'] !=='#') {?>
        .informer6-grey__background-1,
        .informer6-grey__tr .informer6-grey__td {
            background:<?php echo $_REQUEST['color_fon'] ?>;
            border-radius: 120px;
        }
        :root {
            --dark-grey: <?php echo $_REQUEST['color_fon'] ?>;
            --light-grey: <?php echo $_REQUEST['color_fon'] ?>;
        }
        .informer6-grey__tr:nth-child(1) .informer1-blue__td:nth-child(1) {
            background-color: <?php echo $_REQUEST['color_fon'] ?>;
        }
        <?php } ?>

        /* Text color */
        <?php
        if(isset($_REQUEST['font_text']) && $_REQUEST['font_text'] !=='#') {?>
        .informer6-grey {
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
                        <span class="informer6-grey__number-font temp"><?php echo $object['tempC']; ?>°</span>
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