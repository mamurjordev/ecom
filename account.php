<?php require_once "frontend/partials/header.php" ?>
<?php require_once "config.php" ?>

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
               <h4 class="text-center">Orders</h4>


            </div>
        </div>

    </div>
</main>
<?php require_once 'frontend/partials/footer.php'; ?>