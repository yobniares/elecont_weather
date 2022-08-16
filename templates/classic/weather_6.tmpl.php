<?php
foreach ($objects['0'] as $forecast) {
    $forecatsArr[] = $forecast;
}

if ($_REQUEST['transpar'] == '1') {?>
    <style>
        .view-6-classic-type-2 {
            background-image: url("assets/classic/bg/informer-6/hours.svg"), url("<?php echo $abstractData->getBgWeatherIconSrc($object, 'png', '') ?>");
            background-size:100% 100%;
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


<div class="view-6-classic-circle" id="clock">
    <li id="sec"></li>
    <li id="hour"></li>
    <li id="min"></li>
</div>

<div class="informer6-table-box">
    <div class="informer6-blue__background">
        <div class="informer6-blue__background-1"></div>
        <table class="informer6-blue">
            <tbody>
            <tr class="informer6-blue__tr">
                <td class="informer6-blue__td">
                    <div class="informer6-blue__box-middle-icons">
                        <?php echo $abstractData->getWeatherIcon($object, 'informer6-blue__box-middle-icons-img', '', '', '100%', '100%') ?>
                        <div class="view-6-classic-arrow-small">
                        </div>
                        <div class="view-6-classic-arrow-big">
                        </div>
                    </div>
                </td>
            </tr>

            <tr class="informer6-blue__tr">
                <td class="informer6-blue__td">
                    <div class="informer6-blue__box-middle-icons">
                        <!--<img width="100%" height="100%" class="informer6-blue__box-middle-icons-img" src="" alt="Нет иконки стрелок">-->
                    </div>
                </td>
            </tr>

            <tr class="informer6-blue__tr">
                <td class="informer6-blue__td">
                    <span class="informer6-blue__text-temp informer6__number-font"><?php echo $object['tempC']; ?>°C</span>
                </td>
            </tr>
            <tr class="informer6-blue__tr">
                <td class="informer6-blue__td">
                    <p class="informer6-blue__text-day-week">
                        <span class="informer6__text-font informer6__text-font-light"><?php echo $abstractData->getNameOfTheDate($time = date('d.m', time())); ?>,</span>
                    </p>
                    <p class="informer6-blue__text-day">
                        <span class="informer6__number-font"><?php echo $abstractData->getDate('d.m.Y') ?></span>
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>