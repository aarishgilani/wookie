<?php

use Core\Authenticator;
use Core\Session;

if((new Authenticator)->attempt($_POST['email'], $_POST['password'])) {
    redirect('/notes');
}

// Redirect using PRG pattern and pass errors
Session::flash('errors', 'Could not find the an account matching given credentials.');
redirect('/login');
