<?php
    foreach ($objects['0'] as $forecast) {
        $forecatsArr[] = $forecast;
    }
?>

<body>
<svg width="0" height="0" class="hidden">
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 31" id="sunrise-black">
        <path d="M33.3743 22.09H31.3743C31.3743 16.412 26.7553 11.792 21.0773 11.792C15.3993 11.792 10.7793 16.412 10.7793 22.09H8.7793C8.7793 15.309 14.2963 9.79199 21.0773 9.79199C27.8573 9.79199 33.3743 15.308 33.3743 22.09Z" fill="black"></path>
        <path d="M22.0771 0H20.0771V7.403H22.0771V0Z" fill="black"></path>
        <path d="M12.1147 10.7005L6.88 5.46582L5.4658 6.88002L10.7005 12.1147L12.1147 10.7005Z" fill="black"></path>
        <path d="M36.6869 6.87904L35.2727 5.46484L30.038 10.6995L31.4522 12.1137L36.6869 6.87904Z" fill="black"></path>
        <path d="M42.153 20.0767H34.75V22.0767H42.153V20.0767Z" fill="black"></path>
        <path d="M7.402 20.0767H0V22.0767H7.402V20.0767Z" fill="black"></path>
        <path d="M33.3743 24.5908H8.7793V26.5908H33.3743V24.5908Z" fill="black"></path>
        <path d="M33.3743 28.75H8.7793V30.75H33.3743V28.75Z" fill="black"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 32" id="sunset-black">
        <path d="M42.153 21.3545H0V23.3545H42.153V21.3545Z" fill="black"></path>
        <path d="M42.153 25.3545H0V27.3545H42.153V25.3545Z" fill="black"></path>
        <path d="M42.153 29.3545H0V31.3545H42.153V29.3545Z" fill="black"></path>
        <path d="M13.8678 5.28278C14.9598 4.19078 16.2398 3.40778 17.6028 2.90878C17.3388 6.32378 18.4848 9.82677 21.0538 12.4578L21.0498 12.4618C21.0648 12.4778 21.0798 12.4888 21.0948 12.5028C21.1148 12.5228 21.1298 12.5438 21.1498 12.5638L21.1558 12.5578C23.7858 15.1278 27.2908 16.2728 30.7048 16.0088C30.4108 16.8128 30.0058 17.5808 29.5088 18.3058H31.8478C32.3068 17.4498 32.6718 16.5548 32.9158 15.6318C33.1078 14.9048 33.2348 14.1668 33.2928 13.4208C32.6188 13.6678 31.9268 13.8398 31.2248 13.9418C28.1398 14.3848 24.8908 13.4418 22.5098 11.0898C20.1678 8.71078 19.2298 5.46977 19.6718 2.38977C19.7728 1.68677 19.9448 0.994777 20.1908 0.321777C19.4458 0.379777 18.7078 0.506777 17.9808 0.697777C15.9558 1.23478 14.0398 2.28277 12.4548 3.86777C8.55078 7.77077 7.83578 13.6608 10.2878 18.3048H12.6138C9.91877 14.3038 10.3318 8.81978 13.8678 5.28278Z" fill="black"></path>
    </symbol>
    <symbol width="26" height="26" viewBox="0 0 26 26" id="wind-route" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M25.3841 6.11772L15.6339 3.68022C15.6225 3.67738 15.6103 3.67819 15.5989 3.67575C15.5628 3.66844 15.5262 3.66397 15.4893 3.66153C15.4689 3.65991 15.449 3.65828 15.4287 3.65828C15.3873 3.65909 15.3463 3.66397 15.3052 3.67047C15.2898 3.67291 15.2744 3.67372 15.2597 3.67738C15.2065 3.68916 15.1541 3.70581 15.1033 3.72897C15.1005 3.73059 15.0976 3.731 15.0948 3.73222C15.0444 3.75578 14.9957 3.78422 14.9498 3.81875L11.3748 6.5V3.89025C12.091 3.57581 12.5936 2.86203 12.5936 2.03125C12.5936 0.911219 11.6823 0 10.5623 0C9.44232 0 8.53112 0.911219 8.53112 2.03125C8.53112 2.86203 9.03364 3.57622 9.74985 3.89025V24.375H0.812487C0.363994 24.375 0 24.739 0 25.1875C0 25.636 0.363994 26 0.812487 26H20.3122C20.7607 26 21.1247 25.636 21.1247 25.1875C21.1247 24.739 20.7607 24.375 20.3122 24.375H11.3748V9.75L14.9498 12.4313C14.9936 12.4642 15.0428 12.482 15.0903 12.5048C15.1204 12.519 15.1472 12.5405 15.1789 12.5511C15.263 12.5791 15.3499 12.5937 15.4369 12.5937C15.4369 12.5937 15.4369 12.5937 15.4373 12.5937C15.4397 12.5937 15.4421 12.5929 15.445 12.5929C15.5063 12.5921 15.5673 12.5844 15.627 12.5702C15.6294 12.5698 15.6318 12.5698 15.6343 12.5694L25.3845 10.1319C25.7461 10.0413 26 9.71669 26 9.34375V6.90625C25.9996 6.53291 25.7457 6.20791 25.3841 6.11772ZM14.6248 10.1558L11.9163 8.12459L14.6248 6.09334V10.1558ZM10.5623 1.62459C10.7862 1.62459 10.9686 1.80659 10.9686 2.03084C10.9686 2.25509 10.7862 2.43709 10.5623 2.43709C10.3385 2.43709 10.1561 2.25509 10.1561 2.03084C10.1561 1.80659 10.3385 1.62459 10.5623 1.62459ZM16.2497 5.50875L19.4997 6.32125V9.92753L16.2497 10.74V5.50875ZM24.3746 8.70878L21.1247 9.52128V6.7275L24.3746 7.54V8.70878Z" fill="black"/>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 26" id="pressure-b-2">
        <path d="M5.02176 19.1161V1.57584C5.02176 0.705559 4.34093 0 3.5 0C2.65907 0 1.97824 0.705022 1.97824 1.57584V19.1161C0.808291 19.702 0 20.9388 0 22.3756C0 24.3764 1.56684 26 3.5 26C5.43316 26 7 24.3769 7 22.3756C7 20.9393 6.19171 19.702 5.02176 19.1161Z" fill="black"></path>
    </symbol>
    <symbol width="12" height="18" viewBox="0 0 12 18" id="wet-1-b" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 12.0864C12 15.3523 9.31221 18 5.99911 18C2.68601 18 0 15.3523 0 12.0864C0 8.82051 5.99911 0 5.99911 0C5.99911 0 12 8.82051 12 12.0864Z" fill="black"/>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 12" id="dpf-black">
        <path d="M7.78382 0C5.20662 1.81161 2.87608 3.89656 0.841624 6.21061C0.427824 6.80593 0.160256 7.47553 0.0572087 8.17369C-0.0926411 8.91768 0.0541349 9.68594 0.471141 10.3402C0.888147 10.9945 1.54799 11.4919 2.33203 11.743C4.21465 12.4569 6.68561 11.743 7.5877 8.85186C7.80983 7.81678 7.92797 6.76548 7.94068 5.71091C8.13679 2.92685 7.78382 0 7.78382 0ZM2.33203 5.99641C2.80268 5.35393 3.62635 5.06841 4.097 5.35396C4.56766 5.6395 4.56766 6.42477 4.097 7.10294C3.62635 7.78111 2.80268 8.03093 2.33203 7.74539C1.86137 7.45984 1.86137 6.67457 2.33203 5.99641Z" fill="black"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="grade-b">
        <path d="M8 0C3.58864 0 0 3.58848 0 8C0 12.4115 3.58864 16 8 16C12.4114 16 16 12.4115 16 8C16 3.58848 12.4114 0 8 0ZM9.08725 8.77002L5.20845 10.7092L6.99111 7.00157L10.7921 5.29021L9.08725 8.77002Z" fill="black"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73 46" id="wet-b-2">
        <path d="M44.4979 14.2901C45.3975 12.8926 45.8756 11.2655 45.8751 9.60347C45.8751 9.3568 45.8751 9.11014 45.8751 8.86347C45.6922 6.70239 44.7045 4.68878 43.1076 3.22129C41.5106 1.75381 39.4209 0.939453 37.2521 0.939453C35.0833 0.939453 32.9935 1.75381 31.3966 3.22129C29.7996 4.68878 28.8119 6.70239 28.629 8.86347H32.6168C32.7826 7.75273 33.3418 6.73849 34.1926 6.00535C35.0433 5.27222 36.129 4.86894 37.2521 4.86894C38.3751 4.86894 39.4608 5.27222 40.3116 6.00535C41.1623 6.73849 41.7215 7.75273 41.8873 8.86347C41.8873 9.11014 41.8873 9.3568 41.8873 9.60347C41.8819 10.8483 41.3836 12.0404 40.5014 12.9187C39.6192 13.797 38.425 14.2901 37.1801 14.2901H8.40234V18.2779H37.1801C38.6366 18.281 40.0704 17.9173 41.3493 17.2204C42.6282 16.5235 43.711 15.5157 44.4979 14.2901Z" fill="black"></path>
        <path d="M45.5258 27.7745H16.748V31.7212H45.5258C46.7726 31.7266 47.9667 32.2243 48.8483 33.1059C49.73 33.9875 50.2276 35.1816 50.233 36.4284C50.233 36.6751 50.233 36.9012 50.233 37.1478C50.0672 38.2586 49.508 39.2728 48.6573 40.006C47.8065 40.7391 46.7208 41.1424 45.5978 41.1424C44.4747 41.1424 43.389 40.7391 42.5383 40.006C41.6875 39.2728 41.1283 38.2586 40.9625 37.1478H36.8514C37.0343 39.3089 38.022 41.3225 39.6189 42.79C41.2159 44.2575 43.3056 45.0719 45.4744 45.0719C47.6432 45.0719 49.733 44.2575 51.3299 42.79C52.9269 41.3225 53.9146 39.3089 54.0975 37.1478C54.0975 36.9012 54.0975 36.6751 54.0975 36.4284C54.1029 35.2904 53.8828 34.1627 53.4498 33.1103C53.0169 32.0579 52.3796 31.1017 51.575 30.297C50.7703 29.4924 49.8141 28.8551 48.7617 28.4222C47.7093 27.9892 46.5816 27.7691 45.4436 27.7745H45.5258Z" fill="black"></path>
        <path d="M60.6547 0.826172C59.0711 0.82617 57.5031 1.13842 56.0403 1.74505C54.5775 2.35168 53.2487 3.24078 52.1299 4.36149C51.0111 5.48221 50.1243 6.81253 49.5202 8.27634C48.916 9.74015 48.6064 11.3087 48.6092 12.8923C48.6102 13.8756 48.7275 14.8554 48.9586 15.8112H53.0697C52.6896 14.885 52.4941 13.8934 52.4942 12.8923C52.4942 11.2954 52.9674 9.73437 53.8542 8.40635C54.7409 7.07832 56.0014 6.04289 57.4763 5.43086C58.9512 4.81883 60.5745 4.65765 62.1409 4.96769C63.7074 5.27773 65.1469 6.04509 66.2775 7.17281C67.4081 8.30053 68.1791 9.73803 68.4931 11.3037C68.8071 12.8694 68.65 14.493 68.0418 15.9695C67.4335 17.446 66.4013 18.7091 65.0755 19.5992C63.7497 20.4893 62.1899 20.9665 60.593 20.9706H0.981934V24.9173H60.593C63.277 24.9232 65.8856 24.0294 68.002 22.3787C70.1184 20.7281 71.6206 18.4158 72.2686 15.8112C72.5167 14.8581 72.6411 13.8771 72.6386 12.8923C72.6387 9.70634 71.3787 6.64968 69.1336 4.38919C66.8885 2.1287 63.8406 0.847882 60.6547 0.826172Z" fill="black"></path>
    </symbol>
</svg>
<div class="informer2-table-box">
    <div class="informer2-grey__background">

        <table class="informer2-grey">
            <tbody>
            <tr class="informer2-grey__tr">
                <td class="informer2-grey__td" colspan="2">
                    <div class="informer2-grey__td-flexbox-middle">
                        <div class="informer2-grey__box-small-icons">
                            <svg viewBox="0 0 43 31">
                                <use xlink:href="#sunrise-black"/>
                            </svg>
                        </div>
                        <p class="informer2-grey__text-small">
                            <span class="informer2__text-font">восход:</span>
                        </p>
                        <p class="informer2-grey__text-middle">
                            <span class="informer2__number-font">15:24</span>
                        </p>
                </td>
                <td class="informer2-grey__td" colspan="2">
                    <div class="informer2-grey__td-flexbox-middle">
                        <div class="informer2-grey__box-small-icons">
                            <svg viewBox="0 0 43 32">
                                <use xlink:href="#sunset-black"/>
                            </svg>
                        </div>
                        <p class="informer2-grey__text-small">
                            <span class="informer2__text-font">закат:</span>
                        </p>
                        <p class="informer2-grey__text-middle">
                            <span class="informer2__number-font">04:28</span></p>
                </td>
                <td class="informer2-grey__td" colspan="2">
                    <p class="informer2-grey__text-middle">
                        <span class="informer2__text-font">Пятница</span>
                    </p>
                </td>
            </tr>
            <tr class="informer2-grey__tr">
                <td class="informer2-grey__td" colspan="3">
                    <div class="informer2-grey__td-flexbox-middle">
                        <div class="informer2-grey__td-flexbox-text">

                            <p class="informer2-grey__text-big">
                                <span class="informer2__text-font">Сб</span></p>
                            <p class="informer2-grey__text-middle">
                                <span class="informer2__text-font">июль</span>
                                <span class="informer2__number-font informer2__number-font-bold">30</span>
                            </p>
                        </div>
                        <div class="informer2-grey__box-middle-icons">
                            <img width="100%" height="100%" class="informer2-grey__box-middle-icons-img" src="./icons/cloud-night-middleB.svg">
                        </div>
                        <p class="informer2-grey__text-big">
                            <span class="informer2__number-font informer2__number-font-bold">24°</span>
                        </p>
                    </div>
                </td>
                <td class="informer2-grey__td" colspan="3">
                    <p class="informer2-grey__text-middle">
                        <span class="informer2__number-font">15:48 GMT+3</span>
                    </p>
                    <p class="informer2-grey__text-big">
                        <span class="informer2__text-font">Москва</span>
                    </p>
                    <p class="informer2-grey__text-small">
                        <span class="informer2__text-font">Россия</span>
                    </p>
                </td>
            </tr>
            <tr class="informer2-grey__tr">
                <td class="informer2-grey__td" colspan="3">
                    <div class="informer2-grey__td-flexbox-middle">
                        <div class="informer2-grey__td-flexbox-text">
                            <p class="informer2-grey__text-big">
                                <span class="informer2__text-font">Сб</span>
                            </p>
                            <p class="informer2-grey__text-middle">
                                <span class="informer2__text-font">июль</span>
                                <span class="informer2__number-font informer2__number-font-bold">30</span>
                            </p>
                        </div>
                        <div class="informer2-grey__box-middle-icons">
                            <img width="100%" height="100%" class="informer2-grey__box-middle-icons-img" src="./icons/cloud-night-middleB.svg">
                        </div>
                        <p class="informer2-grey__text-big">
                            <span class="informer2__number-font informer2__number-font-bold">25°</span></p>
                    </div>
                </td>
                <td class="informer2-grey__td" rowspan="2">
                    <p class="informer2-grey__text-big">
                        <span class="informer2__number-font informer2__number-font-bold">24°</span>
                    </p>
                </td>
                <td class="informer2-grey__td" colspan="2" rowspan="2">
                    <div class="informer2-grey__td-flexbox-big">
                        <div class="informer2-grey__box-big-icons">
                            <img width="100%" height="100%" class="informer2-grey__box-big-icons-img" src="./icons/cloud-night-middleB.svg">
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="informer2-grey__tr">
                <td class="informer2-grey__td" colspan="3">
                    <div class="informer2-grey__td-flexbox-middle">
                        <div class="informer2-grey__td-flexbox-text">
                            <p class="informer2-grey__text-big">
                                <span class="informer2__text-font">Сб</span>
                            </p>
                            <p class="informer2-grey__text-middle">
                                <span class="informer2__text-font">июль</span>
                                <span class="informer2__number-font informer2__number-font-bold">30</span>
                            </p>
                        </div>

                        <div class="informer2-grey__box-middle-icons">
                            <img width="100%" height="100%" class="informer2-grey__box-middle-icons-img" src="./icons/cloud-night-middleB.svg">
                        </div>
                        <p class="informer2-grey__text-big">
                            <span class="informer2__number-font informer2__number-font-bold">26°</span></p>
                    </div>
                </td>
            </tr>
            <tr class="informer2-grey__tr">
                <td class="informer2-grey__td" colspan="3">
                    <div class="informer2-grey__td-flexbox-middle">
                        <div class="informer2-grey__td-flexbox-text">
                            <p class="informer2-grey__text-big">
                                <span class="informer2__text-font">Сб</span>
                            </p>
                            <p class="informer2-grey__text-middle">
                                <span class="informer2__text-font">июль</span>
                                <span class="informer2__number-font informer2__number-font-bold">30</span>
                            </p>
                        </div>
                        <div class="informer2-grey__box-middle-icons">
                            <img width="100%" height="100%" class="informer2-grey__box-middle-icons-img" src="./icons/cloud-night-middleB.svg">
                        </div>
                        <p class="informer2-grey__text-big">
                            <span class="informer2__number-font informer2__number-font-bold">27°</span>
                        </p>
                    </div>
                </td>
                <td class="informer2-grey__td" colspan="2" rowspan="2">
                    <div class="informer2-grey__td-flexbox-small">
                        <div class="informer2-grey__box-small-icons">
                            <svg  viewBox="0 0 26 26">
                                <use xlink:href="#wind-route"/>
                            </svg>
                        </div>
                        <p class="informer2-grey__text-small">
                            <span class="informer2__text-font">Северо-западные ветер:</span>
                            <span class="informer2__number-font">4.47</span>
                            <span class="informer2__text-font">м/с</span>
                        </p>
                    </div>
                    <div class="informer2-grey__td-flexbox-small">
                        <div class="informer2-grey__box-small-icons">
                            <svg viewBox="0 0 7 26">
                                <use xlink:href="#pressure-b-2"/>
                            </svg>

                        </div>
                        <p class="informer2-grey__text-small">
                            <span class="informer2__text-font">Давление</span>
                            <span class="informer2__number-font">763</span>
                            <span class="informer2__text-font">мм рт. ст.</span>
                        </p>
                    </div>
                    <div class="informer2-grey__td-flexbox-small">
                        <div class="informer2-grey__box-small-icons">
                            <svg viewBox="0 0 12 18">
                                <use xlink:href="#wet-1-b"/>
                            </svg>

                        </div>
                        <p class="informer2-grey__text-small">
                            <span class="informer2__text-font">Влажность</span>
                            <span class="informer2__number-font">48%</span>
                        </p>
                    </div>
                </td>
                <td class="informer2-grey__td" rowspan="2">
                    <div class="informer2-grey__td-flexbox-small">
                        <div class="informer2-grey__box-small-icons">
                            <svg viewBox="0 0 8 12">
                                <use xlink:href="#dpf-black"/>
                            </svg>
                        </div>
                        <p class="informer2-grey__text-small">
                            <span class="informer2__text-font">dpF</span>
                            <span class="informer2__number-font">58°</span>
                        </p>
                    </div>
                    <div class="informer2-grey__td-flexbox-small">
                        <div class="informer2-grey__box-small-icons">
                            <svg viewBox="0 0 16 16">
                                <use xlink:href="#grade-b"/>
                            </svg>
                        </div>
                        <p class="informer2-grey__text-small">
                            <span class="informer2__number-font">180°</span>
                        </p>
                    </div>
                    <div class="informer2-grey__td-flexbox-small">
                        <div class="informer2-grey__box-small-icons">
                            <svg viewBox="0 0 16 16">
                                <use xlink:href="#wet-b-2"/>
                            </svg>
                        </div>
                        <p class="informer2-grey__text-small">
                            <span class="informer2__number-font">5.36</span>
                            <span class="informer2__number-font">м/с</span>
                        </p>
                    </div>
                </td>
            </tr>
            <tr class="informer2-grey__tr">
                <td class="informer2-grey__td" colspan="3">
                    <div class="informer2-grey__td-flexbox-middle">
                        <div class="informer2-grey__td-flexbox-text">

                            <p class="informer2-grey__text-big">
                                <span class="informer2__text-font">Сб</span>
                            </p>
                            <p class="informer2-grey__text-middle">
                                <span class="informer2__text-font">июль</span>
                                <span class="informer2__number-font informer2__number-font-bold">30</span>
                            </p>
                        </div>
                        <div class="informer2-grey__box-middle-icons">
                            <img width="100%" height="100%" class="informer2-grey__box-middle-icons-img" src="./icons/cloud-night-middleB.svg">
                        </div>
                        <p class="informer2-grey__text-big">
                            <span class="informer2__number-font informer2__number-font-bold">28°</span>
                        </p>
                    </div>
                </td>
            </tr>
            <tr class="informer2-grey__tr">
                <td class="informer2-grey__td" colspan="3">
                    <div class="informer2-grey__td-flexbox-middle">
                        <div class="informer2-grey__td-flexbox-text">

                            <p class="informer2-grey__text-big">
                                <span class="informer2__text-font">Сб</span>
                            </p>
                            <p class="informer2-grey__text-middle">
                                <span class="informer2__text-font">июль</span>
                                <span class="informer2__number-font informer2__number-font-bold">30</span>
                            </p>
                        </div>
                        <div class="informer2-grey__box-middle-icons">
                            <img width="100%" height="100%" class="informer2-grey__box-middle-icons-img" src="./icons/cloud-night-middleB.svg">
                        </div>
                        <p class="informer2-grey__text-big">
                            <span class="informer2__number-font informer2__number-font-bold">29°</span>
                        </p>
                    </div>
                </td>
                <td class="informer2-grey__td" colspan="3">
                    <p class="informer2-grey__text-small">
                        <span class="informer2__number-font informer2__number-font-bold">10 381 222 жителей</span>
                    </p>
                </td>
            </tr>
            <tr class="informer2-grey__background-1"></tr>

            </tbody>
        </table>
    </div>
</div>
</tbody>
</table>
</body>