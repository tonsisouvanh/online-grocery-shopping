<?php

$PATH_ROOT = $GLOBALS['PATH_ROOT'];
?>
<style>

</style>

<div class="container-sm checkout">
  <a class="fs-6 cursor-pointer">
    <- Xem lai gio hang</a>

      <form>

        <div class="container checkout-wrapper">
          <p class="fs-6 fw-bold mb-3">1. Dia chi nhan hang</p>
          <div class="mb-3">
            <div class="container g-2 checkout-address-wrapper">
              <div class="checkout-split">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Thanh pho</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Quan</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <input type="text" placeholder="So nha, duong, phuong" class="form-control" id="exampleInputPassword1">
            </div>
          </div>
        </div>

        <div class="container checkout-wrapper">
          <p class="fs-6 fw-bold mb-3">2. Ngay nhan</p>
          <div class="mb-3">
            <div class="container g-2 checkout-address-wrapper">
              <input type="date" placeholder="Ngay nhan" class="form-control" id="exampleInputPassword1">
            </div>
          </div>
        </div>

        <div class="container checkout-wrapper">
          <p class="fs-6 fw-bold mb-3">3. Hinh thuc thanh toan</p>
          <div class="mb-3">
            <div class="container g-2 checkout-address-wrapper">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  The Visa
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Vi dien tu
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios3">
                  Tien mat
                </label>
              </div>
            </div>
          </div>
        </div>



        <div class="container checkout-wrapper">
          <div class="mb-3">
            <div class="container g-2 checkout-address-wrapper">
              <div class="container">
                <div class="container">
                  <p class="text-end mb-2"> <span>Tiền hàng:</span>18.000₫</p>
                  <p class="text-end mb-2"><span class="checkout-ship-price">Phí giao hàng:</span>15.000₫</p>
                  <p class="text-end mb-2"> <span>Tổng đơn hàng:</span>33.000₫</p>
                </div>
                <div class="container checkcout-btn">
                  <a href="#" class="btn" role="button" aria-disabled="true">XÁC NHẬN ĐƠN HÀNG</a>
                  <a href="#" class="btn btn-danger" role="button" aria-disabled="true">XÓA GIỎ HÀNG</a>
                </div>
              </div>
            </div>
          </div>
        </div>




        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

      </form>
</div>


<?php

if (isset($_GET['keyWord'])) {
  $key_word = $_GET['keyWord'];
  // echo '<script>location.href="/mini-q2a?action=question-queue&KeyWord=' . $keyWord . '"</script>';
}

?>