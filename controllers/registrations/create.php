<?php

use Core\Session;

view('registrations/create', [
    'errors' => Session::get('errors')
]);