<?php

class Session {

    public static function has($key) {
        return (bool) $_SESSION[$key] ?? false;
    }

    public static function put($key, $value) {

        $_SESSION[$key] = $value;
        
    }

    public static function get($key, $default = NULL) {

        return $_SESSION['_flash'][$key] ?? $_SESSION[$key] ?? $default;

    }

    public static function flash($key, $value) {

        $_SESSION['_flash'][$key] = $value;
        
    }

    public static function unflash() {

        unset($_SESSION['_flash']);
        
    }

    
}