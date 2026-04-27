<?php



if (isset($_FILES['image'])) {


    // echo '<pre>';
    //print_r($_FILES);

    $file = $_FILES['image'];
    $fileCount = count($file['name']);

    for ($i = 0; $i < $fileCount; $i++) {

        //$fileType = $file['type']; //'image/jpeg'

        $fileName = $file['name'][$i];
        $fileTmpName = $file['tmp_name'][$i];
        $fileSize = $file['size'][$i];
        $fileError = $file['error'][$i];
        $maxSize = 5000000; //5000000 = 5mb

        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];



        if ($fileError === 0) {
            if ($fileSize < $maxSize) {

                if (checkMimeType($fileTmpName, $allowedTypes)) {

                    $uniqFileName = uniqid('img_', true);

                    $fileName = $uniqFileName;

                    move_uploaded_file($fileTmpName, 'uploads/' . $fileName . '.jpg');
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
}

function checkMimeType($fileTmpName, $allowedTypes): bool
{
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_file($finfo, $fileTmpName);
    $isAllowed = in_array($mimeType, $allowedTypes);
    return $isAllowed;
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

        <input type="file" name="image[]" multiple accept="image/*" required>

        <button type="submit">Upload</button>

    </form>

</body>

</html>