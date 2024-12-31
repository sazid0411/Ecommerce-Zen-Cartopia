<?php

$db_host = 'localhost'; 
$user_name = 'root'; 
$user_password = ''; 
$db_name = 'zen_cartopia'; 

try {
    $dsn = "mysql:host=$db_host;dbname=$db_name";
    $conn = new PDO($dsn, $user_name, $user_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
