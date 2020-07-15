<?php

global $pdo;

try {
    $pdo = new PDO("mysql:dbname=sitecomdb;host=localhost", "root", "");
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}
?>
