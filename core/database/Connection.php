<?php

class Connection {
    public static function make ($config) {
        try {
            return new PDO("{$config['host']}; dbname={$config['name']}", "{$config['user']}", "{$config['password']}");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}