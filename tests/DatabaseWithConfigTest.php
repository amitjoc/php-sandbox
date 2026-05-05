<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../public/design_pattern/singleton/DatabaseWithConfig.php';

class DatabaseWithConfigTest extends TestCase
{
    protected function tearDown(): void
    {
        // Reset the singleton instance after each test
        $reflection = new ReflectionClass(Database::class);
        $instance = $reflection->getProperty('instance');
        $instance->setAccessible(true);
        $instance->setValue(null);

        $initialized = $reflection->getProperty('initialized');
        $initialized->setAccessible(true);
        $initialized->setValue(false);
    }

    public function testInitAndGetInstance()
    {
        $db1 = Database::init('localhost', 'user', 'pass', 'db');
        $this->assertInstanceOf(Database::class, $db1);

        $db2 = Database::getInstance();
        $this->assertSame($db1, $db2);
    }

    public function testThrowsExceptionIfInitCalledTwice()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Already initialized!');
        Database::init('localhost', 'user', 'pass', 'db');
        Database::init('localhost', 'user', 'pass', 'db');
    }

    public function testThrowsExceptionOnClone()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Database::__clone Cloning is not allowed!');
        $db = Database::init('localhost', 'user', 'pass', 'db');
        $clone = clone $db;
    }
    
    public function testThrowsExceptionIfGetInstanceIsCalledBeforeInit()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Call init() first!');
        Database::getInstance();
    }
}
