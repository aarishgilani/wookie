<?php

$routes = require 'routes.php';


$uri = parse_url( $_SERVER['REQUEST_URI'] );

$url = $uri['path'];

if( array_key_exists($url, $routes) ) {
    require(base_path($routes[$url]));
}