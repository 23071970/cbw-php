<?php
require_once __DIR__ . '/config/config.php';

include INCLUDES_PATH . '/components/bs_components.php';

include INCLUDES_PATH . '/functions/helper.php';
$site = "contact";
$lang = checklang();
include INCLUDES_PATH . '/meta/meta.php';
include INCLUDES_PATH . '/partials/header.php';



$accordionData1 = [
    [
        'show' => false,
        'title' => 'Ray ',
        'body' => 'hier steht inhalt 1 irgendwas!!!!!'
    ],
    [
        'show' => false,
        'title' => 'Micha',
        'body' => '086324098'
    ],
    [
        'show' => false,
        'title' => 'Alan',
        'body' => '045 985475'
    ],
];
?>


<main>
    <?= accordion($accordionData1) ?>
</main>

<?php include INCLUDES_PATH . '/partials/footer.php' ?>