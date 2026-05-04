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
