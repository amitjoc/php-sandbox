<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

use PhpSandbox\DesignPattern\Singleton\Database;

echo "<h1>Singleton Pattern Usage Example</h1>";

// 1. Initialize the database for the first time
echo "Initializing DB1...<br />";
$db1 = Database::init('localhost', 'root', 'password', 'testdb');

// 2. Get the instance again
echo "Getting DB2 instance...<br />";
$db2 = Database::getInstance();

echo "Are DB1 and DB2 the exact same instance? ";
var_dump($db1 === $db2); // Expected: bool(true)
echo "<hr />";

// 3. Try to initialize it again (should fail)
try {
    echo "Trying to initialize DB3...<br />";
    $db3 = Database::init('localhost2', 'another_user', 'pass', 'proddb');
} catch (\RuntimeException $e) {
    echo "Caught expected exception: " . $e->getMessage() . "<br />"; // Expected: Already initialized!
}
echo "<hr />";

// 4. Try to clone the instance (should fail)
try {
    echo "Trying to clone DB1...<br />";
    $db1Clone = clone $db1;
} catch (\RuntimeException $e) {
    echo "Caught expected exception: " . $e->getMessage() . "<br />"; // Expected: Cloning is not allowed!
}
