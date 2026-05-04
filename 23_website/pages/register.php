<?php
require_once INCLUDES_PATH . "/partials/header.php";

$message = [];
if ($_POST) {
    $email = $_POST['email'];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    try {
        $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $stmt->execute([$email, $pass]);
        $message['success'] = "Registriert!";
    } catch (PDOException $e) {
        $message['error'] = "User existiert bereits!";
        //möglichst wenig Informationen über die Datenbank preisgeben, daher allgemeine Fehlermeldung bei Fehlern ;)$e könnte in eine logger.php Datei geloggt werden.
        // Beispiel: logger.php könnte so aussehen:
        // file_put_contents('error_log.txt', $e->getMessage(), FILE_APPEND);
    }
}
?>

<main class="flex-grow-1">

    <div class="container py-4">
        <h1>Registrieren</h1>
        <?php if ($message): ?>
            <?php if (isset($message['error'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo htmlspecialchars($message['error']); ?>
                </div>
            <?php endif; ?>
            <?php if (isset($message['success'])): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo htmlspecialchars($message['success']); ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <form method="post" action="index.php?site=register">
            <div class="row">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="pass" class="form-label">Password</label>
                    <input class="form-control" type="password" id="pass" value="peitsche" name="pass" placeholder="Password" required>
                </div>
            </div>
            <div class="col-12 mt-3">
                <button class="btn btn-primary" type="submit">Register</button>
            </div>
        </form>

    </div>
</main>


<?php require_once INCLUDES_PATH . "/partials/footer.php"; ?>