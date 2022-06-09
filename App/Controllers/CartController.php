<?php


namespace App\Controllers;

use App\Models\CartModel;
use App\Views\View;

class CartController
{


  function __constructor()
  {
  }

  public function index()
  {
    $data = '';
    $view_path = "./App/Views/Customer/Cart/Cart.php";
    $cart_view = new View();


    return $cart_view->render($view_path, $data);
  }

 
}
