<?php

namespace App\Controllers;

use App\Views\View;

use function PHPSTORM_META\map;

class ProductController
{
    public function index()
    {
        $data = '';
        $view_orders = new View();




        $view_path = "./App/Views/Order/Order.php";

        $view_orders->render($view_path, $data);
        return;
    }


    public function abc()
    {
        echo "abc";
    }
}
