<div style="padding: 0px 20px 20px 20px; <?php if (isset($_REQUEST['color_fon'])) {
    echo 'background-color:' . $_REQUEST['color_fon'];
}?> !important;
background-image: linear-gradient(145deg, rgb(255 255 255 / 10%), transparent, rgb(0 0 0 / 20%));">

    <div class="weather">
        <div class="weather_header">
            <div class="weather_header_title">
                <div class="weather_header_title_border">
                    <span><?php echo $abstractData->getWeek().', '. $object['name']  ?></span>
                </div>
            </div>
            <div class="weather_header_time">
                <span><?php echo $abstractData->getDate('d/m/Y') ?></span>
            </div>
        </div>

        <div class="weather_body">
            <div class="weather_body_left">
                <div class="weather_body_left_top">
                    <div class="weather_body_left_top_data">
							<span><?php echo $object['tempC'] ?>&deg;<span>
                    </div>
                    <div class="weather_body_left_top_message">
                        <div class="weather_body_left_top_message_content">
								<span>t&deg;C, max<span>
                        </div>
                    </div>
                </div>
                <div class="weather_body_left_bottom">
                    <div class="weather_body_left_bottom_data">
                        <div class="weather_body_left_bottom_data_content">
								<span>t&deg;C, min<span>
                        </div>
                    </div>
                    <div class="weather_body_left_bottom_message">
							<span><?php echo $object['tempC'] ?>&deg;</span><span>
                    </div>
                </div>
            </div>

            <div class="weather_body_center" >
                <div class="weather_body_center_image">
                    <img src='assets/img/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'];
} else {
    echo 'img_7_svg';
} ?>/icon_<?php echo $object['icon'] ?>.svg'/>
                </div>
            </div>

            <div class="weather_body_right">
                <div class="weather_body_right_top">
                    <div class="weather_body_right_top_data">
                        <div class="weather_body_right_top_data_content">
                            <span class="weather_body_right_top_data_content_num"><?php echo $object['ws'] ?></span>
                            <span class="weather_body_right_top_data_content_npm">м/час</span>
                        </div>
                    </div>
                    <div class="weather_body_right_top_message">
                        <div class="weather_body_right_top_message_content">
								<span>ветер<span>
                        </div>
                    </div>
                </div>
                <div class="weather_body_right_bottom">
                    <div class="weather_body_right_bottom_data">
                        <div class="weather_body_right_bottom_data_content">
								<span>влажность<span>
                        </div>
                    </div>
                    <div class="weather_body_right_bottom_message">
                        <span><?php echo $object['rh'] ?></span>
                        <span class="weather_body_right_bottom_message_per">%</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>