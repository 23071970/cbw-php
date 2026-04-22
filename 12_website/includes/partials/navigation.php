<header>
    <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg " data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= isActive('index.php') ?>" aria-current="page" href="index.php?lang=<?= $lang ?>"><?= strtoupper($meta['home'][$lang]['navigation']) ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= isActive('about.php') ?>" href="about.php?lang=<?= $lang ?>"><?= strtoupper($meta['about'][$lang]['navigation']) ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= isActive('contact.php') ?>" href="contact.php?lang=<?= $lang ?>"><?= strtoupper($meta['contact'][$lang]['navigation']) ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= isActive('services.php') ?>" href="services.php?lang=<?= $lang ?>"><?= strtoupper($meta['services'][$lang]['navigation']) ?></a>
                    </li>
                </ul>
                <div class="d-flex" role="search">
                    <select name="lang" id="lang" class="form-select form-select-sm" onchange="window.location.href='<?= htmlspecialchars(basename($_SERVER['PHP_SELF'])) ?>?lang='+this.value;">
                        <option value="de" <?= $lang === 'de' ? 'selected' : '' ?>>DE</option>
                        <option value="en" <?= $lang === 'en' ? 'selected' : '' ?>>EN</option>
                    </select>
                </div>
            </div>
        </div>
    </nav>







</header>