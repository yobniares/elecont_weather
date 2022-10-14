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
        .informer2-neon__background-1 {
            background:<?php echo $_REQUEST['color_fon'] ?>;
            border-radius: 30px;
        }
        :root {
            --light-grey: <?php echo $_REQUEST['color_fon'] ?>;
            --dark-grey: <?php echo $_REQUEST['color_fon'] ?>;
        }
        .informer2-neon__tr:nth-child(1) .informer1-blue__td:nth-child(1) {
            background-color: <?php echo $_REQUEST['color_fon'] ?>;
        }
        <?php } ?>

        /* Text color */
        <?php
        $text_color = "#0FF19";
        if(isset($_REQUEST['font_text']) && $_REQUEST['font_text'] !=='#') {
            $text_color = $_REQUEST['font_text'];
            ?>
        .informer2-neon {
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
<!-- фильтр для иконок в img -->
<svg xmlns="http://www.w3.org/2000/svg" width="0" height="0">
  <defs>
    <filter id="recolourFilter" filterUnits="userSpaceOnUse">
      <feFlood flood-color="<?php echo $text_color?>" result="flood" />
      <feComposite in="flood" in2="SourceAlpha" operator="in" />
    </filter>
  </defs>
</svg>

<svg width="0" height="0" class="hidden">
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 26" id="pressure-1">
        <path d="M5.02176 19.1161V1.57584C5.02176 0.705559 4.34093 0 3.5 0C2.65907 0 1.97824 0.705022 1.97824 1.57584V19.1161C0.808291 19.702 0 20.9388 0 22.3756C0 24.3764 1.56684 26 3.5 26C5.43316 26 7 24.3769 7 22.3756C7 20.9393 6.19171 19.702 5.02176 19.1161Z" fill="currentColor"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 18" id="wet-1">
        <path d="M12 12.0864C12 15.3523 9.31221 18 5.99911 18C2.68601 18 0 15.3523 0 12.0864C0 8.82051 5.99911 0 5.99911 0C5.99911 0 12 8.82051 12 12.0864Z" fill="currentColor"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="dpf-2">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM4.63122 7.65796C6.15706 5.92242 7.90496 4.35871 9.83787 3C9.83787 3 10.1026 5.19514 9.95551 7.28318C9.94598 8.07411 9.85737 8.86258 9.69078 9.6389C9.01421 11.8073 7.16099 12.3426 5.74902 11.8072C5.16099 11.6189 4.66611 11.2459 4.35336 10.7552C4.0406 10.2645 3.93052 9.68826 4.04291 9.13026C4.12019 8.60665 4.32087 8.10445 4.63122 7.65796ZM7.07275 7.01547C6.71976 6.80131 6.10201 7.01545 5.74902 7.49731C5.39603 8.00593 5.39603 8.59488 5.74902 8.80904C6.10201 9.0232 6.71976 8.83583 7.07275 8.3272C7.42575 7.81858 7.42575 7.22963 7.07275 7.01547Z" fill="currentColor"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="degree-2">
        <path d="M8 0C3.58864 0 0 3.58848 0 8C0 12.4115 3.58864 16 8 16C12.4114 16 16 12.4115 16 8C16 3.58848 12.4114 0 8 0ZM9.08725 8.77002L5.20845 10.7092L6.99111 7.00157L10.7921 5.29021L9.08725 8.77002Z" fill="currentColor"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 24" id="windspeed-s-1">
        <path d="M0.845618 7.16326H16.5263C16.6242 7.17119 16.7179 7.1928 16.8173 7.1928C18.8031 7.1928 20.413 5.58295 20.413 3.5964C20.413 1.60984 18.8031 0 16.8173 0C14.8307 0 13.2209 1.60984 13.2209 3.5964C13.2209 4.28643 13.4247 4.92389 13.7618 5.47131H0.845618C0.378871 5.47131 0 5.85018 0 6.31765C0 6.78511 0.378871 7.16326 0.845618 7.16326Z" fill="currentColor"></path>
        <path d="M21.5416 15.8508C21.5171 15.8494 21.4962 15.8364 21.471 15.8364H1.37496C0.908218 15.8364 0.528625 16.2153 0.528625 16.6828C0.528625 17.1502 0.907498 17.5291 1.37496 17.5291H18.3608C18.0136 18.0823 17.8047 18.7313 17.8047 19.4328C17.8047 21.4187 19.4146 23.0292 21.4011 23.0292C23.387 23.0292 24.9968 21.4194 24.9968 19.4328C24.9968 17.4952 23.4604 15.9265 21.5416 15.8508Z" fill="currentColor"></path>
        <path d="M33.0001 9.06686C33.0001 7.08102 31.3902 5.47046 29.4044 5.47046C27.4179 5.47046 25.808 7.0803 25.808 9.06686C25.808 9.76842 26.0169 10.4174 26.3641 10.9706H0.917018C0.449551 10.9706 0.0706787 11.3494 0.0706787 11.8169C0.0706787 12.2844 0.448831 12.6633 0.917018 12.6633H29.4743C29.4995 12.6633 29.5197 12.651 29.5449 12.6488C31.4637 12.5732 33.0001 11.0044 33.0001 9.06686Z" fill="currentColor"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" id="wind-route-1">
        <path d="M25.3841 6.11772L15.6339 3.68022C15.6225 3.67738 15.6103 3.67819 15.5989 3.67575C15.5628 3.66844 15.5262 3.66397 15.4893 3.66153C15.4689 3.65991 15.449 3.65828 15.4287 3.65828C15.3873 3.65909 15.3463 3.66397 15.3052 3.67047C15.2898 3.67291 15.2744 3.67372 15.2597 3.67738C15.2065 3.68916 15.1541 3.70581 15.1033 3.72897C15.1005 3.73059 15.0976 3.731 15.0948 3.73222C15.0444 3.75578 14.9957 3.78422 14.9498 3.81875L11.3748 6.5V3.89025C12.091 3.57581 12.5936 2.86203 12.5936 2.03125C12.5936 0.911219 11.6823 0 10.5623 0C9.44232 0 8.53112 0.911219 8.53112 2.03125C8.53112 2.86203 9.03364 3.57622 9.74985 3.89025V24.375H0.812487C0.363994 24.375 0 24.739 0 25.1875C0 25.636 0.363994 26 0.812487 26H20.3122C20.7607 26 21.1247 25.636 21.1247 25.1875C21.1247 24.739 20.7607 24.375 20.3122 24.375H11.3748V9.75L14.9498 12.4313C14.9936 12.4642 15.0428 12.482 15.0903 12.5048C15.1204 12.519 15.1472 12.5405 15.1789 12.5511C15.263 12.5791 15.3499 12.5937 15.4369 12.5937C15.4369 12.5937 15.4369 12.5937 15.4373 12.5937C15.4397 12.5937 15.4421 12.5929 15.445 12.5929C15.5063 12.5921 15.5673 12.5844 15.627 12.5702C15.6294 12.5698 15.6318 12.5698 15.6343 12.5694L25.3845 10.1319C25.7461 10.0413 26 9.71669 26 9.34375V6.90625C25.9996 6.53291 25.7457 6.20791 25.3841 6.11772ZM14.6248 10.1558L11.9163 8.12459L14.6248 6.09334V10.1558ZM10.5623 1.62459C10.7862 1.62459 10.9686 1.80659 10.9686 2.03084C10.9686 2.25509 10.7862 2.43709 10.5623 2.43709C10.3385 2.43709 10.1561 2.25509 10.1561 2.03084C10.1561 1.80659 10.3385 1.62459 10.5623 1.62459ZM16.2497 5.50875L19.4997 6.32125V9.92753L16.2497 10.74V5.50875ZM24.3746 8.70878L21.1247 9.52128V6.7275L24.3746 7.54V8.70878Z" fill="currentColor"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 31" id="sunrise-black">
        <path d="M33.3743 22.09H31.3743C31.3743 16.412 26.7553 11.792 21.0773 11.792C15.3993 11.792 10.7793 16.412 10.7793 22.09H8.7793C8.7793 15.309 14.2963 9.79199 21.0773 9.79199C27.8573 9.79199 33.3743 15.308 33.3743 22.09Z" fill="currentColor"></path>
        <path d="M22.0771 0H20.0771V7.403H22.0771V0Z" fill="currentColor"></path>
        <path d="M12.1147 10.7005L6.88 5.46582L5.4658 6.88002L10.7005 12.1147L12.1147 10.7005Z" fill="currentColor"></path>
        <path d="M36.6869 6.87904L35.2727 5.46484L30.038 10.6995L31.4522 12.1137L36.6869 6.87904Z" fill="currentColor"></path>
        <path d="M42.153 20.0767H34.75V22.0767H42.153V20.0767Z" fill="currentColor"></path>
        <path d="M7.402 20.0767H0V22.0767H7.402V20.0767Z" fill="currentColor"></path>
        <path d="M33.3743 24.5908H8.7793V26.5908H33.3743V24.5908Z" fill="currentColor"></path>
        <path d="M33.3743 28.75H8.7793V30.75H33.3743V28.75Z" fill="currentColor"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 32" id="sunset-black">
        <path d="M42.153 21.3545H0V23.3545H42.153V21.3545Z" fill="currentColor"></path>
        <path d="M42.153 25.3545H0V27.3545H42.153V25.3545Z" fill="currentColor"></path>
        <path d="M42.153 29.3545H0V31.3545H42.153V29.3545Z" fill="currentColor"></path>
        <path d="M13.8678 5.28278C14.9598 4.19078 16.2398 3.40778 17.6028 2.90878C17.3388 6.32378 18.4848 9.82677 21.0538 12.4578L21.0498 12.4618C21.0648 12.4778 21.0798 12.4888 21.0948 12.5028C21.1148 12.5228 21.1298 12.5438 21.1498 12.5638L21.1558 12.5578C23.7858 15.1278 27.2908 16.2728 30.7048 16.0088C30.4108 16.8128 30.0058 17.5808 29.5088 18.3058H31.8478C32.3068 17.4498 32.6718 16.5548 32.9158 15.6318C33.1078 14.9048 33.2348 14.1668 33.2928 13.4208C32.6188 13.6678 31.9268 13.8398 31.2248 13.9418C28.1398 14.3848 24.8908 13.4418 22.5098 11.0898C20.1678 8.71078 19.2298 5.46977 19.6718 2.38977C19.7728 1.68677 19.9448 0.994777 20.1908 0.321777C19.4458 0.379777 18.7078 0.506777 17.9808 0.697777C15.9558 1.23478 14.0398 2.28277 12.4548 3.86777C8.55078 7.77077 7.83578 13.6608 10.2878 18.3048H12.6138C9.91877 14.3038 10.3318 8.81978 13.8678 5.28278Z" fill="currentColor"></path>
    </symbol>
    <symbol viewBox="0 0 26 36" id="place" xmlns="http://www.w3.org/2000/svg">
        <path fill="currentColor" d="M13 0.000189578C9.57287 -0.0185244 6.27862 1.34894 3.84103 3.80212C1.40345 6.2553 0.0219198 9.59353 0 13.0834C0 23.8594 13 36 13 36C13 36 26 23.789 26 13.0834C25.9781 9.59353 24.5965 6.2553 22.159 3.80212C19.7214 1.34894 16.4271 -0.0185244 13 0.000189578ZM13 20.7504C11.4999 20.7504 10.0336 20.2974 8.78629 19.4488C7.53903 18.6001 6.56691 17.3939 5.99285 15.9827C5.4188 14.5714 5.26859 13.0185 5.56124 11.5203C5.85389 10.0222 6.57625 8.64602 7.63696 7.5659C8.69767 6.48578 10.0491 5.75021 11.5203 5.45221C12.9916 5.1542 14.5166 5.30714 15.9024 5.8917C17.2883 6.47626 18.4729 7.46617 19.3063 8.73626C20.1396 10.0063 20.5845 11.4996 20.5845 13.0271C20.5772 15.0705 19.7749 17.0278 18.3533 18.4701C16.9317 19.9124 15.0068 20.7223 13 20.7222V20.7504Z"></path>
    </symbol>

</svg>
<div class="informer2-table-box">
    <div class="informer2-neon__background">
        <?php if($_REQUEST['clear']=='0'){?>
        <div class="informer2-neon__background-1"></div>
        <?php }?>

    <?php if($_REQUEST['transpar']=='1'){?>
        <img class="informer2-neon__background-2"src="<?php echo $abstractData->getWeatherBackground($object,date('H', time()))?>" width="100%" height="100%" alt="">

        <?php }?>



        

        <table class="informer2-neon">
            <tbody>
            <tr class="informer2-neon__tr">
                <td class="informer2-neon__td" colspan="4">
                    <div class="informer2-neon__td-flexbox-middle">
                        <div class="informer2-neon__box-small-icons-1">
                            <svg width="45%" height="45%">
                                <use fill="currentColor" xlink:href="#sunrise-black"/>
                            </svg>
                        </div>
                        <p class="informer2-neon__text-small">
                            <span class="informer2__text-font">восход:</span>
                        </p>
                        <p class="informer2-neon__text-middle">
                            <span class="informer2__number-font"><?php echo $abstractData->getGmtTime($object['gmtMin'], $mainObject['sr']); ?></span>
                        </p>
                    <div class="informer2-neon__td-flexbox-middle">
                        <div class="informer2-neon__box-small-icons-1">
                            <svg width="45%" height="45%">
                                <use fill="currentColor" xlink:href="#sunset-black"/>
                            </svg>
                        </div>
                        <p class="informer2-neon__text-small">
                            <span class="informer2__text-font">закат:</span>
                        </p>
                        <p class="informer2-neon__text-middle">
                            <span class="informer2__number-font"><?php echo $abstractData->getGmtTime($object['gmtMin'], $mainObject['ss']); ?></span></p>
                </td>
                <td class="informer2-neon__td" colspan="2">
                    <p class="informer2-neon__text-middle">
                        <span class="informer2__text-font"><?php echo $abstractData->getWeek() ?></span>
                    </p>
                </td>
            </tr>
            <tr class="informer2-neon__tr">
                <td class="informer2-neon__td" colspan="3">
                    <div class="informer2-neon__td-flexbox-middle">
                        <div class="informer2-neon__td-flexbox-text">

                            <p class="informer2-neon__text-big">
                                <span class="informer2__text-font"><?php echo $abstractData->getNameOfTheDate($forecatsArr[0]['dt']); ?></span></p>
                            <p class="informer2-neon__text-middle">
                                <span class="informer2__text-font"><?php echo $abstractData->getMonthFromString($forecatsArr[0]['dt']); ?></span>
                                <span class="informer2__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[0]['dt'], 'd'); ?></span>
                            </p>
                        </div>
                        <div class="informer2-neon__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[0], 'informer2-neon__box-middle-icons-img', '', 'filter: url(#recolourFilter);', '100%', '100%') ?>
                        </div>
                        <p class="informer2-neon__text-big">
                            <span class="informer2__number-font informer2__number-font-bold temp"><?php echo $forecatsArr[0]['tempC']; ?>°</span>
                        </p>
                    </div>
                </td>
                <td class="informer2-neon__td" colspan="3">
                        <p class="informer2-neon__text-middle">
                            <span class="informer2__number-font"><?php echo $abstractData->getDate('H:i') ?> GMT<?php echo '+' .$object['gmtMin']/60 ?></span>
                        </p>
                        <div class="informer2-neon__flexbox-place">
                            <div class="informer2-neon__box-small-icons">
                                <svg width="60%" height="60%">
                                    <use fill="currentColor" xlink:href="#place"/>
                                </svg>
                            </div>

                        <p class="informer2-neon__text-big">
                            <span class="informer2__text-font"> <?php echo $object['name'] ?></span>
                        </p>
                    </div>
                    <p class="informer2-neon__text-small">
                        <span class="informer2__text-font"> <?php echo $object['country'] ?></span>
                    </p>
                </td>
            </tr>
            <tr class="informer2-neon__tr">
                <td class="informer2-neon__td" colspan="3">
                    <div class="informer2-neon__td-flexbox-middle">
                        <div class="informer2-neon__td-flexbox-text">
                            <p class="informer2-neon__text-big">
                                <span class="informer2__text-font"><?php echo $abstractData->getNameOfTheDate($forecatsArr[1]['dt']); ?></span>
                            </p>
                            <p class="informer2-neon__text-middle">
                                <span class="informer2__text-font"><?php echo $abstractData->getMonthFromString($forecatsArr[1]['dt']); ?></span>
                                <span class="informer2__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[1]['dt'], 'd'); ?></span>
                            </p>
                        </div>
                        <div class="informer2-neon__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[1], 'informer2-neon__box-middle-icons-img', '', 'filter: url(#recolourFilter);', '100%', '100%') ?>
                        </div>
                        <p class="informer2-neon__text-big">
                            <span class="informer2__number-font informer2__number-font-bold temp"><?php echo $forecatsArr[1]['tempC']; ?>°</span></p>
                    </div>
                </td>
                <td class="informer2-neon__td" rowspan="2">
                    <p class="informer2-neon__text-big">
                        <span class="informer2__number-font informer2__number-font-bold shine-neon temp"><?php echo $object['tempC']; ?>°</span>
                    </p>
                </td>
                <td class="informer2-neon__td" colspan="2" rowspan="2">
                    <div class="informer2-neon__td-flexbox-big">
                        <div class="informer2-neon__box-big-icons">
                            <?php echo $abstractData->getWeatherIcon($object, 'informer2-neon__box-big-icons-img', '', 'filter: url(#recolourFilter);', '100%', '100%') ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="informer2-neon__tr">
                <td class="informer2-neon__td" colspan="3">
                    <div class="informer2-neon__td-flexbox-middle">
                        <div class="informer2-neon__td-flexbox-text">
                            <p class="informer2-neon__text-big">
                                <span class="informer2__text-font"><?php echo $abstractData->getNameOfTheDate($forecatsArr[2]['dt']); ?></span>
                            </p>
                            <p class="informer2-neon__text-middle">
                                <span class="informer2__text-font"><?php echo $abstractData->getMonthFromString($forecatsArr[2]['dt']); ?></span>
                                <span class="informer2__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[2]['dt'], 'd'); ?></span>
                            </p>
                        </div>

                        <div class="informer2-neon__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[2], 'informer2-neon__box-middle-icons-img', '', 'filter: url(#recolourFilter);', '100%', '100%') ?>
                        </div>
                        <p class="informer2-neon__text-big">
                            <span class="informer2__number-font informer2__number-font-bold temp"><?php echo $forecatsArr[2]['tempC']; ?>°</span></p>
                    </div>
                </td>
            </tr>
            <tr class="informer2-neon__tr">
                <td class="informer2-neon__td" colspan="3">
                    <div class="informer2-neon__td-flexbox-middle">
                        <div class="informer2-neon__td-flexbox-text">
                            <p class="informer2-neon__text-big">
                                <span class="informer2__text-font"><?php echo $abstractData->getNameOfTheDate($forecatsArr[3]['dt']); ?></span>
                            </p>
                            <p class="informer2-neon__text-middle">
                                <span class="informer2__text-font"><?php echo $abstractData->getMonthFromString($forecatsArr[3]['dt']); ?></span>
                                <span class="informer2__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[3]['dt'], 'd'); ?></span>
                            </p>
                        </div>
                        <div class="informer2-neon__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[3], 'informer2-neon__box-middle-icons-img', '', 'filter: url(#recolourFilter);', '100%', '100%') ?>
                        </div>
                        <p class="informer2-neon__text-big">
                            <span class="informer2__number-font informer2__number-font-bold temp"><?php echo $forecatsArr[3]['tempC']; ?>°</span>
                        </p>
                    </div>
                </td>
                <td class="informer2-neon__td" colspan="2" rowspan="2">
                    <div class="informer2-neon__td-flexbox-small">
                        <div class="informer2-neon__box-small-icons">
                            <svg  width="40%" height="40%">
                                <use fill="currentColor" xlink:href="#wind-route-1"/>
                            </svg>
                        </div>
                        <p class="informer2-neon__text-small">
                            <span class="informer2__text-font"><?php echo $abstractData->getWwindDirection($object['wd']) ?>:</span>
                            <span class="informer2__number-font"><?php echo $abstractData->getMetersPerSecond($object['ws']) ?></span>
                            <span class="informer2__text-font">м/с</span>
                        </p>
                    </div>
                    <div class="informer2-neon__td-flexbox-small">
                        <div class="informer2-neon__box-small-icons">
                            <svg width="15%" height="15%">
                                <use fill="currentColor" xlink:href="#pressure-1"/>
                            </svg>

                        </div>
                        <p class="informer2-neon__text-small">
                            <span class="informer2__text-font">Давление</span>
                            <span class="informer2__number-font"><?php echo $abstractData->getMillimetersOfMercury($object['psl']) ?></span>
                            <span class="informer2__text-font">мм.рт.ст.</span>
                        </p>
                    </div>
                    <div class="informer2-neon__td-flexbox-small">
                        <div class="informer2-neon__box-small-icons">
                            <svg width="30%" height="30%">
                                <use fill="currentColor" xlink:href="#wet-1"/>
                            </svg>
                        </div>
                        <p class="informer2-neon__text-small">
                            <span class="informer2__text-font">Влажность</span>
                            <span class="informer2__number-font"><?php echo $object['rh'] ?>%</span>
                        </p>
                    </div>
                </td>
                <td class="informer2-neon__td" rowspan="2">
                    <div class="informer2-neon__td-flexbox-small">
                        <div class="informer2-neon__box-small-icons">
                            <svg width="40%" height="40%">
                                <use fill="currentColor" xlink:href="#dpf-2"/>
                            </svg>
                        </div>
                        <p class="informer2-neon__text-small">
                            <span class="informer2__text-font">dpF</span>
                            <span class="informer2__number-font"><?php echo $mainObject['dpF'] ?>°</span>
                        </p>
                    </div>
                    <div class="informer2-neon__td-flexbox-small">
                        <div class="informer2-neon__box-small-icons">
                            <svg width="40%" height="40%">
                                <use fill="currentColor" xlink:href="#degree-2"/>
                            </svg>
                        </div>
                        <p class="informer2-neon__text-small">
                            <span class="informer2__number-font"><?php echo $object['gmtMin'] ?>°</span>
                        </p>
                    </div>
                    <div class="informer2-neon__td-flexbox-small">
                        <div class="informer2-neon__box-small-icons">
                            <svg width="40%" height="40%">
                                <use fill="currentColor" xlink:href="#windspeed-s-1"/>
                            </svg>
                        </div>
                        <p class="informer2-neon__text-small">
                            <span class="informer2__number-font"><?php echo $abstractData->getMetersPerSecond($object['ws']) ?></span>
                            <span class="informer2__number-font">м/с</span>
                        </p>
                    </div>
                </td>
            </tr>
            <tr class="informer2-neon__tr">
                <td class="informer2-neon__td" colspan="3">
                    <div class="informer2-neon__td-flexbox-middle">
                        <div class="informer2-neon__td-flexbox-text">

                            <p class="informer2-neon__text-big">
                                <span class="informer2__text-font"><?php echo $abstractData->getNameOfTheDate($forecatsArr[4]['dt']); ?></span>
                            </p>
                            <p class="informer2-neon__text-middle">
                                <span class="informer2__text-font"><?php echo $abstractData->getMonthFromString($forecatsArr[4]['dt']); ?></span>
                                <span class="informer2__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[4]['dt'], 'd'); ?></span>
                            </p>
                        </div>
                        <div class="informer2-neon__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[4], 'informer2-neon__box-middle-icons-img', '', 'filter: url(#recolourFilter);', '100%', '100%') ?>
                        </div>
                        <p class="informer2-neon__text-big">
                            <span class="informer2__number-font informer2__number-font-bold temp"><?php echo $forecatsArr[0]['tempC']; ?>°</span>
                        </p>
                    </div>
                </td>
            </tr>
            <tr class="informer2-neon__tr">
                <td class="informer2-neon__td" colspan="3">
                    <div class="informer2-neon__td-flexbox-middle">
                        <div class="informer2-neon__td-flexbox-text">

                            <p class="informer2-neon__text-big">
                                <span class="informer2__text-font"><?php echo $abstractData->getNameOfTheDate($forecatsArr[5]['dt']); ?></span>
                            </p>
                            <p class="informer2-neon__text-middle">
                                <span class="informer2__text-font"><?php echo $abstractData->getMonthFromString($forecatsArr[5]['dt']); ?></span>
                                <span class="informer2__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[5]['dt'], 'd'); ?></span>
                            </p>
                        </div>
                        <div class="informer2-neon__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[5], 'informer2-neon__box-middle-icons-img', '', 'filter: url(#recolourFilter);', '100%', '100%') ?>
                        </div>
                        <p class="informer2-neon__text-big">
                            <span class="informer2__number-font informer2__number-font-bold temp"><?php echo $forecatsArr[5]['tempC']; ?>°</span>
                        </p>
                    </div>
                </td>
                <td class="informer2-neon__td" colspan="3">
                    <p class="informer2-neon__text-small">
                        <span class="informer2__number-font informer2__number-font-bold"><?php echo $abstractData->getPopulate((string)$object['pop']) ?> жителей</span>
                    </p>
                </td>
            </tr>

            </tbody>
        </table>
    </div>
</div>