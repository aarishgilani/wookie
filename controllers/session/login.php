<?php

view('session/form', [
    'errors' => $_SESSION['_flash']['errors'] ?? NULL
]);