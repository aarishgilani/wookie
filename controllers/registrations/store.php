<?php 

// connect to database
$dd = new Database();

$user = $dd->query('select email from users where email = :email', [
    ':email' => $_POST['email']
])->findOrFail();

// check if user exisits
if(!isset($user['error'])) {

    header('location: /login');

    exit();

} else {

    $dd->query("insert into users ( name, email, password ) values (:name, :email, :password)", [
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password']
    ]);

    $_SESSION['name'] = $_POST['name'];
    $_SESSION['logged_in'] = true;


    header('location: /notes');

    exit();

}

// if exists re direct to homepage

// if does not exist create one and log him in