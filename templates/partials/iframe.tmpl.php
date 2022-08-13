<?php
require_once('Classes/AbstractClass.php');
$abstractData = new AbstractClass();
$cities = $abstractData->getDomain() . 'cities.php';
?>

<div class="wrapper">
    <p class="otst"><br></p>
    <h4>Информер № 1</h4>
    <p><br /></p>

    <div class="row">
        <div class="col">
            <h5>Classic</h5>
            <div class="wrap" style="height: 800px;">
                <iframe class="frame" style="height: 2000px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=1&weather_tip_img=classic&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23" width="100%" height="100%"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>High-Tech</h5>
            <div class="wrap" style="height: 800px;">
                <iframe class="frame" style="height: 2000px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=1&weather_tip_img=ht&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23" width="100%" height="100%"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>Neon</h5>
            <div class="wrap" style="height: 800px;">
                <iframe class="frame" style="height: 2000px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=1&weather_tip_img=neon&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23" width="100%" height="100%"></iframe>
            </div>
        </div>
    </div>

    <p class="otst"><br></p>
    <h4>Информер № 2</h4>
    <p><br /></p>
    <div class="row">
        <div class="col">
            <h5>Classic</h5>
            <div class="wrap" style="height: 360px;">
                <iframe class="frame" style="800px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=2&weather_tip_img=classic&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>High-Tech</h5>
            <div class="wrap" style="height: 360px;">
                <iframe class="frame" style="800px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=2&weather_tip_img=ht&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>Neon</h5>
            <div class="wrap" style="height: 360px;">
                <iframe class="frame" style="800px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=2&weather_tip_img=neon&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
    </div>

    <p class="otst"><br></p>
    <h4>Информер № 3</h4>
    <p><br /></p>
    <div class="row">
        <div class="col">
            <h5>Classic</h5>
            <div class="wrap" style="height: 400px;">
                <iframe class="frame" style="transform: scale(0.5); height: 1000px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=3&weather_tip_img=classic&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>High-Tech</h5>
            <div class="wrap" style="height: 400px;">
                <iframe class="frame" style="transform: scale(0.5); height: 1000px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=3&weather_tip_img=ht&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>Neon</h5>
            <div class="wrap" style="height: 400px;">
                <iframe class="frame" style="transform: scale(0.5); height: 1000px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=3&weather_tip_img=neon&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
    </div>

    <p class="otst"><br></p>
    <h4>Информер № 4</h4>
    <p><br /></p>

    <div class="row">
        <div class="col">
            <h5>Classic</h5>
            <div class="wrap" style="height: 400px;">
                <iframe class="frame" style="transform: scale(1); height: 1000px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=4&weather_tip_img=classic&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>High-Tech</h5>
            <div class="wrap" style="height: 400px;">
                <iframe class="frame" style="transform: scale(1); height: 1000px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=4&weather_tip_img=ht&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>Neon</h5>
            <div class="wrap" style="height: 400px;">
                <iframe class="frame" style="transform: scale(1); height: 1000px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=4&weather_tip_img=neon&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
    </div>

    <p class="otst"><br></p>
    <h4>Информер № 5</h4>
    <p><br /></p>

    <div class="row">
        <div class="col">
            <h5>Classic</h5>
            <div class="wrap" style="height: 340px;">
                <iframe class="frame" style="transform: scale(0.8)" src="<?php echo $abstractData->getDomain() ?>?weather_tip=5&weather_tip_img=classic&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>High-Tech</h5>
            <div class="wrap" style="height: 340px;">
                <iframe class="frame" style="transform: scale(0.8)" src="<?php echo $abstractData->getDomain() ?>?weather_tip=5&weather_tip_img=ht&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>Neon</h5>
            <div class="wrap" style="height: 340px;">
                <iframe class="frame" style="transform: scale(0.8)" src="<?php echo $abstractData->getDomain() ?>?weather_tip=5&weather_tip_img=neon&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
    </div>

    <p class="otst"><br></p>
    <h4>Информер № 6</h4>
    <p><br /></p>
    <div class="row">
        <div class="col">
            <h5>Classic</h5>
            <div class="wrap" style="height: 420px;">
                <iframe class="frame" style="transform: scale(0.4); height: 1000px; width: 1000px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=6&weather_tip_img=classic&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>High-Tech</h5>
            <div class="wrap" style="height: 420px;">
                <iframe class="frame" style="transform: scale(0.4); height: 1000px; width: 1000px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=6&weather_tip_img=ht&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>Neon</h5>
            <div class="wrap" style="height: 420px;">
                <iframe class="frame" style="transform: scale(0.4); height: 1000px; width: 1000px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=6&weather_tip_img=neon&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
    </div>

    <p class="otst"><br></p>
    <h4>Информер № 7</h4>
    <p><br /></p>
    <div class="row">
        <div class="col">
            <h5>Classic</h5>
            <div class="wrap" style="height: 180px;">
                <iframe class="frame" style="transform: scale(0.5); height: 300px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=7&weather_tip_img=classic&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>High-Tech</h5>
            <div class="wrap" style="height: 180px;">
                <iframe class="frame" style="transform: scale(0.5); height: 300px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=7&weather_tip_img=ht&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>Neon</h5>
            <div class="wrap" style="height: 180px;">
                <iframe class="frame" style="transform: scale(0.5); height: 300px;" src="<?php echo $abstractData->getDomain() ?>?weather_tip=7&weather_tip_img=neon&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
    </div>

    <p class="otst"><br></p>
    <h4>Информер № 8</h4>
    <p><br /></p>
    <div class="row">
        <div class="col">
            <h5>Classic</h5>
            <div class="wrap" style="height: 180px;">
                <iframe class="frame" style="transform: scale(0.5); height: 300px;"  src="<?php echo $abstractData->getDomain() ?>?weather_tip=8&weather_tip_img=classic&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>High-Tech</h5>
            <div class="wrap" style="height: 180px;">
                <iframe class="frame" style="transform: scale(0.5); height: 300px;"  src="<?php echo $abstractData->getDomain() ?>?weather_tip=8&weather_tip_img=ht&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>Neon</h5>
            <div class="wrap" style="height: 180px;">
                <iframe class="frame" style="transform: scale(0.5); height: 300px;"  src="<?php echo $abstractData->getDomain() ?>?weather_tip=8&weather_tip_img=neon&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
    </div>

    <p class="otst"><br></p>
    <h4>Информер № 9</h4>
    <p><br /></p>
    <div class="row">
        <div class="col">
            <h5>Classic</h5>
            <div class="wrap" style="">
                <iframe class="frame" style="transform: scale(0.8);"  src="<?php echo $abstractData->getDomain() ?>?weather_tip=9&weather_tip_img=classic&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>High-Tech</h5>
            <div class="wrap" style="">
                <iframe class="frame" style="transform: scale(0.8);"  src="<?php echo $abstractData->getDomain() ?>?weather_tip=9&weather_tip_img=ht&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
        <div class="col">
            <h5>Neon</h5>
            <div class="wrap" style="">
                <iframe class="frame" style="transform: scale(0.8);"  src="<?php echo $abstractData->getDomain() ?>?weather_tip=9&weather_tip_img=neon&city=Москва&font_family=Aldrich&color_fon=%23&font_text=%23&font_tempo=%23"></iframe>
            </div>
        </div>
    </div>

</div>

