<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<?php

$base_path = __DIR__ . '/../';

require $base_path.'core/functions.php';

spl_autoload_register(function ($class) {
    return require base_path("core/{$class}.php");
});

$router = new Router();

$routes = require base_path('routes.php');

$uri = parse_url( $_SERVER['REQUEST_URI'] );

$url = $uri['path'];

if( isset($_POST['_method']) && !empty($_POST['_method']) ){
    $method = $_POST['_method'];
} else {
    $method = $_SERVER['REQUEST_METHOD'];
}

$router->route($url, $method);





