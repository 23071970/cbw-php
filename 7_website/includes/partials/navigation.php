<header>
    <h1><?= $meta[$site][$lang]['title'] ?></h1>
    <nav>
        <a href="index.php?lang=<?= $lang ?>"><?= $meta['home'][$lang]['navigation'] ?></a>
        <a href="about.php?lang=<?= $lang ?>"><?= $meta['about'][$lang]['navigation'] ?></a>
        <a href="contact.php?lang=<?= $lang ?>"><?= $meta['contact'][$lang]['navigation'] ?></a>
        <a href="services.php?lang=<?= $lang ?>"><?= $meta['services'][$lang]['navigation'] ?></a>
    </nav>
</header>