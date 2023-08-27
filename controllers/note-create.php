<?php

$db = new Database();

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['note'] ) ){
    $db->query('INSERT INTO `wookie`.`notes` (`note`, `user`, `title`) VALUES (?, 1, ?)', [$_POST['note'], $_POST['title']] );

    header('location: /notes');
    exit();
}



view('note-create', [
    'heading' => 'Untitled'
]);