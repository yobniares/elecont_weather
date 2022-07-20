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
                $result = 'Преимущественно облачная ночь';
                break;
            case 28:
                //$result = 'Mostly Cloudy Day';
                $result = 'Преимущественно облачный день';
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
                $result = 'Преимущественно ясная ночь';
                break;
            case 34:
                //$result = 'Fair / Mostly Sunny Day';
                $result = 'Преимущественно солнечный день';
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
        $cardinal_array = [
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
        $cardinal = $cardinal_array[ ($direction % 16) ];

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
     * @param $requestArray
     * @return string
     */
    public function generateUrl($requestArray)
    {
        $iniArr = parse_ini_file('app.ini');
        $scriptPath = $iniArr['scriptPath'];

        if (isset($requestArray['weather_tip']) && $requestArray['weather_tip'] !=='') {
            if ($requestArray['weather_tip'] == 'weather_1') {
                $string = '?weather_tip=weather_1';
            }
            if ($requestArray['weather_tip'] == 'weather_2') {
                $string = '?weather_tip=weather_2';
            }
            if ($requestArray['weather_tip'] == 'weather_3') {
                $string = '?weather_tip=weather_3';
            }
            if ($requestArray['weather_tip'] == 'weather_4') {
                $string = '?weather_tip=weather_4';
            }
            if ($requestArray['weather_tip'] == 'weather_5') {
                $string = '?weather_tip=weather_5';
            }
            if ($requestArray['weather_tip'] == 'weather_6') {
                $string = '?weather_tip=weather_6';
            }
            if ($requestArray['weather_tip'] == 'weather_7') {
                $string = '?weather_tip=weather_7';
            }
        }
        if (isset($requestArray['weather_tip_img']) && $requestArray['weather_tip_img'] !=='') {
            $string.= '&weather_tip_img='.$requestArray['weather_tip_img'];
        } else {
            $string.= '&weather_tip_img=img_7_svg';
        }
        if (isset($requestArray['city']) && $requestArray['city'] !=='') {
            $string = '&city='.$requestArray['city'];
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
     * @param $abstractData
     * @return void
     */
    public function getTemplate($template, $objects, $abstractData)
    {

        // Template weather_wide
        if ($_REQUEST['weather_tip'] == 'weather_1') {
            echo $template->renderTemplate('weather_1', ['object' => $objects['0'], 'objects' => $objects, 'abstractData' => $abstractData]);
        }
        // Template weather_2
        if ($_REQUEST['weather_tip'] == 'weather_2') {
            echo $template->renderTemplate('weather_2', ['object' => $objects['0'], 'objects' => $objects, 'abstractData' => $abstractData]);
        }

        // Template weather_3
        if ($_REQUEST['weather_tip'] == 'weather_3') {
            echo $template->renderTemplate('weather_3', ['object' => $objects['0'], 'objects' => $objects, 'abstractData' => $abstractData]);
        }

        // Template weather_4
        if ($_REQUEST['weather_tip'] == 'weather_4') {
            echo $template->renderTemplate('weather_4', ['object' => $objects['0'], 'objects' => $objects, 'abstractData' => $abstractData]);
        }

        // Template weather_5
        if ($_REQUEST['weather_tip'] == 'weather_5') {
            echo $template->renderTemplate('weather_5', ['object' => $objects['0'], 'objects' => $objects, 'abstractData' => $abstractData]);
        }

        // Template weather_6
        if ($_REQUEST['weather_tip'] == 'weather_6') {
            echo $template->renderTemplate('weather_6', ['object' => $objects['0'], 'objects' => $objects, 'abstractData' => $abstractData]);
        }

        // Template weather_7
        if ($_REQUEST['weather_tip'] == 'weather_7') {
            echo $template->renderTemplate('weather_7', ['object' => $objects['0'], 'objects' => $objects, 'abstractData' => $abstractData]);
        }
    }
}
