<?php

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

    public function post()
    {
        $userAgent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36';
        if ($this->headers) {
            curl_setopt($this->client, CURLOPT_HTTPHEADER, $this->headers);
        }
        curl_setopt($this->client, CURLOPT_VERBOSE, 0);
        curl_setopt($this->client, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->client, CURLOPT_USERAGENT, $userAgent);
        $this->server_output = curl_exec($this->client);
        curl_close($this->client);
    }

    public function parse()
    {
        if ($this->server_output) {
            $this->response = $this->server_output;
        } else {
            $this->response = [];
        }
        header("Content-type: img-png");
        echo $this->response;
    }

    public function getResponse()
    {
        return $this->response;
    }
}