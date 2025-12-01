<?php

session_start();
require 'db.php'; //Change db.php to the name of the database

if($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: registration.php'); exit; } //registration.php change if needed

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if($username === '' || $password === '') {
    die('Username and password required.');
}

// check existing
$stmt = $pdo->prepare("SELECT id FROM users WHERE username = :u");
$stmt->execute([':u'=>$username]);
if($stmt->fetch()) {
    die('Username already taken. <a href="registration.php">Try again</a>');
}

$hash = password_hash($password, PASSWORD_DEFAULT);
$stmt = $pdo->prepare("INSERT INTO users (username, password, role) VALUES (:u, :p, 'user')");
$stmt->execute([':u'=>$username, ':p'=>$hash]);

echo "Registered. <a href='pizza_login.php'>Login</a>";

?>