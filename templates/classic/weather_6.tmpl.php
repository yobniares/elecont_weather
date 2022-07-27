<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}

if($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-6-classic-type-2 {
            background-image: url("assets/classic/bg/informer-6/hours.svg"), url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'png', '' ) ?>");
        }
    </style>
<?php }?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
        setInterval( function() {
            var seconds = new Date().getSeconds();
            var sdegree = seconds * 6;
            var srotate = "rotate(" + sdegree + "deg)";

            $("#sec").css({"-moz-transform" : srotate, "-webkit-transform" : srotate});

        }, 1000 );
        setInterval( function() {
            var hours = new Date().getHours();
            var mins = new Date().getMinutes();
            var hdegree = hours * 30 + (mins / 2);
            var hrotate = "rotate(" + hdegree + "deg)";

            $("#hour").css({"-moz-transform" : hrotate, "-webkit-transform" : hrotate});

        }, 1000 );
        setInterval( function() {
            var mins = new Date().getMinutes();
            var mdegree = mins * 6;
            var mrotate = "rotate(" + mdegree + "deg)";

            $("#min").css({"-moz-transform" : mrotate, "-webkit-transform" : mrotate});

        }, 1000 );
    });
</script>

<body>
    <section class="view-6-classic-container">
        <div class="<?php if($_REQUEST['transpar'] == 1) {
            echo 'view-6-classic-type-2';
        } else {
            echo 'view-6-classic-type-1';
        } ?>">
            <div class="view-6-classic-circle" id="clock">
                <li id="sec"></li>
                <li id="hour"></li>
                <li id="min"></li>
            </div>
            <div class="view-6-classic-icon">

                <img src='assets/<?php if (!empty($_REQUEST['weather_tip_img'])) {
    echo $_REQUEST['weather_tip_img'] . '/icons';
} else {
    echo 'classic';
} ?>/icon_<?php echo $object['icon'] ?>.svg'/>

            </div>
            <div class="view-6-classic-arrow-small">
            </div>
            <div class="view-6-classic-arrow-big">
            </div>
            <div class="view-6-classic-temp">
                <?php echo $object['tempC']; ?>°С
            </div>
            <div class="view-6-classic-date">
                <?php echo $abstractData->getNameOfTheDate($time = date('d.m', time())); ?>, <br />
                <?php echo $abstractData->getDate('d.m.Y') ?>
            </div>
        </div>
    </section>
</body>