<style>
    .manage-sidebar {
        height: 100%;
    }
</style>

<div class="q2a-side-bar">


    <nav class="nav flex-column bg-dark manage-sidebar">
        <div class="nav-link active p-3">
            <h5> <strong>Quản lý hệ thống</strong></h5>
        </div>


        <a <?php if (str_contains($curr_route, "action=dashboard")) {
                echo "class='nav-link active'";
            } else {
                echo "class='nav-link '";
            }

            echo "href='$PATH_ADMIN_ROOT?action=dashboard'"; ?>>
            <i class="fas fa-cog"></i> Dasboard
        </a>


        <!-- * Expand link -->
        <!-- <div>
            <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-cog"></i>
                Quản lý sản phẩm
            </a>
            <div class="collapse" id="collapseExample">
                <a style="margin-left: 2rem !important;" <?php if (str_contains($curr_route, "action=question-category")) {
                                                                echo "class='nav-link active'";
                                                            } else {
                                                                echo "class='nav-link'";
                                                            }
                                                            echo "href='$PATH_ADMIN_ROOT?action=question-category'" ?>>
                    Thêm/xóa sản phẩm
                </a>
            </div>
        </div> -->

        <a <?php if (str_contains($curr_route, "action=customer-account")) {
                echo "class='nav-link active'";
            } else {
                echo "class='nav-link '";
            }
            echo "href='$PATH_ADMIN_ROOT?action=customer-account'" ?>>
            <i class="fas fa-cog"></i>
            Quản lý tài khoản khách hàng
        </a>

        <a <?php if (str_contains($curr_route, "action=merchant-account")) {
                echo "class='nav-link active'";
            } else {
                echo "class='nav-link '";
            }
            echo "href='$PATH_ADMIN_ROOT?action=merchant-account'" ?>>
            <i class="fas fa-cog"></i>
            Quản lý tài khoản người bán
        </a>
        
        <a <?php if (str_contains($curr_route, "action=order")) {
                echo "class='nav-link active'";
            } else {
                echo "class='nav-link '";
            }
            echo "href='$PATH_ADMIN_ROOT?action=order'" ?>>
            <i class="fas fa-cog"></i>
            Quản lý đơn hàng
        </a>



        <a class="nav-link" <?php echo "href='$PATH_ROOT?action=home'" ?>> <i class="fas fa-cog"></i>
            Trang chủ</a>


    </nav>
</div>