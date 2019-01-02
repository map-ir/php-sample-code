<?php
/**
 * Created by PhpStorm.
 * User: zrhm7232
 * Date: 1/2/19
 * Time: 3:43 PM
 */

class CURL
{
    public $client;

    public $url;

    public $headers;

    public $respone;
    private $server_output;

    public function __construct($url)
    {
        $this->client = curl_init();
        $this->url = $url;

        curl_setopt($this->client, CURLOPT_URL, $this->url);
    }

    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    public function post(array $request)
    {
        curl_setopt($this->client, CURLOPT_POST, 1);
        if ($this->headers) {
            curl_setopt($this->client, CURLOPT_HTTPHEADER, $this->headers);
        }
        curl_setopt($this->client, CURLOPT_POSTFIELDS, json_encode($request));
        curl_setopt($this->client, CURLOPT_RETURNTRANSFER, true);
        $this->server_output = curl_exec($this->client);
        curl_close($this->client);
    }

    public function parse()
    {
        if ($this->server_output) {
            $this->respone = json_decode($this->server_output, true);
        } else {
            $this->respone = [];
        }

        return $this->respone;
    }

    public function getResponse()
    {
        return $this->respone;
    }
}