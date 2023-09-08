<?php

use Core\Database;

$db = new Database;
$db->query('INSERT INTO `wookie`.`projects` (`name`, `user_id`, `id`) VALUES (:name, :user_id, :shortname)', [
    ':name' => $_POST['name'],
    ':user_id' => $_SESSION['user_id'],
    ':shortname' => $_POST['shortname']
]);

redirect('/projects');