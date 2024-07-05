<?php

namespace app\Library;

class sayHelloClass
{
    public static function cnosole_log($data)
    {
        echo '<script>';
        echo 'console.log('.json_encode($data).')';
        echo '</script>';
    }

    public static function sayHello()
    {
        echo "Hello World!";
    }
}
