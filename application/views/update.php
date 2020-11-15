<?php include('nav_bar.php') ?>
	<div class="row">
        <div class="col-md-8 mx-auto">
            <div class="jumbotron mt-3">
                <form method="post">
                    <div class="form-group">
                        <label for="id">Item Code</label>
                        <input type="text" class="form-control" readonly="true" name="id" value="<?php echo $item[0]->id ?>" required>

                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $item[0]->name ?>" required>
                        
                        <label for="quantity">Availability</label>
                        <input type="text" class="form-control" name="availability" value="<?php echo $item[0]->availability ?>" required>

                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" value="<?php echo $item[0]->price ?>" required>
                    </div>
                    <input type="submit" value="Update" class="btn btn-primary" name="update">
                </form>
            </div>
        </div>
    </div>
</body>
</html>