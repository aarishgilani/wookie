<?php

/**
 * Application Routes
 * 
 * Available Methods:
 *  GET => Page routing
 *  POST => Create new data
 *  PUT/PATCH => Update exisiting data
 *  DELETE => Delete exisiting data
 * 
 * Middleware Methods (only):
 *  Null => Allow all
 *  Guest => Only allow users who are not yet signed in
 *  Auth => Only allow signed in users
 * 
 */

$router->get('/', 'controllers/home.php');
$router->get('/about', 'controllers/about.php');

$router->get('/notes', 'controllers/notes/index.php')->only('auth');
$router->get('/notes/create', 'controllers/notes/create.php')->only('auth');
$router->post('/notes/create', 'controllers/notes/store.php')->only('auth');
$router->delete('/notes', 'controllers/notes/destroy.php')->only('auth');
$router->put('/notes', 'controllers/notes/update.php')->only('auth');
$router->get('/note/edit', 'controllers/notes/edit.php')->only('auth');
$router->get('/note', 'controllers/notes/show.php')->only('auth');

$router->get('/register', 'controllers/registrations/create.php')->only('guest');
$router->post('/register', 'controllers/registrations/store.php')->only('guest');

$router->get('/login', 'controllers/session/login.php')->only('guest');
$router->post('/login', 'controllers/session/auth.php')->only('guest');
$router->get('/logout', 'controllers/session/logout.php')->only('auth');

$router->get('/projects', 'controllers/projects/index.php');