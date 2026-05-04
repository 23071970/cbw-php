<?php
$site = "about";
function checklang()
{
    $langOut = "de";

    $lang = $_GET['lang'] ?? 'de';

    // if(isset($_GET['lang'])){
    //     $lang = $_GET['lang'];
    // }else{
    //     $lang = 'de';
    // }

    if (in_array($lang, ['de', 'en'])) {
        $langOut = htmlspecialchars($lang);
    }



    return $langOut;
}


$lang = checklang();
include 'includes/meta/meta.php';
include 'includes/partials/header.php'
?>
<?php include 'includes/partials/navigation.php' ?>

<main>

</main>

<?php include 'includes/partials/footer.php' ?>