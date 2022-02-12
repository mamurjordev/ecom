<?php require_once "frontend/partials/header.php" ?>
<?php require_once "config.php" ?>

<?php
//  queries
    $query = $_REQUEST['query'];
    $sql = "SELECT * FROM `products` 
    WHERE product_name LIKE '%$query%' OR description LIKE '%$query%'";

    $products = $connection->query($sql);

 ?>
 
 <!--? Popular Items Start -->
        <div class="popular-items pt-5">
            <div class="container">
                <!-- Section tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-70 text-center">
                            <h2><?php echo $_REQUEST['query'] ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach($products as $product): ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="admin/products/func/<?php echo $product['feature_image'] ?>" alt="">
                                <div class="img-cap">
                                    <span>Add to cart</span>
                                </div>
                                <div class="favorit-items">
                                    <span class="flaticon-heart"></span>
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product.php?id=<?php echo $product['product_id'] ?>"><?php echo $product['product_name'] ?></a></h3>
                                <?php 
                                    if($product['discount_price']!=0):
                                ?>
                                <span class="text-danger"><del><?php  echo $product['price'] ?></del> BDT</span>
                                <span class="text-danger h5"><?php  echo $product['discount_price'] ?> BDT</span>

                                <?php else: ?>
                                <span>500 BDT</span>

                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <!-- Popular Items End -->

<?php require_once 'frontend/partials/footer.php'; ?>