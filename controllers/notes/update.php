<?php

 

$db = new Database();

$note = $db->query("UPDATE `wookie`.`notes` SET `note` = ?, `title` = ? WHERE `id` = ?", [$_POST['note'], $_POST['title'], $_POST['id']]);

header("location: /note?id={$_POST['id']}");

exit();