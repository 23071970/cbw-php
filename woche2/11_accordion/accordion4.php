<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


</head>

<body>

    <?php
    $accordionData1 = [
        [
            'show' => true,
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
        ],
    ];


    $accordion_id = 1;

    $accordion = '<div class="accordion" id="accordionExample' . $accordion_id . '">';

    foreach ($accordionData1 as $index => $item) {
        $accordion .= '<div class="accordion-item">';
        $accordion .= '<h2 class="accordion-header">';
        $accordion .= '<button class="accordion-button ' . ($item['show'] ? '' : 'collapsed') . '" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . $accordion_id . $index . '" aria-expanded="' . ($item['show'] ? 'true' : 'false') . '" aria-controls="collapse' . $index . '">';
        $accordion .= $item['title'];
        $accordion .= '</button>';
        $accordion .= '</h2>';
        $accordion .= '<div id="collapse' . $accordion_id . $index . '" class="accordion-collapse collapse ' . ($item['show'] ? 'show' : '') . '" data-bs-parent="#accordionExample' . $accordion_id . '">';
        $accordion .= '<div class="accordion-body">';
        $accordion .= $item['body'];
        $accordion .= '</div>';
        $accordion .= '</div>';
        $accordion .= '</div>';
    }

    $accordion .= '</div>';


    echo $accordion;



    $accordion_id = 2;

    $accordion = '<div class="accordion" id="accordionExample' . $accordion_id . '">';

    foreach ($accordionData1 as $index => $item) {
        $accordion .= '<div class="accordion-item">';
        $accordion .= '<h2 class="accordion-header">';
        $accordion .= '<button class="accordion-button ' . ($item['show'] ? '' : 'collapsed') . '" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . $accordion_id . $index . '" aria-expanded="' . ($item['show'] ? 'true' : 'false') . '" aria-controls="collapse' . $index . '">';
        $accordion .= $item['title'];
        $accordion .= '</button>';
        $accordion .= '</h2>';
        $accordion .= '<div id="collapse' . $accordion_id . $index . '" class="accordion-collapse collapse ' . ($item['show'] ? 'show' : '') . '" data-bs-parent="#accordionExample' . $accordion_id . '">';
        $accordion .= '<div class="accordion-body">';
        $accordion .= $item['body'];
        $accordion .= '</div>';
        $accordion .= '</div>';
        $accordion .= '</div>';
    }

    $accordion .= '</div>';

    echo $accordion;


    $accordion_id = 3;

    $accordion = '<div class="accordion" id="accordionExample' . $accordion_id . '">';

    foreach ($accordionData1 as $index => $item) {
        $accordion .= '<div class="accordion-item">';
        $accordion .= '<h2 class="accordion-header">';
        $accordion .= '<button class="accordion-button ' . ($item['show'] ? '' : 'collapsed') . '" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . $accordion_id . $index . '" aria-expanded="' . ($item['show'] ? 'true' : 'false') . '" aria-controls="collapse' . $index . '">';
        $accordion .= $item['title'];
        $accordion .= '</button>';
        $accordion .= '</h2>';
        $accordion .= '<div id="collapse' . $accordion_id . $index . '" class="accordion-collapse collapse ' . ($item['show'] ? 'show' : '') . '" data-bs-parent="#accordionExample' . $accordion_id . '">';
        $accordion .= '<div class="accordion-body">';
        $accordion .= $item['body'];
        $accordion .= '</div>';
        $accordion .= '</div>';
        $accordion .= '</div>';
    }

    $accordion .= '</div>';

    echo $accordion;




    ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>