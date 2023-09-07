<?php

namespace Core;

class Authenticator
{
    public static function attempt($user, $password)
    {

        if ( password_verify($password, $user['password']) ) {

            Session::put('logged_in', true);
            Session::put('user_id', $user['id']);
            Session::put('name', $user['name']);
            Session::put('email', $user['email']);

            return true;
        }

        return false;

    }
}
