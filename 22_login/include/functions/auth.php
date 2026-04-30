<?php


function isLoggedIn()
{
    return isset($_SESSION['email']);
}


function requireLogin()
{
    if (!isLoggedIn()) {
        header('Location: login.php');
    }
}



function login($email, $pass, $pdo): bool
{
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute([$email]);

    $dbUser = $stmt->fetch();

    if ($dbUser && password_verify($pass, $dbUser['password'])) {
        return true;
    }

    return false;
}
