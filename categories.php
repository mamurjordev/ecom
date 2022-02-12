<?php require_once "frontend/partials/header.php" ?>
<?php require_once "user_auth.php" ?>

<?php require_once "config.php" ?>
<?php 

    // query for product
    $sql = "SELECT * FROM product_categories";

    $categories = $connection->query($sql);    
?>
<main>

     <!-- ? New Product Start -->
     <section class="new-product-area pt-5">
            <div class="container">
                <!-- Section tittle -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-70">
                            <h3>All categories on M-Cart</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php 
                        foreach($categories as $category):
                     ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-pro mb-30 text-center">
                            <div class="product-img">
                                <img src="admin/categories/func/<?php echo $category['category_image'] ?>" height="300px" alt="">
                            </div>
                            <div class="product-caption">
                                <h3><a href="category.php?category=<?php echo $category['category_slug'] ?>"><?php echo $category['category_name'] ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
        <!--  New Product End -->

</main>

<?php require_once 'frontend/partials/footer.php'; ?>