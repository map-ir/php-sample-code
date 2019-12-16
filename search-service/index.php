<?php
/**
 * Created by PhpStorm.
 * User: zrhm7232
 * Date: 1/2/19
 * Time: 2:15 PM
 */

include_once 'Search.php';

$url = 'https://map.ir/search';
/*
 * necessary inputs
 */
$text = 'آزادی';
$lat = 35.7006311416626;
$lon = 51.3361930847168;

/*
 * optional inputs
 * select: poi, roads, city, neighborhood
 * filter: province eq خراسان رضوی
 */
$select = 'poi';
$filter = 'province eq قم';
$apiKey='Your map.ir api key';

$search = new Search($url);

var_dump($search->get($text, $lat, $lon, $select, $filter, $apiKey));