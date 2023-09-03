<?php

namespace Core;

use Core\Middleware\Middleware;

class Router
{

    public $routes = [];

    protected $url;

    protected $method;

    public function add($method, $controller, $url, $middleware = null)
    {

        $this->routes[] = [
            'url' => $url,
            'controller' => $controller,
            'method' => $method,
            'middleware' => $middleware
        ];

        return $this;
    }

    public function get($url, $controller)
    {

        return $this->add('GET', $controller, $url);
    }

    public function post($url, $controller)
    {

        return $this->add('POST', $controller, $url);
    }

    public function delete($url, $controller)
    {

        return $this->add('DELETE', $controller, $url);
    }

    public function patch($url, $controller)
    {

        return $this->add('PATCH', $controller, $url);
    }

    public function put($url, $controller)
    {

        return $this->add('PUT', $controller, $url);
    }

    public function route($url, $method)
    {

        foreach ($this->routes as $route) {

            if ($url === $route['url'] && $method === $route['method']) {

                if ($route['middleware']) {
                    Middleware::resolve($route['middleware']);
                }

                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }

    public function only($middleware)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $middleware;
    }

    protected function abort($code = 404)
    {
        view('abort');

        http_response_code($code);

        exit();
    }
}
