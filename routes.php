<?php

// return [
//     '/' => 'controllers/home.php',
//     '/about' => 'controllers/about.php',
//     '/notes' => 'controllers/notes.php',
//     '/note' => 'controllers/note.php',
//     '/note-create' => 'controllers/note-create.php',
//     '/contact' => 'views/contact.view.php'
// ];




$router->get('/', 'controllers/home.php');
$router->get('/about', 'controllers/about.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes/create', 'controllers/notes/store.php');
$router->delete('/notes', 'controllers/notes/destroy.php');
$router->put('/notes', 'controllers/notes/update.php');
$router->get('/note/edit', 'controllers/notes/edit.php');
$router->get('/note', 'controllers/notes/show.php');

$router->get('/contact', 'controllers/contact.php');