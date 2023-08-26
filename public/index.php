<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<?php

$base_path = __DIR__ . '/../';

require $base_path.'core/functions.php';

spl_autoload_register(function ($class) {
    return require base_path("core/{$class}.php");
});

require base_path('router.php');

