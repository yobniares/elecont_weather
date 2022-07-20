<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <title>Weather</title>
    <link rel="stylesheet" href="<?php echo($css); ?>" type="text/css">
    <link href='//fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <?php if (!empty($_REQUEST['weather_tip'])) {?>
        <style>
            .body {font-family:<?php echo $_REQUEST['font_family'] ?>;}
            #fon_table {
                color:<?php echo $_REQUEST['font_text'] ?>;
            }
            .tempo {
                color:<?php echo $_REQUEST['font_tempo'] ?>;
            }
            .compakt td {color:<?php echo $_REQUEST['font_text'] ?>;}
        </style>
    <?php }?>
</head>
<body>
