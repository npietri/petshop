<?php

class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "petShop";
    private static $dbUsername = "root";
    private static $dbUserpassword = "manolo";
    
    private static $connexion_database = null;
    
    public static function connect()
    {
        if(self::$connexion_database == null)
        {
            try
            {
              self::$connexion_database = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connexion_database;
    }
    
    public static function disconnect()
    {
        self::$connexion_database = null;
    }

}


?>