<?php

class Database 
{

    private static ?self $dbInstance = null;

    // PDO connection parameters
    private string $dbHost = "localhost";
    private string $dbDriver = "mysql";
    private string $dbName = "testdb";
    // Database credentials
    private string $dbUsername = "root";
    private string $dbPassword = "password";

    // Create PDO connection string using above parameters
    private string $dbConnectionString = "mysql:host=localhost;dbname=testdb";

    private function __construct() {}  // blocking new keyword use completely 

    public static function getInstance(): self
    {
        if (!is_null(self::$dbInstance)) return self::$dbInstance;
        return self::$dbInstance = new self();
    }
 
}

// Example 
// Usage of Singleton Database class so we
$db1 = Database::getInstance();
$db2 = Database::getInstance();
var_dump($db1 === $db2); // true

$db3Clone = clone $db1; 

var_dump($db1 === $db3Clone); // false why  because clone creates a new instance so is clone is save 
