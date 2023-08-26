<?php

$heading = "Notes";

$db = new Database();

$notes = $db->query('select * from notes where id=3');
$notes = $notes->findOrFail();


view('notes', [
    "notes" => $notes
]);