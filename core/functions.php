<?php

function dd($var) {

    var_dump($var);

    die();

}

function base_path($path) {

    global $base_path;

    return $base_path . $path;

}

function view($name, $attributes = []) {

    extract($attributes);

    return require base_path("views/{$name}.view.php");

}

function url($path) {

    global $url;

    if($path === $url) {
        return true;
    }
    else {
        return false;
    }

}
