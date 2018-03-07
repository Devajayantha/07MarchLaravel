<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="{{ 'css/bootstrap.min.css' }}">
	<link rel="stylesheet" type="text/css" href="{{'css/index.css'}}">
</head>
<body>
	<div class="sidebar" id="sidebar">
		<ul class="nav-item">
			<li>
				<a class="selected" href="#">
					<span>Data Mahasiwa</span>
				</a>
			</li>
			<li>
				<a  href="create">
					<span>Tambah Data</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span>Update Data</span>
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
				<table class="table table-striped">
					
					<thead>
						<th>No</th>
						<th>Nama</th>
						<th>Nim </th>
						<th>Alamat </th>
						<th>Kosentrasi </th>
					</thead> <!--
					@foreach ($siswa_list as $siswa)
					<tbody>
						<tr>
							<td> {{$siswa -> id}}</td>
							<td> {{$siswa -> nama }}</td>
							<td> {{$siswa -> nim }}</td>
							<td> {{$siswa -> alamat }}</td>
							<td> {{$siswa -> kosentrasi }}</td>
						</tr>
					</tbody>
					@endforeach -->
				</table>
				<span class="btn btn-secondary" class="submit" >
					<a href="">TAMBAH DATA</a>
				</span>
			</div>
		</div>
	</div>
</body>
</html>