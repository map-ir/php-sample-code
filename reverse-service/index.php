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
$apiKey = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjNjYzMzOTMyOWRmMTdhZWVjNDdiYWJhYzQ5ODk3ZTAwZWNiNGFkZDk5NDJhZjYzY2Q5ODViYjA5ODY1NzFiMDE0NjUyMzllNzZkYTJkMmM3In0.eyJhdWQiOiI2MzUwIiwianRpIjoiM2NjMzM5MzI5ZGYxN2FlZWM0N2JhYmFjNDk4OTdlMDBlY2I0YWRkOTk0MmFmNjNjZDk4NWJiMDk4NjU3MWIwMTQ2NTIzOWU3NmRhMmQyYzciLCJpYXQiOjE1NzAzNjMzNjMsIm5iZiI6MTU3MDM2MzM2MywiZXhwIjoxNTcyODY4OTYzLCJzdWIiOiIiLCJzY29wZXMiOlsiYmFzaWMiXX0.quAJ-hFpiUCabWoF72M-f3bhfJBSqr4IuMA4l4boeIp0SDqqzA5cclQwRNNVKhpfT5mzfAokLSA5K5HeqULM_d3bTgQEub7CKdylHwx9jh-8-mgeaEe1bqoNkTzkl1uUtAW15UXBI_APgb9dJwjp46A_6oxWDbFew8xpzOYkS_G26aNJSuZ00aKX47-bS1tLc4K-mlti56k7H1qj95Cf41UuA02XPGig2lfKgTcCZzEg6aDRTINUtsrSk28LVQ-SI2jwKUpj4LZm71eiOcy2NfNkUwVqkl_x1QGvKHrjKrwvqQfychk9wttJNGmYBMPOqQnWJEw_3KnMpgtq13yyzg';

$reverse = new Reverse($url);
var_dump($reverse->get($lat, $lon, $apiKey));