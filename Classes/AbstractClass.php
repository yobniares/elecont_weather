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
                $result = 'Tornado';
                break;
            case 1:
                $result = 'Tropical Storm';
                break;
            case 2:
                $result = 'Hurricane';
                break;
            case 3:
                $result = 'Strong Storms';
                break;
            case 4:
                $result = 'Thunderstorms';
                break;
            case 5:
                //$result = 'Rain / Snow';
                $result = 'Снег с дождём';
                break;
            case 6:
                $result = 'Rain / Sleet';
                break;
            case 7:
                $result = 'Wintry Mix';
                break;
            case 8:
                $result = 'Freezing Drizzle';
                break;
            case 9:
                $result = 'Drizzle';
                break;
            case 10:
                $result = 'Freezing Rain';
                break;
            case 11:
                $result = 'Showers';
                break;
            case 12:
                //$result = 'Rain';
                $result = 'Дождь';
                break;
            case 13:
                $result = 'Flurries';
                break;
            case 14:
                $result = 'Snow Showers';
                break;
            case 15:
                $result = 'Blowing / Drifting Snow';
                break;
            case 16:
                $result = 'Snow';
                break;
            case 17:
                $result = 'Hail';
                break;
            case 18:
                $result = 'Sleet';
                break;
            case 19:
                $result = 'Blowing Dust / Sandstorm';
                break;
            case 20:
                $result = 'Foggy';
                break;
            case 21:
                $result = 'Haze';
                break;
            case 22:
                $result = 'Smoke';
                break;
            case 23:
                $result = 'Breezy';
                break;
            case 24:
                $result = 'Windy';
                break;
            case 25:
                $result = 'Frigid / Ice Crystals';
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
                $result = 'Partly Cloudy Night';
                break;
            case 30:
                $result = 'Partly Cloudy Day';
                break;
            case 31:
                $result = 'Clear Night';
                break;
            case 32:
                $result = 'Sunny Day';
                break;
            case 33:
                $result = 'Fair / Mostly Clear Night';
                break;
            case 34:
                //$result = 'Fair / Mostly Sunny Day';
                $result = 'Ясно / Преимущественно солнечный день';
                break;
            case 35:
                $result = 'Mixed Rain and Hail';
                break;
            case 36:
                $result = 'Hot Day';
                break;
            case 37:
                $result = 'Isolated Thunderstorms';
                break;
            case 38:
                $result = 'Scattered Thunderstorms';
                break;
            case 39:
                $result = 'Scattered Showers Day';
                break;
            case 40:
                $result = 'Heavy Raint';
                break;
            case 41:
                $result = 'Scattered Snow Showers Day';
                break;
            case 42:
                $result = 'Heavy Snow';
                break;
            case 43:
                $result = 'Blizzard';
                break;
            case 44:
                $result = 'Not Available (N/A)';
                break;
            case 45:
                $result = 'Scattered Showers Night';
                break;
            case 46:
                $result = 'Scattered Snow Showers Night';
                break;
            case 47:
                $result = 'Scattered Thunderstorms Night';
                break;
            case 48:
                $result = 'Not Available (N/A)';
                break;
            case 49:
                $result = 'light rain';
                break;
            case 50:
                $result = 'light rain';
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
     * @param $requestArray
     * @return string
     */
    public function generateUrl($requestArray)
    {
        if (isset($requestArray['weather_tip']) && $requestArray['weather_tip'] !=='') {
            if ($requestArray['weather_tip'] == 'weather_wide') {
                $string = '?weather_tip=weather_wide';
            }
            if ($requestArray['weather_tip'] == 'weather_narrow') {
                $string = '?weather_tip=weather_narrow';
            }
        }
        if (isset($requestArray['weather_tip_img']) && $requestArray['weather_tip_img'] !=='') {
            $string.= '&weather_tip_img='.$requestArray['weather_tip_img'];
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
            return 'https://'.$_SERVER['HTTP_HOST'] .'/'. $string;
        } else {
            return 'http://'.$_SERVER['HTTP_HOST'] .'/'. $string;
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
        if ($_REQUEST['weather_tip'] == 'weather_wide') {
            echo $template->renderTemplate('weather_wide', ['object' => $objects['0'], 'objects' => $objects, 'abstractData' => $abstractData]);
        }
        // Template weather_narrow
        if ($_REQUEST['weather_tip'] == 'weather_narrow') {
            echo $template->renderTemplate('weather_narrow', ['object' => $objects['0'], 'objects' => $objects, 'abstractData' => $abstractData]);
        }
    }
}
