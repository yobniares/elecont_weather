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
        .informer6__text-font,
        .informer6__text-font span,
        .informer6__number-font {
            font-family:<?php echo $_REQUEST['font_family'] ?> !important;
        }
        <?php } ?>

        /* Background */
        <?php
        if(isset($_REQUEST['color_fon']) && $_REQUEST['color_fon'] !=='#') {?>
        .informer6-neon__background-1,
        .informer6-neon__tr .informer6-neon__td {
            background:<?php echo $_REQUEST['color_fon'] ?>;
            border-radius: 100px;
        }
        :root {
            --dark-neon: <?php echo $_REQUEST['color_fon'] ?>;
            --light-neon: <?php echo $_REQUEST['color_fon'] ?>;
        }
        .informer6-neon__tr:nth-child(1) .informer1-blue__td:nth-child(1) {
            background-color: <?php echo $_REQUEST['color_fon'] ?>;
        }
        <?php } ?>

        /* Text color */
        <?php
        if(isset($_REQUEST['font_text']) && $_REQUEST['font_text'] !=='#') {?>
        .informer6-neon {
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

    <div class="informer6-neon__background">
    <div class="informer6-neon__background-1"></div>

    <?php if($_REQUEST['transpar']=='1'){?>
        <img class="informer6-neon__background-2"src="<?php echo $abstractData->getWeatherBackground($object,date('H', time()))?>" width="100%" height="100%" alt="">

        <?php }?>


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
            </tbody>
        </table>
    </div>
</div>