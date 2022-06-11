<!-- * Check if user logged in -->
<!-- <?php


session_start();
$curr_user = '';
$isExistsUser = false;


$PATH_ROOT = $GLOBALS['PATH_ROOT'];
$curr_route = $GLOBALS['curr_route'];


if (isset($_SESSION['user_name'])) {
    $curr_user = $_SESSION['user_name'];
    $curr_user_type = $_SESSION['user_type'];

    $isExistsUser = true;
    if (isset($_SESSION['user_type'])) {
        if ($_SESSION['user_type'] != 'admin') {
            echo ("<script>location.href = '" . $PATH_ROOT . "';</script>");
        }
    }
} else {
    echo ("<script>location.href = '" . $PATH_ROOT . "';</script>");
}
console_log($curr_user . ' is loged-in in system');
console_log('User type is: ' . $curr_user_type);
?> -->



<?php

use App\Controllers\MerchantController;

$merchantController = new MerchantController();


echo "<html lang='en'>";
// -------------
// Header
// -------------

require_once "./App/Views/Merchant/partials/Header.php";


echo '<body>';


echo '<div class="q2a-wrapper">';
// -------------
// side bar
// -------------

include_once "./App/Views/Merchant/partials/Sidebar.php";


// -------------
// Admin Content
// -------------

echo '<div class="q2a-content">';
// -------------
// Nav 
// -------------
include_once "./App/Views/Merchant/partials/Navbar.php";

echo '<div class="q2a-content-content">';

// -----------------------
// Content right there
// -----------------------
$merchantController->index();


echo '</div>';


echo '</div>';


echo '</div>';

echo '</body>';

// -------------
// Footer
// -------------

require_once "./App/Views/Merchant/partials/Footer.php";

echo "</html>";
