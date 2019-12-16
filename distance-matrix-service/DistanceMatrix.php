<?php

include_once 'CURL.php';

class DistanceMatrix
{
    private $url, $apiKey, $origins, $destinations, $sorted;

    public $response;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function get($apiKey, $origins, $destinations, $sorted)
    {
        $this->origins = $origins;
        $this->destinations = $destinations;
        $this->sorted = $sorted;
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
        $origins_url = $this->makeLocations($this->origins);
        $destinations_url = $this->makeLocations($this->destinations);
        $sorted_url = 'false';
        if ($this->sorted) $this->sorted = 'true';
        return  $this->url."?origins=$origins_url&destinations=$destinations_url&sorted=$sorted_url";
    }

    private function makeLocations($locations)
    {
        $result = '';
        $total = count($locations);
        foreach ($locations as $index => $location) {
            $id = $location[0];
            $lat = $location[1];
            $lon = $location[2];
            $result .= "$id,$lat,$lon";
            if ($index != $total-1) {
                $result .= '|';
            }
        }
        return $result;
    }
}