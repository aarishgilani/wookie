<?php

// Return home if logged in
if(Session::get('logged_in', false)) {
    header('location: /');

    exit();
}

view('session/form', [
    'errors' => Session::get('errors')
]);