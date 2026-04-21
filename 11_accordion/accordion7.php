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
        ],
    ];


    $accordionData2 = [
        [
            'show' => false,
            'title' => ' aus data 2 accordion 1',
            'body' => 'hier steht inhalt 1 irgendwas!!!!!'
        ],
        [
            'show' => false,
            'title' => 'aus data 2  accordion 2',
            'body' => 'hier steht inhalt 2 irgendwas!!!!!'
        ],
        [
            'show' => false,
            'title' => 'aus data 2  accordion 3',
            'body' => 'hier steht inhalt 3 irgendwas!!!!!'
        ],
    ];


    function accordion($data)
    {
        static $id  = 0;
        $id++;

        echo $accordion_id = $id;
        $accordion = '<div class="accordion" id="accordionExample' . $accordion_id . '">';

        foreach ($data as $index => $item) {
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
        return $accordion .= '</div>';
    }


    echo accordion($accordionData1);

    echo '<br><br><br>';
    echo accordion($accordionData2);


    echo '<br><br><br>';
    echo accordion($accordionData2);




    ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>