<?php

$PATH_ROOT = $GLOBALS['PATH_ROOT'];
?>
<style>
  /* .home{
        background-color: red;
    } */
</style>

<div class="products">

  <!-- <div class="store-list">
    <img src="..." alt="">
  </div> -->

  <div class="filter">
    <h3>DANH SÁCH SẢN PHẨM</h3>

    <div class="dropdown">
      <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
        Sắp xếp
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <li><button class="dropdown-item" type="button">Action</button></li>
        <li><button class="dropdown-item" type="button">Another action</button></li>
        <li><button class="dropdown-item" type="button">Something else here</button></li>
      </ul>
    </div>
  </div>
  <div class="product-list">
    <div class="product-wrapper">
      <!-- <div class="product-img-wrapper"> -->
      <img src="https://cdn.tgdd.vn/Products/Images/2282/158349/bhx/thung-24-lon-bia-sai-gon-lager-330ml-202110111038154351.jpg" class="product-img">
      </img>
      <!-- </div> -->
      <p class="product-title">
        Bìa SÀI GÒN LAGER Bìa SÀI GÒN Bìa SÀI GÒN LAGER
      </p>
      <div class="product-price">
        12000 vnđ
      </div>
      <a href="#">Xem san pham</a>
      <button class="product-addToCart-btn">
        CHỌN MUA
      </button>
    </div>
    <div class="product-wrapper">
      <!-- <div class="product-img-wrapper"> -->
      <img src="https://cdn.tgdd.vn/Products/Images/8790/226883/bhx/ma-dui-ga-khay-500g-2-4-cai-202112021509175096.jpeg" class="product-img">
      </img>
      <!-- </div> -->
      <p class="product-title">
        Bìa SÀI GÒN LAGER Bìa SÀI GÒN Bìa SÀI GÒN LAGER
      </p>
      <div class="product-price">
        12000 vnđ
      </div>
      <a href="#">Xem san pham</a>
      <button class="product-addToCart-btn">
        CHỌN MUA
      </button>
    </div>
    <div class="product-wrapper">
      <!-- <div class="product-img-wrapper"> -->
      <img src="https://cdn.tgdd.vn/Products/Images/2386/85844/bhx/thung-48-hop-sua-tuoi-co-duong-vinamilk-100-sua-tuoi-180ml-202006101848226080.jpg" class="product-img">
      </img>
      <!-- </div> -->
      <p class="product-title">
        Bìa SÀI GÒN LAGER
      </p>
      <div class="product-price">
        12000 vnđ
      </div>
      <a href="#">Xem san pham</a>
      <button class="product-addToCart-btn">
        CHỌN MUA
      </button>
    </div>
    <div class="product-wrapper">
      <!-- <div class="product-img-wrapper"> -->
      <img src="https://cdn.tgdd.vn/Products/Images/8788/270325/bhx/dua-hau-do-trai-tu-2kg-tro-len-202205141313531515.jpg" class="product-img">
      </img>
      <!-- </div> -->
      <p class="product-title">
        Bìa SÀI GÒN LAGER
      </p>
      <div class="product-price">
        12000 vnđ
      </div>
      <a href="#">Xem san pham</a>
      <button class="product-addToCart-btn">
        CHỌN MUA
      </button>
    </div>
    <div class="product-wrapper">
      <!-- <div class="product-img-wrapper"> -->
      <img src="https://cdn.tgdd.vn/Products/Images/2565/85959/bhx/thung-30-goi-mi-hao-hao-tom-chua-cay-75g-202110110920304347.JPG" class="product-img">
      </img>
      <!-- </div> -->
      <p class="product-title">
        Bìa SÀI GÒN LAGER
      </p>
      <div class="product-price">
        12000 vnđ
      </div>
      <a href="#">Xem san pham</a>
      <button class="product-addToCart-btn">
        CHỌN MUA
      </button>
    </div>
    <div class="product-wrapper">
      <!-- <div class="product-img-wrapper"> -->
      <img src="https://cdn.tgdd.vn/Products/Images/3357/240506/bhx/banh-ngu-coc-dau-weet-bix-hop-500g-202106020852321958.jpg" class="product-img">
      </img>
      <!-- </div> -->
      <p class="product-title">
        Bìa SÀI GÒN LAGER
      </p>
      <div class="product-price">
        12000 vnđ
      </div>
      <a href="#">Xem san pham</a>
      <button class="product-addToCart-btn">
        CHỌN MUA
      </button>
    </div>
    <div class="product-wrapper">
      <!-- <div class="product-img-wrapper"> -->
      <img src="https://cdn.tgdd.vn/Products/Images/8788/273981/bhx/tao-envy-my-hop-3-trai-202205112028434494.jpg" class="product-img">
      </img>
      <!-- </div> -->
      <p class="product-title">
        Bìa SÀI GÒN LAGER
      </p>
      <div class="product-price">
        12000 vnđ
      </div>
      <a href="#">Xem san pham</a>
      <button class="product-addToCart-btn">
        CHỌN MUA
      </button>
    </div>

  </div>
</div>


<?php

if (isset($_GET['keyWord'])) {
  $key_word = $_GET['keyWord'];
  // echo '<script>location.href="/mini-q2a?action=question-queue&KeyWord=' . $keyWord . '"</script>';
}

?>