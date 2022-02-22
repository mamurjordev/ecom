
<?php require_once "frontend/partials/header.php" ?>
<?php require_once 'user_auth.php' ?>

<?php 
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM carts
            INNER JOIN products
            ON carts.product_id = products.product_id WHERE carts.user_id='$user_id'";
    $products = $connection->query($sql);

?>
<main>
<form action="checkout.php" method="post">
<section class="cart_area pt-5">
        <div class="container">
          <div class="cart_inner">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">Remove</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product): ?>
                  <!-- this input is only for send data to checkout page -->
                  <input type="hidden" name="cart_id[]" value="<?php echo $product['cart_id']; ?>"> 
                  <tr>
                    <td>
                      <div class="media">
                        <div class="d-flex">
                          <img src="assets/img/gallery/card1.png" alt="" />
                        </div>
                        <div class="media-body">
                          <p><?php echo $product['product_name']; ?></p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h5><?php echo $product['buy_price'];?> BDT</h5>
                    </td>
                    <td>
                      <div class="product_count">
                        <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                        <input class="input-number" type="text" value="<?php echo $product['qty']; ?>" min="0" max="10">
                        <span class="input-number-increment"> <i class="ti-plus"></i></span>
                      </div>
                    </td>
                    <td>
                      <h5><?php echo $product['buy_price']* $product['qty'] ?> BDT</h5>
                    </td>
                    <td>
                     <a href="cart_process.php?cart_remove=<?php echo $product['cart_id'] ?>">
                        <button class="btn btn-danger"><img src="https://img.icons8.com/material-rounded/24/000000/filled-trash.png"/></button>
                     </a>
                    </td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
              <div class="checkout_btn_inner float-right">
                <a class="btn_1" href="products.php">Continue Shopping</a>
                <input type="submit" value="Proceed to checkout" class="btn_1 checkout_btn_1" name="checkout">
              </div>
            </div>
          </div>
      </section>
      <!--================End Cart Area =================-->
</form>
</main>    
<?php require_once 'frontend/partials/footer.php'; ?>