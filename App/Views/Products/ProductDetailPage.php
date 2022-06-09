<?php

$PATH_ROOT = $GLOBALS['PATH_ROOT'];
?>
<style>
  /* .home{
        background-color: red;
    } */
</style>

<div class="product-detail">

  <div class="productDetail-header-title">

    <h4>Trang chu</h4>

  </div>

  <div class="productDetail-wrapper">

    <div class="productDetail-img-wrapper">
      <img class="productDetail-img" src="https://cdn.tgdd.vn/Products/Images/8781/275806/bhx/ba-roi-heo-nhap-khau-tui-500g-202204011304390975.jpg" alt="">
    </div>

    <div class="productDetail-content">
      <h3 class="productDetail-title">Kem ốc quế socola dâu Cornetto cây 66g</h3>
      <p>HSD còn 9 tháng</p>
      <p class="productDetail-price">18000 vnd</p>
      <p>Loại sản phẩm: Kem ốc quế</p>
      <p>Khối lượng: 55g</p>
      <button class="productDetail-addToCart-btn">CHON MUA</button>
      <div class="add-product-qty">
        <input class="input-qty" placeholder="2" type="text">
        <i class="fa-solid fa-plus"></i>
        <i class="fa-solid fa-minus"></i>
      </div>
    </div>

  </div>

  <div class="container comment-wrapper">
    <p class="fs-5 fw-bold text-secondary mb-2">DANH GIA SAN PHAM</p>
    <div class="container border border-success comment-rating-wrapper">
      <div style="flex: 1;" class="container">
        <p>
          5.0 tren 5
        </p>
        <p>
          star star star
        </p>
      </div>
      <div style="flex: 2;" class="container d-flex align-items-center justify-content-around ">
        <p class="fs-6 border rounded-1">Tat ca</p>
        <p class="fs-6 border rounded-1">5 Sao(364)</p>
        <p class="fs-6 border rounded-1">4 Sao(2)</p>
        <p class="fs-6 border rounded-1">3 Sao(2)</p>
        <p class="fs-6 border rounded-1">2 Sao(2)</p>
        <p class="fs-6 border rounded-1">1 Sao(2)</p>
      </div>
    </div>

    <div class="container d-flex border py-3 my-2">
      <div class="container comment-user-img-wrapper">
        <img class="comment-user-img" src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" alt="">
      </div>
      <div class="container">
        <p class="fs-6 mb-3">Jame corner</p>
        <p class="fs-6 mb-3">5 star</p>
        <p class="fs-6 mb-3">2021-12-27 10:27 | Phân loại hàng: Đen kiểu MX</p>
        <p class="fs-6 mb-3">Hang tot, xai ngon, giao nhan lan sau se ung ho nua</p>
        <div class="container d-flex">
          <img class="comment-review-img" src="https://cf.shopee.vn/file/7ae08e4382435e827540f7155bea432a" alt="">
          <img class="comment-review-img" src="https://cf.shopee.vn/file/7ae08e4382435e827540f7155bea432a" alt="">
          <img class="comment-review-img" src="https://cf.shopee.vn/file/7ae08e4382435e827540f7155bea432a" alt="">
        </div>
      </div>
    </div>
    <div class="container d-flex border py-3 my-2">
      <div class="container comment-user-img-wrapper">
        <img class="comment-user-img" src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" alt="">
      </div>
      <div class="container">
        <p class="fs-6 mb-3">Jame corner</p>
        <p class="fs-6 mb-3">5 star</p>
        <p class="fs-6 mb-3">2021-12-27 10:27 | Phân loại hàng: Đen kiểu MX</p>
        <p class="fs-6 mb-3">Hang tot, xai ngon, giao nhan lan sau se ung ho nua</p>
        <div class="container d-flex">
          <img class="comment-review-img" src="https://cf.shopee.vn/file/7ae08e4382435e827540f7155bea432a" alt="">
          <img class="comment-review-img" src="https://cf.shopee.vn/file/7ae08e4382435e827540f7155bea432a" alt="">
          <img class="comment-review-img" src="https://cf.shopee.vn/file/7ae08e4382435e827540f7155bea432a" alt="">
        </div>
      </div>
    </div>
    <div class="container d-flex border py-3 my-2">
      <div class="container comment-user-img-wrapper">
        <img class="comment-user-img" src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" alt="">
      </div>
      <div class="container">
        <p class="fs-6 mb-3">Jame corner</p>
        <p class="fs-6 mb-3">5 star</p>
        <p class="fs-6 mb-3">2021-12-27 10:27 | Phân loại hàng: Đen kiểu MX</p>
        <p class="fs-6 mb-3">Hang tot, xai ngon, giao nhan lan sau se ung ho nua</p>
        <div class="container d-flex">
          <img class="comment-review-img" src="https://cf.shopee.vn/file/7ae08e4382435e827540f7155bea432a" alt="">
          <img class="comment-review-img" src="https://cf.shopee.vn/file/7ae08e4382435e827540f7155bea432a" alt="">
          <img class="comment-review-img" src="https://cf.shopee.vn/file/7ae08e4382435e827540f7155bea432a" alt="">
        </div>
      </div>
    </div>

  </div>

</div>


<?php

if (isset($_GET['keyWord'])) {
  $key_word = $_GET['keyWord'];
  // echo '<script>location.href="/mini-q2a?action=question-queue&KeyWord=' . $keyWord . '"</script>';
}

?>