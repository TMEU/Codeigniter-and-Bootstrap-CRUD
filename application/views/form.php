<?php include('nav_bar.php') ?>
	<div class="row">
		    <div class="col-md-6 mx-auto">
		        <div class="card card-body mt-3">
		            <h3 class="text-center">Add product</h3>
		            <form method="post">
		                <div class="form-group">
		                    <label for="fname">Name</label>
		                    <input type="text" class="form-control" name="Name" value="" required>
		                    
		                    <label for="lname">Availability</label>
		                    <input type="text" class="form-control" name="Availability" value="" required>

                            <label for="leaves">Price</label>
                            <input type="text" class="form-control" name="price" value="" required>
		                    
		                </div>
		                <input type="submit" value="Add" class="btn btn-success" name="add">
		                <!-- <button name="save" type="submit" class="btn btn-primary">Register</button> -->
		            </form>
		        </div>
		    </div>
		</div>
</body>
</html>