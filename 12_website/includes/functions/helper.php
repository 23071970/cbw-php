<?php
function checklang()
{
    $langOut = "de";

    $lang = $_GET['lang'] ?? 'de';

    // if (isset($_GET['lang'])) {
    //     $lang = $_GET['lang'];
    // } else {
    //     $lang = 'de';
    // }

    if (in_array($lang, ['de', 'en'])) {
        $langOut = htmlspecialchars($lang);
    }

    return $langOut;
}

//für die navi zum highliten
function isActive($page)
{
    return basename($_SERVER['PHP_SELF']) === $page ? 'active' : '';
}

function isActive2($site, $siteName)
{
    return $site === $siteName  ? 'active' : '';
}
