<?php

use Core\Authenticator;
use Core\Session;

$auth = new Authenticator;

// check if user exisits
if ($auth->exists($_POST['email'])) {

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

if ($auth->attempt($_POST['email'], $_POST['password'])) {
    redirect('/notes');
}
