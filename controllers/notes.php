<?php

$heading = "Notes";

$db = new Database();

$notes = $db->query();

view('notes', [
    "notes" => $notes
]);