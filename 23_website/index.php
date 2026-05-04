<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . "/config/config.php";
require_once INCLUDES_PATH . "/functions/helper.php";
require_once DB_PATH . "/database.php";
require_once INCLUDES_PATH . '/functions/auth.php';


switch ($_GET['site'] ?? 'home') {
    case 'home':
        $data = [
            'lang' => 'de',
            'title' => 'Home'
        ];
        require_once PAGES_PATH . "/home.php";
        break;
    case 'about':
        $data = [
            'lang' => 'de',
            'title' => 'About Us'
        ];
        require_once PAGES_PATH . "/about.php";
        break;
    case 'contact':
        include INCLUDES_PATH . "/data/dummy.php";
        include INCLUDES_PATH . "/components/bs_components.php";
        $data = [
            'lang' => 'de',
            'title' => 'Contact Us',
            'accordion' => accordion($accordionData2)
        ];

        require_once PAGES_PATH . "/contact.php";
        break;
    case 'services':
        $data = [
            'lang' => 'de',
            'title' => 'Our Services'
        ];
        require_once PAGES_PATH . "/services.php";
        break;
    case 'register':
        $data = [
            'lang' => 'de',
            'title' => 'Register'
        ];
        require_once PAGES_PATH . "/register.php";
        break;
    case 'login':
        $data = [
            'lang' => 'de',
            'title' => 'Login'
        ];
        require_once PAGES_PATH . "/login.php";
        break;
    case 'logout':
        require_once PAGES_PATH . "/logout.php";
        break;
    case 'geheim':
        $data = [
            'lang' => 'de',
            'title' => 'Geheime Seite'
        ];
        require_once PAGES_PATH . "/geheim.php";
        break;

    default:
        $data = [
            'lang' => 'de',
            'title' => 'Page Not Found'
        ];
        require_once PAGES_PATH . "/404.php";
        break;
}
