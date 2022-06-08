<?php

$PATH_ROOT = $GLOBALS['PATH_ROOT'];
?>
<style>
    /* .home{
        background-color: red;
    } */
</style>

<div class="home">
    <!-- SLIDER -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay-image" style="background-image:url('https://cdn.tgdd.vn/Files/2022/03/14/1420201/tu-ngay-15-3-20-3-2022-giam-gia-den-50-khi-mua-hang-online-tai-bach-hoa-xanh-202203141116562044.jpg');">
                </div>
                <!-- <img src="" class="d-block w-100" alt="..."> -->
            </div>
            <div class="carousel-item">
                <div class="overlay-image" style="background-image:url('http://cdn.tgdd.vn/Files/2019/05/21/1168179/avata_760x367-600x400.jpg');">
                </div>
                <!-- <img src="" class="d-block w-100" alt="..."> -->
            </div>
            <div class="carousel-item">
                <div class="overlay-image" style="background-image:url('http://cdn.tgdd.vn/Files/2020/05/30/1259392/bach-hoa-xanh-online-sap-co-mat-tai-binh-duong-dat-mua-online-giam-den-50-202005300956393269.png');">
                </div>
                <!-- <img src="" class="d-block w-100" alt="..."> -->
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- PROPULAR ITEMS -->
    <div class="popular-items">
        <h2 class="popular-items-title">SẢN PHẨM ĐƯỢC QUAN TÂM NHIỀU</h2>
        <div class="popular-items-container">
            <?php
            for ($i = 1; $i < 15; $i++) {
                echo '
            <div class="popularItem-wrapper">
                <img src="https://media.istockphoto.com/photos/orange-picture-id185284489?k=20&m=185284489&s=612x612&w=0&h=LLY2os0YTG2uAzpBKpQZOAC4DGiXBt1jJrltErTJTKI=" class="popularItem-img"></img>
                <div class="popularItem-title">Trái cam ngọtTrái cam ngọt</div>
            </div>';
            }
            ?>

        </div>
    </div>
</div>


<?php

if (isset($_GET['keyWord'])) {
    $key_word = $_GET['keyWord'];
    // echo '<script>location.href="/mini-q2a?action=question-queue&KeyWord=' . $keyWord . '"</script>';
}

?>