<?php include('nav_bar.php') ?>
	<div class="col-md-10 mx-auto">
	<div class="container">
	<div class="table-responsive">
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Availability</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
        <?php foreach($products as $row){ ?>
	        <tr>
	            <td>
	                <?php echo "$row->id"; ?>
	            </td>
	            <td>
	                <?php echo "$row->name"; ?>
	            </td>
	            <td>
	                <?php echo "$row->price"; ?>
	            </td>
                <td>
                    <?php echo "$row->availability"; ?>
                </td>
	            <td>
	                <a href="viewItem?id=<?php echo $row->id ?>" name="update" class="btn btn-success">Update</a>
	            </td>
	            <td>
	                <a href="deleteItem?id=<?php echo $row->id ?>" name="delete" class="btn btn-danger">Delete</a>
	            </td>
	        </tr>
    	<?php } ?>
    </table>
</div>
</div>
</div>
</body>
</html>