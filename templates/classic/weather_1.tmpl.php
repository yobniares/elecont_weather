<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }

    $time = date('H:i', time());

?>

<?php if (!empty($_REQUEST['weather_tip'])) {?>
    <style>

        /* Font family */
        <?php
        if(isset($_REQUEST['font_family']) && $_REQUEST['font_family'] !=='') {?>
        .informer1__text-font,
        .informer1__number-font {
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php } ?>

        /* Background */
        <?php if ($_REQUEST['clear']=='1'){?>
        .informer1-blue__background{
            background-color:transparent;
            border: none;
        }
        :root{
            --dark-blue:transparent;
        }
        <?php }?>
        <?php

        if(isset($_REQUEST['color_fon']) && $_REQUEST['color_fon'] !=='#') {?>
        .informer1-blue__background-1 {
            background:<?php echo $_REQUEST['color_fon'] ?>
        }
        :root {
            --light-blue: <?php echo $_REQUEST['color_fon'] ?>;
            --light-blue2: <?php echo $_REQUEST['color_fon'] ?>;
        }
        /* .informer1-blue__tr:nth-child(1) .informer1-blue__td:nth-child(1) {
            background-color: <?php echo $_REQUEST['color_fon'] ?>;
        } */
        <?php } ?>

        /* Text color */
        <?php
        $text_color = "white";
        if(isset($_REQUEST['font_text']) && $_REQUEST['font_text'] !=='#') {
            $text_color = $_REQUEST['font_text'];
            ?>
        .informer1-blue {
            color: <?php echo  $_REQUEST['font_text'] ?>;
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php } ?>

        /* Temperature color and font */
        <?php
        if(isset($_REQUEST['font_tempo']) && $_REQUEST['font_tempo'] !=='#') {?>
        .informer1__temperature-big,
        .informer1__temperature-middle,
        .temp {
            color: <?php echo  $_REQUEST['font_tempo'] ?>;
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php } ?>

    </style>
<?php }?>

<!-- фильтр для иконок в img -->
<svg style="position: absolute; height: 0; width: 0;" xmlns="http://www.w3.org/2000/svg" width="0" height="0">
  <defs>
    <filter id="recolourFilter" filterUnits="userSpaceOnUse">
      <feFlood flood-color="<?php echo $text_color?>" result="flood" />
      <feComposite in="flood" in2="SourceAlpha" operator="in" />
    </filter>
  </defs>
</svg>
<!-- Спрайт -->
<svg width="0" height="0" class="hidden">
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17" id="wind-route">
        <path d="M16.5973 4.00005L10.2222 2.4063C10.2147 2.40444 10.2067 2.40497 10.1993 2.40337C10.1757 2.39859 10.1518 2.39567 10.1276 2.39408C10.1143 2.39302 10.1013 2.39195 10.088 2.39195C10.0609 2.39248 10.0341 2.39567 10.0073 2.39992C9.99717 2.40152 9.98708 2.40205 9.97752 2.40444C9.94272 2.41214 9.90845 2.42303 9.87525 2.43817C9.87339 2.43923 9.87153 2.4395 9.86967 2.4403C9.83674 2.4557 9.80486 2.4743 9.77485 2.49687L7.43738 4.25V2.54362C7.90567 2.33803 8.23425 1.87133 8.23425 1.32812C8.23425 0.595797 7.63846 0 6.90614 0C6.17383 0 5.57804 0.595797 5.57804 1.32812C5.57804 1.87133 5.90661 2.3383 6.3749 2.54362V15.9375H0.531242C0.237996 15.9375 0 16.1755 0 16.4688C0 16.762 0.237996 17 0.531242 17H13.281C13.5743 17 13.8123 16.762 13.8123 16.4688C13.8123 16.1755 13.5743 15.9375 13.281 15.9375H7.43738V6.375L9.77485 8.12813C9.80353 8.14964 9.83567 8.16133 9.86675 8.1762C9.88641 8.1855 9.90394 8.19958 9.92466 8.20648C9.97964 8.22481 10.0365 8.23437 10.0933 8.23437C10.0933 8.23437 10.0933 8.23437 10.0936 8.23437C10.0952 8.23437 10.0968 8.23384 10.0986 8.23384C10.1387 8.23331 10.1786 8.22827 10.2176 8.21897C10.2192 8.2187 10.2208 8.2187 10.2224 8.21844L16.5976 6.62469C16.834 6.56545 17 6.35322 17 6.10937V4.51562C16.9997 4.27151 16.8337 4.05902 16.5973 4.00005ZM9.56235 6.64036L7.79146 5.31223L9.56235 3.98411V6.64036ZM6.90614 1.06223C7.0525 1.06223 7.17176 1.18123 7.17176 1.32786C7.17176 1.47448 7.0525 1.59348 6.90614 1.59348C6.75979 1.59348 6.64052 1.47448 6.64052 1.32786C6.64052 1.18123 6.75979 1.06223 6.90614 1.06223ZM10.6248 3.60187L12.7498 4.13312V6.49108L10.6248 7.02233V3.60187ZM15.9373 5.6942L13.8123 6.22545V4.39875L15.9373 4.93V5.6942Z" fill="currentColor"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 24" id="speed-2">
        <path d="M0.845618 7.16326H16.5263C16.6242 7.17119 16.7179 7.1928 16.8173 7.1928C18.8031 7.1928 20.413 5.58295 20.413 3.5964C20.413 1.60984 18.8031 0 16.8173 0C14.8307 0 13.2209 1.60984 13.2209 3.5964C13.2209 4.28643 13.4247 4.92389 13.7618 5.47131H0.845618C0.378871 5.47131 0 5.85018 0 6.31765C0 6.78511 0.378871 7.16326 0.845618 7.16326Z" fill="currentColor"></path>
        <path d="M21.5415 15.8507C21.517 15.8493 21.4962 15.8363 21.4709 15.8363H1.3749C0.908157 15.8363 0.528564 16.2152 0.528564 16.6826C0.528564 17.1501 0.907437 17.529 1.3749 17.529H18.3607C18.0136 18.0822 17.8047 18.7311 17.8047 19.4327C17.8047 21.4185 19.4145 23.0291 21.4011 23.0291C23.3869 23.0291 24.9968 21.4193 24.9968 19.4327C24.9968 17.4951 23.4604 15.9263 21.5415 15.8507Z" fill="currentColor"></path>
        <path d="M33.0002 9.06698C33.0002 7.08115 31.3904 5.47058 29.4045 5.47058C27.418 5.47058 25.8081 7.08043 25.8081 9.06698C25.8081 9.76854 26.017 10.4175 26.3642 10.9707H0.91714C0.449673 10.9707 0.0708008 11.3496 0.0708008 11.817C0.0708008 12.2845 0.448953 12.6634 0.91714 12.6634H29.4744C29.4996 12.6634 29.5198 12.6511 29.545 12.649C31.4638 12.5733 33.0002 11.0046 33.0002 9.06698Z" fill="currentColor"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14" id="grade">
        <path d="M7.5 0C3.36435 0 0 3.13992 0 7C0 10.8601 3.36435 14 7.5 14C11.6357 14 15 10.8601 15 7C15 3.13992 11.6357 0 7.5 0ZM8.5193 7.67377L4.88292 9.37055L6.55417 6.12637L10.1176 4.62894L8.5193 7.67377Z" fill="currentColor"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 18" id="wet-2">
        <path d="M12 12.0864C12 15.3523 9.31221 18 5.99911 18C2.68601 18 0 15.3523 0 12.0864C0 8.82051 5.99911 0 5.99911 0C5.99911 0 12 8.82051 12 12.0864Z" fill="currentColor"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5 17" id="pressure">
        <path d="M3.58697 12.499V1.03036C3.58697 0.461327 3.10067 0 2.5 0C1.89933 0 1.41303 0.460976 1.41303 1.03036V12.499C0.57735 12.8821 0 13.6907 0 14.6302C0 15.9384 1.11917 17 2.5 17C3.88083 17 5 15.9388 5 14.6302C5 13.6911 4.42265 12.8821 3.58697 12.499Z" fill="currentColor"></path>
    </symbol>
</svg>
<div class="table-box">
    <div class="informer1-blue__background">
        <div class="informer1-blue__background-4"></div>

        <?php if($_REQUEST['transpar']=='1'){?>
        <img class="informer1-blue__background-5"src="<?php echo $abstractData->getWeatherBackground($object,date('H', time()))?>" width="100%" height="100%" alt="">

        <?php for($i = 0;$i<3;$i++){ break;?>

                            <img class="informer1-blue__background-<? echo $i ?>" src="<?php echo $abstractData->getWeatherBackground($forecatsArr[$i],$abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H'))?>" width="100%" height="100%" alt="">

            <?php }?>

    <?php }?>

        <div class="informer1-blue__background-3"></div>
        

            <table class="informer1-blue">
                <tbody>
                <tr class="informer1-blue__tr">
                    <td class="informer1-blue__td">

                        <p class="informer1-blue__text-middle">
                            <span class="informer1__text-font"><?php echo $object['name'] ?></span>
                        </p>
                        <p class="informer1-blue__text-middle">
                            <span class="informer1__text-font"><?php echo $abstractData->getWeek() ?>,</span>
                        </p>
                        <p class="informer1-blue__text-middle">
                            <span class="informer1__number-font"><?php echo $abstractData->getDate('d.m.Y') ?></span>
                        </p>
                    </td>
                </tr>

                <tr class="informer1-blue__tr">
                    <td class="informer1-blue__td" >
                        <p class="informer1-blue__text-big">
                            <span class="informer1__text-font"><?php echo $abstractData->getWeatherDescription($object['icon']) ?></span>
                        </p>
                    </td>
                </tr>

                <tr class="informer1-blue__tr">
                    <td class="informer1-blue__td informer1-blue__td-icons" >
                        <div class="informer1-blue__box-big-icons">
                            <?php echo $abstractData->getWeatherIcon($object, 'informer1-blue__box-middle-icons-img', '', 'filter: url(#recolourFilter);', '80%', '100%') ?>
                        </div>
                    </td>
                </tr>

                <tr class="informer1-blue__tr">
                    <td class="informer1-blue__td">
                        <p class="informer1-blue__text-big">
                            <span class="informer1__number-font informer1__temperature-big"><?php echo $object['tempC'] ?>°</span>
                        </p>
                    </td>
                </tr>

                <tr class="informer1-blue__tr">
                    <td class="informer1-blue__td">
                        <p class="informer1-blue__text-big">
                            <span class="informer1__number-font informer1__temperature-middle"><?php echo $object['tempF'] ?>F</span></p>
                    </td>
                </tr>

                <tr class="informer1-blue__tr">
                    <td class="informer1-blue__td">
                        <div class="informer1-blue__td-flexbox-small">
                            <div class="informer1-blue__box-small-icons">
                                <svg viewBox="0 0 17 17">
                                    <use xlink:href="#wind-route" fill = "currentColor"/>
                                </svg>
                            </div>
                            <p class="informer1-blue__text-small">
                                <span class="informer1__text-font informer1__text-font-light"><?php echo $abstractData->getWwindDirection($object['wd']) ?></span>
                            </p>
                        </div>
                    </td>
                </tr>

                <tr class="informer1-blue__tr">
                    <td class="informer1-blue__td">
                        <div class="informer1-blue__td-flexbox-small">
                            <div class="informer1-blue__box-small-icons">
                                <svg viewBox="0 0 33 24">
                                    <use xlink:href="#speed-2" fill = "currentColor"/>
                                </svg>
                            </div>
                            <p class="informer1-blue__text-small">
                                <span class="informer1__number-font"><?php echo $abstractData->getMetersPerSecond($object['ws']) ?></span>
                                <span class="informer1__text-font informer1__text-font-light">м/c</span>
                            </p>
                        </div>
                    </td>
                </tr>

                <tr class="informer1-blue__tr">
                    <td class="informer1-blue__td">
                        <div class="informer1-blue__td-flexbox-small">
                            <div class="informer1-blue__box-small-icons">
                                <svg viewBox="0 0 15 14">
                                    <use xlink:href="#grade" fill = "currentColor"/>
                                </svg>
                            </div>
                            <p class="informer1-blue__text-small">
                                <span class="informer1__number-font"><?php echo $object['gmtMin'] ?>°</span>
                            </p>
                        </div>
                    </td>
                </tr>

                <tr class="informer1-blue__tr">
                    <td class="informer1-blue__td">
                        <div class="informer1-blue__td-flexbox-small">
                            <div class="informer1-blue__box-small-icons">
                                <svg viewBox="0 0 12 18">
                                    <use xlink:href="#wet-2" fill = "currentColor"/>
                                </svg>
                            </div>
                            <p class="informer1-blue__text-small">
                                <span class="informer1__text-font informer1__text-font-light">Влажность </span>
                                <span class="informer1__number-font"> <?php echo $object['rh'] ?>%</span>
                            </p>
                        </div>
                    </td>
                </tr>

                <tr class="informer1-blue__tr">
                    <td class="informer1-blue__td">
                        <div class="informer1-blue__td-flexbox-small">
                            <div class="informer1-blue__box-small-icons" >
                                <svg viewBox="0 0 5 17">
                                    <use xlink:href="#pressure" fill = "currentColor"/>
                                </svg>
                            </div>
                            <p class="informer1-blue__text-small">
                                <span class="informer1__text-font informer1__text-font-light">Давление:</span>
                                <span class="informer1__number-font"><?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?></span>
                                <span class="informer1__text-font informer1__text-font-light">мм.рт.ст.</span>
                            </p>
                        </div>
                    </td>
                </tr>

                <?php for ($i=0; $i < 3; $i++) {
                    if ($i == 0) {
                        $className = 'morning';
                    }
                    if ($i == 1) {
                        $className = 'day';
                    }
                    if ($i == 2) {
                        $className = 'evening';
                    }
                    ?>
                    <?php 
                        $style = "";
                        if($_REQUEST['transpar']=='1'){
                            $style = "background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),url(".$abstractData->getWeatherBackground($forecatsArr[$i],$abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H')).");
                            background-position: center;
                            background-repeat: no-repeat;
                            background-size: cover;
                            ";
                        }
                        ?>

                    <tr class="informer1-blue__tr">
                        <td class="informer1-blue__td" style="<?php echo $style?>">
                            <p class="informer1-blue__text-big">
                                <span class="informer1__text-font"><?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?></span>
                            </p>
                            <div class="informer1-blue__td-flexbox-middle">
                                <div class="informer1-blue__box-middle-icons">
                                    <?php echo $abstractData->getWeatherIcon($forecatsArr[$i], 'informer1-blue__box-middle-icons-img', '', 'filter: url(#recolourFilter);', '60%', '100%') ?>
                                </div>
                            </div>
                            <p class="informer1-blue__text-middle">
                                <span class="informer1__number-font temp"><?php echo $forecatsArr[$i]['tempC']; ?>°</span>
                            </p>
                        </td>
                    </tr>
                    <?php
                }?>


                </tbody>
            </table>
        </div>
    </div>
</div>
