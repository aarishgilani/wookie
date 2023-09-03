<?php

use Core\Session;

view('session/form', [
    'errors' => Session::get('errors')
]);