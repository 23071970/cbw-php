<?php
require_once INCLUDES_PATH . "/partials/header.php";
include INCLUDES_PATH . "/data/dummy.php";
include INCLUDES_PATH . "/components/bs_components.php";
?>


<main class="flex-grow-1">
    <div class="container py-4">
        <h2 class="h1"><?= htmlspecialchars(strtoupper($_GET['site'] ?? 'Home')) ?></h2>

        <?= accordion($accordionData1) ?>

    </div>
</main>



<?php require_once INCLUDES_PATH . "/partials/footer.php"; ?>