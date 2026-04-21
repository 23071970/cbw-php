<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $meta[$site][$lang]['description'] ?>">
    <meta name="keywords" content="<?= $meta[$site][$lang]['keywords'] ?>">
    <title><?= $meta[$site][$lang]['title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo CSS_URL ?>/style.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include INCLUDES_PATH . '/partials/navigation.php' ?>