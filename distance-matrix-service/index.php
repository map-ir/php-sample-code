<?php
/**
 * Created by PhpStorm.
 * User: zrhm7232
 * Date: 1/2/19
 * Time: 2:15 PM
 */

include_once 'DistanceMatrix.php';

$url = 'https://map.ir/distancematrix';

$origins = [
    [
        'first_origin', // id
        35.704965, // lat
        51.355551 // lon
    ]
];
$destinations = [
    [
        'first_destination',
        35.720104,
        51.399038
    ]
];
$sorted = true;
$apiKey='Your map.ir api key';

$distance_matrix = new DistanceMatrix($url);
print_r($distance_matrix->get($apiKey, $origins, $destinations, $sorted));