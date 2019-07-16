<?php

include_once 'Route.php';

$url = 'https://map.ir/';
/**
 * Coordinates
 * String of format {longitude},{latitude};{longitude},{latitude}[;{longitude},{latitude} …]
 * or polyline({polyline})
 **/
$coordinates='51.421047,35.732936;51.422185,35.731821';
/**
 * Your map.ir api key
 * corp.map.ir
 */
$apiKey='Your map.ir api key';
/**
 * Search for alternative routes and return as well.
 * bool true or false
 */
$alternatives= true;
/**
 * Return route steps for each route leg
 * bool true or false
 */
$steps= false;
/**
 * Add overview geometry either
 * full : display all zoom level
 * simplified :according to highest zoom level it could be display on
 * false: not at all
 *
 */
$overview='full';
/**
 * Route : Normal Route and default
 * BicycleRoute : route for bicycle
 * FootRoute : route for human
 * RouteTarh : does not route inside tarh area
 * RouteZojOFard : does not route inside zojofard area
 */
$type='BicycleRoute';
$route = new Route($url);
var_dump($route->get($coordinates, $alternatives, $steps, $overview, $type, $apiKey));