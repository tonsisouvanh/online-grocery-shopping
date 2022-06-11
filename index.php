<?php


// ---------------------------
// Required Config & Utils
// ---------------------------
require_once "./utils/utilFunction.php";
require_once "./Core/Db.php";



?>



<?php
// -----------------
// PATH ROOT
// -----------------


$PATH_ROOT = "http://localhost:8000/online-grocery-shopping";
$PATH_MERCHANT_ROOT = "http://localhost:8000/merchant";
$PATH_ADMIN_ROOT = "http://localhost:8000/admin";

// XAMPP
// $PATH_MERCHANT_ROOT = "http://localhost/online-grocery-shopping/merchant";
// $PATH_AUTO_ACCEPT_QUESTION_API_SERVICE = "http://localhost:3000/api/merchant/auto-check-accept-question";

$GLOBALS['PATH_ROOT'] = $PATH_ROOT;
$GLOBALS['PATH_MERCHANT_ROOT'] = $PATH_MERCHANT_ROOT;
$GLOBALS['PATH_ADMIN_ROOT'] = $PATH_ADMIN_ROOT;
// $GLOBALS['PATH_AUTO_ACCEPT_QUESTION_API_SERVICE'] = $PATH_AUTO_ACCEPT_QUESTION_API_SERVICE;


global $PATH_ROOT;

$uri = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
  . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


$url_len = strlen($uri);

$curr_url = '';
if (isset($_SERVER['REDIRECT_URL'])) {
  $curr_url = $_SERVER['REDIRECT_URL'];
}
$curr_route = substr($curr_url, strlen($PATH_ROOT), 100);
$curr_route = trim($curr_route);


if (isset($_SERVER['REQUEST_URI'])) {
  $curr_route = $_SERVER['REQUEST_URI'];
  $GLOBALS['curr_route'] = $curr_route;
}

?>






<!-- Require DB ROOT-->





<?php

// ---------------------------
// App Content
// ---------------------------

// Định nghĩa hằng Path của file index.php để load class
define('PATH_ROOT', __DIR__);

// Autoload class trong PHP
spl_autoload_register(function (string $class_name) {
  include_once PATH_ROOT . '/' . $class_name . '.php';
});





// ------------------
// Routing
// ------------------

if (isset($_SERVER['REQUEST_URI'])) {
  $reqURI = $_SERVER['REQUEST_URI'];
  // echo 'req url: ' . $reqURI . "<br/>";
  if (str_contains($reqURI, "/merchant")) {
    // ------------------
    // route mercahnt
    // ------------------

    require_once "./Action/MerchantAction.php";
  } else if (str_contains($reqURI, "/admin")) {
    // ------------------
    // route home
    // ------------------
    require_once "./Action/AdminAction.php";
  } else if (str_contains($reqURI, "/online-grocery-shopping")) {
    // ------------------
    // route home
    // ------------------
    require_once "./Action/HomeAction.php";
  } else if ($reqURI == '/') {
    // ------------------
    // route home
    // ------------------
    require_once "./Action/FowardSlashHomeAction.php";
  } else if (str_contains($reqURI, "/test")) {
    // ------------------
    // route test
    // ------------------
    require_once "./Action/TestAction.php";
  } else {
    // ------------------
    // catching  error
    // ------------------
    echo '404';
  }
}
