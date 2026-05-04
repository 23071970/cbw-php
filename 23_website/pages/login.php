<?php

$message = [];



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $pass = $_POST['pass'] ?? '';

    if (login($email, $pass, $pdo)) {
        $_SESSION['email'] = $email;
        header("Location: index.php?site=geheim");
        exit;
    } else {
        $message['error'] = 'E-Mail oder Passwort falsch.';
    }
}



require_once INCLUDES_PATH . "/partials/header.php";
?>


<main class="flex-grow-1">
    <div class="container py-4">
        <h1>Login</h1>


        <?php if (isset($message['error'])): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo htmlspecialchars($message['error']); ?>
            </div>
        <?php endif; ?>

        <form method="post" action="index.php?site=login">
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label" for="email">Email:</label>
                    <input class="form-control" type="email" id="email" name="email">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label class="form-label" for="pass">Password:</label>
                    <input class="form-control" type="password" id="pass" name="pass">
                </div>
            </div>

            <div class="col-12 mt-3">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>

        </form>

    </div>
</main>




<?php require_once INCLUDES_PATH . "/partials/footer.php"; ?>