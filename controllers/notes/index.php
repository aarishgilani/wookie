<?php

use Core\Database;

$heading = "Notes";  

$db = new Database;

$notes = $db->query('select * from notes');
$notes = $notes->findAllOrFail();




view('notes', [
    "notes" => $notes
]);