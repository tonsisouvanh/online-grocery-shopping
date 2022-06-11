<?php

$PATH_ROOT = $GLOBALS['PATH_ROOT'];
?>
<style>

</style>

<div class="cart">

  <h3 class="cart-header-text">Giở hàng của bạn</h3>

  <div class="cart-items-info">

    <div class="cart-item-wrapper">

      <div class="cart-col-left">
        <img class="cart-item-img" src="https://cdn.tgdd.vn/Products/Images/7462/250141/bhx/kem-oc-que-socola-dau-cornetto-cay-66g-202205301431477786_300x300.png" alt="">
        <div class="cart-item-detail">
          <p class="cart-item-title">Pepsi no sugar</p>
          <div class="cart-item-action">
            <div class="cart-item-addQty">
              <a class="cart-item-qtyDecrs" href="">-</a>
              <input type="text" placeholder="0" class="cart-item-qtyInput">
              <a class="cart-item-qtyIncrs" href="">+</a>
            </div>
            <p>Xóa</p>
          </div>
        </div>
      </div>

      <div class="cart-col-right">
        <p class="cart-item-price">300000 đ</p>
      </div>

    </div>
    <div class="cart-item-wrapper">

      <div class="cart-col-left">
        <img class="cart-item-img" src="https://cdn.tgdd.vn/Products/Images/7462/250141/bhx/kem-oc-que-socola-dau-cornetto-cay-66g-202205301431477786_300x300.png" alt="">
        <div class="cart-item-detail">
          <p class="cart-item-title">Pepsi no sugar</p>
          <div class="cart-item-action">
            <div class="cart-item-addQty">
              <a class="cart-item-qtyDecrs" href="">-</a>
              <input type="text" placeholder="0" class="cart-item-qtyInput">
              <a class="cart-item-qtyIncrs" href="">+</a>
            </div>
            <p>Xóa</p>
          </div>
        </div>
      </div>

      <div class="cart-col-right">
        <p class="cart-item-price">300000 đ</p>
      </div>

    </div>
    <div class="cart-item-wrapper">

      <div class="cart-col-left">
        <img class="cart-item-img" src="https://cdn.tgdd.vn/Products/Images/7462/250141/bhx/kem-oc-que-socola-dau-cornetto-cay-66g-202205301431477786_300x300.png" alt="">
        <div class="cart-item-detail">
          <p class="cart-item-title">Pepsi no sugar</p>
          <div class="cart-item-action">
            <div class="cart-item-addQty">
              <a class="cart-item-qtyDecrs" href="">-</a>
              <input type="text" placeholder="0" class="cart-item-qtyInput">
              <a class="cart-item-qtyIncrs" href="">+</a>
            </div>
            <p>Xóa</p>
          </div>
        </div>
      </div>

      <div class="cart-col-right">
        <p class="cart-item-price">300000 đ</p>
      </div>

    </div>
    <div class="cart-item-wrapper">

      <div class="cart-col-left">
        <img class="cart-item-img" src="https://cdn.tgdd.vn/Products/Images/7462/250141/bhx/kem-oc-que-socola-dau-cornetto-cay-66g-202205301431477786_300x300.png" alt="">
        <div class="cart-item-detail">
          <p class="cart-item-title">Pepsi no sugar</p>
          <div class="cart-item-action">
            <div class="cart-item-addQty">
              <a class="cart-item-qtyDecrs" href="">-</a>
              <input type="text" placeholder="0" class="cart-item-qtyInput">
              <a class="cart-item-qtyIncrs" href="">+</a>
            </div>
            <p>Xóa</p>
          </div>
        </div>
      </div>

      <div class="cart-col-right">
        <p class="cart-item-price">300000 đ</p>
      </div>

    </div>

  </div>

  <div class="cart-summary">
    <div class="cart-summary-price">
      <p>Tiền hàng:<span class="cart-total">12000000 vnd</span></p>
      <p>Phí giao hàng: <span>Miễn phí</span> </p>
    </div>
    <button class="btn cart-checkout-btn">
      <a style="text-decoration: none;color: white;" <?php echo "href='$PATH_ROOT?action=customer-checkout'" ?>>
        ĐẶT HÀNG
      </a>
    </button>
    <button class="btn bg-danger cart-deleteCart-btn">
      XÓA GIỎ HÀNG
    </button>
  </div>

</div>


<?php

if (isset($_GET['keyWord'])) {
  $key_word = $_GET['keyWord'];
  // echo '<script>location.href="/mini-q2a?action=question-queue&KeyWord=' . $keyWord . '"</script>';
}

?>