<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}
?>

<style>
    .st-4 {font-family: Arial;  font-size:2vw; color:#fff;}
    .st-4 tr td {padding:20px 5px;}
    .st-4 p {padding:0; margin:0px; text-shadow:1px 1px 2px #015b71; font-size: 4vw;}
    .st-4-nm {text-align:center; font-size:100%; line-height:50px; text-transform:uppercase; }
    .st-4-nm p { background:rgb(3, 123, 148,0.5);padding:10px 5px; font-size: 3vw;}
    .st-4-nm span {vertical-align: bottom; font-size: 5vw;}

    .st-4-nm img {vertical-align: bottom;}
    .fas {width:40px; font-size:150%; line-height:50px; text-shadow: none;}
    hr, .hr-top{
        border: 0;
        height: 1px;
        background-image: -webkit-linear-gradient(left, rgba(240, 240, 240, 0), #ffffff, rgba(240, 240, 240, 0));
        background-image: -moz-linear-gradient(left, rgba(240, 240, 240, 0), #ffffff, rgba(240, 240, 240, 0));
        background-image: -ms-linear-gradient(left, rgba(240, 240, 240, 0), #ffffff, rgba(240, 240, 240, 0));
        background-image: -o-linear-gradient(left, rgba(240, 240, 240, 0), #ffffff, rgba(240, 240, 240, 0));

    }
</style>

<div class="body">
    <table class="st-4 " style="width: 100%;  border-collapse: collapse;
background-image: linear-gradient(to bottom right, rgba(41, 125, 146, 0.6), rgba(41, 125, 146, 0.9));
border-radius: 10px; text-align: left;" border="0">
        <tr>
            <td colspan="3">
                <p style="text-transform: uppercase; font-size:5vw; font-weight:bold; padding-left:20px;">
                    <img src="assets/img/svg/marker_map.svg" style="max-width: 4%;" />
                    Москва
                </p>
            </td>
        </tr>
        <tr><td colspan="3" class="hr-top" style=" padding: 0px;"></td></tr>
        <tr style=" background:rgba(1, 95, 121, 0.69);">
            <td width="60%" colspan="2">
                <p style="font-weight:bold; padding-left:20px; text-transform: uppercase;text-shadow: 1px 1px 2px #015b71;"><?php echo $abstractData->getWeek(); ?></p>
            </td>
            <td width="30%"><p style="text-align:right; padding-right:20px;"><?php echo $abstractData->getDate('d.m.Y'); ?></p></td>
        </tr>
        <tr><td colspan="3" class="hr-top" style=" padding: 0px;"></td></tr>
        <tr>
            <td style="text-align:center;">
                <img src='assets/img/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'];
} else {
    echo 'img_7_svg';
} ?>/icon_<?php echo $object['icon'] ?>.svg' style="max-width: 65%;" />
                <p  style="text-align:center;"><?php echo $abstractData->getWeatherDescription($object['icon']) ?></p>
            </td>
            <td style="text-align:center; font-size:2em;">
                <span style="font-size:15vw; text-shadow: 1px 1px 2px #015b71;"><?php echo $object['tempC'] ?>&deg;	</span>
            </td>
            <td style=" vertical-align:bottom; ">
                <p><img src="assets/img/svg/wind_blue.svg" style="max-width: 18%; padding:0px 10px 0px 0px; vertical-align: bottom;" />: <?php echo $object['ws'] ?> м/час</p>
                <p style="padding-top: 15px;">
                    <img src="assets/img/svg/drop-silhouette_blue.svg" style="max-width: 18%; padding:0px 10px 0px 0px; vertical-align: bottom;" />: <?php echo $object['rh'] ?>%
                </p>
            </td>
        </tr>
        <tr><td colspan="3" class="hr-top" style=" padding: 0px;"></td></tr>
        <tr>
            <?php for ($i=0; $i < 3; $i++) {?>
                <td class="st-4-nm"  width="30%">
                    <p  style="margin-left: 10px;">
                        <img src='assets/img/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'];
} else {
    echo 'img_7_svg';
} ?>/icon_<?php echo $forecatsArr[$i]['icon'] ?>.svg' style="max-width: 30%;" />
                        <span><?php echo $forecatsArr[$i]['tempC']; ?>&deg;</span>
                    </p>
                </td>
            <?php }?>
        </tr>
    </table>
</div>