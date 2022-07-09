<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <title>Weather</title>
    <link href='//fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <?php if (!empty($_REQUEST['weather_tip'])) {?>
        <style>
            .body {font-family:<?php echo $_REQUEST['font_family'] ?>;}
        </style>
    <?php }?>

    <style>
        .body {font-family:<?php if (isset($_GET['font_family'])) {
    echo urldecode($_GET['font_family']);
} else {
    echo urldecode($_POST['font_family']);
} ?>;}


        * {
            box-sizing: border-box;
            transition: all 0.0250s;
            /* border: 1px solid black; */
        }

        div.weather {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            height: 100%;
        }

        div.weather_header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* height: 9%; */
            margin-bottom: 3%;
            max-height: 72px;
        }
        div.weather_body {
            display: flex;
            justify-content: center;
        }
        div.weather_footer {
            display: flex;
            justify-content: flex-end;
            width: 100%;
            /* height: 100%; */
        }

        div.weather_header_title {
            /* display: flex; */
            /* align-items: center;	 */
            height: 100%;
            /* max-height: 52px; */
            border: 3px solid #041239;
            border-left: 0px solid #041239;
            transform: skewX(-13deg) translateX(-3%);
            width: 65%;
            max-height: 72px;
        }

        div.weather_header_title_border {
            display: flex;
            align-items: center;
            height: 100%;
            /* max-height: 52px; */
            border-top: 5px solid #bbb9ba;
            border-left: 0px solid #92878d;
            border-right: 5px solid #92878d;
            border-bottom: 5px solid #92878d;
            /*background: linear-gradient(#bbb9ba, white);*/
            background: linear-gradient(#73b4ee, white);
            /* padding: 1%; */
            padding-left: 6%;
            max-height: 72px;
        }

        div.weather_header_title_border span {
            transform: skewX(12deg);
            text-transform: uppercase;
            font-weight: bold;
            color:<?php if (isset($_GET['font_text'])) {
    echo urldecode($_GET['font_text']);
} else {
    echo $_POST['font_text'];
} ?>;
        }

        div.weather_header_time {
            display: flex;
            align-items: center;

            padding: 0 10px;
            background: linear-gradient(#73b4ee, white);
            border: 3px solid #041239;
            text-transform: uppercase;
            font-weight: bold;
            height: 100%;
            max-height: 72px;
            /* transform: translateY(5px); */
            color:<?php if (isset($_GET['font_text'])) {
    echo urldecode($_GET['font_text']);
} else {
    echo $_POST['font_text'];
} ?>;
        }

        .weather_body * {
            /* border :1px solid; */
            /* color: white; */
        }

        div.weather_body_center {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45%;
            background-color: #2d2d2d61;
            background-image: linear-gradient(145deg, rgb(255 255 255 / 10%), transparent, rgb(0 0 0 / 20%));
            border :0.5em solid #73b4ee;
            margin: 0 1%;
        }

        div.weather_body_center_image {
            padding: 5%;
            width: 100%;
        }

        div.weather_body_center_image img
        , div.weather_body_center_image svg {
            width: 100%;
            height: auto;
            display: block;
        }


        div.weather_body_left
        ,div.weather_body_right  {
            width: 21.5%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        div.weather_body_left {
            margin-right: 1%;
        }

        div.weather_body_right {
            margin-left: 1%;
            text-align: center;
        }

        div.weather_body_left_top
        ,div.weather_body_right_top
        ,div.weather_body_left_bottom
        ,div.weather_body_right_bottom {
            width: 100%;
            height: 49.5%;

            display: flex;
            flex-direction: column;
            justify-content: space-between;

            overflow: hidden;
        }

        div.weather_body_left_top
        ,div.weather_body_right_top {
            /* background-color: red;	 */
        }

        div.weather_body_left_bottom
        ,div.weather_body_right_bottom {
            /* background-color: green;	 */
        }

        div.weather_body_left_top_data
        ,div.weather_body_right_top_data
        ,div.weather_body_left_bottom_data
        ,div.weather_body_right_bottom_data
        ,div.weather_body_left_top_message
        ,div.weather_body_right_top_message
        ,div.weather_body_left_bottom_message
        ,div.weather_body_right_bottom_message {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        /* div.weather_body_right_bottom_message { */
        /* align-items: baseline; */
        /* } */

        div.weather_body_left_top_data
        ,div.weather_body_right_top_data {
            width: 100%;
            height: 85%;
            background-color: #2d2d2d61;
            border :0.04em solid #73b4ee;
            position: relative;
            z-index: 1;
            color: <?php if (isset($_GET['font_tempo'])) {
    echo urldecode($_GET['font_tempo']);
} else {
    echo $_POST['font_tempo'];
} ?> !important;
            /* font-weight: bold; */
        }

        div.weather_body_right_top_data_content {
            display: flex;
            flex-direction: column;
        }

        div.weather_body_left_bottom_data
        ,div.weather_body_right_bottom_data {
            width: 100%;
            height: 15%;
            background-color :#73b4ee;
            border :2px solid #73b4ee;
            color: black;
            font-weight: bold;
        }

        div.weather_body_left_top_message
        ,div.weather_body_right_top_message {
            width: 100%;
            height: 15%;
            background-color :#73b4ee;
            border :2px solid #73b4ee;
            color: black;
            font-weight: bold;
        }

        div.weather_body_left_bottom_message
        ,div.weather_body_right_bottom_message {
            width: 100%;
            height: 85%;
            background-color: #2d2d2d61;
            border :0.04em solid #73b4ee;
            position: relative;
            z-index: 1;
            color: <?php if (isset($_GET['font_tempo'])) {
    echo urldecode($_GET['font_tempo']);
} else {
    echo $_POST['font_tempo'];
} ?> !important;
            /* font-weight: bold; */
        }

        div.weather_body_left_top_message {
            transform: skewX(45deg) translateX(0); /*11px*/
        }
        div.weather_body_left_top_message span {
            transform: skewX(-45deg);
            position: relative;
            z-index: 1;
            color:<?php if (isset($_GET['font_text'])) {
    echo urldecode($_GET['font_text']);
} else {
    echo $_POST['font_text'];
} ?>;
        }
        div.weather_body_left_bottom_data {
            transform: skewX(-45deg) translateX(0); /*11px*/
        }
        div.weather_body_left_bottom_data span {
            transform: skewX(45deg);
            position: relative;
            z-index: 1;
            color:<?php if (isset($_GET['font_text'])) {
    echo urldecode($_GET['font_text']);
} else {
    echo $_POST['font_text'];
} ?>;
        }
        div.weather_body_right_top_message {
            transform: skewX(315deg) translateX(0); /*-11px*/
        }
        div.weather_body_right_top_message span {
            transform: skewX(-315deg);
            position: relative;
            z-index: 1;
            color:<?php if (isset($_GET['font_text'])) {
    echo urldecode($_GET['font_text']);
} else {
    echo $_POST['font_text'];
} ?>;
        }
        div.weather_body_right_bottom_data {
            transform: skewX(-315deg) translateX(0); /*-11px*/
        }
        div.weather_body_right_bottom_data span {
            transform: skewX(315deg);
            position: relative;
            z-index: 1;
            color:<?php if (isset($_GET['font_text'])) {
    echo urldecode($_GET['font_text']);
} else {
    echo $_POST['font_text'];
} ?>;
        }
        div.weather_body_left_top_message_content
        ,div.weather_body_right_top_message_content
        ,div.weather_body_left_bottom_data_content
        ,div.weather_body_right_bottom_data_content {
            display: flex;
        }

        div.weather_body_left_top_message:before {
            content: '';
            width: 100%;
            /*height: 20px;*/
            background-color: #73b4ee;
            /*border: 1px solid red;*/
            position: absolute;
            top: -15px;
            z-index: 0;
        }
        div.weather_body_left_top_message:after {
            content: '';
            width: 100%;
            height: 100%;
            background-color: #73b4ee;
            /*border: 1px solid red;*/
            position: absolute;
            top: -10%;
            z-index: 0;
            transform: skewX(-45deg);
            right: -50%;
        }

        div.weather_body_left_bottom_data:before {
            content: '';
            width: 100%;
            /* height: 20px;*/
            background-color: #73b4ee;
            /*border: 1px solid red;*/
            position: absolute;
            bottom: -15px;
            z-index: 0;
        }
        div.weather_body_left_bottom_data:after {
            content: '';
            width: 100%;
            height: 100%;
            background-color: #73b4ee;
            /*border: 1px solid red;*/
            position: absolute;
            bottom: -10%;
            z-index: 0;
            transform: skewX(45deg);
            right: -50%;
        }

        div.weather_body_right_top_message:before {
            content: '';
            width: 100%;
            /* height: 20px;*/
            background-color: #73b4ee;
            /*border: 1px solid red;*/
            position: absolute;
            top: -15px;
            z-index: 0;
        }
        div.weather_body_right_top_message:after {
            content: '';
            width: 100%;
            height: 100%;
            background-color: #73b4ee;
            /*border: 1px solid red;*/
            position: absolute;
            top: -10%;
            z-index: 0;
            transform: skewX(-315deg);
            left: -50%;
        }

        div.weather_body_right_bottom_data:before {
            content: '';
            width: 100%;
            /* height: 20px;*/
            background-color: #73b4ee;
            /*border: 1px solid red;*/
            position: absolute;
            bottom: -15px;
            z-index: 0;
        }
        div.weather_body_right_bottom_data:after {
            content: '';
            width: 100%;
            height: 100%;
            background-color: #73b4ee;
            /*border: 1px solid red;*/
            position: absolute;
            bottom: -10%;
            z-index: 0;
            transform: skewX(315deg);
            left: -50%;
        }

        div.weather_header_title_border {
            /* font-size: max(10px, min(42px, calc(100vw * 3 / 75))); */
            font-size: max(10px, min(42px, calc(75vw * 3 / 75)));
        }

        div.weather_header_time {
            /* font-size: max(10px, min(32px, calc(100vw * 3 / 75))); */
            font-size: max(10px, min(32px, calc(75vw * 3 / 75)));
            padding: 1%;
        }

        div.weather_body_left_top_data
        ,div.weather_body_left_bottom_message {
            font-size: max(32px, min(256px, calc(100vw * 3 / 25)));
            padding: 1%;
        }

        div.weather_body_right_top_data
        ,div.weather_body_right_bottom_message {
            font-size: max(24px, min(160px, calc(100vw * 3 / 25)));
            padding: 1%;
        }
        div.weather_body_right_top_data_content span.weather_body_right_top_data_content_npm
        ,div.weather_body_right_bottom_message span.weather_body_right_bottom_message_per {
            font-size: max(10px, min(48px, calc(100vw * 3 / 25)));
        }

        div.weather_body_right_top_data_content span.weather_body_right_top_data_content_num {
            transform: translateY(15%);
            display: inline-block;
        }
        div.weather_body_right_top_data_content span.weather_body_right_top_data_content_npm {
            transform: translateY(-15%);
            display: inline-block;
        }

        div.weather_body_left_top_message_content
        ,div.weather_body_right_top_message_content
        ,div.weather_body_left_bottom_data_content
        ,div.weather_body_right_bottom_data {
            font-size: max(10px, min(32px, calc(100vw * 3 / 25)));
        }



        @media screen and (-ms-high-contrast: active) and (max-width: 1366px), (-ms-high-contrast: none) and (max-width: 1366px) {
            div.weather_header_title_border {
                font-size: 35px;
            }
            div.weather_header_time {
                font-size: 30px;
            }
            div.weather_body_left_top_data
            ,div.weather_body_left_bottom_message{
                font-size:152px;
            }
            div.weather_body_right_top_data,
            div.weather_body_right_bottom_message  {
                font-size:132px;
            }
            span.weather_body_right_top_data_content_npm {
                font-size:112px;
            }
            div.weather_body_left_top_message_content
            ,div.weather_body_right_top_message_content
            ,div.weather_body_left_bottom_data_content
            ,div.weather_body_right_bottom_data_content {
                font-size: 40px;
            }
        }
        @media screen and (-ms-high-contrast: active)  and (max-width: 1024px), (-ms-high-contrast: none) and (max-width: 1024px) {
            div.weather_header_title_border {
                font-size: 22px;
            }
            div.weather_header_time {
                font-size: 20px;
            }
            div.weather_body_left_top_data
            ,div.weather_body_left_bottom_message{
                font-size:122px;
            }
            div.weather_body_right_top_data,
            div.weather_body_right_bottom_message  {
                font-size:102px;
            }
            span.weather_body_right_top_data_content_npm {
                font-size:82px;
            }
            div.weather_body_left_top_message_content
            ,div.weather_body_right_top_message_content
            ,div.weather_body_left_bottom_data_content
            ,div.weather_body_right_bottom_data_content {
                font-size: 25px;
            }
        }
        @media screen and (-ms-high-contrast: active) and (max-width: 920px), (-ms-high-contrast: none) and (max-width: 920px) {
            div.weather_header_title_border {
                font-size: 25px;
            }
            div.weather_header_time {
                font-size: 25px;
            }
            div.weather_body_left_top_data
            ,div.weather_body_left_bottom_message{
                font-size:102px;
            }
            div.weather_body_right_top_data,
            div.weather_body_right_bottom_message  {
                font-size:82px;
            }
            span.weather_body_right_top_data_content_npm {
                font-size:62px;
            }
            div.weather_body_left_top_message_content
            ,div.weather_body_right_top_message_content
            ,div.weather_body_left_bottom_data_content
            ,div.weather_body_right_bottom_data_content {
                font-size: 25px;
            }
        }
        @media screen and (-ms-high-contrast: active)  and (max-width: 720px), (-ms-high-contrast: none)  and (max-width: 720px) {
            div.weather_header_title_border {
                font-size: 18px;
            }
            div.weather_header_time {
                font-size: 14px;
            }
            div.weather_body_left_top_data
            ,div.weather_body_left_bottom_message{
                font-size:82px;
            }
            div.weather_body_right_top_data,
            div.weather_body_right_bottom_message  {
                font-size:62px;
            }
            span.weather_body_right_top_data_content_npm {
                font-size:42px;
            }
            div.weather_body_left_top_message_content
            ,div.weather_body_right_top_message_content
            ,div.weather_body_left_bottom_data_content
            ,div.weather_body_right_bottom_data_content {
                font-size: 16px;
            }
        }
        @media screen and (-ms-high-contrast: active)  and (max-width: 640px), (-ms-high-contrast: none) and (max-width: 640px) {
            div.weather_header_title_border {
                font-size: 14px;
            }
            div.weather_header_time {
                font-size: 10px;
            }
            div.weather_body_left_top_data
            ,div.weather_body_left_bottom_message{
                font-size:62px;
            }
            div.weather_body_right_top_data,
            div.weather_body_right_bottom_message  {
                font-size:42px;
            }
            span.weather_body_right_top_data_content_npm {
                font-size:22px;
            }
            div.weather_body_left_top_message_content
            ,div.weather_body_right_top_message_content
            ,div.weather_body_left_bottom_data_content
            ,div.weather_body_right_bottom_data_content {
                font-size: 14px;
            }
        }
        /*e*/

        @media only screen and (max-width: 1024px) {


            div.weather_body_right_top_data_content span.weather_body_right_top_data_content_npm
            ,div.weather_body_right_bottom_message span.weather_body_right_bottom_message_per {
                font-size: max(10px, min(32px, calc(100vw * 3 / 25)));
            }

            div.weather_body_left_top_message_content
            ,div.weather_body_right_top_message_content
            ,div.weather_body_left_bottom_data_content
            ,div.weather_body_right_bottom_data {
                font-size: max(10px, min(24px, calc(100vw * 3 / 25)));


            }

        }

        @media only screen and (max-width: 720px) {
            div.weather_body_right_top_data_content span.weather_body_right_top_data_content_npm
            ,div.weather_body_right_bottom_message span.weather_body_right_bottom_message_per {
                font-size: max(10px, min(24px, calc(100vw * 3 / 25)));
            }

            div.weather_body_left_top_message_content
            ,div.weather_body_right_top_message_content
            ,div.weather_body_left_bottom_data_content
            ,div.weather_body_right_bottom_data {
                font-size: max(8px, min(16px, calc(100vw * 3 / 25)));
            }
        }

        @media only screen and (max-width: 480px) {

            div.weather_body_left_top_message_content
            ,div.weather_body_right_top_message_content
            ,div.weather_body_left_bottom_data_content
            ,div.weather_body_right_bottom_data {
                font-size: max(8px, min(12px, calc(100vw * 3 / 25)));
            }
        }

        @media only screen and (max-width: 360px) {

            div.weather_body_left_top_message_content
            ,div.weather_body_right_top_message_content
            ,div.weather_body_left_bottom_data_content
            ,div.weather_body_right_bottom_data {
                font-size: max(6px, min(8px, calc(100vw * 3 / 25)));
            }
        }

        /*FOOTER*/

        div.weather_footer_logo {
            width: calc(100vw * 2 / 25);
            height: calc(100vw * 2 / 25);
            background-color: #275384;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
            margin-top: 4%;
            margin-right: 1%;
        }

        div.weather_footer_logo_border {
            width: calc(100vw * 1 / 25);
            height: calc(100vw * 1 / 25);
            background-color: white;
            border-radius: 50%;

            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
            /* font-size: max(10px, min(32px, calc(100vw * 3 / 25))); */
            font-size: max(6px, min(22px, calc(50vw * 2 / 25)));
            text-transform: uppercase;
            font-weight: bold;
            box-shadow: 0 0 3px  black;
        }


        @media only screen and (max-width: 360px) {
            font-size: max(6px, min(16px, calc(50vw * 2 / 25)));
        }

    </style>

</head>
<body>
