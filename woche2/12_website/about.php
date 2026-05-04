<?php
require_once __DIR__ . '/config/config.php';
include INCLUDES_PATH . '/functions/helper.php';
$site = "about";
$lang = checklang();
include INCLUDES_PATH . '/meta/meta.php';
include INCLUDES_PATH . '/partials/header.php'
?>



<main class="flex-grow-1">
    <div class="container py-4">
        <h2>About</h2>
    </div>

</main>

<?php include INCLUDES_PATH . '/partials/footer.php' ?>