<?php

$routes = require 'routes.php';


$uri = $_SERVER['REQUEST_URI'];

if( array_key_exists($uri, $routes) ) {
    require(base_path($routes[$uri]));
}