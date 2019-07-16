<?php

include_once 'StaticMap.php';

$url = 'https://map.ir/static';

$lat = 35.7006311416626;
$lon = 51.3361930847168;
//zoom level from 1 to 19
$zoom_level = 12;
//pixel size width
$width = 700;
//pixel size height
$height = 400;
//icon color
$color = 'default';
// title icon
$title = 'map';
// api key in https://corp.map.ir
$apiKey='Your map.ir api key';

$static= new StaticMap($url);
var_dump($static->get($lat, $lon, $zoom_level, $width, $height, $apiKey, $title, $color));