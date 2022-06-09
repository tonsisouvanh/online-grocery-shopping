
<?php

use App\Controllers\ProductController;

$productController = new ProductController();
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

$productController->renderProductDetail();
echo '</div>';
echo   "</body>";
// -------------
// Footer
// -------------

require_once "./App/Views/Partials/Footer.php";

echo '</html>';
?>