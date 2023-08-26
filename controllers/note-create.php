<?php

$db = new Database();

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['note'] ) ){
    $db->query('INSERT INTO `wookie`.`notes` (`note`, `user`) VALUES (?, 1)', [$_POST['note']] );
}



view('note-create', [
    'heading' => 'Create'
]);