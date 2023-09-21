<?php

class Query
{
    static function getAllUser(): string
    {
        return "SELECT `name`, email, create_at FROM User";
    }

    static function checkUser(string $name, string $pw): string
    {
        return "SELECT id, email, create_at FROM User WHERE name = '$name' AND password = '$pw'";
    }

    static function insertData(string $userID, string $image): string
    {
        return "INSERT INTO Picture(userID, image) VALUES('$userID', '$image');";
    }

    static function getImage(string $userID): string
    {
        return "SELECT id, image, create_at FROM Picture WHERE userID = '$userID';";
    }
}