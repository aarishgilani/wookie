<?php

// receiving some data in post global variable.
// validate it against users table to find or fail the user account

use Core\Authenticator;
use Core\Database;
use Core\Session;

$db = new Database;

$user = $db->query('select * from users where email = :email', [
    ':email' => $_POST['email'],
])->findOrFail();

if(Authenticator::attempt($user, $_POST['password'])) {
    redirect('/notes');
}

// Redirect using PRG pattern and pass errors
Session::flash('errors', 'Could not find the an account matching given credentials.');
redirect('/login');



