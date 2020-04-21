<?php

class Db {
    
    public static function getConnection(){
        $host = 'localhost:3307';
        $dbname = 'mvc_site';//название БД
        $user = 'root';//логин
        $password = '';//пароль по умолчанию
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);//соз-
        //даем объект класса PDO передав в конструктор параметры соединения при 
        //помощи этого объкта мы будем общаться с БД
        return $db;
    }
   
}
