<script src="https://cdn.tailwindcss.com"></script>
<?php

$base_path = __DIR__ . '/../';

require $base_path.'core/functions.php';

require base_path('router.php');

spl_autoload_register(function ($class) {
    return require base_path("core/{$class}.php");
});

$db = new Database();

$notes = $db->query();

dd($notes);