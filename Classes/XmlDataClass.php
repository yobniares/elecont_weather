<?php

class XmlDataClass
{
    /**
     * @var string
     */
    protected $mainUrl = '';

    /**
     * @var string
     */
    protected $apiKey = '';

    /**
     * @var string
     */
    protected $additionalParams = '';

    /**
     * @param $mainUrl
     * @param $apiKey
     * @param $additionalParams
     */
    public function __construct(
        $mainUrl,
        $apiKey,
        $additionalParams
    ) {
        $this->mainUrl = $mainUrl;
        $this->apiKey = $apiKey;
        $this->additionalParams = $additionalParams;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        $apiUrl = $this->mainUrl .'&ApiKey='.$this->apiKey.'&'.$this->additionalParams;
        return $apiUrl;
    }

    /**
     * @return array
     */
    public function getObjects()
    {
        $xml = \simplexml_load_file($this->getUrl());
        foreach ($xml->l as $key => $value) {
            $objects[] = $value;
        }
        return $objects;
    }
}
