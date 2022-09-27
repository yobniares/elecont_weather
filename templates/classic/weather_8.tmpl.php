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
        .informer8-blue__number-big,
        .informer8__text-font span,
        .informer8-blue__text-middle,
        .informer8-blue__text-font,
        .informer8-blue__number-font{
            font-family:<?php echo $_REQUEST['font_family'] ?> !important;
        }
        <?php } ?>

        /* Background */
        <?php
        if(isset($_REQUEST['color_fon']) && $_REQUEST['color_fon'] !=='#') {?>
        .informer8-blue__background-1,
        .informer8-blue__tr .informer8-blue__td {
            background:<?php echo $_REQUEST['color_fon'] ?>;
            border-radius: 30px;
        }
        :root {
            --dark-blue: <?php echo $_REQUEST['color_fon'] ?>;
            --light-blue: <?php echo $_REQUEST['color_fon'] ?>;
        }
        .informer8-blue__tr:nth-child(1) .informer1-blue__td:nth-child(1) {
            background-color: <?php echo $_REQUEST['color_fon'] ?>;
        }
        <?php } ?>

        /* Text color */
        <?php
        if(isset($_REQUEST['font_text']) && $_REQUEST['font_text'] !=='#') {?>
        .informer8-blue {
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


<svg width="0" height="0" class="hidden">
    <symbol viewBox="0 0 26 36" id="place" xmlns="http://www.w3.org/2000/svg">
        <path d="M13 0.000189578C9.57287 -0.0185244 6.27862 1.34894 3.84103 3.80212C1.40345 6.2553 0.0219198 9.59353 0 13.0834C0 23.8594 13 36 13 36C13 36 26 23.789 26 13.0834C25.9781 9.59353 24.5965 6.2553 22.159 3.80212C19.7214 1.34894 16.4271 -0.0185244 13 0.000189578ZM13 20.7504C11.4999 20.7504 10.0336 20.2974 8.78629 19.4488C7.53903 18.6001 6.56691 17.3939 5.99285 15.9827C5.4188 14.5714 5.26859 13.0185 5.56124 11.5203C5.85389 10.0222 6.57625 8.64602 7.63696 7.5659C8.69767 6.48578 10.0491 5.75021 11.5203 5.45221C12.9916 5.1542 14.5166 5.30714 15.9024 5.8917C17.2883 6.47626 18.4729 7.46617 19.3063 8.73626C20.1396 10.0063 20.5845 11.4996 20.5845 13.0271C20.5772 15.0705 19.7749 17.0278 18.3533 18.4701C16.9317 19.9124 15.0068 20.7223 13 20.7222V20.7504Z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="wind-route-2">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM9.01303 4.41547L12.7631 5.35297C12.9022 5.38766 12.9998 5.51266 13 5.65625V6.59375C13 6.73719 12.9023 6.86203 12.7633 6.89688L9.01319 7.83437L9.01037 7.83469C8.98741 7.84016 8.96397 7.84312 8.94038 7.84344L8.93725 7.84375C8.90381 7.84375 8.87038 7.83812 8.83803 7.82734C8.83072 7.82491 8.82408 7.82095 8.81744 7.81699C8.81302 7.81436 8.8086 7.81172 8.80397 7.80953C8.79952 7.8074 8.79503 7.80538 8.79054 7.80336C8.7766 7.79709 8.76267 7.79082 8.74991 7.78125L7.37493 6.75V12.375H10.8124C10.9849 12.375 11.1249 12.515 11.1249 12.6875C11.1249 12.86 10.9849 13 10.8124 13H3.3125C3.14 13 3 12.86 3 12.6875C3 12.515 3.14 12.375 3.3125 12.375H6.74994V4.49625C6.47448 4.37547 6.2812 4.10078 6.2812 3.78125C6.2812 3.35047 6.63166 3 7.06244 3C7.49321 3 7.84367 3.35047 7.84367 3.78125C7.84367 4.10078 7.6504 4.37531 7.37493 4.49625V5.5L8.74991 4.46875C8.76757 4.45547 8.78632 4.44453 8.80569 4.43547L8.80897 4.43422C8.8285 4.42531 8.84866 4.41891 8.86913 4.41438C8.87275 4.41347 8.8765 4.41302 8.8803 4.41256C8.8824 4.41231 8.88451 4.41205 8.88663 4.41172C8.90241 4.40922 8.91819 4.40734 8.93413 4.40703C8.94179 4.40703 8.9493 4.40763 8.95695 4.40825L8.95741 4.40828C8.97163 4.40922 8.98569 4.41094 8.99959 4.41375C9.00165 4.41419 9.00379 4.41436 9.00592 4.41452C9.00832 4.4147 9.01072 4.41489 9.01303 4.41547ZM7.58321 6.12484L8.62491 6.90609V5.34359L7.58321 6.12484ZM7.21868 3.78109C7.21868 3.69484 7.14853 3.62484 7.06244 3.62484C6.97634 3.62484 6.90619 3.69484 6.90619 3.78109C6.90619 3.86734 6.97634 3.93734 7.06244 3.93734C7.14853 3.93734 7.21868 3.86734 7.21868 3.78109ZM10.4999 5.43125L9.2499 5.11875V7.13078L10.4999 6.81828V5.43125ZM11.1249 6.66203L12.3749 6.34953V5.9L11.1249 5.5875V6.66203Z" ></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 14" id="speed">
        <path d="M13.3309 4.14606C13.6068 3.71648 13.7541 3.21698 13.7556 2.70643C13.7556 2.62725 13.7556 2.55526 13.7556 2.48327C13.6958 1.82294 13.3913 1.20883 12.9018 0.761608C12.4123 0.314389 11.7733 0.0664062 11.1102 0.0664062C10.4472 0.0664062 9.80814 0.314389 9.31865 0.761608C8.82915 1.20883 8.52462 1.82294 8.4649 2.48327H9.667C9.72545 2.14962 9.89967 1.84726 10.159 1.62938C10.4184 1.4115 10.7463 1.29207 11.085 1.29207C11.4238 1.29207 11.7517 1.4115 12.011 1.62938C12.2704 1.84726 12.4446 2.14962 12.5031 2.48327C12.5105 2.55747 12.5105 2.63223 12.5031 2.70643C12.5031 3.08824 12.3514 3.45442 12.0814 3.7244C11.8114 3.99439 11.4453 4.14606 11.0634 4.14606H2.20972V5.36254H11.1066C11.5491 5.35993 11.9841 5.24739 12.3723 5.03505C12.7605 4.82272 13.0899 4.51724 13.3309 4.14606Z" ></path>
        <path d="M13.6477 8.27795H4.79395V9.49444H13.6477C14.0295 9.49444 14.3957 9.64612 14.6656 9.9161C14.9356 10.1861 15.0873 10.5523 15.0873 10.9341C15.0948 11.0083 15.0948 11.083 15.0873 11.1572C15.0289 11.4909 14.8546 11.7932 14.5953 12.0111C14.3359 12.229 14.008 12.3484 13.6693 12.3484C13.3305 12.3484 13.0026 12.229 12.7433 12.0111C12.4839 11.7932 12.3097 11.4909 12.2512 11.1572H11.0276C11.0873 11.8176 11.3918 12.4317 11.8813 12.8789C12.3708 13.3261 13.0098 13.5741 13.6729 13.5741C14.3359 13.5741 14.9749 13.3261 15.4644 12.8789C15.9539 12.4317 16.2585 11.8176 16.3182 11.1572C16.3182 11.0852 16.3182 11.0061 16.3182 10.9341C16.3182 10.2296 16.0383 9.55404 15.5402 9.05592C15.0421 8.5578 14.3665 8.27795 13.6621 8.27795H13.6477Z" ></path>
        <path d="M18.3049 0.0144002C17.7428 0.014505 17.1881 0.142432 16.6827 0.38851C16.1773 0.634587 15.7346 0.992367 15.3878 1.43479C15.0411 1.87721 14.7995 2.39269 14.6814 2.94223C14.5632 3.49178 14.5716 4.061 14.7058 4.60683H15.9871C15.7965 4.11372 15.7688 3.57255 15.9079 3.06254C16.0471 2.55252 16.3458 2.10044 16.7604 1.77241C17.1749 1.44439 17.6836 1.25766 18.212 1.23955C18.7403 1.22143 19.2606 1.37288 19.6967 1.67175C20.1327 1.97061 20.4617 2.4012 20.6354 2.90049C20.8092 3.39977 20.8186 3.94155 20.6622 4.44656C20.5059 4.95156 20.192 5.39328 19.7665 5.70706C19.3411 6.02084 18.8264 6.19023 18.2977 6.19042H0V7.39251H18.3049C18.8207 7.39284 19.3307 7.2847 19.8019 7.07512C20.2732 6.86555 20.695 6.55922 21.0402 6.17602C21.5214 5.64648 21.8384 4.98854 21.9526 4.2822C22.0669 3.57586 21.9734 2.85154 21.6837 2.19731C21.3939 1.54308 20.9204 0.987132 20.3205 0.597043C19.7207 0.206954 19.0204 -0.00046937 18.3049 7.97527e-07V0.0144002Z" ></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14" id="grade">
        <path d="M7.5 0C3.36435 0 0 3.13992 0 7C0 10.8601 3.36435 14 7.5 14C11.6357 14 15 10.8601 15 7C15 3.13992 11.6357 0 7.5 0ZM8.5193 7.67377L4.88292 9.37055L6.55417 6.12637L10.1176 4.62894L8.5193 7.67377Z" ></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="wet-3">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM7.99955 12C9.65611 12 11 10.6761 11 9.0432C11 7.41025 7.99955 3 7.99955 3C7.99955 3 5 7.41025 5 9.0432C5 10.6761 6.343 12 7.99955 12Z" ></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="pressure-2">
        <path d="M8 0C3.58864 0 0 3.58848 0 8C0 12.4115 3.58864 16 8 16C12.4114 16 16 12.4115 16 8C16 3.58848 12.4114 0 8 0ZM8.00029 15.0587C6.91362 15.0587 6.0437 14.1779 6.0437 13.0909C6.0437 12.311 6.58471 11.6395 7.16737 11.3207V1.79672C7.16737 1.32416 7.56883 0.941039 8.04166 0.941039C8.51391 0.941039 8.91537 1.32386 8.91537 1.79672V11.3207C9.49803 11.6395 9.99767 12.311 9.99767 13.0909C9.99796 14.1779 9.08696 15.0587 8.00029 15.0587Z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="dpf-2">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM4.63122 7.65796C6.15706 5.92242 7.90496 4.35871 9.83787 3C9.83787 3 10.1026 5.19514 9.95551 7.28318C9.94598 8.07411 9.85737 8.86258 9.69078 9.6389C9.01421 11.8073 7.16099 12.3426 5.74902 11.8072C5.16099 11.6189 4.66611 11.2459 4.35336 10.7552C4.0406 10.2645 3.93052 9.68826 4.04291 9.13026C4.12019 8.60665 4.32087 8.10445 4.63122 7.65796ZM7.07275 7.01547C6.71976 6.80131 6.10201 7.01545 5.74902 7.49731C5.39603 8.00593 5.39603 8.59488 5.74902 8.80904C6.10201 9.0232 6.71976 8.83583 7.07275 8.3272C7.42575 7.81858 7.42575 7.22963 7.07275 7.01547Z"></path>
    </symbol>
    <symbol width="26" height="36" viewBox="0 0 26 36" id="place" xmlns="http://www.w3.org/2000/svg">
        <path d="M13 0.000189578C9.57287 -0.0185244 6.27862 1.34894 3.84103 3.80212C1.40345 6.2553 0.0219198 9.59353 0 13.0834C0 23.8594 13 36 13 36C13 36 26 23.789 26 13.0834C25.9781 9.59353 24.5965 6.2553 22.159 3.80212C19.7214 1.34894 16.4271 -0.0185244 13 0.000189578ZM13 20.7504C11.4999 20.7504 10.0336 20.2974 8.78629 19.4488C7.53903 18.6001 6.56691 17.3939 5.99285 15.9827C5.4188 14.5714 5.26859 13.0185 5.56124 11.5203C5.85389 10.0222 6.57625 8.64602 7.63696 7.5659C8.69767 6.48578 10.0491 5.75021 11.5203 5.45221C12.9916 5.1542 14.5166 5.30714 15.9024 5.8917C17.2883 6.47626 18.4729 7.46617 19.3063 8.73626C20.1396 10.0063 20.5845 11.4996 20.5845 13.0271C20.5772 15.0705 19.7749 17.0278 18.3533 18.4701C16.9317 19.9124 15.0068 20.7223 13 20.7222V20.7504Z"/>
    </symbol>
</svg>
<div class="informer8__table-box">

    <div class="informer8-blue__background">
        <div class="informer8-blue__background-5"></div>
        <div class="informer8-blue__background-3"></div>
        <div class="informer8-blue__background-4"></div>
        <div class="informer8-blue__background-6"></div> <!-- менять фон display: block/none; -->
        <div class="informer8-blue__background-2"></div>



        <table class="informer8-blue">
            <tbody>
            <tr class="informer8-blue__tr">
                <td rowspan="3" class="informer8-blue__td">
                    <div class="informer8-blue__box-small-icons">
                        <svg viewBox="0 0 26 36" width="45%" height="45%">
                            <use xlink:href="#place"/>
                        </svg>
                    </div>
                    <p class="informer8-blue__text-small">
                        <span class="informer8-blue__text-font"><?php echo $mainObject['name'] ?></span>
                    </p>
                    <p class="informer8-blue__number-big"><?php echo $abstractData->getDate('H:i') ?></p>
                    <p class="informer8-blue__text-middle"><?php echo $abstractData->getWeek() ?></p>

                </td>

                <td rowspan="3" class="informer8-blue__td">
                    <div class="informer8-blue__td-flexbox-big">
                        <p class="informer8-blue__number-big-1 temp"><?php echo $mainObject['tempC']; ?>°</p>
                        <p class="informer8-blue__number-big-2 temp"><?php echo $mainObject['tempF']; ?>°F</p>
                    </div>
                </td>
                <td rowspan="3" class="informer8-blue__td">
                    <div class="informer8-blue__td-flexbox-big">
                        <p class="informer8-blue__text-middle"><?php echo $abstractData->getTimesOfDay($time = date('H:i', time())) ?></p>
                        <div class="informer8-blue__box-big-icons">
                            <?php echo $abstractData->getWeatherIcon($object, 'informer8-blue__box-middle-icons-img', '', '', '100%', '100%') ?>
                        </div>
                    </div>
                </td>
                <td rowspan="3" class="informer8-blue__td">
                    <div class="informer8-blue__td-flexbox-small">
                        <div class="informer8-blue__box-small-icons">
                            <svg viewBox="0 0 26 36" width="45%" height="45%">
                                <use xlink:href="#place"/>
                            </svg>
                        </div>
                        <p class="informer8-blue__text-small">
                            <span class="informer8-blue__text-font"><?php echo $mainObject['name'] ?><span>
                            <span class="informer8-blue__text-font"> <?php echo $abstractData->getWeatherDescription($mainObject['icon']) ?><span>
                        </p>
                    </div>
                    <div class="informer8-blue__td-flexbox-small">
                        <div class="informer8-blue__box-small-icons">
                            <svg  viewBox="0 0 16 16" width="50%" height="50%">
                                <use xlink:href="#wind-route-2"/>
                            </svg>
                        </div>
                        <p class="informer8-blue__text-small">
                            <span class="informer8-blue__text-font"><?php echo $abstractData->getWwindDirection($mainObject['wd']) ?>:</span>
                            <span class="informer8-blue__number-font"><?php echo $abstractData->getMetersPerSecond($mainObject['ws']) ?></span>
                            <span class="informer8-blue__text-font">м/с</span>
                        </p>
                    </div>
                    <div class="informer8-blue__td-flexbox-small">
                        <div class="informer8-blue__box-small-icons">
                            <svg viewBox="0 0 16 16" width="50%" height="50%">
                                <use xlink:href="#grade"/>
                            </svg>
                        </div>
                        <p class="informer8-blue__text-small">
                            <span class="informer8-blue__number-font"><?php echo $mainObject['gmtMin'] ?>°</span>
                        </p>
                    </div>
                    <div class="informer8-blue__td-flexbox-small">
                        <div class="informer8-blue__box-small-icons">
                            <svg viewBox="0 0 12 18" width="50%" height="50%">
                                <use xlink:href="#wet-3"/>
                            </svg>
                        </div>
                        <p class="informer8-blue__text-small">
                            <span class="informer8-blue__text-font">Влажность</span>
                            <span class="informer8-blue__number-font"><?php echo $mainObject['rh'] ?>%</span>
                        </p>
                    </div>
                    <div class="informer8-blue__td-flexbox-small">
                        <div class="informer8-blue__box-small-icons">
                            <svg viewBox="0 0 16 16" width="50%" height="50%">
                                <use xlink:href="#pressure-2"/>
                            </svg>
                        </div>
                        <p class="informer8-blue__text-small">
                            <span class="informer8-blue__text-font">Давление</span>
                            <span class="informer8-blue__number-font"><?php echo $abstractData->getMillimetersOfMercury($mainObject['psl']) ?></span>
                            <span class="informer8-blue__text-font">мм рт. ст.</span>
                        </p>
                    </div>
                    <div class="informer8-blue__td-flexbox-small">
                        <div class="informer8-blue__box-small-icons">
                            <svg viewBox="0 0 16 16" width="50%" height="50%">
                                <use xlink:href="#dpf-2"/>
                            </svg>
                        </div>
                        <p class="informer8-blue__number-small">
                            <span class="informer8-blue__number-font">dpF <?php echo $mainObject['dpF'] ?>°</span>
                        </p>
                    </div>
                </td>

            <?php for ($i=0; $i < 3; $i++) {
                if($i == 0) { ?>

                <td class="informer8-blue__td">
                    <p class="informer8-blue__text-middle"><?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?></p>
                </td>
                <td class="informer8-blue__td">
                    <div class="informer8-blue__box-middle-icons">
                        <?php echo $abstractData->getWeatherIcon($object, 'informer8-blue__box-middle-icons-img', '', '', '100%', '100%') ?>
                    </div>
                </td>
                <td class="informer8-blue__td">
                    <p class="informer8-blue__number-middle">
                        <span class="informer8-blue__number-font temp"><?php echo $forecatsArr[$i]['tempC']; ?>°</span>
                    </p>
                </td>
            </tr>

            <?php
            } else {
                ?>
                <tr class="informer8-blue__tr">
                    <td class="informer8-blue__td">
                        <p class="informer8-blue__text-middle"><?php echo $abstractData->getTimesOfDay($abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i')) ?></p>
                    </td>

                    <td class="informer8-blue__td">
                        <div class="informer8-blue__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($object, 'informer8-blue__box-middle-icons-img', '', '', '100%', '100%') ?>
                        </div>
                    </td>

                    <td class="informer8-blue__td">
                        <p class="informer8-blue__number-middle">
                            <span class="informer8-blue__number-font temp"><?php echo $forecatsArr[$i]['tempC']; ?>°</span>
                        </p>
                    </td>
                </tr>
                <?php
            }
            }?>
            </tbody>
        </table>
    </div>
</div>