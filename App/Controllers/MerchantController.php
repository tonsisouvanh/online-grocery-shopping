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
    $view_merchant = new View();

    $data = [1, 2];
    $view_path = "./App/Views/Merchant/MerchantPage/MerchantPage.php";


    // if (isset($_REQUEST['typeManage'])) {
    //   $typeManage = $_REQUEST['typeManage'];

    //   switch ($typeManage) {
    //     case   'question-cate':
    //       return $this->ManageQuestionCategory();
    //       break;


    //     default:
    //       # code...
    //       break;
    //   }
    // }

    return $view_merchant->render($view_path, $data);
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


  public function ManageProduct()
  {


      $view_path = './App/Views/Merchant/ManageProduct/ManageProduct.php';

      // $qqModel = new QuestionQueueModel();
      // $allQQ = $qqModel->all();

      // Data Note
      // data[0]: allQQ

      // $data = [$allQQ];
      $data ='';
      $manageProductView = new View();
      return $manageProductView->render($view_path, $data);
  }
  public function ManageOrder()
  {


      $view_path = './App/Views/Merchant/ManageOrder/ManageOrder.php';

      // $qqModel = new QuestionQueueModel();
      // $allQQ = $qqModel->all();

      // Data Note
      // data[0]: allQQ

      // $data = [$allQQ];
      $data ='';
      $manageOrderView = new View();
      return $manageOrderView->render($view_path, $data);
  }
}
