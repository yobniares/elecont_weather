<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}
const MAX_ITERATION = '3';
?>

<table class="compakt" style="background-color:<?php echo $_REQUEST['color_fon'] ?>"  bgcolor="#dcdcdc">
    <tr>
        <td width="33%">
            <h3><?php echo $abstractData->getFullDate() ?></h3>
            <p class="tempo_comp"><?php echo $abstractData->getTime() ?></p>
            <h3><?php echo $abstractData->getWeek() ?></h3>
        </td>
        <td width="33%">
            <img src='assets/img/<?php echo $_REQUEST['weather_tip_img']?>/icon_<?php echo $object['icon'] ?>.svg' style="max-width: 55%;" />
            <p style="margin-bottom:10px; font-size: 120%"><?php echo $abstractData->getWeatherDescription($object['icon']) ?></p>
        </td>
        <td width="33%"><h3></h3>
            <p class="tempo_comp temper"><?php echo $object['tempC'] ?>&deg;</p>
            <!--<p class="tip">день</p>-->
            <p class="tip"><?php echo $object['ws'] ?> м/час<br />,
                <?php echo $object['rh'] ?>%<br />
                <?php echo $object['psl'] ?> дюйм рт. ст.
            </p>
        </td>
    </tr>

    <tr>
        <?php for ($i=0; $i < MAX_ITERATION; $i++) {?>
            <td style="border-right: solid 1px #CCCCCC;"><p class="tip"><?php echo $forecatsArr[$i]['dt']; ?></p>
                <img src='assets/img/<?php echo $_REQUEST['weather_tip_img']?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg' style="max-width: 40%;" />
                <p class="tempo_comp temper"><?php echo $forecatsArr[$i]['tempC']; ?>&deg;</p>
            </td>
        <?php }?>
    </tr>
</table>