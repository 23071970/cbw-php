<?php
require_once __DIR__ . '/config/config.php';

include INCLUDES_PATH . '/functions/helper.php';

include INCLUDES_PATH . '/components/bs_components.php';


$site = "home";
$lang = checklang();

include INCLUDES_PATH . '/meta/meta.php';
include INCLUDES_PATH . '/partials/header.php';


?>

<main class="flex-grow-1">

    <div class="container py-4">

        <h1>Hallo micha</h1>
        <img height="100" src="<?php echo IMG_URL ?>/1.jpg" alt="">

    </div>

</main>
<?php include INCLUDES_PATH . '/partials/footer.php' ?>