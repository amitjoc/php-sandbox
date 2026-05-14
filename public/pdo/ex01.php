<?php

require_once __DIR__ . '/../../vendor/autoload.php';

Dotenv\Dotenv::createImmutable(__DIR__ . '/../../')->load();

// create mysql dns string for pdo driver
$mysqlDNS = sprintf(
    'mysql:host=%s;dbname=%s;charset=utf8mb4',
    $_ENV['MYSQL_HOST'],
    $_ENV['MYSQL_DATABASE']
);

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($mysqlDNS,$_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'], $options);

echo "<h1>PDO simple query</h1>";
$noOfRow =$_GET['r'] ?? 10;
$stmt = $pdo->query("select * from actor limit $noOfRow ");
while ($row = $stmt->fetch()) {
    echo $row['actor_id'] . '--' . $row['first_name'];
    echo "<hr />";
}

echo "<h1>PDO prepared query</h1>";
$stmt = $pdo->prepare("SELECT * FROM actor LIMIT :rowCount  OFFSET :offset");
$stmt->bindValue(':offset', 5);
$stmt->bindValue(':rowCount', $noOfRow);
$stmt->execute();
while ($row = $stmt->fetch()) {
    echo $row['actor_id'] . '--' . $row['first_name'];
    echo "<hr />";
}
