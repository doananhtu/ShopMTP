<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="list-group">
	  	<a href="#" class="list-group-item active">
	    Catalog Management
		</a>
		<a href= "<?php echo base_url()?>index.php/adminproduct/showc" class="list-group-item">View all</a>
		<a href="<?php echo base_url()?>index.php/adminproduct/catalogInsert" class="list-group-item">Add new catalog</a>
	</div>
	<div class="list-group">
	  	<a href="#" class="list-group-item active">
	    Product Management
		</a>
		<a href="<?php echo base_url()?>index.php/adminproduct/showc" class="list-group-item">View all</a>
		<a href="<?php echo base_url()?>index.php/adminproduct/productInsert" class="list-group-item">Add new catalog</a>
	</div>
	<div class="list-group">
	  	<a href="#" class="list-group-item active">
	    Order Management
		</a>
		<a href="<?php echo base_url()?>index.php/adminproduct/showtrans" class="list-group-item">View all</a>
	</div>
	<div class="list-group">
	  	<a href="#" class="list-group-item active">
	    User Management
		</a>
		<a href="<?php echo base_url()?>index.php/adminproduct/showu" class="list-group-item">View all</a>
	</div>
	<div class="list-group">
	  	<a href="#" class="list-group-item active">
	   	News Management
		</a>
		<a href="#" class="list-group-item">View all</a>
		<a href="#" class="list-group-item">Add new catalog</a>
	</div>
	<div class="list-group">
	  	<a href="#" class="list-group-item active">
	   	Administrator
		</a>
		<a href="<?php echo base_url()?>index.php/adminproduct/showad" class="list-group-item">View all</a>
		<a href="<?php echo base_url()?>index.php/adminproduct/adminInsert" class="list-group-item">Add new catalog</a>
	</div>
</body>
</html>