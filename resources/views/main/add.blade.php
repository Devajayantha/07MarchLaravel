<!DOCTYPE html>
<html>
<head>
	<title>Tambah Siswa</title>
	<link rel="stylesheet" type="text/css" href="{{ 'css/bootstrap.min.css' }}">
	<link rel="stylesheet" type="text/css" href="{{'css/index.css'}}">
</head>
<body>
	<input type="text">
	<div class="sidebar" id="sidebar">
		<ul class="nav-item">
			<li>
				<a href="#">
					<span>Data Mahasiwa</span>
				</a>
			</li>
			<li>
				<a  href="#" class="selected">
					<span>Tambah Data</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span >Update Data</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span>Delete Data</span>
				</a>
			</li>				
		</ul>
	</div>
	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<form>
                    <div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" placeholder="input nama"
                    <div> 
					<div class="form-group">
						<label for="nim">nim</label>
						<input type="text" class="form-control" placeholder="input nim">
					</div>
					
                </form>
			</div>
		</div>
	</div>
</body>
</html>