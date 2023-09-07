<?php

// connect to database

use Core\Authenticator;
use Core\Database;
use Core\Session;

$dd = new Database();

$user = $dd->query('select email from users where email = :email', [
    ':email' => $_POST['email']
])->findOrFail();

// check if user exisits
if ($user) {

    $_SESSION['_flash']['errors'] = 'Account already exists, please log in.';

    redirect('/login');
}

if ($_POST['password'] !== $_POST['confirm-password']) {

    Session::flash('errors', 'Password confirmation does not match.');

    header('location: /register');
    exit();
}

$dd->query("insert into users ( name, email, password ) values (:name, :email, :password)", [
    ':name' => $_POST['name'],
    ':email' => $_POST['email'],
    ':password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
]);

if((new Authenticator)->attempt($_POST['email'], $_POST['password'])) {
    redirect('/notes');
}
