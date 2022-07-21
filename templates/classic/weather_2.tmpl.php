<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
    ?>

<body>

<section class="view-2-classic-container">

    <div class="view-2-classic">
        <div class="view-2-classic-content">
            <div class="view-2-classic-sunrise-sunset-time">
                <div class="view-2-classic-sunrisetime">
                    Восход: <?php echo $abstractData->getGmtTime($object['gmtMin'], $object['sr']); ?></span>
                </div>
                <div class="view-2-classic-sunsettime">
                    Закат: <span class="time"><?php echo $abstractData->getGmtTime($object['gmtMin'], $object['ss']); ?></span>
                </div>
            </div>
            <div class="view-2-classic-content-dayofweek">
                <?php echo $abstractData->getWeek() ?>
            </div>

            <ul class="view-2-classic-daysweek-1">
                <li class="view-2-classic-monday-1">
                    <div class="view-2-classic-weekday">
                        ПН
                    </div>
                    <div class="view-2-classic-daynumber">
                        Июнь 22
                    </div>
                    <div class="view-2-classic-dayimage">
                        <img src="icons/sunny.svg">
                    </div>
                    <div class="view-2-classic-temp view-2-classic-temp-mon">
                        +15°
                    </div>
                </li>
                <li class="view-2-classic-tuesday-1">

                    <div class="view-2-classic-weekday">
                        ВТ
                    </div>
                    <div class="view-2-classic-daynumber">
                        Июнь 23
                    </div>
                    <div class="view-2-classic-dayimage">
                        <img src="icons/windy.svg">
                    </div>
                    <div class="view-2-classic-temp view-2-classic-temp-tue">
                        +13°
                    </div>
                </li>
                <li class="view-2-classic-wednesday-1">

                    <div class="view-2-classic-weekday">
                        СР
                    </div>
                    <div class="view-2-classic-daynumber">
                        Июнь 24
                    </div>
                    <div class="view-2-classic-dayimage">
                        <img src="icons/sunny-cloudy.svg">
                    </div>
                    <div class="view-2-classic-temp view-2-classic-temp-wed">
                        +15°
                    </div>

                </li>
                <li class="view-2-classic-thursday-1">

                    <div class="view-2-classic-weekday">
                        ЧТ
                    </div>
                    <div class="view-2-classic-daynumber">
                        Июнь 25
                    </div>
                    <div class="view-2-classic-dayimage">
                        <img src="icons/cloudy.svg">
                    </div>
                    <div class="view-2-classic-temp view-2-classic-temp-thu">
                        +17°
                    </div>
                </li>
                <li class="view-2-classic-friday-1">

                    <div class="view-2-classic-weekday">
                        ПТ
                    </div>
                    <div class="view-2-classic-daynumber">
                        Июнь 26
                    </div>
                    <div class="view-2-classic-dayimage">
                        <img src="icons/rainy.svg">
                    </div>
                    <div class="view-2-classic-temp view-2-classic-temp-fri">
                        +10°
                    </div>
                </li>
                <li class="view-2-classic-saturday-1">

                    <div class="view-2-classic-weekday">
                        СБ
                    </div>
                    <div class="view-2-classic-daynumber">
                        Июнь 27
                    </div>
                    <div class="view-2-classic-dayimage">
                        <img src="icons/night.svg">
                    </div>
                </li>
                <div class="view-2-classic-temp view-2-classic-temp-sat">
                    +25°
                </div>



                <div class="main-information-1">
                    <div class="view-2-classic-timegmt">
                        <?php echo $abstractData->getDate('H:i') ?>
                    </div>
                    <div class="view-2-classic-gmt">
                        GMT<?php echo '+' .$object['gmtMin']/60 ?>
                    </div>
                    <div class="main-information-inside">
                        <div class="view-2-classic-selectedcity">
                            <?php echo $object['name'] ?>
                        </div>
                        <div class="view-2-classic-selectedcountry">
                            <?php echo $object['country'] ?>
                        </div>
                        <div class="view-2-classic-selectedweather">
                            <p><?php echo $object['tempC'] ?>°</p>
                        </div>
                        <div class="view-2-classic-params">
                            <ul>
                                <li class="view-2-classic-typeofwind">
                                    <?php echo $abstractData->getWwindDirection($object['wd']) ?>
                                </li>
                                <li class="view-2-classic-windspeed">
                                    <?php echo $abstractData->getMetersPerSecond($object['ws']) ?> м/с
                                </li>
                                <li class="view-2-classic-degrees">
                                    <?php echo $object['gmtMin'] ?>°
                                </li>
                            </ul>
                            <ul>
                                <li class="view-2-classic-wet">
                                    <?php echo $object['rh'] ?>%
                                </li>
                                <li class="view-2-classic-pressure">
                                    <?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?> мм рт.ст.
                                </li>
                                <li class="view-2-classic-dpf">
                                    dpF <?php echo $object['dpF'] ?>°
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="view-2-classic-population">
                        <?php echo $abstractData->getPopulate((string)$object['pop']) ?> жителей
                        <!--4.991 млн жителей-->
                    </div>
                </div>
            </ul>
        </div>
    </div>

</section>

</body>