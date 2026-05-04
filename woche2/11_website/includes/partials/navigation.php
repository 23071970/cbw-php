<header>
    <h1><?= $meta[$site][$lang]['title'] ?></h1>
    <nav>
        <a href="index.php?lang=<?= $lang ?>"><?= $meta['home'][$lang]['navigation'] ?></a>
        <a href="about.php?lang=<?= $lang ?>"><?= $meta['about'][$lang]['navigation'] ?></a>
        <a href="contact.php?lang=<?= $lang ?>"><?= $meta['contact'][$lang]['navigation'] ?></a>
        <a href="services.php?lang=<?= $lang ?>"><?= $meta['services'][$lang]['navigation'] ?></a>

        <!-- <a href="?lang=de">DE</a>
        /
        <a href="?lang=en">EN</a> -->

        <select name="" onchange="window.location.href='<?= htmlspecialchars(basename($_SERVER['PHP_SELF']))  ?>?lang='+this.value">
            <option value="de" <?= $lang === 'de' ? 'selected' : '' ?>>DE</option>
            <option value="en" <?= $lang === 'en' ? 'selected' : '' ?>>EN</option>
        </select>


    </nav>
</header>