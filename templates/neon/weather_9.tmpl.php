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
        .informer9-neon__background-1{
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='480' height='540' viewBox='0 0 480 540' fill='none'%3E%3Cpath d='M410 105L410 435C410 451.569 396.569 465 380 465L100 465C83.4315 465 70 451.569 70 435L70 105C70 88.4314 83.4315 75 100 75L380 75C396.569 75 410 88.4315 410 105Z' fill='<?php echo str_replace('#','%23',$_REQUEST['color_fon']) ?>' stroke='url(%23paint0_radial_386_10)' stroke-width='10'/%3E%3Cpath d='M394 264L86 264' stroke='url(%23paint1_radial_386_10)' stroke-width='2' stroke-linecap='round'/%3E%3Cg style='mix-blend-mode:hard-light' filter='url(%23filter0_f_386_10)'%3E%3Cellipse cx='240' cy='270' rx='240' ry='210' transform='rotate(90 240 270)' fill='%2333E9C6' fill-opacity='0.1'/%3E%3C/g%3E%3Cg style='mix-blend-mode:hard-light' filter='url(%23filter1_f_386_10)'%3E%3Cpath d='M380 73.25C397.535 73.25 411.75 87.465 411.75 105L411.75 435C411.75 452.535 397.535 466.75 380 466.75L100 466.75C82.465 466.75 68.25 452.535 68.25 435L68.25 105C68.25 87.4649 82.465 73.25 100 73.25L380 73.25Z' stroke='%2300A8A8' stroke-width='6.5'/%3E%3C/g%3E%3Cg style='mix-blend-mode:hard-light' filter='url(%23filter2_f_386_10)'%3E%3Cpath d='M380 74.25C396.983 74.25 410.75 88.0172 410.75 105L410.75 435C410.75 451.983 396.983 465.75 380 465.75L100 465.75C83.0173 465.75 69.25 451.983 69.25 435L69.25 105C69.25 88.0172 83.0173 74.25 100 74.25L380 74.25Z' stroke='%2300A8A8' stroke-width='8.5'/%3E%3C/g%3E%3Cg style='mix-blend-mode:hard-light' filter='url(%23filter3_ddi_386_10)'%3E%3Cpath d='M380 73.25C397.535 73.25 411.75 87.465 411.75 105L411.75 435C411.75 452.535 397.535 466.75 380 466.75L100 466.75C82.465 466.75 68.25 452.535 68.25 435L68.25 105C68.25 87.4649 82.465 73.25 100 73.25L380 73.25Z' stroke='%2333E9C6' stroke-opacity='0.2' stroke-width='6.5'/%3E%3C/g%3E%3Cg filter='url(%23filter4_f_386_10)'%3E%3Cpath d='M380 72C398.225 72 413 86.7746 413 105L413 435C413 453.225 398.225 468 380 468L100 468C81.7746 468 67 453.225 67 435L67 105C67 86.7746 81.7747 72 100 72L380 72Z' stroke='%2333E9E9' stroke-width='4'/%3E%3C/g%3E%3Cg filter='url(%23filter5_f_386_10)'%3E%3Cpath d='M380 71C398.778 71 414 86.2223 414 105L414 435C414 453.778 398.778 469 380 469L100 469C81.2223 469 66 453.778 66 435L66 105C66 86.2223 81.2224 71 100 71L380 71Z' stroke='white' stroke-width='2'/%3E%3C/g%3E%3Cdefs%3E%3Cfilter id='filter0_f_386_10' x='0' y='0' width='400' height='540' filterUnits='userSpaceOnUse' color-interpolation-filters='sRGB'%3E%3CfeFlood flood-opacity='0' result='BackgroundImageFix'/%3E%3CfeBlend mode='normal' in='SourceGraphic' in2='BackgroundImageFix' result='shape'/%3E%3CfeGaussianBlur stdDeviation='15' result='effect1_foregroundBlur_386_10'/%3E%3C/filter%3E%3Cfilter id='filter1_f_386_10' x='35' y='40' width='410' height='460' filterUnits='userSpaceOnUse' color-interpolation-filters='sRGB'%3E%3CfeFlood flood-opacity='0' result='BackgroundImageFix'/%3E%3CfeBlend mode='normal' in='SourceGraphic' in2='BackgroundImageFix' result='shape'/%3E%3CfeGaussianBlur stdDeviation='15' result='effect1_foregroundBlur_386_10'/%3E%3C/filter%3E%3Cfilter id='filter2_f_386_10' x='55' y='60' width='370' height='420' filterUnits='userSpaceOnUse' color-interpolation-filters='sRGB'%3E%3CfeFlood flood-opacity='0' result='BackgroundImageFix'/%3E%3CfeBlend mode='normal' in='SourceGraphic' in2='BackgroundImageFix' result='shape'/%3E%3CfeGaussianBlur stdDeviation='5' result='effect1_foregroundBlur_386_10'/%3E%3C/filter%3E%3Cfilter id='filter3_ddi_386_10' x='52' y='67' width='376' height='426' filterUnits='userSpaceOnUse' color-interpolation-filters='sRGB'%3E%3CfeFlood flood-opacity='0' result='BackgroundImageFix'/%3E%3CfeColorMatrix in='SourceAlpha' type='matrix' values='0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0' result='hardAlpha'/%3E%3CfeOffset dy='6.5'/%3E%3CfeGaussianBlur stdDeviation='2.5'/%3E%3CfeColorMatrix type='matrix' values='0 0 0 0 0 0 0 0 0 0.3 0 0 0 0 0.275 0 0 0 0.7 0'/%3E%3CfeBlend mode='multiply' in2='BackgroundImageFix' result='effect1_dropShadow_386_10'/%3E%3CfeColorMatrix in='SourceAlpha' type='matrix' values='0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0' result='hardAlpha'/%3E%3CfeOffset dy='10'/%3E%3CfeGaussianBlur stdDeviation='6.5'/%3E%3CfeColorMatrix type='matrix' values='0 0 0 0 0 0 0 0 0 0.6 0 0 0 0 0.6 0 0 0 1 0'/%3E%3CfeBlend mode='color-dodge' in2='effect1_dropShadow_386_10' result='effect2_dropShadow_386_10'/%3E%3CfeBlend mode='normal' in='SourceGraphic' in2='effect2_dropShadow_386_10' result='shape'/%3E%3CfeColorMatrix in='SourceAlpha' type='matrix' values='0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0' result='hardAlpha'/%3E%3CfeOffset dx='-0.65' dy='1.3'/%3E%3CfeGaussianBlur stdDeviation='0.325'/%3E%3CfeComposite in2='hardAlpha' operator='arithmetic' k2='-1' k3='1'/%3E%3CfeColorMatrix type='matrix' values='0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0'/%3E%3CfeBlend mode='normal' in2='shape' result='effect3_innerShadow_386_10'/%3E%3C/filter%3E%3Cfilter id='filter4_f_386_10' x='64' y='69' width='352' height='402' filterUnits='userSpaceOnUse' color-interpolation-filters='sRGB'%3E%3CfeFlood flood-opacity='0' result='BackgroundImageFix'/%3E%3CfeBlend mode='normal' in='SourceGraphic' in2='BackgroundImageFix' result='shape'/%3E%3CfeGaussianBlur stdDeviation='0.5' result='effect1_foregroundBlur_386_10'/%3E%3C/filter%3E%3Cfilter id='filter5_f_386_10' x='64.3333' y='69.3333' width='351.333' height='401.333' filterUnits='userSpaceOnUse' color-interpolation-filters='sRGB'%3E%3CfeFlood flood-opacity='0' result='BackgroundImageFix'/%3E%3CfeBlend mode='normal' in='SourceGraphic' in2='BackgroundImageFix' result='shape'/%3E%3CfeGaussianBlur stdDeviation='0.333333' result='effect1_foregroundBlur_386_10'/%3E%3C/filter%3E%3CradialGradient id='paint0_radial_386_10' cx='0' cy='0' r='1' gradientUnits='userSpaceOnUse' gradientTransform='translate(240 270) rotate(-90) scale(200 4587.52)'%3E%3Cstop stop-color='%2300FF19'/%3E%3Cstop offset='1' stop-color='%2300FF19' stop-opacity='0'/%3E%3C/radialGradient%3E%3CradialGradient id='paint1_radial_386_10' cx='0' cy='0' r='1' gradientUnits='userSpaceOnUse' gradientTransform='translate(240 263.5) rotate(-90) scale(0.5 154)'%3E%3Cstop stop-color='%2300FF19'/%3E%3Cstop offset='1' stop-color='%2300FF19' stop-opacity='0'/%3E%3C/radialGradient%3E%3C/defs%3E%3C/svg%3E");
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
<svg style="position: absolute; height: 0; width: 0;" xmlns="http://www.w3.org/2000/svg" width="0" height="0">
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