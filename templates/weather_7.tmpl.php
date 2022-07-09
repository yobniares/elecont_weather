<?php

foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}
?>

<div class="body">
    <table width="100%" >
        <tbody>
        <tr>
            <td  style="background:  #ffffff;font-family:'Helvetica'; background-image: linear-gradient(145deg, rgb(255 255 255 / 10%), transparent, rgb(0 0 0 / 20%));">
                <table width="100%" style="background: url(<?php echo 'assets/img/' . $_REQUEST['weather_tip_img'] .'/icon_' . $object['icon'].'.svg'?>);
                        background-size: 45%; background-repeat: no-repeat; background-position: left 10% top 20%;border-spacing: 0px;">
                    <tbody>
                    <tr>
                        <td class="td_1"><p class="pl"><?php echo $abstractData->getFullDate(); ?></p> <p class="plr"><?php echo $abstractData->getWeek() ?></p>
                        </td>
                    </tr>
                    <tr style="">
                        <td class="td_3"><?php echo $object['tempC'] ?> &deg;</td>
                    </tr>
                    <tr>
                        <td class="td_5">
                            <?php for ($i=0; $i < 3; $i++) {?>
                                <div class="td_6">
                                    <p>
                                        <img src='assets/img/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'];
} else {
    echo 'img_7_svg';
} ?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg' style="max-width: 65%;" />
                                    </p>
                                    <p class="td_1"><?php echo $forecatsArr[$i]['dt']; ?></p>
                                    <p class="td_2"><?php echo $forecatsArr[$i]['tempC']; ?> &deg;</p>
                                </div>
                            <?php }?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>
