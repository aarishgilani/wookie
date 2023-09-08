<?php

use Core\Database;

$db = new Database;
$db->query('INSERT INTO `wookie`.`notes` (`note`, `user_id`, `title`) VALUES (:body, :user_id, :title)', [
    ':body' => $_POST['note'],
    ':user_id' => $_SESSION['user_id'],
    ':title' => $_POST['title']
]);

redirect('/');