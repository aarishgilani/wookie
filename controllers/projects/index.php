<?php

use Core\Database;

$db = new Database;

$projects = $db->query('select * from projects where user_id = :user_id', [
    ':user_id' => $_SESSION['user_id']
]);
$projects = $projects->findAllOrFail();

view('projects/index', [
    'projects' => $projects
]);