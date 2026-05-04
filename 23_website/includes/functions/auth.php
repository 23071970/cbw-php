<?php
//ist in der Session ein User gespeichert
//ist ein User eingeloggt
function isLoggedIn()
{
    return isset($_SESSION['email']);
}

//wenn kein User eingeloggt ist, weiterleiten auf login.php
//in jeder seite, die geschützt werden soll, requireLogin() aufrufen
function requireLogin()
{
    if (!isLoggedIn()) {
        header("Location: index.php?site=login");
        exit;
    }
}

function login(string $email, string $pass, PDO $pdo): bool
{
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);

    $dbUser = $stmt->fetch();

    if ($dbUser && password_verify($pass, $dbUser['password'])) {
        if ($dbUser['id'] == 1) {
            $_SESSION['isAdmin'] = true;
        }

        $_SESSION['email'] = $dbUser['email'];

        return true;
    }

    return false;
}
