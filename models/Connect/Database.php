<?php

class Database
{
    public function getConnection()
    {
        try {
            $pdo = new PDO("mysql:dbname=lerenews;host=localhost", "root", "root");
            return $pdo;
        } catch (PDOException $err) {

        }
    }
}