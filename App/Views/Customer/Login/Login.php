<?php
// Session
session_start();
?>


<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="css/styles.css" type="text/css">

  <!-- font famlily -->
  <link rel="icon" href="https://avatars2.githubusercontent.com/u/1241667?s=400&v=4">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- Fontawessome  -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Online Grocery Shop</title>

  <!-- 
    Home Page CSS -->
  <style>

  </style>

</head>

<body>

  <!-- PATH ROOT -->

  <?php
  $PATH_ROOT = $GLOBALS['PATH_ROOT'];
  $PATH_ADMIN_ROOT = $GLOBALS['PATH_ADMIN_ROOT'];


  ?>

  <div class="login-page-wrapper">
    <div class="fm-wrapper">
      <div class="card">
        <div class="card-header">
          <!-- Header -->
          <h5><Strong>Đăng nhập</Strong></h5>
        </div>
        <div class="card-body">
          <form action="?action=user-login" method="POST">

            <div class="form-group">
              <label for="txtUsername"> <strong>Tên tài khoản</strong> </label>
              <input type="text" class="form-control" name="txtUsername" id="txtUsername" aria-describedby="helpId" placeholder="">
              <!-- <small id="helpId" class="form-text text-muted">Tên tài khoản</small> -->
            </div>
            <div class="form-group">
              <label for="txtUsername"><strong>Mật khẩu</strong> </label>
              <input type="password" class="form-control" name="txtPasword" id="txtPasword" aria-describedby="helpId" placeholder="">
              <!-- <small id="helpId" class="form-text text-muted">Tên tài khoản</small> -->
            </div>
            <div class="d-flex my-3 justify-content-end">
              <button class="btn mx-2" type="submit">Đăng nhập</button>
              <a class="btn ml-3" <?php echo "href='$PATH_ROOT?action=home'"; ?>>Trang chủ </a>


            </div>
          </form>
        </div>
        <div class="card-footer text-muted d-flex flex-column ">
          <!-- Footer -->

          <p style="text-decoration: underline;">Chưa có tài khoản ?</p>


          <a class="btn" <?php echo "href='$PATH_ROOT?action=customer-register'"; ?>>Tạo tài khoản </a>

        </div>
      </div>
    </div>

  </div>
  <!-- <div class="login-container">
    <form>
      <div class="login-wrapper">
        <div class="left-col-container">
          <div class="greet-text">
            <p>Xin chào</p>
            <p>Đăng nhập hoặc Tạo tài khoản</p>
          </div>
          <div class="form-wrapper">
            <div class="input-field">
              <label htmlFor="username">Username</label>
              <Input type="text" class="input" name="username" />
            </div>

            <div class="input-field">
              <label htmlFor="password">Password</label>
              <Input type="password" class="input" name="password">
            </div>

            <button class="login-btn">
              <span>Đăng nhập</span>
            </button>
          </div>

          <p>Chưa có tài khoản?</p>
          <p>Trang chủ</p>
        </div>
        <div class="right-col-container">
          <i class="fab fa-opencart"></i>
          <p>Mua sắm ưu đãi!</p>
        </div>
      </div>
    </form>
  </div> -->


  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script> -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>


<?php








use App\Models\UserModel;


$user_name = '';
$user_pass = '';
$error_flag = true;

if (isset($_POST['txtUsername'])) {
  $user_name = $_POST['txtUsername'];
}
if (isset($_POST['txtPasword'])) {
  $user_pass = $_POST['txtPasword'];
}


$userModel = new UserModel();
$users = $userModel->getAllUser();

//console_log($users);
foreach ($users as $us) {

  if ($us['user_name'] == $user_name && $us['user_pass'] == $user_pass) {

    $user_type = $us['user_type'];
    $error_flag = false;

    switch ($user_type) {
      case 'admin':
        $msg = 'hi';


        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_type'] = 'admin';
        $_SESSION['user_id'] = $us['user_id'];
        $_SESSION['user_email'] = $us['email'];
        $_SESSION['user_full_info'] = $us;


        // echo ("<script>location.href = '" . $PATH_ROOT . "/App/Views/Admin/AdminPage/AdminPage.php';</script>");

        echo ("<script>location.href = '" . $PATH_ADMIN_ROOT . "?action=dashboard';</script>");

        break;
      case 'user':
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_type'] = 'user';
        $_SESSION['user_id'] = $us['user_id'];
        $_SESSION['user_email'] = $us['email'];

        $_SESSION['user_full_info'] = $us;


        echo "<script>location.href = '" . $PATH_ROOT . "?action=home'</script>";


        break;


      default:
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_type'] = 'user';
        $_SESSION['user_id'] = $us['user_id'];
        $_SESSION['user_email'] = $us['email'];

        $_SESSION['user_full_info'] = $us;

        echo "<script>location.href = '" . $PATH_ROOT . "/'</script>";



        break;
    }
  } else {
  }
}


if (isset($_POST['txtUsername'])) {
  if (isset($_POST['txtPasword'])) {
    if ($error_flag == true) {
      echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Sai tên tài khoản hoặc mật khẩu!',
                showConfirmButton: false,
                timer: 2700
              });
            </script>";
    }
  }
}







?>