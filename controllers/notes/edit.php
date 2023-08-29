<?php

$db = new Database();

$note = $db->query("select * from notes where id=?", [$_GET['id']])->findOrFail();

view('note-update', [
    'note' => $note
]);