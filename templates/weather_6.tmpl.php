<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}
?>

<div class="body">
    <table width="100%" style="background: <?php echo $_REQUEST['color_fon']; ?>; font-family:'Helvetica';
            /* background-image: linear-gradient(#003d6b 35%, #ffffff3d 60%, #003d6b 75%); */
            background-image: linear-gradient(145deg, rgb(255 255 255 / 10%), transparent, rgb(0 0 0 / 20%));">
        <tbody>
        <tr>
            <td colspan="4" class="td_1">
                <p style="float: left; text-shadow: 0.08em 0.05em #000000;"><span><?php echo $object['name'] ?></span><br><?php echo $abstractData->getWeek() ?></p>
                <p style="float: right; font-size: 1.5em; text-shadow: 0.08em 0.05em #000000;"><?php echo $abstractData->getDate('d.m.Y') ?></p>
                <p style="clear: both; text-align: left; font-size: 0.7em; font-weight: normal;">
                    Ветер: <span><?php echo $object['ws'] ?></span> м/час,
                    Влажность: <?php echo $object['rh'] ?>%, Давление: <?php echo $object['psl'] ?> дюйм рт. ст.
                </p>
            </td>
        </tr>
        <tr>
            <td width="25%" class="td_2 td_tt"><?php echo $object['dt'] ?></td>
            <?php for ($i=0; $i < 3; $i++) {?>
                <td width="25%" class="td_2">
                    <?php echo $forecatsArr[$i]['dt']; ?>
                </td>
            <?php }?>
        </tr>
        <tr>
            <td class="td_3 td_tt">
                <img src='assets/img/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'];
} else {
    echo 'img_7_svg';
} ?>/icon_<?php echo $object['icon'] ?>.svg' />
            </td>

            <?php for ($i=0; $i < 3; $i++) {?>
                <td class="td_3">
                    <img src='assets/img/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'];
} else {
    echo 'img_7_svg';
} ?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg' />
                </td>
            <?php }?>
        </tr>
        <tr>
            <td class="td_4 td_tt"><?php echo $object['tempC'] ?> &deg;</td>
            <?php for ($i=0; $i < 3; $i++) {?>
                <td class="td_4">
                    <?php echo $forecatsArr[$i]['tempC']; ?> &deg;
                </td>
            <?php }?>
        </tr>
        </tbody>
    </table>
</div>