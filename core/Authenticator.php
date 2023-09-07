<?php

namespace Core;

class Authenticator
{

    public function find($email)
    {
        $db = new Database;

        return $db->query('select * from users where email = :email', [
            ':email' => $email,
        ])->findOrFail();
    }

    public function attempt($email, $password)
    {
        $user = $this->find($email);

        if (password_verify($password, $user['password'])) {

            Session::put('logged_in', true);
            Session::put('user_id', $user['id']);
            Session::put('name', $user['name']);
            Session::put('email', $user['email']);

            return true;
        }

        return false;
    }
}
