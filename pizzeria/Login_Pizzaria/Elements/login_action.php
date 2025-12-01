<?php

session_start();
require 'db.php'; // change db.php to database name

if($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: pizza_login.php'); exit; } //pizza_login.php

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :u LIMIT 1");
$stmt->execute([':u'=>$username]);
$user = $stmt->fetch();

if($user && password_verify($password, $user['password'])) {
    // set session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];

    if($user['role'] === 'admin') {
        header('Location: admin_dashboard.php');
    } else {
        header('Location: client_home.php');
    }
    exit();
} else {
    echo "Invalid credentials. <a href='pizza_login.php'>Try again</a>";
}
