<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
?>

<?php if (!empty($_REQUEST['weather_tip'])) {?>
    <style>

        /* Font family and text color */
        <?php
        if(isset($_REQUEST['font_family']) && $_REQUEST['font_family'] !=='') {?>
        .informer1-neon,
        .informer1__text-font,
        .informer1__number-font {
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php } ?>

        /* Text color */
        <?php
        if(isset($_REQUEST['font_text']) && $_REQUEST['font_text'] !=='#') {?>
        .informer1-neon,
        .informer1__text-font,
        .informer1__number-font {
            color: <?php echo  $_REQUEST['font_text'] ?>;
        }
        <?php } ?>

        /* Background */
        <?php
        if(isset($_REQUEST['color_fon']) && $_REQUEST['color_fon'] !=='#') {?>
        .informer1-neon__background-1 {
            background:<?php echo $_REQUEST['color_fon'] ?>;
            border-radius: 30px;
        }
        :root {
            --neon: <?php echo $_REQUEST['color_fon'] ?>;
            --black: <?php echo $_REQUEST['color_fon'] ?>;
        }
        .informer1-neon__tr:nth-child(1) .informer1-blue__td:nth-child(1) {
            background-color: <?php echo $_REQUEST['color_fon'] ?>;
        }
        <?php } ?>

        /* Temperature color and font */
        <?php
        if(isset($_REQUEST['font_tempo']) && $_REQUEST['font_tempo'] !=='#') {?>
        .informer1__temperature-big,
        .informer1__temperature-middle,
        .temp span {
            color: <?php echo  $_REQUEST['font_tempo'] ?>;
            font-family:<?php echo $_REQUEST['font_family'] ?>;
        }
        <?php } ?>


    </style>
<?php }?>

<svg width="0" height="0" class="hidden">
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" id="wind-route-1">
        <path d="M25.3841 6.11772L15.6339 3.68022C15.6225 3.67738 15.6103 3.67819 15.5989 3.67575C15.5628 3.66844 15.5262 3.66397 15.4893 3.66153C15.4689 3.65991 15.449 3.65828 15.4287 3.65828C15.3873 3.65909 15.3463 3.66397 15.3052 3.67047C15.2898 3.67291 15.2744 3.67372 15.2597 3.67738C15.2065 3.68916 15.1541 3.70581 15.1033 3.72897C15.1005 3.73059 15.0976 3.731 15.0948 3.73222C15.0444 3.75578 14.9957 3.78422 14.9498 3.81875L11.3748 6.5V3.89025C12.091 3.57581 12.5936 2.86203 12.5936 2.03125C12.5936 0.911219 11.6823 0 10.5623 0C9.44232 0 8.53112 0.911219 8.53112 2.03125C8.53112 2.86203 9.03364 3.57622 9.74985 3.89025V24.375H0.812487C0.363994 24.375 0 24.739 0 25.1875C0 25.636 0.363994 26 0.812487 26H20.3122C20.7607 26 21.1247 25.636 21.1247 25.1875C21.1247 24.739 20.7607 24.375 20.3122 24.375H11.3748V9.75L14.9498 12.4313C14.9936 12.4642 15.0428 12.482 15.0903 12.5048C15.1204 12.519 15.1472 12.5405 15.1789 12.5511C15.263 12.5791 15.3499 12.5937 15.4369 12.5937C15.4369 12.5937 15.4369 12.5937 15.4373 12.5937C15.4397 12.5937 15.4421 12.5929 15.445 12.5929C15.5063 12.5921 15.5673 12.5844 15.627 12.5702C15.6294 12.5698 15.6318 12.5698 15.6343 12.5694L25.3845 10.1319C25.7461 10.0413 26 9.71669 26 9.34375V6.90625C25.9996 6.53291 25.7457 6.20791 25.3841 6.11772ZM14.6248 10.1558L11.9163 8.12459L14.6248 6.09334V10.1558ZM10.5623 1.62459C10.7862 1.62459 10.9686 1.80659 10.9686 2.03084C10.9686 2.25509 10.7862 2.43709 10.5623 2.43709C10.3385 2.43709 10.1561 2.25509 10.1561 2.03084C10.1561 1.80659 10.3385 1.62459 10.5623 1.62459ZM16.2497 5.50875L19.4997 6.32125V9.92753L16.2497 10.74V5.50875ZM24.3746 8.70878L21.1247 9.52128V6.7275L24.3746 7.54V8.70878Z" fill="#00FF19"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 24" id="windspeed-s-1">
        <path d="M0.845618 7.16326H16.5263C16.6242 7.17119 16.7179 7.1928 16.8173 7.1928C18.8031 7.1928 20.413 5.58295 20.413 3.5964C20.413 1.60984 18.8031 0 16.8173 0C14.8307 0 13.2209 1.60984 13.2209 3.5964C13.2209 4.28643 13.4247 4.92389 13.7618 5.47131H0.845618C0.378871 5.47131 0 5.85018 0 6.31765C0 6.78511 0.378871 7.16326 0.845618 7.16326Z" fill="#00FF19"></path>
        <path d="M21.5416 15.8508C21.5171 15.8494 21.4962 15.8364 21.471 15.8364H1.37496C0.908218 15.8364 0.528625 16.2153 0.528625 16.6828C0.528625 17.1502 0.907498 17.5291 1.37496 17.5291H18.3608C18.0136 18.0823 17.8047 18.7313 17.8047 19.4328C17.8047 21.4187 19.4146 23.0292 21.4011 23.0292C23.387 23.0292 24.9968 21.4194 24.9968 19.4328C24.9968 17.4952 23.4604 15.9265 21.5416 15.8508Z" fill="#00FF19"></path>
        <path d="M33.0001 9.06686C33.0001 7.08102 31.3902 5.47046 29.4044 5.47046C27.4179 5.47046 25.808 7.0803 25.808 9.06686C25.808 9.76842 26.0169 10.4174 26.3641 10.9706H0.917018C0.449551 10.9706 0.0706787 11.3494 0.0706787 11.8169C0.0706787 12.2844 0.448831 12.6633 0.917018 12.6633H29.4743C29.4995 12.6633 29.5197 12.651 29.5449 12.6488C31.4637 12.5732 33.0001 11.0044 33.0001 9.06686Z" fill="#00FF19"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="degree-2">
        <path d="M8 0C3.58864 0 0 3.58848 0 8C0 12.4115 3.58864 16 8 16C12.4114 16 16 12.4115 16 8C16 3.58848 12.4114 0 8 0ZM9.08725 8.77002L5.20845 10.7092L6.99111 7.00157L10.7921 5.29021L9.08725 8.77002Z" fill="#00FF19"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 18" id="wet-1">
        <path d="M12 12.0864C12 15.3523 9.31221 18 5.99911 18C2.68601 18 0 15.3523 0 12.0864C0 8.82051 5.99911 0 5.99911 0C5.99911 0 12 8.82051 12 12.0864Z" fill="#00FF19"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 26" id="pressure-1">
        <path d="M5.02176 19.1161V1.57584C5.02176 0.705559 4.34093 0 3.5 0C2.65907 0 1.97824 0.705022 1.97824 1.57584V19.1161C0.808291 19.702 0 20.9388 0 22.3756C0 24.3764 1.56684 26 3.5 26C5.43316 26 7 24.3769 7 22.3756C7 20.9393 6.19171 19.702 5.02176 19.1161Z" fill="#00FF19"></path>
    </symbol>
</svg>

<div class="table-box">
    <div class="informer1-neon__background">
        <table class="informer1-neon">
            <tbody>
            <tr class="informer1-neon__tr">
                <td class="informer1-neon__td">
                    <p class="informer1-neon__text-middle">
                        <span class="informer1__text-font"><?php echo $object['name'] ?></span>
                    </p>
                    <p class="informer1-neon__text-middle">
                        <span class="informer1__text-font"><?php echo $abstractData->getWeek() ?>,</span>
                    </p>
                    <p class="informer1-neon__text-middle">
                        <span class="informer1__number-font"><?php echo $abstractData->getDate('d.m.Y') ?></span>
                    </p>
                </td>
            </tr>

            <tr class="informer1-neon__tr">
                <td class="informer1-neon__td" >
                    <p class="informer1-neon__text-big">
                        <span class="informer1__text-font"><?php echo $abstractData->getWeatherDescription($object['icon']) ?></span>
                    </p>
                </td>
            </tr>

            <tr class="informer1-neon__tr">
                <td class="informer1-neon__td informer1-neon__td-icons" >
                    <div class="informer1-neon__box-big-icons">
                        <?php echo $abstractData->getWeatherIcon($object, 'informer1-neon__box-middle-icons-img', '', '', '80%', '100%') ?>
                    </div>
                </td>
            </tr>

            <tr class="informer1-neon__tr">
                <td class="informer1-neon__td">
                    <p class="informer1-neon__text-big">
                        <span class="informer1__number-font informer1__temperature-big"><?php echo $object['tempC'] ?>°</span>
                    </p>
                </td>
            </tr>

            <tr class="informer1-neon__tr">
                <td class="informer1-neon__td">
                    <p class="informer1-neon__text-big">
                        <span class="informer1__number-font informer1__temperature-middle"><?php echo $object['tempF'] ?>F</span></p>
                </td>
            </tr>


            <tr class="informer1-neon__tr">
                <td class="informer1-neon__td">
                    <div class="informer1-neon__td-flexbox-small">
                        <div class="informer1-neon__box-small-icons">
                            <svg viewBox="0 0 26 26">
                                <use xlink:href="#wind-route-1"/>
                            </svg>
                        </div>
                        <p class="informer1-neon__text-small">
                            <span class="informer1__text-font informer1__text-font-light"><?php echo $abstractData->getWwindDirection($object['wd']) ?></span>
                        </p>
                    </div>
                </td>
            </tr>

            <tr class="informer1-neon__tr">
                <td class="informer1-neon__td">
                    <div class="informer1-neon__td-flexbox-small">
                        <div class="informer1-neon__box-small-icons">
                            <svg viewBox="0 0 33 24">
                                <use xlink:href="#windspeed-s-1"/>
                            </svg>
                        </div>
                        <p class="informer1-neon__text-small">
                            <span class="informer1__number-font"><?php echo $abstractData->getMetersPerSecond($object['ws']) ?></span>
                            <span class="informer1__text-font informer1__text-font-light">м/c</span>
                        </p>
                    </div>
                </td>
            </tr>

            <tr class="informer1-neon__tr">
                <td class="informer1-neon__td">
                    <div class="informer1-neon__td-flexbox-small">
                        <div class="informer1-neon__box-small-icons">
                            <svg viewBox="0 0 16 16">
                                <use xlink:href="#degree-2"/>
                            </svg>
                        </div>
                        <p class="informer1-neon__text-small">
                            <span class="informer1__number-font"><?php echo $object['gmtMin'] ?>°</span>
                        </p>
                    </div>
                </td>
            </tr>

            <tr class="informer1-neon__tr">
                <td class="informer1-neon__td">
                    <div class="informer1-neon__td-flexbox-small">
                        <div class="informer1-neon__box-small-icons">
                            <svg  viewBox="0 0 12 18">
                                <use xlink:href="#wet-1"/>
                            </svg>
                        </div>
                        <p class="informer1-neon__text-small">
                            <span class="informer1__text-font informer1__text-font-light">Влажность </span>
                            <span class="informer1__number-font"> <?php echo $object['rh'] ?>%</span>
                        </p>
                    </div>
                </td>
            </tr>

            <tr class="informer1-neon__tr">
                <td class="informer1-neon__td">
                    <div class="informer1-neon__td-flexbox-small">
                        <div class="informer1-neon__box-small-icons" >
                            <svg viewBox="0 0 7 26">
                                <use xlink:href="#pressure-1"/>
                            </svg>
                        </div>
                        <p class="informer1-neon__text-small">
                            <span class="informer1__text-font informer1__text-font-light">Давление:</span>
                            <span class="informer1__number-font"><?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?></span>
                            <span class="informer1__text-font informer1__text-font-light">мм. рт. ст.</span>
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

                <tr class="informer1-neon__tr">
                    <td class="informer1-neon__td">
                        <p class="informer1-neon__text-big">
                            <span class="informer1__text-font"><?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?></span>
                        </p>
                        <div class="informer1-neon__td-flexbox-middle">
                            <div class="informer1-neon__box-middle-icons">
                                <?php echo $abstractData->getWeatherIcon($forecatsArr[$i], 'informer1-neon__box-middle-icons-img', '', '', '60%', '100%') ?>
                            </div>
                        </div>
                        <p class="informer1-neon__text-middle temp">
                            <span class="informer1__number-font"><?php echo $forecatsArr[$i]['tempC']; ?>°</span>
                        </p>
                    </td>
                </tr>
                <?php
            }?>

            <tr class="informer1-neon__background-1">
            </tr>

            </tbody>
        </table>
    </div>
</div>