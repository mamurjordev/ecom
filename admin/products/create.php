<?php require_once __DIR__ . '/../partials/header.php' ?>
<?php
// retrive product category form database
    $sql = "SELECT * FROM product_categories";
    $categories = $connection->query($sql);
?>
<div class="card">
        <div class="card-header">
			<a href="index.php">
            <button class="btn btn-primary"><i class="bi bi-back"> Back</i></button>
			</a>
		</div>
        <div class="card-content">
                <div class="card-body">
                        <form class="form form-horizontal" method="post" action="func/create.php" enctype="multipart/form-data">
                                <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6  form-group">
                                                <label for="">Product Name</label>
                                                <input type="text" class="form-control" name="product_name">
                                            </div>
                                            <div class="col-md-6  form-group">
                                                <label for="">Product Category</label>
                                                <select name="category_id" class="form-control">
                                                    <?php foreach($categories as $category): ?>
                                                        <option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6  form-group">
                                                <label for="">Price</label>
                                                <input type="text" class="form-control" name="price">
                                            </div>
                                            <div class="col-md-6  form-group">
                                                <label for="">Discount Price</label>
                                                <input type="text" class="form-control" name="discount_price">
                                            </div>
                                            <div class="col-md-6  form-group">
                                                <label for="">Product Quantity</label>
                                                <input type="number" class="form-control" name="quantity">
                                            </div>
                                            <div class="col-md-6  form-group">
                                                <label for="">Feature Image</label>
                                                <input type="file" class="form-control" name="feature_image">
                                            </div>
                                            <div class="col-md-12  form-group">
                                                <label for="">Product Gallery</label>
                                                <div class="product-gallery"></div>
                                            </div>

                                            <div class="col-md-12  form-group">
                                                <label for="">Description</label>
                                                <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                                            </div>

                                            <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1" name="submit">Save</button>
                                            </div>
                                        </div>
                                </div>
                        </form>
                </div>
        </div>
</div>
</div>
<script>
      CKEDITOR.replace( 'description' );
</script>
<?php require_once '../partials/footer.php' ?>

<script>
        $('.product-gallery').imageUploader();
</script>