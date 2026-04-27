<?php
// echo '<pre>';
// print_r($_FILES);

if (isset($_FILES['image'])) {
    $file = $_FILES['image'];
    $fileType = $file['type']; //'image/jpeg'
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $maxSize = 5000000; //5000000 = 5mb

    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

    if ($fileError === 0) {
        if ($fileSize < $maxSize) {

            if (in_array($fileType, $allowedTypes)) {
                move_uploaded_file($fileTmpName, 'uploads/' . $fileName);
                echo 'datei erfolgreich hochgeladen!';
            } else {
                echo 'Keine gültige Bilddatei!';
            }
        } else {
            echo 'Datei ist zu groß!';
        }
    } else {
        echo 'Fehler beim Hochladen der datei!';
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post" enctype="multipart/form-data">

        <input type="file" name="image">

        <button type="submit">Upload</button>

    </form>

</body>

</html>