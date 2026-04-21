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
            'title' => 'accordion 1',
            'body' => 'hier steht inhalt 1 irgendwas!!!!!'
        ],
        [
            'title' => 'accordion 2',
            'body' => 'hier steht inhalt 2 irgendwas!!!!!'
        ],
        [
            'title' => 'accordion 3',
            'body' => 'hier steht inhalt 3 irgendwas!!!!!'
        ],
    ];





    $accordion = '<div class="accordion" id="accordionExample">';

    foreach ($accordionData1 as $item) {
        $accordion .= '<div class="accordion-item">';
        $accordion .= '<h2 class="accordion-header">';
        $accordion .= '<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">';
        $accordion .= $item['title'];
        $accordion .= '</button>';
        $accordion .= '</h2>';
        $accordion .= '<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">';
        $accordion .= '<div class="accordion-body">';
        $accordion .= $item['body'];
        $accordion .= '</div>';
        $accordion .= '</div>';
        $accordion .= '</div>';
    }

    $accordion .= '</div>';


    echo $accordion;
    ?>





    <!-- <div class="accordion" id="accordionExample">

        <div class="accordion-item">

            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Accordion Item #1
                </button>
            </h2>

            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    inhalt 1
                </div>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    inhlat 2
                </div>
            </div>
        </div>
    </div> -->









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>