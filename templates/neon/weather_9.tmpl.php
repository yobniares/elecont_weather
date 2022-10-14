<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
    $time = date('H:i', time());
?>

<?php if (!empty($_REQUEST['weather_tip'])) {?>
    <style>
        /* Font family */
        <?php
            if(isset($_REQUEST['font_family']) && $_REQUEST['font_family'] !=='') {?>
        .informer9__text-font,
        .informer9__text-font span,
        .informer9__number-font {
            font-family:<?php echo $_REQUEST['font_family'] ?> !important;
        }
        <?php } ?>

        /* Background */
        <?php
        if(isset($_REQUEST['color_fon']) && $_REQUEST['color_fon'] !=='#') {?>
        .informer9-neon__tr .informer9-neon__td {
            /*background:<?php echo $_REQUEST['color_fon'] ?>*/
        }
        :root {
            --black: <?php echo $_REQUEST['color_fon'] ?>;
        }
        .informer9-neon__tr:nth-child(1) .informer1-neon__td:nth-child(1) {
            background-color: <?php echo $_REQUEST['color_fon'] ?>;
        }
        <?php } ?>

        /* Text color */
        <?php
        $text_color = "#0FF19";
        if(isset($_REQUEST['font_text']) && $_REQUEST['font_text'] !=='#') {
            $text_color = $_REQUEST['font_text'];
            ?>
        .informer9-neon {
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

<!-- фильтр для иконок в img -->
<svg xmlns="http://www.w3.org/2000/svg" width="0" height="0">
  <defs>
    <filter id="recolourFilter" filterUnits="userSpaceOnUse">
      <feFlood flood-color="<?php echo $text_color?>" result="flood" />
      <feComposite in="flood" in2="SourceAlpha" operator="in" />
    </filter>
  </defs>
</svg>

<div class="informer9-table-box">
    <div class="informer9-neon__background">
    <?php if($_REQUEST['clear']=='0'){?>
        <div class="informer9-neon__background-1"></div>
        <?php }?>
    <div class="informer9-neon__background-2"></div>

    <div class="informer9-neon__background-3"></div>

    <div class="informer9-neon__background-4"></div>

    <?php if($_REQUEST['transpar']=='1'){?>
        <img class="informer9-neon__background-5"src="<?php echo $abstractData->getWeatherBackground($object,date('H', time()))?>" width="100%" height="100%" alt="">

        <?php }?>


        <table class="informer9-neon">
            <tbody>
            <tr class="informer9-neon__tr">
                <td class="informer9-neon__td" colspan="3" rowspan="2">
                    <p class="informer9-neon__text-middle">
                        <span class="informer9__text-font"><?php echo $mainObject['name'] ?></span>
                        <span class="informer9__text-font"><?php echo $abstractData->getWeatherDescription($mainObject['icon']) ?></span>
                    </p>
                    <div class="informer9-neon__box-big-icons">
                        <?php echo $abstractData->getWeatherIcon($object, 'informer5-neon__box-middle-icons-img', '', 'filter: url(#recolourFilter);', '100%', '100%') ?>
                    </div>
                </td>
                <td class="informer9-neon__td" colspan="3" rowspan="2">
                    <p class="informer9-neon__text-middle">
                        <span class="informer9__number-font"><?php echo $abstractData->getDate('d.m.Y') ?></span>
                    </p>
                    <p class="informer9-neon__text-middle">
                        <span class="informer9__text-font"><?php echo $abstractData->getWeek() ?></span>
                    </p>
                    <p class="informer9-neon__text-big">
                        <span class="informer9__number-font informer9__number-font-big blur-text temp"><?php echo $mainObject['tempC'] ?>°C</span>
                    </p>
                    <p class="informer9-neon__text-big">
                        <span class="informer9__number-font informer9__number-font-big-1 temp"><?php echo $mainObject['tempF'] ?>°F</span>
                    </p>
                </td>
            </tr>
            <tr>
            </tr>
            <tr class="informer9-neon__tr">
                <td class="informer9-neon__td" colspan="2">
                    <div class="informer9-neon__box-middle-icons">
                        <?php echo $abstractData->getWeatherIcon($forecatsArr[0], 'informer5-neon__box-middle-icons-img', '', 'filter: url(#recolourFilter);', '100%', '100%') ?>
                    </div>
                </td>
                <td class="informer9-neon__td" colspan="2">
                    <div class="informer9-neon__box-middle-icons">
                        <?php echo $abstractData->getWeatherIcon($forecatsArr[1], 'informer5-neon__box-middle-icons-img', '', 'filter: url(#recolourFilter);', '100%', '100%') ?>
                    </div>
                </td>
                <td class="informer9-neon__td" colspan="2">
                    <div class="informer9-neon__box-middle-icons">
                        <?php echo $abstractData->getWeatherIcon($forecatsArr[2], 'informer5-neon__box-middle-icons-img', '', 'filter: url(#recolourFilter);', '100%', '100%') ?>
                    </div>
                </td>
            </tr>
            <tr class="informer9-neon__tr">
                <td class="informer9-neon__td" colspan="2">
                    <p class="informer9-neon__text-middle">
                        <span class="informer9__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[0]['dt'], 'H:i'); ?></span>
                    </p>
                </td>
                <td class="informer9-neon__td" colspan="2">
                    <p class="informer9-neon__text-middle">
                        <span class="informer9__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[1]['dt'], 'H:i'); ?></span>

                    </p>
                </td>
                <td class="informer9-neon__td" colspan="2">
                    <p class="informer9-neon__text-middle">
                        <span class="informer9__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[2]['dt'], 'H:i'); ?></span>
                    </p>
                </td>
            </tr>
            <tr class="informer9-neon__tr">
                <td class="informer9-neon__td" colspan="2">
                    <p class="informer9-neon__text-big">
                        <span class="informer9__number-font temp"><?php echo $forecatsArr[0]['tempC']; ?>°C</span>

                    </p>
                </td>
                <td class="informer9-neon__td" colspan="2">
                    <p class="informer9-neon__text-big">
                        <span class="informer9__number-font temp"><?php echo $forecatsArr[1]['tempC']; ?>°C</span>
                    </p>
                </td>
                <td class="informer9-neon__td" colspan="2">
                    <p class="informer9-neon__text-big">
                        <span class="informer9__number-font temp"><?php echo $forecatsArr[2]['tempC']; ?>°C</span>
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>