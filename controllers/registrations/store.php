<?php 

// connect to database

use Core\Database;
use Core\Session;

$dd = new Database();

$user = $dd->query('select email from users where email = :email', [
    ':email' => $_POST['email']
])->findOrFail();

// check if user exisits
if($user) {

    header('location: /login');

    // pass a banner notifying user that they already have an account
    // following PRG pattern flashing session here
    $_SESSION['_flash']['errors'] = 'Account already exists, please log in.';

    exit();

}

if($_POST['password'] !== $_POST['confirm-password']) {

    Session::flash('errors', 'Password confirmation does not match.');

    header('location: /register');
    exit();

}

$dd->query("insert into users ( name, email, password ) values (:name, :email, :password)", [
    ':name' => $_POST['name'],
    ':email' => $_POST['email'],
    ':password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
]);

Session::put('name', $_POST['name']);
Session::put('email', $_POST['email']);
Session::put('user_id', $user['id']);
Session::put('logged_in', true);


header('location: /notes');

exit();
