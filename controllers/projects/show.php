<?php

use Core\Database;

$db = new Database;

$project = $db->query("select * from projects where id=?", [$_GET['id']])->findOrFail();

view('projects/show', [
    'project' => $project
]);