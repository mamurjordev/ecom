<?php require_once __DIR__ . '/../partials/header.php' ?>
<!-- retrive data from database -->
<?php 

    $sql = "SELECT * FROM cupon_code";
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
						<th scope="col"> Coupon Code </th>
						<th scope="col">Ammount / Percent</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1 ?>
                    <?php foreach($data as $row): ?>
                    <tr>
						<td><?php echo $i++ ?></td>
						<td><?php echo $row['cupon_code'] ?></td>
						<td><?php echo $row['ammount'] ? $row['ammount'] : $row['percent'] ?></td>
                        <td scope="col">
                            <a href="edit.php?id=<?php echo $row['coupon_id'] ?>">
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                            </a>    

                            <a href="func/delete.php?id=<?php echo $row['coupon_id'] ?>">
                                <button class="btn btn-danger"><i class="bi bi-archive-fill"></i></button>
                            </a>
                        </td>
					</tr>
                    <?php endforeach ?> 
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php require_once '../partials/footer.php' ?>