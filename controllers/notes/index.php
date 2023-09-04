<?php

use Core\Database;

$heading = "Notes";  

$db = new Database;

$notes = $db->query('select * from notes where user_id = :user_id', [
    ':user_id' => $_SESSION['user_id']
]);
$notes = $notes->findAllOrFail();




view('notes', [
    "notes" => $notes
]);