<?php


namespace App\Controllers;

// use App\Models\MerchantModel;
use App\Views\View;

class MerchantController
{


  function __constructor()
  {
  }

  public function index()
  {
    echo 'index';
  }

  public function renderLoginPage()
  {
    // console_log($_SERVER);
    $data = [1, 2];
    $view_path = "./App/Views/Merchant/Login/Login.php";
    $login_view = new View();


    return $login_view->render($view_path, $data);
  }

  // public function renderViewAllUser()
  // {
  //   $userModel = new CustomerModel();

  //   $users = $userModel->getAllUser();




  //   $view_path = "./App/Views/User/AllUser.php";
  //   $viewUser = new View();
  //   $viewUser->render($view_path, $users);
  //   return;
  // }

  // public function GetAllUserPage()
  // {
  //   $userModel = new CustomerModel();

  //   $users = $userModel->getAllUser();




  //   $view_path = "./App/Views/User/AllUser.php";
  //   $viewUser = new View();
  //   return $viewUser->render($view_path, $users);
  // }


  public function LoginHandle()
  {
  }

  public function renderRegisterPage()
  {
    $data = [1, 2];
    $login_view = new View();

    $view_path = "./App/Views/Merchant/Register/Register.php";

    return $login_view->render($view_path, $data);
  }
  public function UploadQuestionHandle()
  {
    $data = [1, 2];
    $upload_question_view = new View();

    $view_path = "./App/Views/User/UploadQuestion/UploadQuestion.php";

    return $upload_question_view->render($view_path, $data);
  }


  public function EditProfile()
  {
    $view_path = "./App/Views/User/Edit.php";
    $data = [];
    $view_edit_profile = new View();
    return $view_edit_profile->render($view_path, $data);
  }
}
