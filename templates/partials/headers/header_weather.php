<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Moscow');
?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php if (!empty($_REQUEST['font_family'])) {?>
        <link href='https://fonts.googleapis.com/css?family=<?php echo $_REQUEST['font_family'] ?>' rel='stylesheet' type='text/css'>
    <?php } else {?>
        <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
    <?php }?>
    <link rel="stylesheet" href="<?php echo($geometria); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo($css); ?>" type="text/css">
    <title>View 1 Classic</title>
</head>
<body>
