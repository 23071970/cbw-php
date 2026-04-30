<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/db/database.php';


$message = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("INSERT INTO users (email,password) VALUES (?,?)");
        $stmt->execute([$email, $pass]);
        $message['success'] = 'Registrierung erfolgreich!';
    } catch (PDOException) {
        $message['error'] = 'Registrierung nicht erfolgreich!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Register</h1>
    <?php include __DIR__ . '/include/partials/navi.php' ?>


    <form action="" method="post">
        <?php if ($message): ?>
            <?php if ($message['error'] ?? ''): ?>
                <p style="color:red"><?= $message['error'] ?></p>
            <?php endif ?>

            <?php if ($message['success'] ?? ''): ?>
                <p style="color:green"><?= $message['success'] ?></p>
            <?php endif ?>
        <?php endif ?>

        <input type="email" name="email" value="stefan.tissot@gmail.com"><br>
        <input type="password" name="pass"><br>

        <button type="submit">Register</button>

    </form>



</body>

</html>