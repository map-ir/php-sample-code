<?php
/**
 * Created by PhpStorm.
 * User: zrhm7232
 * Date: 1/2/19
 * Time: 4:01 PM
 */

include_once 'CURL.php';

class Search
{
    private $text, $coordinate, $lat, $lon, $select, $filter, $url, $apiKey;

    public $response;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function get($text, $lat, $lon, $select = null, $filter = null, $apiKey)
    {
        $this->text = $text;
        $this->lat = $lat;
        $this->lon = $lon;
        $this->select = $select;
        $this->filter = $filter;
        $this->apiKey = $apiKey;
        $this->makeCoordinate($this->lat, $this->lon);

        $curl = new CURL($this->url);
        $curl->setHeaders([
            'Content-Type: application/json',
            'x-api-key:'.$this->apiKey
        ]);
        $curl->post($this->makeRequest());
        return $curl->parse();
    }

    private function makeCoordinate($lat, $lon)
    {
        $this->coordinate = [
            'type' => 'Point',
            'coordinates' => [
                $lon,
                $lat
            ]
        ];
    }

    private function makeRequest()
    {
        $request = [
            'text' => $this->text,
            'location' => $this->coordinate
        ];

        if ($this->select) {
            $request['$select'] = $this->select;
        }

        if ($this->filter) {
            $request['$filter'] = $this->filter;
        }

        return $request;
    }

}