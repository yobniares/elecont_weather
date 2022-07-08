<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Moscow');
?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <title>Weather</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?php echo($farbasticJs); ?>"></script>
    <script src="<?php echo($mainJs); ?>"></script>

    <link rel="stylesheet" href="<?php echo($farbasticCss); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo($css); ?>" type="text/css">
    <link href='//fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <?php if(!empty($_REQUEST)) {?>
        <style>
            *{font-family:<?php echo $_REQUEST['font_family'] ?>;}
            #fon_table {
                color:<?php echo $_REQUEST['font_text'] ?>;
            }
            .tempo {
                color:<?php echo $_REQUEST['font_tempo'] ?>;
            }
            .compakt td {color:<?php echo $_REQUEST['font_text'] ?>;}
        </style>
    <?php }?>

    <?php
    $fonts = array('Bad Script','Comfortaa','Indie Flower','Fira Code','Forum','Jura','El Messiri','Kurale','Kelly Slab','Lobster','Marck Script','Neucha','Open Sans','Oswald','Pangolin','Play','Poiret One','Pacifico','Press Start 2P','Pattaya','Roboto','Ruslan Display','Russo One','Rubik Mono One','Seymour One','Stalinist One','Underdog');
    foreach ($fonts as $font) {
        echo "<link href='https://fonts.googleapis.com/css?family=".str_replace(" ", "+", $font)."' rel='stylesheet' type='text/css'>\n";
    }
    ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#demo').hide();
            $('#picker_fon').farbtastic('#color_fon');
            $('#picker_font_text').farbtastic('#font_text');
            $('#picker_font_tempo').farbtastic('#font_tempo');
        });
    </script>
</head>
<body>
