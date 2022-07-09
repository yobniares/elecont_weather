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
        .td_1 {	background: rgb(255 255 255 / 7%);	color: <?php if (isset($_GET['font_text'])) {
    echo urldecode($_GET['font_text']);
} else {
    echo $_POST['font_text'];
} ?>;	font-weight: bold; font-size: 1.2em;	}
        .td_2 {	background: rgb(255 255 255 / 7%); color:<?php if (isset($_GET['font_text'])) {
    echo urldecode($_GET['font_text']);
} else {
    echo $_POST['font_text'];
} ?>; text-align: center; font-size: 1em;}
        .td_3 {	background: rgb(255 255 255 / 15%); text-align: center;padding: 4%;}
        .td_4 {	background: rgb(255 255 255 / 7%); color: <?php if (isset($_GET['font_tempo'])) {
    echo urldecode($_GET['font_tempo']);
} else {
    echo $_POST['font_tempo'];
} ?>; text-align: center; font-size: 3em; text-shadow: 0.08em 0.05em 0.05em #000000;}
        .td_tt {background: rgb(255 255 255 / 20%);}
        td {padding: 10px;}
        .td_1 p span {text-transform: uppercase;}
        .td_1 p {margin: 0px;padding: 0 0 0.5em 0;}
        .td_3 img {width: 100%;}

    </style>
</head>
<body>
