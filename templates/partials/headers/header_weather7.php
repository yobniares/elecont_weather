<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href='//fonts.googleapis.com/css?family=<?php if (isset($_GET['font_family'])) {
    echo urldecode($_GET['font_family']);
} else {
    echo urldecode($_POST['font_family']);
} ?>' rel='stylesheet' type='text/css'>
    <style>
        .body {font-family:<?php if (isset($_GET['font_family'])) {
    echo urldecode($_GET['font_family']);
} else {
    echo urldecode($_POST['font_family']);
} ?>;font-size:3.0vw;}
        .td_1 {	color: <?php if (isset($_GET['font_text'])) {
    echo urldecode($_GET['font_text']);
} else {
    echo $_POST['font_text'];
} ?>;	font-size: 1.2em;text-transform: uppercase;margin: 0px;padding: 0 0 0.5em 0;}
        .td_2 {	color:  <?php if (isset($_GET['font_tempo'])) {
    echo urldecode($_GET['font_tempo']);
} else {
    echo $_POST['font_tempo'];
} ?>;	font-size: 2em;margin: 0px;padding: 0 0 0.5em 0;}
        .td_3 {color:  <?php if (isset($_GET['font_tempo'])) {
    echo urldecode($_GET['font_tempo']);
} else {
    echo $_POST['font_tempo'];
} ?>;	font-size: 7em; text-shadow: 0.08em 0.05em 0.05em #000000; text-align: right;padding:8% 5%;}
        .td_5 {}
        .td_6 { width: 30%; margin: 0 1% 2% 1%; display: inline-block; text-align: center;background: rgb(255 255 255 / 10%); border-radius: 0.5em;}
        .td_6 img {width: 50%; padding: 1em 0 0 0;}
        .pl {padding: 2% 5%; margin: 0; background-color: #03a9f4; display: inline-block; font-size: 1.3em; border-radius: 0 0 1em 0;}
        .plr {display: inline-block;font-size: 1em; text-align: right; float: right; padding-right: 5%;}
    </style>

</head>

<body>
