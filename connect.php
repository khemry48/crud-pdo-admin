<?php
date_default_timezone_set("Asia/Bangkok");

define("DB_HOST", "localhost");
define("DB_NAME", "crud-pdo-admin");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");

try {
    $conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USERNAME, DB_PASSWORD);
    $conn->exec("set names utf8");
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}

function query($SQL, $params = array())
{
    global $conn;
    $q = $conn->prepare($SQL);
    $q->execute($params);
    return $q;
}
?>