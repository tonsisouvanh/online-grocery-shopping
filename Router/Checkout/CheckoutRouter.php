
<?php

use App\Controllers\CustomerController;

$customerController = new CustomerController();
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

$customerController->renderCheckoutPage();
echo '</div>';

echo '<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script> -->
<!-- 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>';

echo   "</body>";
// // -------------
// // Footer
// // -------------

// require_once "./App/Views/Partials/Footer.php";

echo '</html>';
?>