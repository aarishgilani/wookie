<?php

$heading = "Note";

$db = new Database();

$note = $db->query("select note from notes where id=?", [$_GET['id']])->findOrFail();

view('note', [
    'heading' => 'Note',
    'note' => $note
]);