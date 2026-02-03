<?php

/** 
 * 
 * Singleton Database class with one-time configuration
 * Theri are also other ways to implement singleton with configuration check notes 
*/
final class Database
{
    private static ?self $instance = null;
    private static bool $initialized = false;

    private function __construct(
        private string $host,
        private string $user,
        private string $pass,
        private string $dbname
    ) {}

    // One-time config
    public static function init(string $h, string $u, string $p, string $d): self
    {
        if (self::$initialized) {
            throw new \RuntimeException('Already initialized!');
        }
        self::$instance = new self($h, $u, $p, $d);
        self::$initialized = true;
        return self::$instance;
    }

    // Safe access
    public static function getInstance(): self
    {
        if (!self::$initialized) {
            throw new \RuntimeException('Call init() first!');
        }
        return self::$instance;
    }

    public function __clone()
    {
        throw new \RuntimeException(__METHOD__.' Cloning is not allowed!');
    }
}

$db1 = Database::init('localhost', 'root', 'password', 'testdb');
$db2 = Database::getInstance();

var_dump($db1 === $db2); // true

try {
    $db3 = Database::init('localhost2', 'root', 'password', 'testdb');
    $db3Clone = clone $db1;
    var_dump($db1 === $db3Clone); // true because clone is blocked
} catch (\RuntimeException $e) {
    echo "EXCEPTIONS_::".__LINE__ .'---'. $e->getMessage(); // Cloning is not allowed!
}
