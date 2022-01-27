<?php require_once __DIR__ . '/../partials/header.php' ?>
<!-- retrive data from database -->
<?php 

    $sql = "SELECT * FROM products";
    $data = $connection->query($sql);
    
?>

<div class="card">
	<div class="card-header">
		<a href="create.php">
			<button class="btn btn-primary"><i class="bi bi-plus">Create</i></button>
		</a>
	</div>
	<div class="card-content">
		<div class="card-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Product Name</th>
						<th scope="col">Image</th>
						<th scope="col">Price</th>
						<th scope="col">Quantity</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1 ?>
                    <?php foreach($data as $row): ?>
                    <tr>
						<th scope="col"><?php echo $i++ ?></th>
						<th scope="col"><?php echo $row['product_name'] ?></th>
						<th scope="col">
                            <img src="<?php echo 'func/'.$row['feature_image'] ?>" height="80px" alt="">
                        </th>
						<th scope="col"><?php echo $row['price'] ?></th>
						<th scope="col"><?php echo $row['quantity'] ?></th>
						<th scope="col">
                            <a href="edit.php?id=<?php echo $row['product_id'] ?>">
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                            </a>    

                            <a href="func/delete.php?id=<?php echo $row['product_id'] ?>">
                                <button class="btn btn-danger"><i class="bi bi-archive-fill"></i></button>
                            </a>
                        </th>
					</tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php require_once '../partials/footer.php' ?>


