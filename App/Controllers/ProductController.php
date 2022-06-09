<?php

namespace App\Controllers;

use App\Views\View;

use function PHPSTORM_META\map;

class ProductController
{
    public function index()
    {
        $data = '';
        $view_productList = new View();




        $view_path = "./App/Views/Products/ProductListPage.php";

        $view_productList->render($view_path, $data);
        return;
    }


    public function renderProductDetail()
    {
        $data = '';
        $view_product = new View();




        $view_path = "./App/Views/Products/ProductDetailPage.php";

        $view_product->render($view_path, $data);
        return;
    }




    public function abc()
    {
        echo "abc";
    }
}
