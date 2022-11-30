<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}
?>

<?php if (!empty($_REQUEST['weather_tip'])) {?>
    <style>
        /* Font family */
        <?php
         if(isset($_REQUEST['font_family']) && $_REQUEST['font_family'] !=='') {?>
        .informer6__text-font,
        .informer6__text-font span,
        .informer6__number-font {
            font-family:<?php echo $_REQUEST['font_family'] ?> !important;
        }
        <?php } ?>

        /* Background */
        <?php if ($_REQUEST['clear']=='1'){?>
        .informer6-blue__background{
            background-color:transparent;
        }
        <?php }?>
        <?php
        if(isset($_REQUEST['color_fon']) && $_REQUEST['color_fon'] !=='#') {?>
        .informer6-blue__background-1,
        .informer6-blue__tr .informer6-blue__td {
            /*background:<?php echo $_REQUEST['color_fon'] ?>;
            border-radius: 30%;*/
        }
        :root {
            --dark-blue: <?php echo $_REQUEST['color_fon'] ?>;
            --light-blue: <?php echo $_REQUEST['color_fon'] ?>;
        }
        .informer6-blue__tr:nth-child(1) .informer1-blue__td:nth-child(1) {
            background-color: <?php echo $_REQUEST['color_fon'] ?>;
        }
        <?php } ?>

        /* Text color */
        <?php
        $text_color = "white";
        if(isset($_REQUEST['font_text']) && $_REQUEST['font_text'] !=='#') {
            $text_color = $_REQUEST['font_text'];
            ?>
        .informer6-blue {
            color: <?php echo  $_REQUEST['font_text'] ?>;
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php } ?>

        /* Temperature color and font */
        <?php
         if(isset($_REQUEST['font_tempo']) && $_REQUEST['font_tempo'] !=='#') {?>
        .temp {
            color: <?php echo  $_REQUEST['font_tempo'] ?>;
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php } ?>
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

<!-- фильтр для иконок в img -->
<svg hidden xmlns="http://www.w3.org/2000/svg" width="0" height="0">
  <defs>
    <filter id="recolourFilter" filterUnits="userSpaceOnUse">
      <feFlood flood-color="<?php echo $text_color?>" result="flood" />
      <feComposite in="flood" in2="SourceAlpha" operator="in" />
    </filter>
  </defs>
</svg>

<div class="informer6-table-box">
    <div class="informer6-blue__background">
        <?php if($_REQUEST['transpar']=='1'){?>
        <img class="informer6-blue__background-1"src="<?php echo $abstractData->getWeatherBackground($object,date('H', time()))?>" width="100%" height="100%" alt="">

    <?php }?>

        <div class="informer6-blue__background-2"></div>

        <div class="informer6-blue__background-3">
            <div class="view-6-classic-circle" id="clock">
                <li id="sec"></li>
                <li id="hour"></li>
                <li id="min"></li>
            </div>
        </div>
        <table class="informer6-blue">
            <tbody>
            <tr class="informer6-blue__tr">
                <td class="informer6-blue__td">
                    <div class="informer6-blue__box-small-icons">
                        <?php echo $abstractData->getWeatherIcon($object, 'informer6-blue__box-middle-icons-img', '', 'filter: url(#recolourFilter);', '100%', '100%') ?>
                        <div class="view-6-classic-arrow-small">
                        </div>
                        <div class="view-6-classic-arrow-big">
                        </div>
                    </div>
                </td>
            </tr>

            <tr class="informer6-blue__tr">
                <td class="informer6-blue__td">
                    <span class="informer6-blue__text-temp informer6__number-font temp"><?php echo $object['tempC']; ?>°C</span>
                </td>
            </tr>
            <tr class="informer6-blue__tr">
                <td class="informer6-blue__td">
                    <p class="informer6-blue__text-day-week">
                        <span class="informer6__text-font informer6__text-font-light"><?php echo $abstractData->getNameOfTheDate($time = date('d.m', time())); ?>,</span>
                    </p>
                    <p class="informer6__number-font"><?php echo $abstractData->getDate('d.m.Y') ?></p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>