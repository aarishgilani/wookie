<?php

$heading = "Notes";  

$db = new Database();

$notes = $db->query('select * from notes');
$notes = $notes->findOrFail();




view('notes', [
    "notes" => $notes
]);