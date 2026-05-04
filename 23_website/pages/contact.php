<?php require_once INCLUDES_PATH . "/partials/header.php" ?>


<main class="flex-grow-1">

    <div class="container py-4">

        <h1>Contact</h1>
        <img height="100" src="<?php echo IMG_URL ?>/1.jpg" alt="">

        <?= $data['accordion'] ?? [] ?>

    </div>

</main>



<?php require_once INCLUDES_PATH . "/partials/footer.php" ?>