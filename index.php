<?php

require 'database.php';

// $stmt = $pdo->query('SELECT * FROM users');

// $sql = "SELECT * FROM users WHERE name = :name AND login = :login";  // for selecting data

$sql = "INSERT INTO users (name, login) Values (:name, :login)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'name' => 'Salim',
    'login' => 'salimboy'
]);

$users = $stmt->fetchAll();

// foreach($users as $user){
//     echo "{$user['name']} - {$user['login']}" . "<br>";
// }

var_dump($users);
