<?php

use Core\Database;

$db = new Database;

$note = $db->query("UPDATE `wookie`.`notes` SET `note` = ?, `title` = ? WHERE `id` = ?", [$_POST['note'], $_POST['title'], $_POST['id']]);

redirect("/notes?id={$_POST['id']}");
