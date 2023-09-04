<?php

namespace Core\Middleware;

use Core\Session;

class Auth
{

    public function handel()
    {
        if (!Session::get('logged_in')) {
            redirect('/login');
        }
    }
}
