
<?php

use App\Controllers\OrderController;

$orderController = new OrderController();
// -------------
// Header
// -------------

require_once "./App/Views/Partials/Header.php";


echo "<body class='body'>";
// -------------
// Navigation Bar
// -------------

require_once "./App/Views/Partials/Navbar/Navbar.php";
echo '  <div class="container">';

// -------------
// Home content
// -------------

$orderController->index();
echo '</div>';
echo   "</body>";
// -------------
// Footer
// -------------

require_once "./App/Views/Partials/Footer.php";

echo '</html>';
?>