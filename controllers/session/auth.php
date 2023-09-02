<?php

// receiving some data in post global variable.
// validate it against users table to find or fail the user account

$db = new Database;

$user = $db->query('select * from users where email = :email and password = :password', [
    ':email' => $_POST['email'],
    ':password' => $password = $_POST['password']
])->findOrFail();

if($user) {
    
    // Login if password matches
    if($user['password'] === $_POST['password']) {
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



