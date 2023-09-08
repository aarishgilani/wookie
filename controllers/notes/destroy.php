<?php

use Core\Database;

$db = new Database;
$db->query('DELETE FROM `wookie`.`notes` WHERE `id`=?', [ $_POST['id'] ]);

redirect('/notes');