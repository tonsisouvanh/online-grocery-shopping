<?php


$action = '';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
console_log($action);

switch ($action) {
    case '':
        require_once "./Router/HomeRouter.php";
        break;

        // case 'question-queue':
        //     require_once "./Router/Question/QuestionQueueRouter.php";
        //     break;

        // case 'question-queue-detail':
        //     require_once "./Router/Question/QuestionQueueDetailRouter.php";
        //     break;

    case 'home':
        require_once "./Router/HomeRouter.php";
        break;

    case 'product-list':
        require_once "./Router/Product/ProductListRouter.php";
        break;
    case 'product-detail':
        require_once "./Router/Product/ProductDetailRouter.php";
        break;
        // * CUSTOMER
    case 'customer-login':
        require_once "./Router/Customer/CustomerLoginRouter.php";
        break;

    case 'customer-register':
        require_once "./Router/Customer/CustomerRegisterRouter.php";
        break;
        // * MERCHANT
    case 'customer-login':
        require_once "./Router/Customer/CustomerLoginRouter.php";
        break;

    case 'customer-register':
        require_once "./Router/Customer/CustomerRegisterRouter.php";
        break;
    case 'merchant-login':
        require_once "./Router/Merchant/MerchantLoginRouter.php";
        break;

    case 'merchant-register':
        require_once "./Router/Merchant/MerchantRegisterRouter.php";
        break;

        // case 'admin':
        //     require_once "./Router/Admin/AdminPageRouter.php";
        //     break;

    case 'customer-cart':
        require_once "./Router/Cart/CartRouter.php";
        break;
    case 'customer-checkout':
        console_log('asdhfkjh');
        require_once "./Router/Checkout/CheckoutRouter.php";
        break;

        // case 'edit-profile':
        //     require_once "./Router/User/EditProfile.php";
        //     break;

    default:
        require_once "./App/Views/404.php";
        break;
}
