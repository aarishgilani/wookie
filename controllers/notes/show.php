<?php

use Core\Database;

$heading = "Note";

$db = new Database;

$note = $db->query("select * from notes where id=?", [$_GET['id']])->findOrFail();

view('note', [
    'note' => $note
]);