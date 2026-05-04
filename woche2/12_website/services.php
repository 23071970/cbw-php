<?php
require_once __DIR__ . '/config/config.php';

include INCLUDES_PATH . '/functions/helper.php';
include INCLUDES_PATH . '/components/bs_components.php';

$site = "services";
$lang = checklang();
include INCLUDES_PATH . '/meta/meta.php';
include INCLUDES_PATH . '/partials/header.php';


$accordionData1 = [
    [
        'show' => false,
        'title' => 'accordion 1',
        'body' => 'hier steht inhalt 1 irgendwas!!!!!'
    ],
    [
        'show' => false,
        'title' => 'accordion 2',
        'body' => 'hier steht inhalt 2 irgendwas!!!!!'
    ],
    [
        'show' => false,
        'title' => 'accordion 3',
        'body' => 'hier steht inhalt 3 irgendwas!!!!!'
    ]
];

$accordionDataLang = [
    'de' => [
        [
            'show' => false,
            'title' => 'de accordion 1',
            'body' => 'de hier steht inhalt 1 irgendwas!!!!!'
        ],
        [
            'show' => false,
            'title' => 'de accordion 2',
            'body' => 'de hier steht inhalt 2 irgendwas!!!!!'
        ],
        [
            'show' => false,
            'title' => 'de accordion 3',
            'body' => 'de hier steht inhalt 3 irgendwas!!!!!'
        ]
    ],
    'en' => [
        [
            'show' => false,
            'title' => 'en accordion 1',
            'body' => 'en hier steht inhalt 1 irgendwas!!!!!'
        ],
        [
            'show' => false,
            'title' => 'en accordion 2',
            'body' => 'en hier steht inhalt 2 irgendwas!!!!!'
        ],
        [
            'show' => false,
            'title' => 'en accordion 3',
            'body' => 'en hier steht inhalt 3 irgendwas!!!!!'
        ]
    ],

];

?>

<main class="flex-grow-1">

    <div class="container py-4">
        <?= accordionlang($accordionDataLang, $lang) ?>
    </div>

</main>

<?php include INCLUDES_PATH . '/partials/footer.php' ?>