<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Latihan CRUD</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1><?=$tipe?> Bibit</h1>
		
		<form method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nama
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama" value="<?=isset($default['name'])? $default['name'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Jenis					
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="jenis" value="<?=isset($default['jen'])? $default['jen'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Supplier					
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="supplier" value="<?=isset($default['sup'])? $default['sup'] : ""?>">
				</div>
			</div>
			<center>
				<button name="tombol_submit" class="btn btn-primary">
					Simpan
				</button>
			</center>


		</form>
	</div>
</body>
</html>