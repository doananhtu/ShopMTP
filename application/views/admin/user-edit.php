<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User-Edit</title>
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/reset.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap.min.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap-theme.min.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/font-awesome/css/font-awesome.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/css/style-admin.css" />
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/css/style-product-view.css" />
    <link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/css/style-form.css" />
    <script type="text/javascript" src="<?php echo base_url() ?>asset/bootstrap/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/bootstrap/js/bootstrap.min.js"></script>
	<link type ="text/css" rel="stylesheet" href="<?php echo base_url() ?>asset/css/style-user-view.css" />
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
					<form method="post" action="<?php echo base_url()?>index.php/adminproduct/userEdit?idu=<?php echo $user[0]['user#'];?>">
						<label>Họ tên: </label><input type="text" name="name" value="<?php echo trim($user[0]['name']);?>"></br>
						<label>Email: </label><input type="text" name="email" value="<?php echo trim($user[0]['email']);?>"></br>
						<label>Mật khẩu: </label><input type="text" name="pass" value="<?php echo trim($user[0]['password']);?>"></br>
						<label>SĐT: </label><input type="text" name="phone" value="<?php echo trim($user[0]['phone']);?>"></br>
						<label>Địa chỉ: </label><input type="text" name="address" value="<?php echo trim($user[0]['address']);?>"></br>
						<label></label><input type="submit" class="submit" value="Cập nhật thông tin">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>