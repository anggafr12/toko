<!DOCTYPE html>
<html>
<head>
	<title>Masuk</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
	<link rel="stylesheet" href="./style.css" />
	
</head>
<body>

	<div class="form-login bg-light shadow p-3 mb-5 bg-white rounded">
		<div class="header"></div>
		<div class="" >
			<form action="aksi/aksi_masuk.php" method="POST">
				<h3 align="center" class="text-danger">RAHAYU ATK</h3>
				<h3 align="center" class="text-info">Login</h3><br>
				<div class="form-group row">
					<div class="col-sm-12">
						<input type="input" name="username" autocomplete="off" class="form-control" placeholder="Username">
					</div>
				  </div>
				  <div class="form-group row">
					<div class="col-sm-12">
						<input type="password" name="password" autocomplete="off" class="form-control" placeholder="Password">
					</div>
				  </div>
				  <div align="center">
					  <button type="submit" class="btn btn-info">Submit</button>
					  <button type="reset" class="btn btn-danger">Reset</button>
				  </div>
			</form>
			
		</div>
		<div class="footer">
		</div>
	</div>
</body>
</html>