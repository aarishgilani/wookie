<?php

function base_path($path) {

    global $base_path;

    return $base_path . $path;
}

function dd($var) {

    var_dump($var);

    die();
}