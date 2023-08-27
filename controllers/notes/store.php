<?php

$db = new Database();
$db->query('INSERT INTO `wookie`.`notes` (`note`, `user`, `title`) VALUES (?, 1, ?)', [$_POST['note'], $_POST['title']] );

header('location: /notes');

exit();