<?php

class Router {

    protected $routes = [];

    public function add($method, $controller, $url)
    {

        $this->routes[] = [
            'url' => $url,
            'controller' => $controller,
            'method' => $method
        ];

    }

    public function get($url, $controller)
    {

        $this->add('GET', $controller, $url);

    }

    public function post($url, $controller)
    {

        $this->add('POST', $controller, $url);

    }

    public function delete($url, $controller)
    {

        $this->add('DELETE', $controller, $url);
        
    }

    public function patch($url, $controller)
    {

        $this->add('PATCH', $controller, $url);
        
    }

    public function put($url, $controller)
    {

        $this->add('PUT', $controller, $url);
        
    }

    public function route($url, $method)
    {

        foreach($this->routes as $route)
        {
            if( $url === $route['url'] && $method === $route['method'] ) {
                return require base_path($route['controller']) ;
            }
        }

    }

    protected function abort($code = 404)
    {

        // add view redirection here

        http_response_code($code);

        exit();
    }

}