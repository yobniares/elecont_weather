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
        .informer4__text-font,
        .informer4__text-font span,
        .informer4__number-font {
            font-family:<?php echo $_REQUEST['font_family'] ?> !important;
        }
        <?php } ?>

        /* Background */
        <?php
        if(isset($_REQUEST['color_fon']) && $_REQUEST['color_fon'] !=='#') {?>
        .informer4-grey__background-1 {
            background:<?php echo $_REQUEST['color_fon'] ?>;
            border-radius: 30px;
        }
        :root {
            --white: <?php echo $_REQUEST['color_fon'] ?>;
        }
        .informer4-grey__tr:nth-child(1) .informer1-blue__td:nth-child(1) {
            background-color: <?php echo $_REQUEST['color_fon'] ?>;
        }
        <?php } ?>

        /* Text color */
        <?php
        $text_color = "black";
        if(isset($_REQUEST['font_text']) && $_REQUEST['font_text'] !=='#') {
            $text_color = $_REQUEST['font_text'];
            ?>
        .informer4-grey {
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
    <symbol  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="wind-route-2">
        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM9.01303 4.41547L12.7631 5.35297C12.9022 5.38766 12.9998 5.51266 13 5.65625V6.59375C13 6.73719 12.9023 6.86203 12.7633 6.89688L9.01319 7.83437L9.01037 7.83469C8.98741 7.84016 8.96397 7.84312 8.94038 7.84344L8.93725 7.84375C8.90381 7.84375 8.87038 7.83812 8.83803 7.82734C8.83072 7.82491 8.82408 7.82095 8.81744 7.81699C8.81302 7.81436 8.8086 7.81172 8.80397 7.80953C8.79952 7.8074 8.79503 7.80538 8.79054 7.80336C8.7766 7.79709 8.76267 7.79082 8.74991 7.78125L7.37493 6.75V12.375H10.8124C10.9849 12.375 11.1249 12.515 11.1249 12.6875C11.1249 12.86 10.9849 13 10.8124 13H3.3125C3.14 13 3 12.86 3 12.6875C3 12.515 3.14 12.375 3.3125 12.375H6.74994V4.49625C6.47448 4.37547 6.2812 4.10078 6.2812 3.78125C6.2812 3.35047 6.63166 3 7.06244 3C7.49321 3 7.84367 3.35047 7.84367 3.78125C7.84367 4.10078 7.6504 4.37531 7.37493 4.49625V5.5L8.74991 4.46875C8.76757 4.45547 8.78632 4.44453 8.80569 4.43547L8.80897 4.43422C8.8285 4.42531 8.84866 4.41891 8.86913 4.41438C8.87275 4.41347 8.8765 4.41302 8.8803 4.41256C8.8824 4.41231 8.88451 4.41205 8.88663 4.41172C8.90241 4.40922 8.91819 4.40734 8.93413 4.40703C8.94179 4.40703 8.9493 4.40763 8.95695 4.40825L8.95741 4.40828C8.97163 4.40922 8.98569 4.41094 8.99959 4.41375C9.00165 4.41419 9.00379 4.41436 9.00592 4.41452C9.00832 4.4147 9.01072 4.41489 9.01303 4.41547ZM7.58321 6.12484L8.62491 6.90609V5.34359L7.58321 6.12484ZM7.21868 3.78109C7.21868 3.69484 7.14853 3.62484 7.06244 3.62484C6.97634 3.62484 6.90619 3.69484 6.90619 3.78109C6.90619 3.86734 6.97634 3.93734 7.06244 3.93734C7.14853 3.93734 7.21868 3.86734 7.21868 3.78109ZM10.4999 5.43125L9.2499 5.11875V7.13078L10.4999 6.81828V5.43125ZM11.1249 6.66203L12.3749 6.34953V5.9L11.1249 5.5875V6.66203Z" ></path>
    </symbol>
    <symbol  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="pressure-2">
        <path fill="currentColor" d="M8 0C3.58864 0 0 3.58848 0 8C0 12.4115 3.58864 16 8 16C12.4114 16 16 12.4115 16 8C16 3.58848 12.4114 0 8 0ZM8.00029 15.0587C6.91362 15.0587 6.0437 14.1779 6.0437 13.0909C6.0437 12.311 6.58471 11.6395 7.16737 11.3207V1.79672C7.16737 1.32416 7.56883 0.941039 8.04166 0.941039C8.51391 0.941039 8.91537 1.32386 8.91537 1.79672V11.3207C9.49803 11.6395 9.99767 12.311 9.99767 13.0909C9.99796 14.1779 9.08696 15.0587 8.00029 15.0587Z" ></path>
    </symbol>
    <symbol  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="wet-3">
        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM7.99955 12C9.65611 12 11 10.6761 11 9.0432C11 7.41025 7.99955 3 7.99955 3C7.99955 3 5 7.41025 5 9.0432C5 10.6761 6.343 12 7.99955 12Z" ></path>
    </symbol>
    <symbol  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="degree-b">
        <path fill="currentColor" d="M8 0C3.58864 0 0 3.58848 0 8C0 12.4115 3.58864 16 8 16C12.4114 16 16 12.4115 16 8C16 3.58848 12.4114 0 8 0ZM9.08725 8.77002L5.20845 10.7092L6.99111 7.00157L10.7921 5.29021L9.08725 8.77002Z" ></path>
    </symbol>
    <symbol  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="dpf-2">
        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM4.63122 7.65796C6.15706 5.92242 7.90496 4.35871 9.83787 3C9.83787 3 10.1026 5.19514 9.95551 7.28318C9.94598 8.07411 9.85737 8.86258 9.69078 9.6389C9.01421 11.8073 7.16099 12.3426 5.74902 11.8072C5.16099 11.6189 4.66611 11.2459 4.35336 10.7552C4.0406 10.2645 3.93052 9.68826 4.04291 9.13026C4.12019 8.60665 4.32087 8.10445 4.63122 7.65796ZM7.07275 7.01547C6.71976 6.80131 6.10201 7.01545 5.74902 7.49731C5.39603 8.00593 5.39603 8.59488 5.74902 8.80904C6.10201 9.0232 6.71976 8.83583 7.07275 8.3272C7.42575 7.81858 7.42575 7.22963 7.07275 7.01547Z" ></path>
    </symbol>
</svg>
<div class="informer4-table-box">
    <div class="informer4-grey__background">
        <?php if($_REQUEST['clear']=='0'){?>
        <div class="informer4-grey__background-1"></div>
        <?php }?>
    <div class="informer4-grey__background-3"></div>



    <?php if($_REQUEST['transpar']=='1'){?>
        <img class="informer4-grey__background-4"src="<?php echo $abstractData->getWeatherBackground($forecatsArr[0],$abstractData->getDateFromString($forecatsArr[0]['dt'], 'H'))?>" width="20%" height="50%" alt="">

        <img class="informer4-grey__background-5"src="<?php echo $abstractData->getWeatherBackground($forecatsArr[1],$abstractData->getDateFromString($forecatsArr[1]['dt'], 'H'))?>" width="20%" height="50%" alt="">

        <img class="informer4-grey__background-6"src="<?php echo $abstractData->getWeatherBackground($forecatsArr[2],$abstractData->getDateFromString($forecatsArr[2]['dt'], 'H'))?>" width="20%" height="50%" alt="">

        <img class="informer4-grey__background-7"src="<?php echo $abstractData->getWeatherBackground($forecatsArr[3],$abstractData->getDateFromString($forecatsArr[3]['dt'], 'H'))?>" width="20%" height="50%" alt="">

    <?php }else{?>
    <div class="informer4-grey__background-2"></div> <!-- скрыть, если есть фон с погодой -->

    <?php }?>




        <table class="informer4-grey">
            <tbody>
            <tr class="informer4-grey__tr">
                <td colspan="2" class="informer4-grey__td">
                    <p class="informer4-grey__text-big">
                        <span class="informer4__text-font informer4__number-font-light"><?php echo $object['name'] ?></span>
                    </p>
                </td>
                <td colspan="2" class="informer4-grey__td">
                    <p class="informer4-grey__text-big">
                        <span class="informer4__number-font informer4__number-font-bold"><?php echo $abstractData->getDate('d.m.Y') ?></span>
                    </p>
                </td>
            </tr>

            <tr class="informer4-grey__tr">
                <td colspan="2" class="informer4-grey__td">
                    <p class="informer4-grey__text-middle">
                        <span class="informer4__text-font informer4__number-font-light"><?php echo $abstractData->getWeatherDescription($object['icon']) ?></span>
                    </p>
                </td>
                <td colspan="2" class="informer4-grey__td">
                    <p class="informer4-grey__text-middle">
                        <span class="informer4__text-font informer4__number-font-light"><?php echo $abstractData->getWeek() ?></span>
                    </p>
                </td>
            </tr>

            <tr class="informer4-grey__tr">
                <td colspan="2" class="informer4-grey__td">
                    <div class="informer4-grey__td-flexbox-small">
                        <div class="informer4-grey__box-small-icons">
                            <svg width="70%" height="70%" viewBox="0 0 16 16">
                                <use xlink:href="#wind-route-2"/>
                            </svg>
                        </div>
                        <p class="informer4-grey__text-small">
                            <span class="informer4__text-font"><?php echo $abstractData->getWwindDirection($object['wd']) ?></span>
                        </p>
                    </div>
                </td>

                <td colspan="2" class="informer4-grey__td">
                    <div class="informer4-grey__td-flexbox-small">
                        <div class="informer4-grey__box-small-icons">
                            <svg width="70%" height="70%" viewBox="0 0 16 16">
                                <use xlink:href="#pressure-2"/>
                            </svg>
                        </div>
                        <p class="informer4-grey__text-small">
                            <span class="informer4__number-font"><?php echo $abstractData->getMetersPerSecond($object['ws']) ?></span>
                            <span class="informer4__text-font">мм рт. ст.</span>
                        </p>
                    </div>
                </td>
            </tr>


            <tr class="informer4-grey__tr">
                <td class="informer4-grey__td">
                    <div class="informer4-grey__td-flexbox-small">
                        <div class="informer4-grey__box-small-icons">
                            <svg width="75%" height="75%" viewBox="0 0 12 18">
                                <use xlink:href="#wet-3"/>
                            </svg>
                        </div>
                        <p class="informer4-grey__text-small">
                            <span class="informer4__text-font">Влажность: <?php echo $object['rh'] ?>%</span>
                        </p>
                    </div>
                </td>

                <td class="informer4-grey__td">
                    <div class="informer4-grey__td-flexbox-small">
                        <div class="informer4-grey__box-small-icons">
                            <svg width="70%" height="70%" viewBox="0 0 16 16">
                                <use xlink:href="#degree-b"/>
                            </svg>
                        </div>
                        <p class="informer4-grey__text-small">
                            <span class="informer4__number-font"><?php echo $object['gmtMin'] ?>°</span>
                        </p>
                    </div>
                </td>

                <td colspan="2" class="informer4-grey__td">
                    <div class="informer4-grey__td-flexbox-small">
                        <div class="informer4-grey__box-small-icons">
                            <svg width="70%" height="70%" viewBox="0 0 16 16">
                                <use xlink:href="#dpf-2"/>
                            </svg>
                        </div>
                        <p class="informer4-grey__text-small">
                            <span class="informer4__text-font">dpF <?php echo $mainObject['dpF'] ?>°</span>
                        </p>
                    </div>
                </td>
            </tr>

            <tr class="informer4-grey__tr">
                <?php for ($i=0; $i < 4; $i++) {?>
                    <td class="informer4-grey__td">
                        <p class="informer4-grey__text-big">
                            <span class="informer4__number-font"><?php echo $abstractData->getDateFromString($forecatsArr[$i]['dt'], 'H:i'); ?></span>
                        </p>
                    </td>
                <?php }?>
            </tr>

            <tr class="informer4-grey__tr">
                <?php for ($i=0; $i < 4; $i++) {?>
                    <td class="informer4-grey__td">
                        <div class="informer4-grey__box-middle-icons">
                            <?php echo $abstractData->getWeatherIcon($forecatsArr[$i], 'informer4-grey__box-middle-icons-img', '', 'filter: url(#recolourFilter);', '100%', '100%') ?>
                        </div>
                    </td>
                <?php }?>
            </tr>

            <tr class="informer4-grey__tr">

                <?php for ($i=0; $i < 4; $i++) {?>
                    <td class="informer4-grey__td" >
                        <p class="informer4-grey__text-big">
                            <span class="informer4__number-font informer4__number-font-bold temp"><?php echo $forecatsArr[$i]['tempC']; ?>°</span>
                        </p>
                        <p class="informer4-grey__text-middle">
                            <span class="informer4__number-font"><?php echo $forecatsArr[$i]['tempF']; ?>F</span>
                        </p>
                    </td>
                <?php }?>
            </tr>
            </tbody>
        </table>
    </div>
</div>