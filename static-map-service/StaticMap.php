<?php

include_once 'CURL.php';

class StaticMap
{
    private  $lat, $lon, $url, $apiKey, $zoom_level, $width, $height, $color, $title;

    public $response;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function get($lat, $lon, $zoom_level, $width, $height, $apiKey, $title='', $color='default')
    {
        $this->lat = $lat;
        $this->lon = $lon;
        $this->apiKey = $apiKey;
        $this->zoom_level=$zoom_level;
        $this->width =$width;
        $this->height=$height;
        $this->title=$title;
        $this->color=$color;
        $curl = new CURL($this->makeURL());
        $curl->setHeaders([
            'accept: image/png',
            'x-api-key:'.$this->apiKey
        ]);
        $curl->post();
        return $curl->parse();
    }


    private function makeURL()
    {
          return  $this->url
              .'?width=' .$this->width
              .'&height='.$this->height
              .'&zoom_level='.$this->zoom_level
              .'&markers=color:'.$this->color
              .'|label:'.$this->lon.','.$this->lat
              .'|'.$this->title;
    }

}