<?php

class UserDAO   {

    //Store the PDO agent here.
    private static $db;

    static function init()  {
        //Initialize the internal PDO Agent
        self::$db = new PDOAgent("User");

    }

    //Get the user
    static function getUser(string $userName)  {
        
        $sqlQuery = "SELECT * FROM users WHERE username = '$userName';";

        //Query!
        self::$db->query($sqlQuery);

        //Bind

        //Execute!
        self::$db->execute();

        //Return the results!
        return self::$db->singleResult();
    
    }

    static function getUsers()  {

        $sqlQuery = "SELECT * FROM users ORDER BY id;";
        
        //Query!
        self::$db->query($sqlQuery);

        //Bind

        //Execute!
        self::$db->execute();

        //Return the results!
        return self::$db->getResultSet();
        
    }
    
    
}