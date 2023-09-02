<?php

// receiving some data in post global variable.
// validate it against users table to find or fail the user account

$db = new Database;

$user = $db->query('select * from users where email = :email and password = :password', [
    ':email' => $_POST['email'],
    ':password' => $password = $_POST['password']
])->findAllOrFail();

if($user) {

    $_SESSION['logged_in'] === true;
    $_SESSION['email'] === $user['email'];
    $_SESSION['name'] === $user['name'];

    header('location: /notes');

    exit();

}

return view('session/view',[
    'errors' => []
]);



