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
        .informer2__text-font,
        .informer2__number-font {
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php } ?>

        /* Background */
        <?php
        if(isset($_REQUEST['color_fon']) && $_REQUEST['color_fon'] !=='#') {?>
        ._informer2-blue__background-1 {
            background:<?php echo $_REQUEST['color_fon'] ?>
        }
        :root {
            --light-blue: <?php echo $_REQUEST['color_fon'] ?>;
            --light-blue2: <?php echo $_REQUEST['color_fon'] ?>;
        }
        .informer2-blue__tr:nth-child(1) .informer1-blue__td:nth-child(1) {
            background-color: <?php echo $_REQUEST['color_fon'] ?>;
        }
        <?php } ?>

        /* Text color */
        <?php
        if(isset($_REQUEST['font_text']) && $_REQUEST['font_text'] !=='#') {?>
        .informer2-blue {
            color: <?php echo  $_REQUEST['font_text'] ?>;
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php } ?>

        /* Temperature color and font */
        <?php
        if(isset($_REQUEST['font_tempo']) && $_REQUEST['font_tempo'] !=='#') {?>
        .informer2__temperature-big,
        .informer2__temperature-middle,
        .temp {
            color: <?php echo  $_REQUEST['font_tempo'] ?>;
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php } ?>
    </style>
<?php }?>

<svg width="0" height="0" class="hidden">
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17" id="wind-route">
        <path d="M16.5973 4.00005L10.2222 2.4063C10.2147 2.40444 10.2067 2.40497 10.1993 2.40337C10.1757 2.39859 10.1518 2.39567 10.1276 2.39408C10.1143 2.39302 10.1013 2.39195 10.088 2.39195C10.0609 2.39248 10.0341 2.39567 10.0073 2.39992C9.99717 2.40152 9.98708 2.40205 9.97752 2.40444C9.94272 2.41214 9.90845 2.42303 9.87525 2.43817C9.87339 2.43923 9.87153 2.4395 9.86967 2.4403C9.83674 2.4557 9.80486 2.4743 9.77485 2.49687L7.43738 4.25V2.54362C7.90567 2.33803 8.23425 1.87133 8.23425 1.32812C8.23425 0.595797 7.63846 0 6.90614 0C6.17383 0 5.57804 0.595797 5.57804 1.32812C5.57804 1.87133 5.90661 2.3383 6.3749 2.54362V15.9375H0.531242C0.237996 15.9375 0 16.1755 0 16.4688C0 16.762 0.237996 17 0.531242 17H13.281C13.5743 17 13.8123 16.762 13.8123 16.4688C13.8123 16.1755 13.5743 15.9375 13.281 15.9375H7.43738V6.375L9.77485 8.12813C9.80353 8.14964 9.83567 8.16133 9.86675 8.1762C9.88641 8.1855 9.90394 8.19958 9.92466 8.20648C9.97964 8.22481 10.0365 8.23437 10.0933 8.23437C10.0933 8.23437 10.0933 8.23437 10.0936 8.23437C10.0952 8.23437 10.0968 8.23384 10.0986 8.23384C10.1387 8.23331 10.1786 8.22827 10.2176 8.21897C10.2192 8.2187 10.2208 8.2187 10.2224 8.21844L16.5976 6.62469C16.834 6.56545 17 6.35322 17 6.10937V4.51562C16.9997 4.27151 16.8337 4.05902 16.5973 4.00005ZM9.56235 6.64036L7.79146 5.31223L9.56235 3.98411V6.64036ZM6.90614 1.06223C7.0525 1.06223 7.17176 1.18123 7.17176 1.32786C7.17176 1.47448 7.0525 1.59348 6.90614 1.59348C6.75979 1.59348 6.64052 1.47448 6.64052 1.32786C6.64052 1.18123 6.75979 1.06223 6.90614 1.06223ZM10.6248 3.60187L12.7498 4.13312V6.49108L10.6248 7.02233V3.60187ZM15.9373 5.6942L13.8123 6.22545V4.39875L15.9373 4.93V5.6942Z" fill="white"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5 17" id="pressure">
        <path d="M3.58697 12.499V1.03036C3.58697 0.461327 3.10067 0 2.5 0C1.89933 0 1.41303 0.460976 1.41303 1.03036V12.499C0.57735 12.8821 0 13.6907 0 14.6302C0 15.9384 1.11917 17 2.5 17C3.88083 17 5 15.9388 5 14.6302C5 13.6911 4.42265 12.8821 3.58697 12.499Z" fill="white"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13" id="wet">
        <path d="M8 8.72906C8 11.0878 6.20814 13 3.99941 13C1.79067 13 0 11.0878 0 8.72906C0 6.37037 3.99941 0 3.99941 0C3.99941 0 8 6.37037 8 8.72906Z" fill="white"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 12" id="dpf">
        <path d="M7.78382 0C5.20662 1.81161 2.87608 3.89656 0.841624 6.21061C0.427824 6.80593 0.160256 7.47553 0.0572087 8.17369C-0.0926411 8.91768 0.0541349 9.68594 0.471141 10.3402C0.888147 10.9945 1.54799 11.4919 2.33203 11.743C4.21465 12.4569 6.68561 11.743 7.5877 8.85186C7.80983 7.81678 7.92797 6.76548 7.94068 5.71091C8.13679 2.92685 7.78382 0 7.78382 0ZM2.33203 5.99641C2.80268 5.35393 3.62635 5.06841 4.097 5.35396C4.56766 5.6395 4.56766 6.42477 4.097 7.10294C3.62635 7.78111 2.80268 8.03093 2.33203 7.74539C1.86137 7.45984 1.86137 6.67457 2.33203 5.99641Z" fill="white"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="degree-b">
        <path d="M8 0C3.58864 0 0 3.58848 0 8C0 12.4115 3.58864 16 8 16C12.4114 16 16 12.4115 16 8C16 3.58848 12.4114 0 8 0ZM9.08725 8.77002L5.20845 10.7092L6.99111 7.00157L10.7921 5.29021L9.08725 8.77002Z" fill="#ffffff"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 24" id="speed-2">
        <path d="M0.845618 7.16326H16.5263C16.6242 7.17119 16.7179 7.1928 16.8173 7.1928C18.8031 7.1928 20.413 5.58295 20.413 3.5964C20.413 1.60984 18.8031 0 16.8173 0C14.8307 0 13.2209 1.60984 13.2209 3.5964C13.2209 4.28643 13.4247 4.92389 13.7618 5.47131H0.845618C0.378871 5.47131 0 5.85018 0 6.31765C0 6.78511 0.378871 7.16326 0.845618 7.16326Z" fill="white"></path>
        <path d="M21.5415 15.8507C21.517 15.8493 21.4962 15.8363 21.4709 15.8363H1.3749C0.908157 15.8363 0.528564 16.2152 0.528564 16.6826C0.528564 17.1501 0.907437 17.529 1.3749 17.529H18.3607C18.0136 18.0822 17.8047 18.7311 17.8047 19.4327C17.8047 21.4185 19.4145 23.0291 21.4011 23.0291C23.3869 23.0291 24.9968 21.4193 24.9968 19.4327C24.9968 17.4951 23.4604 15.9263 21.5415 15.8507Z" fill="white"></path>
        <path d="M33.0002 9.06698C33.0002 7.08115 31.3904 5.47058 29.4045 5.47058C27.418 5.47058 25.8081 7.08043 25.8081 9.06698C25.8081 9.76854 26.017 10.4175 26.3642 10.9707H0.91714C0.449673 10.9707 0.0708008 11.3496 0.0708008 11.817C0.0708008 12.2845 0.448953 12.6634 0.91714 12.6634H29.4744C29.4996 12.6634 29.5198 12.6511 29.545 12.649C31.4638 12.5733 33.0002 11.0046 33.0002 9.06698Z" fill="white"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 31" id="sunrise">
        <path d="M33.3743 22.09H31.3743C31.3743 16.412 26.7553 11.792 21.0773 11.792C15.3993 11.792 10.7793 16.412 10.7793 22.09H8.7793C8.7793 15.309 14.2963 9.79199 21.0773 9.79199C27.8573 9.79199 33.3743 15.308 33.3743 22.09Z" fill="white"></path>
        <path d="M22.0771 0H20.0771V7.403H22.0771V0Z" fill="white"></path>
        <path d="M12.1148 10.7005L6.88013 5.46582L5.46593 6.88002L10.7006 12.1147L12.1148 10.7005Z" fill="white"></path>
        <path d="M36.6869 6.87904L35.2727 5.46484L30.038 10.6995L31.4522 12.1137L36.6869 6.87904Z" fill="white"></path>
        <path d="M42.153 20.0767H34.75V22.0767H42.153V20.0767Z" fill="white"></path>
        <path d="M7.402 20.0767H0V22.0767H7.402V20.0767Z" fill="white"></path>
        <path d="M33.3743 24.5908H8.7793V26.5908H33.3743V24.5908Z" fill="white"></path>
        <path d="M33.3743 28.75H8.7793V30.75H33.3743V28.75Z" fill="white"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 32" id="sunset">
        <path d="M42.153 21.3545H0V23.3545H42.153V21.3545Z" fill="white"></path>
        <path d="M42.153 25.3545H0V27.3545H42.153V25.3545Z" fill="white"></path>
        <path d="M42.153 29.3545H0V31.3545H42.153V29.3545Z" fill="white"></path>
        <path d="M13.8678 5.28278C14.9598 4.19078 16.2398 3.40778 17.6028 2.90878C17.3388 6.32378 18.4848 9.82677 21.0538 12.4578L21.0498 12.4618C21.0648 12.4778 21.0798 12.4888 21.0948 12.5028C21.1148 12.5228 21.1298 12.5438 21.1498 12.5638L21.1558 12.5578C23.7858 15.1278 27.2908 16.2728 30.7048 16.0088C30.4108 16.8128 30.0058 17.5808 29.5088 18.3058H31.8478C32.3068 17.4498 32.6718 16.5548 32.9158 15.6318C33.1078 14.9048 33.2348 14.1668 33.2928 13.4208C32.6188 13.6678 31.9268 13.8398 31.2248 13.9418C28.1398 14.3848 24.8908 13.4418 22.5098 11.0898C20.1678 8.71078 19.2298 5.46977 19.6718 2.38977C19.7728 1.68677 19.9448 0.994777 20.1908 0.321777C19.4458 0.379777 18.7078 0.506777 17.9808 0.697777C15.9558 1.23478 14.0398 2.28277 12.4548 3.86777C8.55078 7.77077 7.83578 13.6608 10.2878 18.3048H12.6138C9.91877 14.3038 10.3318 8.81978 13.8678 5.28278Z" fill="white"></path>
    </symbol>
</svg>

<div class="informer2-table-box">
    <div class="informer2-blue__background">

        <table class="informer2-blue">
            <tbody>
            <tr class="informer2-blue__tr">
                <td class="informer2-blue__td" colspan="2">
                    <div class="informer2-blue__td-flexbox-middle">
                        <div class="informer2-blue__box-small-icons">
                            <svg viewBox="0 0 43 31">
                                <use xlink:href="#sunrise"/>
                            </svg>
                        </div>
                        <p class="informer2-blue__text-small">
                            <span class="informer2__text-font">восход:</span>
                        </p>
                        <p class="informer2-blue__text-middle">
                            <span class="informer2__number-font"><?php echo $abstractData->getGmtTime($object['gmtMin'], $mainObject['sr']); ?></span>
                        </p>
                </td>

                <td class="informer2-blue__td" colspan="2">
                    <div class="informer2-blue__td-flexbox-middle">
                        <div class="informer2-blue__box-small-icons">
                            <svg viewBox="0 0 43 32">
                                <use xlink:href="#sunset"/>
                            </svg>
                        </div>
                        <p class="informer2-blue__text-small">
                            <span class="informer2__text-font">закат:</span>
                        </p>
                        <p class="informer2-blue__text-middle">
                            <span class="informer2__number-font"><?php echo $abstractData->getGmtTime($object['gmtMin'], $mainObject['ss']); ?></span></p>
                </td>
                <td class="informer2-blue__td" colspan="2">
                    <p class="informer2-blue__text-middle">
                        <span class="informer2__text-font"> <?php echo $abstractData->getWeek() ?></span>
                    </p>
                </td>
            </tr>


            <tr class="informer2-blue__tr">
                <td class="informer2-blue__td" colspan="3">
                    <div class="informer2-blue__td-flexbox-middle">
                        <div class="informer2-blue__td-flexbox-text">

                            <p class="informer2-blue__text-big">
                                <span class="informer2__text-font"><?php echo $abstractData->getNameOfTheDate($forecatsArr[0]['dt']); ?></span></p>
                            <p class="informer2-blue__text-middle">
                                <span class="informer2__text-font"><?php echo $abstractData->getMonthFromString($forecatsArr[0]['dt']); ?></span>
                                <span class="informer2__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[0]['dt'], 'd'); ?></span>
                            </p>
                        </div>
                        <div class="informer2-blue__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[0], 'informer2-blue__box-middle-icons-img', '', '', '80%', '100%') ?>
                        </div>
                        <p class="informer2-blue__text-big">
                            <span class="informer2__number-font temp"><?php echo $forecatsArr[0]['tempC']; ?>°</span>
                        </p>
                    </div>
                </td>
                <td class="informer2-blue__td" colspan="3">
                    <p class="informer2-blue__text-middle">
                        <span class="informer2__number-font"><?php echo $abstractData->getDate('H:i') ?> GMT<?php echo '+' .$object['gmtMin']/60 ?></span>
                    </p>
                    <p class="informer2-blue__text-big">
                        <span class="informer2__text-font"> <?php echo $object['name'] ?></span>
                    </p>
                    <p class="informer2-blue__text-small">
                        <span class="informer2__text-font"> <?php echo $object['country'] ?></span>
                    </p>
                </td>
            </tr>

            <tr class="informer2-blue__tr">
                <td class="informer2-blue__td" colspan="3">
                    <div class="informer2-blue__td-flexbox-middle">
                        <div class="informer2-blue__td-flexbox-text">
                            <p class="informer2-blue__text-big">
                                <span class="informer2__text-font"><?php echo $abstractData->getNameOfTheDate($forecatsArr[1]['dt']); ?></span>
                            </p>
                            <p class="informer2-blue__text-middle">
                                <span class="informer2__text-font"><?php echo $abstractData->getMonthFromString($forecatsArr[1]['dt']); ?></span>
                                <span class="informer2__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[1]['dt'], 'd'); ?></span>
                            </p>
                        </div>
                        <div class="informer2-blue__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[1], 'informer2-blue__box-middle-icons-img', '', '', '80%', '100%') ?>
                        </div>
                        <p class="informer2-blue__text-big">
                            <span class="informer2__number-font temp"><?php echo $forecatsArr[1]['tempC']; ?>°</span></p>
                    </div>
                </td>
                <td class="informer2-blue__td" rowspan="2">
                    <p class="informer2-blue__text-big">
                        <span class="informer2__number-font temp"><?php echo $object['tempC']; ?>°</span>
                    </p>
                </td>
                <td class="informer2-blue__td" colspan="2" rowspan="2">
                    <div class="informer2-blue__td-flexbox-big">
                        <div class="informer2-blue__box-big-icons">
                            <?php echo $abstractData->getWeatherIcon($object, 'informer2-blue__box-gig-icons-img', '', '', '100%', '100%') ?>
                        </div>
                    </div>
                </td>
            </tr>

            <tr class="informer2-blue__tr">
                <td class="informer2-blue__td" colspan="3">
                    <div class="informer2-blue__td-flexbox-middle">
                        <div class="informer2-blue__td-flexbox-text">
                            <p class="informer2-blue__text-big">
                                <span class="informer2__text-font"><?php echo $abstractData->getNameOfTheDate($forecatsArr[2]['dt']); ?></span>
                            </p>
                            <p class="informer2-blue__text-middle">
                                <span class="informer2__text-font"><?php echo $abstractData->getMonthFromString($forecatsArr[2]['dt']); ?></span>
                                <span class="informer2__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[2]['dt'], 'd'); ?></span>
                            </p>
                        </div>

                        <div class="informer2-blue__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[2], 'informer2-blue__box-middle-icons-img', '', '', '80%', '100%') ?>
                        </div>
                        <p class="informer2-blue__text-big">
                            <span class="informer2__number-font temp"><?php echo $forecatsArr[2]['tempC']; ?>°</span></p>
                    </div>
                </td>
            </tr>

            <tr class="informer2-blue__tr">
                <td class="informer2-blue__td" colspan="3">
                    <div class="informer2-blue__td-flexbox-middle">
                        <div class="informer2-blue__td-flexbox-text">
                            <p class="informer2-blue__text-big">
                                <span class="informer2__text-font"><?php echo $abstractData->getNameOfTheDate($forecatsArr[3]['dt']); ?></span>
                            </p>
                            <p class="informer2-blue__text-middle">
                                <span class="informer2__text-font"><?php echo $abstractData->getMonthFromString($forecatsArr[3]['dt']); ?></span>
                                <span class="informer2__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[3]['dt'], 'd'); ?></span>
                            </p>
                        </div>
                        <div class="informer2-blue__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[3], 'informer2-blue__box-middle-icons-img', '', '', '80%', '100%') ?>
                        </div>
                        <p class="informer2-blue__text-big">
                            <span class="informer2__number-font temp"><?php echo $forecatsArr[3]['tempC']; ?>°</span>
                        </p>
                    </div>
                </td>
                <td class="informer2-blue__td" colspan="2" rowspan="2">
                    <div class="informer2-blue__td-flexbox-small">
                        <div class="informer2-blue__box-small-icons">
                            <svg  viewBox="0 0 17 17">
                                <use xlink:href="#wind-route"/>
                            </svg>
                        </div>
                        <p class="informer2-blue__text-small">
                            <span class="informer2__text-font"><?php echo $abstractData->getWwindDirection($object['wd']) ?>:</span>
                            <span class="informer2__number-font"><?php echo $abstractData->getMetersPerSecond($object['ws']) ?></span>
                            <span class="informer2__text-font">м/с</span>
                        </p>
                    </div>
                    <div class="informer2-blue__td-flexbox-small">
                        <div class="informer2-blue__box-small-icons">
                            <svg viewBox="0 0 5 17">
                                <use xlink:href="#pressure"/>
                            </svg>
                        </div>
                        <p class="informer2-blue__text-small">
                            <span class="informer2__text-font">Давление</span>
                            <span class="informer2__number-font"><?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?></span>
                            <span class="informer2__text-font">мм рт. ст.</span>
                        </p>
                    </div>
                    <div class="informer2-blue__td-flexbox-small">
                        <div class="informer2-blue__box-small-icons">
                            <svg viewBox="0 0 8 13">
                                <use xlink:href="#wet"/>
                            </svg>
                        </div>
                        <p class="informer2-blue__text-small">
                            <span class="informer2__text-font">Влажность</span>
                            <span class="informer2__number-font"><?php echo $object['rh'] ?>%</span>
                        </p>
                    </div>
                </td>
                <td class="informer2-blue__td" rowspan="2">
                    <div class="informer2-blue__td-flexbox-small">
                        <div class="informer2-blue__box-small-icons">
                            <svg viewBox="0 0 8 12">
                                <use xlink:href="#dpf"/>
                            </svg>
                        </div>
                        <p class="informer2-blue__text-small">
                            <span class="informer2__text-font">dpF</span>
                            <span class="informer2__number-font"><?php echo $mainObject['dpF'] ?>°</span>
                        </p>
                    </div>
                    <div class="informer2-blue__td-flexbox-small">
                        <div class="informer2-blue__box-small-icons">
                            <svg viewBox="0 0 16 16">
                                <use xlink:href="#degree-b"/>
                            </svg>
                        </div>
                        <p class="informer2-blue__text-small">
                            <span class="informer2__number-font"> <?php echo $object['gmtMin'] ?>°</span>
                        </p>
                    </div>
                    <div class="informer2-blue__td-flexbox-small">
                        <div class="informer2-blue__box-small-icons">
                            <svg viewBox="0 0 33 24">
                                <use xlink:href="#speed-2"/>
                            </svg>
                        </div>
                        <p class="informer2-blue__text-small">
                            <span class="informer2__number-font"><?php echo $abstractData->getMetersPerSecond($object['ws']) ?> </span>
                            <span class="informer2__number-font">м/с</span>
                        </p>
                    </div>
                </td>
            </tr>

            <tr class="informer2-blue__tr">
                <td class="informer2-blue__td" colspan="3">
                    <div class="informer2-blue__td-flexbox-middle">
                        <div class="informer2-blue__td-flexbox-text">

                            <p class="informer2-blue__text-big">
                                <span class="informer2__text-font"><?php echo $abstractData->getNameOfTheDate($forecatsArr[4]['dt']); ?></span>
                            </p>
                            <p class="informer2-blue__text-middle">
                                <span class="informer2__text-font"><?php echo $abstractData->getMonthFromString($forecatsArr[4]['dt']); ?></span>
                                <span class="informer2__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[4]['dt'], 'd'); ?></span>
                            </p>
                        </div>
                        <div class="informer2-blue__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[4], 'informer2-blue__box-middle-icons-img', '', '', '80%', '100%') ?>
                        </div>
                        <p class="informer2-blue__text-big">
                            <span class="informer2__number-font temp"><?php echo $forecatsArr[0]['tempC']; ?>°</span>
                        </p>
                    </div>
                </td>
            </tr>

            <tr class="informer2-blue__tr">
                <td class="informer2-blue__td" colspan="3">
                    <div class="informer2-blue__td-flexbox-middle">
                        <div class="informer2-blue__td-flexbox-text">

                            <p class="informer2-blue__text-big">
                                <span class="informer2__text-font"><?php echo $abstractData->getNameOfTheDate($forecatsArr[5]['dt']); ?></span>
                            </p>
                            <p class="informer2-blue__text-middle">
                                <span class="informer2__text-font"><?php echo $abstractData->getMonthFromString($forecatsArr[5]['dt']); ?></span>
                                <span class="informer2__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[5]['dt'], 'd'); ?></span>
                            </p>
                        </div>
                        <div class="informer2-blue__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[5], 'informer2-blue__box-middle-icons-img', '', '', '80%', '100%') ?>
                        </div>
                        <p class="informer2-blue__text-big">
                            <span class="informer2__number-font temp"><?php echo $forecatsArr[5]['tempC']; ?>°</span>
                        </p>
                    </div>
                </td>
                <td class="informer2-blue__td" colspan="3">
                    <p class="informer2-blue__text-small">
                        <span class="informer2__number-font"><?php echo $abstractData->getPopulate((string)$object['pop']) ?> жителей</span>
                    </p>
                </td>
            </tr>

            <tr class="informer2-blue__background-1"></tr>
            <tr class="informer2-blue__background-2"></tr>
            <tr class="informer2-blue__background-3"></tr>
            <tr class="informer2-blue__background-4"></tr>

            </tbody>
        </table>
    </div>
</div>
</tbody>
</table>
