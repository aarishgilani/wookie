<?php

namespace Core\Middleware;

use Core\Session;

class Guest
{

    public function handel()
    {
        if (Session::get('logged_in', false)) {
            redirect('/');
        }
    }
}
