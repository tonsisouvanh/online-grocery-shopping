<?php
// session_start();
// $curr_user = '';
// $isExistsUser = false;


// if (isset($_SESSION['user_name'])) {
//     $curr_user = $_SESSION['user_name'];
//     $user_type = $_SESSION['user_type'];
//     $isExistsUser = true;

//     $curr_user_id = $_SESSION['user_id'];
//     $curr_user_full_info = $_SESSION['user_full_info'];
// }
// // echo  $curr_user . ' is loged-in in system';
// console_log($curr_user . ' is loged-in in system');




// $curr_route = '';

// if (isset($_SERVER['REQUEST_URI'])) {
//     $curr_route = $_SERVER['REQUEST_URI'];
// }

// // console_log($curr_route);
?>


<!-- <style>
    .list-tag {
        display: flex;
        align-items: flex-end;
        flex-wrap: wrap;
    }

    .tag {
        border-radius: var(--border-radius);
        background-color: lightblue;
        padding: 4px;
        margin-bottom: 3px;
        margin-top: 3px;

    }
</style> -->

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-bg-color">
    <div class="container-fluid">

        <a class="navbar-brand logo" <?php echo "href='$PATH_ROOT?action=home'" ?>>Grocery <i style="font-size: 2rem;" class="fa-brands fa-opencart"></i>Shop</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon navbar-menu-burger">

            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link link" <?php echo "href='$PATH_ROOT?action=home'" ?>> <i class="fa fa-home"></i> Trang chủ <span class="sr-only">(current)</span></a>
                </li>

                <li>
                    <a class="nav-link link" <?php echo "href='$PATH_ROOT?action=product-list'"; ?>> <i class="fas fa-utensils"></i> Tất cả sản phẩm</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bars"></i> Danh mục sản phẩm
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Rau củ</a></li>
                        <li><a class="dropdown-item" href="#">Nước ngọt</a></li>
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li> -->
                        <li><a class="dropdown-item" href="#">Bánh Snack</a></li>
                        <li><a class="dropdown-item" href="#">Bánh mì</a></li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Bạn tìm gì?" aria-label="Search">
                <button class="btn btn-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div class="d-flex align-items-center navbar-right">
                <a class="nav-link link login-link" <?php echo "href='$PATH_ROOT?action=customer-login'" ?>>Đăng nhập</a>
                <a class="nav-link link register-link" <?php echo "href='$PATH_ROOT?action=customer-register'" ?>>Đăng ky</a>
                <a class="nav-link link nav-link-cart" <?php echo "href='$PATH_ROOT?action=customer-cart'" ?>><i class="fa-solid fa-cart-shopping"></i><span>Giỏ hàng</span>
                </a>
                <a class="nav-link link merchant-link" <?php echo "href='$PATH_ROOT?action=user-login'" ?>>Trở thành người bán?</a>
            </div>
        </div>


    </div>

</nav>

<!-- ------------- -->
<!-- Logout handle -->
<!-- ------------- -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>


<script>
    function logout() {
        const btnLogout = $("#btnLogout");

        btnLogout.on("click", function(e) {
            fmLogout.submit();

        })


    }
    logout();
</script>


<?php

// if (isset($_GET['isDestroy'])) {
//     $isDestroy = (int) $_GET['isDestroy'];

//     if ($isDestroy == 1) {
//         session_destroy();
//         echo "<script>location.href='$PATH_ROOT?action=home'</script>";
//     }
// }


?>