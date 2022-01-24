<?php require_once __DIR__ . '/../partials/header.php' ?>
<?php 

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE user_id='$id'";
        $data = $connection->query($sql);
        foreach($data as $row){
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $password = $row['password'];
            $role = $row['role'];
        }
    }
?>
<div class="card">
        <div class="card-header">
			<a href="index.php">
            <button class="btn btn-primary"><i class="bi bi-back"> Back</i></button>
			</a>
		</div>
        <div class="card-content">
                <div class="card-body">
                        <form class="form form-horizontal" method="post" action="func/update.php?id=<?php echo $id ?>" enctype="multipart/form-data">
                                <div class="form-body">
                                        <div class="row">
                                        <div class="col-md-4">
                                                        <label>Name</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="text" id="first-name" class="form-control" name="name" placeholder="Ex: Jone Doi" value="<?php echo $name ?>" required>
                                                </div>
                                                <div class="col-md-4">
                                                        <label>Email</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="email" id="email-id" class="form-control" name="email" placeholder="Ex: example@domain.com" value="<?php echo $email ?>"required>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                        <label>Phone </label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="text" id="email-id" class="form-control" name="phone" placeholder="Ex: +123 0689 059" value="<?php echo $phone ?>" required>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                        <label>Password</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="text" id="email-id" class="form-control" name="password" placeholder="User password" value="<?php echo $password ?>" required>
                                                </div>
                                                <div class="col-md-4">
                                                        <label>Role</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select name="role" id="" class="form-control" required>
                                                        <option value="user" 
                                                            <?php 
                                                                if($role=='user'):
                                                                    echo "selected";
                                                                endif;
                                                            ?>
                                                        >User</option>
                                                        <option value="seller"
                                                            <?php 
                                                                if($role=='seller'):
                                                                    echo "selected";
                                                                endif;
                                                            ?>
                                                        > Seller</option>
                                                        <option value="admin"
                                                            <?php 
                                                                if($role=='admin'):
                                                                    echo "selected";
                                                                endif;
                                                            ?>
                                                        >Admin</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1" name="submit">Update</button>
                                                </div>
                                        </div>
                                </div>
                        </form>
                </div>
        </div>
</div>
</div>

<?php require_once '../partials/footer.php' ?>