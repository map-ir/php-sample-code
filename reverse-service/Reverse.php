<?php

include_once 'CURL.php';

class Reverse
{
    private  $lat, $lon, $url, $apiKey;

    public $response;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function get($lat, $lon, $apiKey)
    {
        $this->lat = $lat;
        $this->lon = $lon;
        $this->apiKey = $apiKey;
        $curl = new CURL($this->makeURL());
        $curl->setHeaders([
            'Content-Type: application/json',
            'x-api-key:'.$this->apiKey
        ]);
        $curl->get();
        return $curl->parse();
    }


    private function makeURL()
    {
          return  $this->url.'?lat='.$this->lat.'&lon='.$this->lon;
    }

}