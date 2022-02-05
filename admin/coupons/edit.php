<?php require_once __DIR__ . '/../partials/header.php' ?>
<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM cupon_code WHERE coupon_id='$id'";
    $data = $connection->query($sql);
    foreach($data as $coupon){
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
                                                        <label>Coupon Code</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="text" id="first-name" class="form-control" name="cupon_code" placeholder="Ex: NEW30" value="<?php echo $coupon['cupon_code'] ?>" required>
                                                </div>
                                                <div class="col-md-4">
                                                        <label>Percent %</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="number" id="email-id" class="form-control" name="percent" placeholder="Ex: 20%" value="<?php echo $coupon['percent'] ?>" >
                                                </div>
                                                
                                                <div class="col-md-4">
                                                        <label>Ammount (TK)</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="number" id="email-id" class="form-control" name="ammount" placeholder="Ex: 500"value="<?php echo $coupon['ammount'] ?>"  >
                                                </div>
                                                <div class="col-md-4">
                                                        <label>Apply As</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select name="type" id="" class="form-control" required>
                                                        <option value="percent" <?php echo $coupon['select_type']=='percent'? "selected" : " " ?>>Percent </option>
                                                        <option value="ammount" <?php echo $coupon['select_type']=='ammount'? "selected" : " " ?> >Ammount </option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-secondary me-1 mb-1" name="submit">Update</button>
                                                </div>
                                        </div>
                                </div>
                        </form>
                </div>
        </div>
</div>
</div>

<?php require_once '../partials/footer.php' ?>