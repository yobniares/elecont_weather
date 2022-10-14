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
        .informer3__text-font,
        .informer3__number-font {
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php } ?>

        /* Background */
        <?php
        if(isset($_REQUEST['color_fon']) && $_REQUEST['color_fon'] !=='#') {?>
        .informer3-neon__background-1 {
            background:<?php echo $_REQUEST['color_fon'] ?>;
            border-radius: 30px;
        }
        :root {
            --neon: <?php echo $_REQUEST['color_fon'] ?>;
        }
        .informer3-neon__tr:nth-child(1) .informer1-blue__td:nth-child(1) {
            background-color: <?php echo $_REQUEST['color_fon'] ?>;
        }
        <?php } ?>

        /* Text color */
        <?php
        if(isset($_REQUEST['font_text']) && $_REQUEST['font_text'] !=='#') {?>
        .informer3-neon {
            color: <?php echo  $_REQUEST['font_text'] ?>;
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php } ?>

        /* Temperature color and font */
        <?php
        if(isset($_REQUEST['font_tempo']) && $_REQUEST['font_tempo'] !=='#') {?>
        .informer3-neon__temperature {
            color: <?php echo  $_REQUEST['font_tempo'] ?>;
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php } ?>

    </style>
<?php }?>

<svg width="0" height="0" class="hidden">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17" id="wind-route">
        <path d="M16.5973 4.00005L10.2222 2.4063C10.2147 2.40444 10.2067 2.40497 10.1993 2.40337C10.1757 2.39859 10.1518 2.39567 10.1276 2.39408C10.1143 2.39302 10.1013 2.39195 10.088 2.39195C10.0609 2.39248 10.0341 2.39567 10.0073 2.39992C9.99717 2.40152 9.98708 2.40205 9.97752 2.40444C9.94272 2.41214 9.90845 2.42303 9.87525 2.43817C9.87339 2.43923 9.87153 2.4395 9.86967 2.4403C9.83674 2.4557 9.80486 2.4743 9.77485 2.49687L7.43738 4.25V2.54362C7.90567 2.33803 8.23425 1.87133 8.23425 1.32812C8.23425 0.595797 7.63846 0 6.90614 0C6.17383 0 5.57804 0.595797 5.57804 1.32812C5.57804 1.87133 5.90661 2.3383 6.3749 2.54362V15.9375H0.531242C0.237996 15.9375 0 16.1755 0 16.4688C0 16.762 0.237996 17 0.531242 17H13.281C13.5743 17 13.8123 16.762 13.8123 16.4688C13.8123 16.1755 13.5743 15.9375 13.281 15.9375H7.43738V6.375L9.77485 8.12813C9.80353 8.14964 9.83567 8.16133 9.86675 8.1762C9.88641 8.1855 9.90394 8.19958 9.92466 8.20648C9.97964 8.22481 10.0365 8.23437 10.0933 8.23437C10.0933 8.23437 10.0933 8.23437 10.0936 8.23437C10.0952 8.23437 10.0968 8.23384 10.0986 8.23384C10.1387 8.23331 10.1786 8.22827 10.2176 8.21897C10.2192 8.2187 10.2208 8.2187 10.2224 8.21844L16.5976 6.62469C16.834 6.56545 17 6.35322 17 6.10937V4.51562C16.9997 4.27151 16.8337 4.05902 16.5973 4.00005ZM9.56235 6.64036L7.79146 5.31223L9.56235 3.98411V6.64036ZM6.90614 1.06223C7.0525 1.06223 7.17176 1.18123 7.17176 1.32786C7.17176 1.47448 7.0525 1.59348 6.90614 1.59348C6.75979 1.59348 6.64052 1.47448 6.64052 1.32786C6.64052 1.18123 6.75979 1.06223 6.90614 1.06223ZM10.6248 3.60187L12.7498 4.13312V6.49108L10.6248 7.02233V3.60187ZM15.9373 5.6942L13.8123 6.22545V4.39875L15.9373 4.93V5.6942Z" ></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 14" id="speed">
        <path d="M13.3309 4.14606C13.6068 3.71648 13.7541 3.21698 13.7556 2.70643C13.7556 2.62725 13.7556 2.55526 13.7556 2.48327C13.6958 1.82294 13.3913 1.20883 12.9018 0.761608C12.4123 0.314389 11.7733 0.0664062 11.1102 0.0664062C10.4472 0.0664062 9.80814 0.314389 9.31865 0.761608C8.82915 1.20883 8.52462 1.82294 8.4649 2.48327H9.667C9.72545 2.14962 9.89967 1.84726 10.159 1.62938C10.4184 1.4115 10.7463 1.29207 11.085 1.29207C11.4238 1.29207 11.7517 1.4115 12.011 1.62938C12.2704 1.84726 12.4446 2.14962 12.5031 2.48327C12.5105 2.55747 12.5105 2.63223 12.5031 2.70643C12.5031 3.08824 12.3514 3.45442 12.0814 3.7244C11.8114 3.99439 11.4453 4.14606 11.0634 4.14606H2.20972V5.36254H11.1066C11.5491 5.35993 11.9841 5.24739 12.3723 5.03505C12.7605 4.82272 13.0899 4.51724 13.3309 4.14606Z" ></path>
        <path d="M13.6477 8.27795H4.79395V9.49444H13.6477C14.0295 9.49444 14.3957 9.64612 14.6656 9.9161C14.9356 10.1861 15.0873 10.5523 15.0873 10.9341C15.0948 11.0083 15.0948 11.083 15.0873 11.1572C15.0289 11.4909 14.8546 11.7932 14.5953 12.0111C14.3359 12.229 14.008 12.3484 13.6693 12.3484C13.3305 12.3484 13.0026 12.229 12.7433 12.0111C12.4839 11.7932 12.3097 11.4909 12.2512 11.1572H11.0276C11.0873 11.8176 11.3918 12.4317 11.8813 12.8789C12.3708 13.3261 13.0098 13.5741 13.6729 13.5741C14.3359 13.5741 14.9749 13.3261 15.4644 12.8789C15.9539 12.4317 16.2585 11.8176 16.3182 11.1572C16.3182 11.0852 16.3182 11.0061 16.3182 10.9341C16.3182 10.2296 16.0383 9.55404 15.5402 9.05592C15.0421 8.5578 14.3665 8.27795 13.6621 8.27795H13.6477Z" ></path>
        <path d="M18.3049 0.0144002C17.7428 0.014505 17.1881 0.142432 16.6827 0.38851C16.1773 0.634587 15.7346 0.992367 15.3878 1.43479C15.0411 1.87721 14.7995 2.39269 14.6814 2.94223C14.5632 3.49178 14.5716 4.061 14.7058 4.60683H15.9871C15.7965 4.11372 15.7688 3.57255 15.9079 3.06254C16.0471 2.55252 16.3458 2.10044 16.7604 1.77241C17.1749 1.44439 17.6836 1.25766 18.212 1.23955C18.7403 1.22143 19.2606 1.37288 19.6967 1.67175C20.1327 1.97061 20.4617 2.4012 20.6354 2.90049C20.8092 3.39977 20.8186 3.94155 20.6622 4.44656C20.5059 4.95156 20.192 5.39328 19.7665 5.70706C19.3411 6.02084 18.8264 6.19023 18.2977 6.19042H0V7.39251H18.3049C18.8207 7.39284 19.3307 7.2847 19.8019 7.07512C20.2732 6.86555 20.695 6.55922 21.0402 6.17602C21.5214 5.64648 21.8384 4.98854 21.9526 4.2822C22.0669 3.57586 21.9734 2.85154 21.6837 2.19731C21.3939 1.54308 20.9204 0.987132 20.3205 0.597043C19.7207 0.206954 19.0204 -0.00046937 18.3049 7.97527e-07V0.0144002Z" ></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14" id="grade">
        <path d="M7.5 0C3.36435 0 0 3.13992 0 7C0 10.8601 3.36435 14 7.5 14C11.6357 14 15 10.8601 15 7C15 3.13992 11.6357 0 7.5 0ZM8.5193 7.67377L4.88292 9.37055L6.55417 6.12637L10.1176 4.62894L8.5193 7.67377Z" ></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13" id="wet">
        <path d="M8 8.72906C8 11.0878 6.20814 13 3.99941 13C1.79067 13 0 11.0878 0 8.72906C0 6.37037 3.99941 0 3.99941 0C3.99941 0 8 6.37037 8 8.72906Z" ></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5 17" id="pressure">
        <path d="M3.58697 12.499V1.03036C3.58697 0.461327 3.10067 0 2.5 0C1.89933 0 1.41303 0.460976 1.41303 1.03036V12.499C0.57735 12.8821 0 13.6907 0 14.6302C0 15.9384 1.11917 17 2.5 17C3.88083 17 5 15.9388 5 14.6302C5 13.6911 4.42265 12.8821 3.58697 12.499Z" ></path>
    </symbol>
</svg>
<div class="informer3-table-box">
    <div class="informer3-neon__background">
        <?php if($_REQUEST['clear']=='0'){?>
        <div class="informer3-neon__background-1"></div>
        <?php }?>
        <div class="informer3-neon__background-2"></div>

        <?php if($_REQUEST['transpar']=='1'){?>
        <img class="informer3-neon__background-3"src="<?php echo $abstractData->getWeatherBackground($object,date('H', time()))?>" width="100%" height="100%" alt="">

        <?php }?>


        <table class="informer3-neon">
            <tr class="informer3-neon__tr">
                <td class="informer3-neon__td" colspan="5">
                    <p class="informer3-neon__text-middle">
                        <span class="informer3__text-font"><?php echo $object['name'] ?></span>
                    </p>
                </td>
                <td class="informer3-neon__td"  colspan="1">
                    <p class="informer3-neon__text-big">
                        <span class="informer3__text-font"><?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?></span>
                    </p>
                </td>
            </tr>
            <tr class="informer3-neon__tr">
                <td class="informer3-neon__td" colspan="2">
                    <p class="informer3-neon__text-big">
                        <span class="informer3__number-font informer2__number-font-bold"><?php echo $abstractData->getDate('d.m.Y') ?></span>
                    </p>
                    <p class="informer3-neon__text-big">
                        <span class="informer3__number-font informer2__number-font-bold informer3-neon__temperature temp shine-neon"> <?php echo $object['tempC']; ?>°</span>
                    </p>
                </td>
                <td class="informer3-neon__td" colspan="2">
                    <p class="informer3-neon__text-middle">
                        <span class="informer3__text-font"><?php echo $abstractData->getWeek() ?></span>
                        <span class="informer3__number-font informer3__number-font-bold informer3-neon__temperature shine-neon"><?php echo $abstractData->getDate('H:i') ?></span>
                    </p>
                </td>
                <td class="informer3-neon__td" colspan="2">
                    <div class="informer3-neon__box-big-icons">
                        <?php echo $abstractData->getWeatherIcon($object, 'informer3-neon__box-big-icons-img', '', '', '100%', '100%') ?>
                    </div>
                </td>
            </tr>
            <tr class="informer3-neon__tr">
                <td class="informer3-neon__td" colspan="2">
                    <div class="informer3-neon__td-flexbox-small">
                        <div class="informer3-neon__box-small-icons" style="min-width: 15%;">
                            <svg width="50%" height="50%">
                                <use xlink:href="#wind-route"/>
                            </svg>
                        </div>
                        <p class="informer3-neon__text-small">
                            <span class="informer3__text-font"><?php echo $abstractData->getWwindDirection($object['wd']) ?></span>
                        </p>
                    </div>
                </td>
                <td class="informer3-neon__td">
                    <div class="informer3-neon__td-flexbox-small">
                        <div class="informer3-neon__box-small-icons">
                            <svg width="50%" height="50%">
                                <use xlink:href="#speed"/>
                            </svg>
                        </div>
                        <p class="informer3-neon__text-small">
                            <span class="informer3__number-font"><?php echo $abstractData->getMetersPerSecond($object['ws']) ?></span>
                            <span class="informer3__text-font">м/с</span>
                        </p>
                    </div>
                </td>
                <td class="informer3-neon__td">
                    <div class="informer3-neon__td-flexbox-small">
                        <div class="informer3-neon__box-small-icons">
                            <svg width="35%" height="35%">
                                <use xlink:href="#grade"/>
                            </svg>
                        </div>
                        <p class="informer3-neon__text-small">
                            <span class="informer3__number-font"><?php echo $object['gmtMin'] ?>°</span>
                        </p>
                    </div>
                </td>
                <td class="informer3-neon__td">
                    <div class="informer3-neon__td-flexbox-small">
                        <div class="informer3-neon__box-small-icons">
                            <svg width="20%" height="20%">
                                <use xlink:href="#wet"/>
                            </svg>
                        </div>
                        <p class="informer3-neon__text-small">
                            <span class="informer3__text-font">Влажность:</span>
                            <span class="informer3__number-font"><?php echo $object['rh'] ?><span>
                            <span>%</span>
                        </p>
                    </div>
                </td>
                <td class="informer3-neon__td">
                    <div class="informer3-neon__td-flexbox-small">
                        <div class="informer3-neon__box-small-icons">
                            <svg width="12%" height="12%">
                                <use xlink:href="#pressure"/>
                            </svg>
                        </div>
                        <p class="informer3-neon__text-small">
                            <span class="informer3__number-font"><?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?></span>
                            <span class="informer3__text-font">мм рт. ст.</span>
                        </p>
                    </div>
                </td>
            </tr>
            <?php
                for ($i=0; $i < 3; $i++) {?>
            <tr class="informer3-neon__tr">
                <td colspan="2" class="informer3-neon__td" >
                    <p class="informer3-neon__text-big">
                        <span class="informer3__text-font"> <?php echo $abstractData->getNameOfTheDate($forecatsArr[$i]['dt']); ?></span>
                    </p>
                    <p class="informer3-neon__text-big">
                        <span class="informer3__number-font informer2__number-font-bold"><?php echo $abstractData->getDateFromString($forecatsArr[$i]['dt'], 'd.m'); ?></span>
                    </p>
                </td>
                <td colspan="2" class="informer3-neon__td">
                    <p class="informer3-neon__text-middle">
                        <span class="informer3__number-font informer3-neon__temperature temp"><?php echo $forecatsArr[$i]['tempC']; ?>°</span>
                    </p>
                </td>
                <td colspan="2" class="informer3-neon__td">
                    <div class="informer3-neon__box-middle-icons">
                        <?php echo $abstractData->getWeatherIcon($forecatsArr[$i], 'informer3-neon__box-middle-icons-img', '', '', '100%', '100%') ?>
                    </div>
                </td>
            </tr>
            <?php
                }?>
            </tbody>
        </table>
    </div>
</div>