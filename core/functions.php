<?php

function dd($var) {

    var_dump($var);

    die();
}

function base_path($path) {

    global $base_path;

    return $base_path . $path;
}
