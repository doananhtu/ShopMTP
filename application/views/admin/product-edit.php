<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Customize-Product</title>
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/reset.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap.min.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap-theme.min.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/font-awesome/css/font-awesome.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/css/style-admin.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/css/style-form.css" />
    <script type="text/javascript" src="<?php echo base_url() ?>asset/bootstrap/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset//ckeditor/sample.js"></script>
</head>
<body style="background-color: #fff;">
	<?php include 'navbar-admin.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-3">
				<div class="sidebar">
					<?php include "sidebar.php"; ?>
				</div>		
			</div>
			<div class="col-xs-12 col-sm-9 col-md-9">
				<div class="form">
					<form method="post" action="<?php echo base_url()?>index.php/adminproduct/uploadUpdate
						?imgfile=<?php echo $product[0]['images'];?>&idp=<?php echo $product[0]['productId'];?>"enctype="multipart/form-data">
						<div class="title">Update product's infomation</div>
						<label>Name: </label><input type="text" placeholder="Tên sản phẩm" id="namep" name="namep" value="<?php echo trim($product[0]['name']);?>"></br>
						<label>Price: </label> <input type="text" placeholder="Giá sản phẩm" id="pricep" name="pricep" value="<?php echo $product[0]['price'];?>"></br>
						<label>Current image: </label> <img src="<?php echo $product[0]['images'];?>" width=80px></br>
						<label>New image: </label>
						<input type="file" id="image" name="image"></br>
						<label>Descriptions: </label></br><textarea id="description" name="description" class="ckeditor" value="<?php echo $product[0]['description'];?>"></textarea></br>
						<label>Product's catalog: </label>
						<select name="selectp" class="select">
							<?php
								foreach ($catalog as $row) {
									if(!empty($row['parent'])){
										foreach ($catalog as $row2) {
											if($row2['catalogId'] == $row['parent']){
												if($row['catalogId'] == $product[0]['catalogId'])
													echo '<option value="'.$row['catalogId'].'" selected="selected">' . $row['name'] ."(" . $row2['name'].")";
												else
													echo '<option value="'.$row['catalogId'].'">' . $row['name'] ."(" . $row2['name'].")";
											}										
											echo '</option>';
										}										
									}else{
										if($row['catalogId'] == $product[0]['catalogId'])
											echo '<option value="'.$row['catalogId'].'" selected="selected">' . $row['name'];
										else
											echo '<option value="'.$row['catalogId'].'">' . $row['name'];
										echo '</option>';
									}						
								}							
							?>
						</select>
						</br>
						<button type="submit" class="sub">Submit</button>
					</from>
				</div>			
			</div>
		</div>
	</div>
</body>
</html>