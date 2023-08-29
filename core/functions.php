<?php

function dd($var) {

    var_dump($var);

    die();

}

function base_path($path) {

    global $base_path;

    return $base_path . $path;

}

function makeView($type, $name, $attributes) {

    extract($attributes);
    return require base_path("{$type}/{$name}.view.php");

}

function view($name, $attributes = []) {

    makeView('views', $name, $attributes);

}

function partial($name, $attributes = []) {

    makeView('views/partials', $name, $attributes);

}

function icon($name, $attributes = []) {

    makeView('views/icons', $name, $attributes);

}

function component($component, $attributes = ['name' => 'button', 'id' => 'button', 'type' => 'submit']) {

    makeView('components', $component, $attributes);
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

function pageTitle() {

    global $url;

    if($url === '/'){
        return "Home";
    }

    $url = str_replace('/', '', $url);

    $url = ucwords($url);

    return $url;

}
