<?php
/**
 * Created by PhpStorm.
 * User: zrhm7232
 * Date: 1/2/19
 * Time: 2:15 PM
 */

include_once 'Reverse.php';

$url = 'https://map.ir/reverse';

$lat = 35.7006311416626;
$lon = 51.3361930847168;
$apiKey = 'Your map.ir api key';

$reverse = new Reverse($url);
var_dump($reverse->get($lat, $lon, $apiKey));