<?php

// receiving some data in post global variable.
// validate it against users table to find or fail the user account

use Core\Database;
use Core\Session;

$db = new Database;

$user = $db->query('select * from users where email = :email', [
    ':email' => $_POST['email'],
])->findOrFail();

if($user) {
    
    // Login if password matches
    if(password_verify($_POST['password'], $user['password'])) {
        Session::put('logged_in', true);
        Session::put('email', $user['email']);
        Session::put('name', $user['name']);

        header('location: /notes');

        exit();
    }

}

// Redirect using PRG pattern and pass errors
Session::flash('errors', 'Could not find the an account matching given credentials.');

header('location: /login');

exit();



