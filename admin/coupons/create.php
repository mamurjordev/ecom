<?php require_once __DIR__ . '/../partials/header.php' ?>

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
                                        <div class="col-md-4">
                                                        <label>Coupon Code</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="text" id="first-name" class="form-control" name="cupon_code" placeholder="Ex: NEW30" required>
                                                </div>
                                                <div class="col-md-4">
                                                        <label>Percent %</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="number" id="email-id" class="form-control" name="percent" placeholder="Ex: 20%" >
                                                </div>
                                                
                                                <div class="col-md-4">
                                                        <label>Ammount (TK)</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <input type="number" id="email-id" class="form-control" name="ammount" placeholder="Ex: 500" >
                                                </div>
                                                <div class="col-md-4">
                                                        <label>Apply As</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select name="type" id="" class="form-control" required>
                                                        <option value="percent">Percent </option>
                                                        <option value="ammount">Ammount </option>
                                                    </select>
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

<?php require_once '../partials/footer.php' ?>