<?php require_once "frontend/partials/header.php" ?>
<?php require_once 'user_auth.php' ?>

<?php 

    if(isset($_POST['checkout'])){
        $cart_id = $_POST['cart_id'];
        
        for ($i=0; $i < count($cart_id); $i++) { 
            $sql = "SELECT * FROM carts 
                INNER JOIN products
                ON carts.product_id = products.product_id 
                WHERE cart_id='$cart_id[$i]'";
            
            $cartProductQuery = $connection->query($sql);

            foreach($cartProductQuery as $cartProduct){
                $cartProducts[$i] = $cartProduct;
            }
        }
    }
    

?>

<!-- Hero Area Start-->
<div class="slider-area pt-4">
    <div class="single-slider d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================Checkout Area =================-->
<section class="checkout_area pt-5">
    <div class="container">

        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Billing Details</h3>
                    <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="first" name="receiver_name" />
                            <span class="placeholder" data-placeholder="Receiver Name"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="last" name="receiver_phone" />
                            <span class="placeholder" data-placeholder="Receiver Phone"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="number" name="receiver_address" />
                            <span class="placeholder" data-placeholder="Receiver Address"></span>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul class="list">
                            <li>
                                <a href="#">Product
                                    <span>Total</span>
                                </a>
                            </li>
                            <?php 
                                $total = 0;
                                for ($i=0; $i < count($cartProducts) ; $i++) :
                            ?>
                            <li>
                                <a href="#"><?php echo $cartProducts[$i]['product_name']  ?>
                                    <span class="middle">x <?php echo $cartProducts[$i]['qty']  ?></span>
                                    <span class="last"><?php echo $cartProducts[$i]['buy_price'] ?></span>
                                </a>
                            </li>
                            <?php 

                            // total price
                           
                            $total = $total + $cartProducts[$i]['buy_price'];
                            
                             endfor?>
                        </ul>
                        <ul class="list list_2">
                            <li>
                                <a href="#">Subtotal
                                    <span><?php echo $total; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Shipping
                                    <span>Flat rate: 50.00</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Total
                                    <span><?php echo $total+50; ?></span>
                                </a>
                            </li>
                        </ul>
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="selector" />
                                <label for="f-option6">Cash On Delivery </label>
                                <img src="img/product/single-product/card.jpg" alt="" />
                                <div class="check"></div>
                            </div>
                        </div>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector" />
                            <label for="f-option4">I’ve read and accept the </label>
                            <a href="#">terms & conditions*</a>
                        </div>
                        <a class="btn_3" href="#">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->

<?php require_once 'frontend/partials/footer.php'; ?>