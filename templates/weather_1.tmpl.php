<?php

foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}
const MAX_ITERATION = '3';
?>

<table id="fon_table" align="center" <?php if (isset($_REQUEST['color_fon'])) {
    echo 'style="background-color:' . $_REQUEST['color_fon'];
}?>  bgcolor="#dcdcdc">
    <tr>
        <td colspan="5" class="den_nedeli">
            <h3><?php echo $object['name'] .' - '. $abstractData->getWeek() .', '. $abstractData->getFullDate() ?></h3>
        </td>
    </tr>
    <tr>
        <td><?php echo $object['dt'] ?></td>
        <td rowspan="4" width="28%" style="text-align:left;">
            <p class='opis_img'>
                <?php echo $abstractData->getWeatherDescription($object['icon']) ?><br /><br />
                Ветер: <?php echo $object['ws'] ?> м/час<br />
                Влажность: <?php echo $object['rh'] ?>%<br />
                Давление: <?php echo $object['psl'] ?> дюйм рт. ст.
            </p>
        </td>
        <?php for ($i=0; $i < MAX_ITERATION; $i++) {?>
            <td><?php echo $forecatsArr[$i]['dt']; ?></td>
        <?php }?>
    </tr>
    <tr>
        <td width="15%">
            <img src='assets/img/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'];
} else {
    echo 'img_7_svg';
} ?>/icon_<?php echo $object['icon'] ?>.svg' style="max-width: 65%;" />
        </td>
        <?php for ($i=0; $i < MAX_ITERATION; $i++) {?>
            <td width="15%">
                <img src='assets/img/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'];
} else {
    echo 'img_7_svg';
} ?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg' style="max-width: 65%;" />
            </td>
        <?php }?>
    </tr>
    <tr>
        <td><p class="tempo"><?php echo $object['tempC'] ?>&deg;</p></td>
        <?php for ($i=0; $i < MAX_ITERATION; $i++) {?>
            <td>
                <p class="tempo"><?php echo $forecatsArr[$i]['tempC']; ?>&deg;</p>
            </td>
        <?php }?>
    </tr>
</table>