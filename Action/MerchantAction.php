<?php

$action = '';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {


        case 'dashboard':
            require_once "./Router/Merchant/MerchantPageRouter.php";
            break;

        case 'merchant-login':
            require_once "./Router/Merchant/MerchantLoginRouter.php";
            break;

        case 'product':
            require_once "./Router/Merchant/ManageProductRouter.php";
            break;

        case 'order':
            require_once "./Router/Merchant/ManageOrderRouter.php";
            break;

        default:
            # code...
            break;
    }
}
