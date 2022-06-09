<?php

use App\Controllers\CartController;

$cartController = new CartController();
// -------------
// * Header
// -------------

require_once "./App/Views/Partials/Header.php";


echo "<body class='body'>";
// -------------
// * Navigation Bar
// -------------

require_once "./App/Views/Partials/Navbar/Navbar.php";

echo ' <div class="container">';

// -------------
// * Home content
// -------------

$cartController->index();
echo '</div>';

// JQuery
require_once "./App/Views/Partials/JQuery/JQuery-Func.php";

echo "</body>";



// -------------
// * Footer
// -------------

require_once "./App/Views/Partials/Footer.php";

echo '

</html>';
