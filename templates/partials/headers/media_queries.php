<?php if (!empty($_REQUEST['weather_tip'])) {?>
    <style>

        /* Custom */
        @media only screen and (max-width: 460px) {
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-container {
                transform:scale(0.45);
                -ms-transform: scale(0.45); /* IE 9 */
                -webkit-transform: scale(0.45); /* Chrome, Safari, Opera */
                transform-origin: 0 0;
                -webkit-transform-origin: 0 0;
                -ms-transform-origin: 0 0;
                -moz-transform-origin: 0 0;
            }
        }

        /* Extra small devices (phones, 600px and down) */
        @media only screen and (min-width: 460px) {
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-container {
                transform:scale(0.5);
                -ms-transform: scale(0.5); /* IE 9 */
                -webkit-transform: scale(0.5); /* Chrome, Safari, Opera */
                transform-origin: 0 0;
                -webkit-transform-origin: 0 0;
                -ms-transform-origin: 0 0;
                -moz-transform-origin: 0 0;
            }
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-container {
                transform:scale(0.6);
                -ms-transform: scale(0.6); /* IE 9 */
                -webkit-transform: scale(0.6); /* Chrome, Safari, Opera */
                transform-origin: 0 0;
                -webkit-transform-origin: 0 0;
                -ms-transform-origin: 0 0;
                -moz-transform-origin: 0 0;
            }
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-container {
                transform:scale(1);
                -ms-transform: scale(1); /* IE 9 */
                -webkit-transform: scale(1); /* Chrome, Safari, Opera */
                transform-origin: 0 0;
                -webkit-transform-origin: 0 0;
                -ms-transform-origin: 0 0;
                -moz-transform-origin: 0 0;
            }
        }

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {
            .view-<?php echo $_REQUEST['weather_tip']?>-<?php echo $_REQUEST['weather_tip_img']?>-container {
                transform: initial;
                transform-origin: initial;
            }
        }
    </style>
<?php }?>