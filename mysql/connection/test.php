<?php

// lets connect db with PDO

$db = null;

try {
    $db = new PDO('sqlite:data.db', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // $stmt = $db->query('SHOW DATABASES');

    // print_r($stmt->fetchAll());
} catch (PDOException $e) {
    die("Error: ".$e->getMessage());
}
$db = null;


