<?php


/**
 *
 */
class AbstractClass
{

    /**
     * @param $code
     * @return string
     */
    public function getWeatherDescription($code)
    {
        switch ($code) {
            case 0:
                //$result = 'Tornado';
                $result = 'Торнадо';
                break;
            case 1:
                //$result = 'Tropical Storm';
                $result = 'Тропический шторм';
                break;
            case 2:
                //$result = 'Hurricane';
                $result = 'Ураган';
                break;
            case 3:
                //$result = 'Strong Storms';
                $result = 'Сильные бури';
                break;
            case 4:
                //$result = 'Thunderstorms';
                $result = 'Грозы';
                break;
            case 5:
                //$result = 'Rain / Snow';
                $result = 'Снег с дождём';
                break;
            case 6:
                $result = 'Rain / Sleet';
                $result = 'Дождь/мокрый снег';
                break;
            case 7:
                //$result = 'Wintry Mix';
                $result = 'Зимний микс';
                break;
            case 8:
                //$result = 'Freezing Drizzle';
                $result = 'Изморозь';
                break;
            case 9:
                //$result = 'Drizzle';
                $result = 'Морось';
                break;
            case 10:
                //$result = 'Freezing Rain';
                $result = 'Холодный дождь';
                break;
            case 11:
                //$result = 'Showers';
                $result = 'Ливень';
                break;
            case 12:
                //$result = 'Rain';
                $result = 'Дождь';
                break;
            case 13:
                //$result = 'Flurries';
                $result = 'Порывистый ветер';
                break;
            case 14:
                //$result = 'Snow Showers';
                $result = 'Снегопады';
                break;
            case 15:
                //$result = 'Blowing / Drifting Snow';
                $result = 'Метель / Поземка';
                break;
            case 16:
                //$result = 'Snow';
                $result = 'Снег';
                break;
            case 17:
                //$result = 'Hail';
                $result = 'Град';
                break;
            case 18:
                //$result = 'Sleet';
                $result = 'Мокрый снег';
                break;
            case 19:
                //$result = 'Blowing Dust / Sandstorm';
                $result = 'Пыль / Песчаная буря';
                break;
            case 20:
                //$result = 'Foggy';
                $result = 'Туманно';
                break;
            case 21:
                //$result = 'Haze';
                $result = 'Туман';
                break;
            case 22:
                //$result = 'Smoke';
                $result = 'Дым';
                break;
            case 23:
                //$result = 'Breezy';
                $result = 'Прохладно';
                break;
            case 24:
                //$result = 'Windy';
                $result = 'Ветрено';
                break;
            case 25:
                //$result = 'Frigid / Ice Crystals';
                $result = 'Ледяные кристаллы';
                break;
            case 26:
                //$result = 'Cloudy';
                $result = 'Облачно';
                break;
            case 27:
                //$result = 'Mostly Cloudy Night';
                $result = 'Облачная ночь';
                break;
            case 28:
                //$result = 'Mostly Cloudy Day';
                $result = 'Облачно';
                break;
            case 29:
                //$result = 'Partly Cloudy Night';
                $result = 'Переменная облачность';
                break;
            case 30:
                //$result = 'Partly Cloudy Day';
                $result = 'Переменная облачность';
                break;
            case 31:
                //$result = 'Clear Night';
                $result = 'Ясная ночь';
                break;
            case 32:
                $result = 'Солнечно';
                //$result = 'Sunny Day';
                break;
            case 33:
                //$result = 'Fair / Mostly Clear Night';
                $result = 'Ясная ночь';
                break;
            case 34:
                //$result = 'Fair / Mostly Sunny Day';
                $result = 'Солнцечно';
                break;
            case 35:
                //$result = 'Mixed Rain and Hail';
                $result = 'Дождь и град';
                break;
            case 36:
                //$result = 'Hot Day';
                $result = 'Жарко';
                break;
            case 37:
                //$result = 'Isolated Thunderstorms';
                $result = 'Местами грозы';
                break;
            case 38:
                //$result = 'Scattered Thunderstorms';
                $result = 'Рассеянные грозы';
                break;
            case 39:
                //$result = 'Scattered Showers Day';
                $result = 'Местами дожди';
                break;
            case 40:
                //$result = 'Heavy Raint';
                $result = 'Ливень';
                break;
            case 41:
                //$result = 'Scattered Snow Showers Day';
                $result = 'Местами снежные дожди';
                break;
            case 42:
                //$result = 'Heavy Snow';
                $result = 'Сильный снегопад';
                break;
            case 43:
                //$result = 'Blizzard';
                $result = 'Снежная буря';
                break;
            case 44:
                //$result = 'Not Available (N/A)';
                $result = 'Недоступно';
                break;
            case 45:
                //$result = 'Scattered Showers Night';
                $result = 'Ночью местами дождь';
                break;
            case 46:
                //$result = 'Scattered Snow Showers Night';
                $result = 'Ночью местами дождь';
                break;
            case 47:
                //$result = 'Scattered Thunderstorms Night';
                $result = 'Ночью местами гроза';
                break;
            case 48:
                //$result = 'Not Available (N/A)';
                $result = 'Недоступно';
                break;
            case 49:
                //$result = 'light rain';
                $result = 'Небольшой дождь';
                break;
            case 50:
                //$result = 'light rain';
                $result = 'Небольшой дождь';
                break;
        }

        return $result;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        $time = date('H:i');
        return $time;
    }

    /**
     * @return string
     */
    public function getDate($format)
    {
        $date = date($format);
        return $date;
    }

    /**
     * @return string
     */
    public function getWeek()
    {
        $weekArr = [
            'Воскресенье',
            'Понедельник',
            'Вторник',
            'Среда',
            'Четверг',
            'Пятница',
            'Суббота'
        ];

        $week = date('w');
        return $weekArr[$week];
    }

    /**
     * @param $date
     * @return string
     */
    public function getNameOfTheDate($date)
    {
        $weekArr = [
            'ВС',
            'ПН',
            'ВТ',
            'СР',
            'ЧТ',
            'ПТ',
            'СБ',
        ];

        $nameOfTheDay = date('w', strtotime($date));
        return $weekArr[$nameOfTheDay];
    }

    /**
     * @param $dateString
     * @param $format
     * @return false|string
     */
    public function getDateFromString($dateString, $format)
    {
        return date($format, strtotime($dateString));
    }

    /**
     * @param $dateString
     * @return string
     */
    public function getMonthFromString($dateString)
    {
        $arr = [
            'Январь',
            'Февраль',
            'Март',
            'Апрель',
            'Май',
            'Июнь',
            'Июль',
            'Август',
            'Сентябрь',
            'Октябрь',
            'Ноябрь',
            'Декабрь'
        ];

        $month =  date('n', strtotime($dateString))-1;
        return $arr[$month];
    }

    /**
     * @return string
     */
    public function getFullDate()
    {
        $arr = [
            'Января',
            'Февраля',
            'Марта',
            'Апреля',
            'Мая',
            'Июня',
            'Июля',
            'Августа',
            'Сентября',
            'Октября',
            'Ноября',
            'Декабря'
        ];

        $month = date('n')-1;
        return date('d') . ' ' .$arr[$month].' '.date('Y');
    }

    /**
     * @param $degree
     * @return string
     */
    public function getWwindDirection($degree)
    {
        $direction = $degree / 22.5 + .5;
        $cardinalArray = [
            "Северный", // N
            "Северо-северо-восточный", // NNE
            "Северо-восточный", // NE
            "Востоко-северо-восточный", // ENE
            "Восточный", // E
            "Востоко-юго-восток", // ESE
            "Юго-восточный", // SE
            "Юго-юго-восточный", // SSE
            "Южный", // S
            "Юго-юго-западный", // SSW
            "Юго-западный", // SW
            "Западо-юго-западный", //  WSW
            "Западный", // W
            "Западо-северо-западный", // WNW
            "Северо-западный", // NW
            "Северо-северо-запад" // NNW
        ];


        $cardinalArrayShort = [
            "Северный", // N
            "Северо-восточный", // NNE
            "Северо-восточный", // NE
            "Северо-восточный", // ENE
            "Восточный", // E
            "Юго-восточный", // ESE
            "Юго-восточный", // SE
            "Юго-восточный", // SSE
            "Южный", // S
            "Юго-западный", // SSW
            "Юго-западный", // SW
            "Юго-западный", //  WSW
            "Западный", // W
            "Северо-западный", // WNW
            "Северо-западный", // NW
            "Северо-западный", // NNW
        ];

        $cardinal = $cardinalArrayShort[ ($direction % 16) ];

        return $cardinal . ' ветер';
    }

    /**
     * @param $value
     * @return string
     */
    public function getMetersPerSecond($value)
    {
        $meterPerSecond = ($value * 0.44704);
        return number_format($meterPerSecond, '2', '.', '');
    }

    /**
     * @param $value
     * @return string
     */
    public function getMillimetersOfMercury($value)
    {
        $millimetersOfMercury = ($value * 25.4);
        return number_format($millimetersOfMercury, '0', '.', '');
    }

    /**
     * @param $value
     * @return string
     */
    public function getPopulate($value)
    {
        return number_format($value, '0', ',', ' ');
    }

    /**
     * @return string|void
     */
    public function getTimesOfDay($time)
    {
        // ToDo: optimize method
        date_default_timezone_set('Europe/Moscow');
        //$time = date('H:i', time());

        if ($time >= 0 && $time <= 5) {
            return 'Ночь';
        }
        if ($time >= 5 && $time <= 10) {
            return 'Утро';
        }
        if ($time >= 10 && $time <= 18) {
            return 'День';
        }
        if ($time >= 18 && $time <= 23) {
            return 'Вечер';
        }
    }

    /**
     * @param $gmtMin
     * @param $timeString
     * @return string
     */
    public function getGmtTime($gmtMin, $timeString)
    {
        $gmt = $gmtMin/60;
        $time = date('H:i', strtotime($timeString. ' + ' . $gmt . 'hours'));
        return $time;
    }

    /**
     * @param $object
     * @return string
     */
    public function getWeatherIcon($object, $className = '', $color = '')
    {
        if (!empty($_REQUEST['weather_tip_img'])) {
            if($color !=='') {
                $img = '<img class="'.$className. '" src="assets/'. $_REQUEST['weather_tip_img'] . '/icons/icon_' . $color .'_'.$object['icon'] . '.svg" />';
            } else {
                $img = '<img class="'.$className. '" src="assets/'. $_REQUEST['weather_tip_img'] . '/icons/icon_' . $object['icon'] . '.svg" />';
            }

        } else {
            $img = '';
        }

        return $img;
    }

    /**
     * @param $object
     * @return string
     */
    public function getBgWeatherIconSrc($object, $extension = '', $name = '')
    {
        if (!empty($_REQUEST['weather_tip_img'])) {
            if($name !=='') {
                $src = 'assets/'. $_REQUEST['weather_tip_img'] . '/bg/' .'informer-'.$_REQUEST['weather_tip'] .'/'. $name .'_'. $object['icon'] .'.'.$extension;
            } else {
                $src = 'assets/'. $_REQUEST['weather_tip_img'] . '/bg/' .'informer-'.$_REQUEST['weather_tip'] .'/'. $object['icon'] .'.'.$extension;
            }

        } else {
            $src = '';
        }

        return $src;
    }

    /**
     * @param $requestArray
     * @return string
     */
    public function generateUrl($requestArray)
    {
        $iniArr = parse_ini_file('app.ini');
        $scriptPath = $iniArr['scriptPath'];

        if (isset($requestArray['weather_tip']) && $requestArray['weather_tip'] !=='') {
            $string = '?weather_tip='.$requestArray['weather_tip'];
        }

        if (isset($requestArray['weather_tip_img']) && $requestArray['weather_tip_img'] !=='') {
            $string.= '&weather_tip_img='.$requestArray['weather_tip_img'];
        } else {
            $string.= '&weather_tip_img=img_7_svg';
        }
        if (isset($requestArray['city']) && $requestArray['city'] !=='') {
            $string.= '&city='.$requestArray['city'];
        }
        if (isset($requestArray['font_family']) && $requestArray['font_family'] !=='') {
            $string.= '&font_family='.$requestArray['font_family'];
        }
        if (isset($requestArray['color_fon']) && $requestArray['color_fon'] !=='') {
            $string.= '&color_fon='.urlencode($requestArray['color_fon']);
        }
        if (isset($requestArray['font_text']) && $requestArray['font_text'] !=='') {
            $string.= '&font_text='.urlencode($requestArray['font_text']);
        }
        if (isset($requestArray['font_tempo']) && $requestArray['font_tempo'] !=='') {
            $string.= '&font_tempo='.urlencode($requestArray['font_tempo']);
        }
        if (isset($requestArray['transpar']) && $requestArray['transpar'] =='1') {
            $string.= '&transpar=1';
        } else {
            $string.= '&transpar=0';
        }
        if (isset($_SERVER['HTTPS']) &&
            ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
            isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
            $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
            return 'https://'.$_SERVER['HTTP_HOST'] . $scriptPath . $string;
        } else {
            return 'http://'.$_SERVER['HTTP_HOST'] . $scriptPath . $string;
        }
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        $iniArr = parse_ini_file('app.ini');
        $scriptPath = $iniArr['scriptPath'];

        if (isset($_SERVER['HTTPS']) &&
            ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
            isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
            $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
            return 'https://'.$_SERVER['HTTP_HOST'] . $scriptPath;
        } else {
            return 'http://'.$_SERVER['HTTP_HOST'] . $scriptPath;
        }
    }

    /**
     * @param $template
     * @param $objects
     * @param $mainObject
     * @param $abstractData
     * @return void
     */
    public function getTemplate($template, $objects, $mainObject, $abstractData)
    {
        if (isset($_REQUEST['weather_tip']) && $_REQUEST['weather_tip'] !== '') {
            if ($_REQUEST['weather_tip_img'] == 'classic') {
                echo $template->renderTemplate(
                    'classic/weather_'.$_REQUEST['weather_tip'],
                    [
                        'object' => $objects['0'],
                        'objects' => $objects,
                        'mainObject' => $mainObject,
                        'abstractData' => $abstractData
                    ]
                );
            }

            if ($_REQUEST['weather_tip_img'] == 'ht') {
                echo $template->renderTemplate(
                    'high-tech/weather_'.$_REQUEST['weather_tip'],
                    [
                        'object' => $objects['0'],
                        'objects' => $objects,
                        'mainObject' => $mainObject,
                        'abstractData' => $abstractData
                    ]
                );
            }

            if ($_REQUEST['weather_tip_img'] == 'neon') {
                echo $template->renderTemplate(
                    'neon/weather_'.$_REQUEST['weather_tip'],
                    [
                        'object' => $objects['0'],
                        'objects' => $objects,
                        'mainObject' => $mainObject,
                        'abstractData' => $abstractData
                    ]
                );
            }
        }
    }
}
