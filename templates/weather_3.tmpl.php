<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}
?>

<table  align="center"  class="compakt litl" style="background-color:<?php echo $_REQUEST['color_fon'] ?>" bgcolor="#dcdcdc">
    <tr><td width="30%" rowspan="2" class="den_nedeli">
            <h3 style="font-size: 120%;"><?php echo $abstractData->getFullDate(); ?></h3>
            <p class="tempo" style="font-size: 140%;"><?php echo $abstractData->getTime(); ?>  <span><?php echo $abstractData->getWeek(); ?> </span></p>
            <p  class="tip_comp" >
                <?php echo $object['ws'] ?> м/час,
                <?php echo $object['rh'] ?>%,
                <?php echo $object['psl'] ?> дюйм рт. ст.
            </p>
        </td>

        <td width="20%" style="border: 2px solid #999999; border-radius: 20px; background-color: #0000001f;">
            <p class="tempo" style=" line-height: 100px;"><?php echo $object['tempC'] ?>&deg;
                <img src='assets/img/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'];
} else {
    echo 'img_7_svg';
} ?>/icon_<?php echo $object['icon'] ?>.svg' style="float: right; max-width: 45%;" />
            </p>
            <p class="litl"><?php echo $abstractData->getWeatherDescription($object['icon']) ?></p>
        </td>

        <?php for ($i=0; $i < 3; $i++) {?>
            <td width="16%">
                <p class="litl"><?php echo $forecatsArr[$i]['dt']; ?></p>
                <img src='assets/img/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'];
} else {
    echo 'img_7_svg';
} ?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg' style="max-width: 30%;" />
                <p class="tempo" style="font-size: 100%!important;"><?php echo $forecatsArr[$i]['tempC']; ?>&deg;</p>
            </td>
        <?php }?>
    </tr>

</table>