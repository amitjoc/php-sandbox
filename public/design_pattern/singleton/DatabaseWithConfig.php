<?php

/** 
 * 
 * Singleton Database class with one-time configuration
 * There are also other ways to implement singleton with configuration check notes 
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
            throw new \RuntimeException('Already initialized!', 3);
        }
        self::$instance = new self($h, $u, $p, $d);
        self::$initialized = true;
        return self::$instance;
    }

    // Safe access
    public static function getInstance(): self
    {
        if (!self::$initialized) {
            throw new \RuntimeException('Call init() first!', 1);
        }
        return self::$instance;
    }

    public function __clone()
    {
        throw new \RuntimeException(__METHOD__.' Cloning is not allowed!',2);
    }
}
