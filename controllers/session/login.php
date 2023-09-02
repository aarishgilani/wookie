<?php

// Return home if logged in
if(Session::get('logged_in') ?? false) {
    header('location: /');

    exit();
}

view('session/form', [
    'errors' => $_SESSION['_flash']['errors'] ?? NULL
]);