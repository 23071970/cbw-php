<?php
require_once __DIR__ . '/config/config.php';

include INCLUDES_PATH . '/functions/helper.php';


$site = "home";
$lang = checklang();


include INCLUDES_PATH . '/meta/meta.php';
include INCLUDES_PATH . '/partials/header.php'

?>
<?php include INCLUDES_PATH . '/partials/navigation.php' ?>
<main>

    <h1>Hallo micha</h1>
    <img height="100" src="<?php echo IMG_URL ?>/1.jpg" alt="">


</main>
<?php include INCLUDES_PATH . '/partials/footer.php' ?>