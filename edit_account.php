<?php require_once "frontend/partials/header.php" ?>
<?php require_once "config.php" ?>
<?php require_once "user_auth.php"  ?>
<?php 
    $user_id = $_SESSION['user_id'];
    $userInfoSql = "SELECT * FROM users WHERE user_id ='$user_id'";
    $userData = $connection->query($userInfoSql);
    foreach ($userData as $user)
?>
<main>
    <div class="container pt-5">
        <div class="row">
            <div class="col col-md-4 ">
                <a href="account.php">
                    <li class="my-3 py-2 bg-primary">Orders</li>
                </a>
                <a href="edit_account.php">
                    <li class="my-3 py-2 bg-primary">Edit account info</li>
                </a>
                <a href="change_password.php">
                    <li class="my-3 py-2 bg-primary">Change password</li>
                </a>
            </div>
            <div class="col col-md-8">
               <h4 class="text-center">Change account info</h4>

               <hr>
               <form action="process_account.php" method="post">
                    <div class="form-group">
                        <label for="">Account Name : </label>
                        <input type="text" value="<?php echo $user['name'] ?>" name="name" placeholder="Account name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Account Email : </label>
                        <input type="text" value="<?php echo $user['email'] ?>" name="email" placeholder="Account email " class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Phone NO : </label>
                        <input type="text" value="<?php echo $user['phone'] ?>" name="phone" placeholder="Phone" class="form-control">
                    </div>
                    <input type="submit" name="edit_account" value="Update Account" class="btn btn-warning">
               </form>

            </div>
        </div>

    </div>
</main>
<?php require_once 'frontend/partials/footer.php'; ?>