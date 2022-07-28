<?php

class XmlDataClass
{

    /**
     * @var string
     */
    protected $apiKey = '';

    /**
     * @var string
     */
    protected $additionalParams = '';

    /**
     * @param $apiKey
     * @param $additionalParams
     */
    public function __construct(
        $apiKey,
        $additionalParams
    ) {
        $this->apiKey = $apiKey;
        $this->additionalParams = $additionalParams;
    }

    /**
     * @return string
     */
    public function getMailUrl()
    {
        if (!empty($_REQUEST['weather_tip_img']) && isset($_REQUEST['city'])) {
            $city = $_REQUEST['city'];
        } else {
            $city = 'Москва';
        }

        $content = file_get_contents('http://api.geonames.org/searchJSON?q='.urlencode($city).'&username=evgenii&style=full');
        $find = json_decode($content);

        if ($find->totalResultsCount > 0) {
            $lat = $find->geonames[0]->lat;
            $lng = $find->geonames[0]->lng;
            $coordTop = $lat + 0.5;
            $coordLeft = $lng - 0.5;
            $coordBottom = $lat - 0.5;
            $coordRight = $lng + 0.5;
            $mainUrl = 'http://airquality.elecont.com/ElecontAirQuality/?top='.$coordTop.'&left='.$coordLeft.'&bottom='.$coordBottom.'&right='.$coordRight.'&numberX=8&numberY=8&type=999&srcT=2';
            //$backUrl = 'http://airquality.eweatherhd.com/ElecontAirQuality/?top='.$coordTop.'&left='.$coordLeft.'&bottom='.$coordBottom.'&right='.$coordRight.'&numberX=8&numberY=8&type=999&srcT=2';
        } else {
            //$mainUrl = 'http://airquality.elecont.com/ElecontAirQuality/?top=55.9&left=36.8&bottom=55.1&right=38.2&numberX=8&numberY=8&type=999&srcT=2';
            $mainUrl = 'http://airquality.eweatherhd.com/ElecontAirQuality/?top=55.9&left=36.8&bottom=55.1&right=38.2&numberX=8&numberY=8&type=999&srcT=2';
        }

        return $mainUrl;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        $apiUrl = $this->getMailUrl() .'&ApiKey='.$this->apiKey.'&'.$this->additionalParams;
        return $apiUrl;
    }

    /**
     * @return array
     */
    public function getObjects()
    {
        $xml = @simplexml_load_file($this->getUrl());
        if ($xml === false) {
            // Error!
        }
        foreach ($xml->l as $key => $value) {
            $objects[] = $value;
        }
        return $objects;
    }
}
