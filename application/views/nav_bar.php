<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="<?php echo base_url();?>Bootstrap/css/bootstrap.min.css" rel="stylesheet" />  
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
    <a class="navbar-brand" href="/my_app/index.php/control">Online Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/my_app/index.php/control/index">Home</a>
            </li>
                <li class="nav-item">
                <a class="nav-link" href="/my_app/index.php/control/add"> | Add Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/my_app/index.php/control/view"> | View Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/my_app/index.php/control/store_report"> | View Report</a>
            </li>
        </ul>
    </div>
</nav>