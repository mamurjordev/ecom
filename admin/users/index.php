<?php require_once __DIR__ . '/../partials/header.php' ?>
<!-- retrive data from database -->
<?php 

    $sql = "SELECT * FROM users";
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
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Phone</th>
						<th scope="col">Role</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
                    <?php foreach($data as $row): ?>
                    <tr>
						<th scope="col"><?php echo $row['user_id'] ?></th>
						<th scope="col"><?php echo $row['name'] ?></th>
						<th scope="col"><?php echo $row['email'] ?></th>
						<th scope="col"><?php echo $row['phone'] ?></th>
						<th scope="col"><?php echo $row['role'] ?></th>
						<th scope="col">
                            <a href="edit.php?id=<?php echo $row['user_id'] ?>">
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                            </a>    

                            <a href="func/delete.php?id=<?php echo $row['user_id'] ?>">
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


