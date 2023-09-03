<?php

use Core\Session;

Session::flush();

view('session/form', [
    'errors' => 'Logged out successfully!'
]);