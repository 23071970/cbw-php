<?php
//echo 'hallo welt <br>';
//echo "hallo welt!";

$name1 = 'Stefan';
$nachname1 = 'Tissot';
$name2 = 'Michael';
$name3 = 'Alan';
$name4 = 'Ray';

$vorNameUndNachname1 = "<h2>$name1 $nachname1</h2>";

$vorNameUndNachname2 = '<h2>' . $name2 . ' ' . $name3 . '</h2>';

$lang = 'en';


//das ist ein kommentar
# das ist auch ein Kommentar
/*
das ist ein mehrzeiliger Kommentar
das ist ein mehrzeiliger Kommentar
das ist ein mehrzeiliger Kommentar
das ist ein mehrzeiliger Kommentar
*/

$tag = 'hr'; //kommentar

$tableBorder = 20;

?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo 'hallo ' ?>
    <br>
    <?php echo $name1 ?>

    <<?= $tag ?>>Hallo welt</<?= $tag ?>>

    <table border="<?= $tableBorder ?>">
        <tr>
            <td><?php echo $name2 //xkommentar  
                ?></td>
            <td><?php echo $name3 ?></td>
        </tr>
        <tr>
            <td><?= $name3 //kommentar
                ?></td>
            <td><?= $name4 ?></td>
        </tr>
    </table>

    <?= $vorNameUndNachname1 . "<!--kommentar--> " . $vorNameUndNachname2 ?>

</body>

</html>