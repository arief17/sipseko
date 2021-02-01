<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>APP - SPPD LOGIN</title>

	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="row">
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-white">
	<a class="navbar-brand" href="#"> SPPD-DIN</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-link active" href="#">Home</a>
			<a class="nav-link" href="#">Track Perjadin</a>
		</div>
	</div>
	</nav>
	<!-- akhir navbar -->
	<div class="col-sm-8 col-xs-8 login-left">
		<h1>Aplikasi Perjalanan Dinas (PERJADIN)</h1>
		<p>Aplikasi ini digunakan untuk membuat Surat Perintah Perjalanan Dinas (SPPD) aplikasi ini langsung dikontrol oleh kepala sekolah sebagai Validator Kegiatan Perjalanan Dinas yang di lakukan oleh seluruh Pegawai di Lingkungan SMKN 1 Kragilan </p>

		<div class="info">
			<h3><i class="fa fa-bullhorn"></i> Informasi</h3>
			<li>
			Dalam Masa Pandemi Covid - 19 Perjalanan Dinas Ke Luar Provinsi Untuk Sementara Tidak di Ijinkan Kecuali ada Ijin Resmi dari Dinas Pendidikan atau di Atasnya
			</li>
			<li>
				Untuk Perjalanan Dinas Dalam Provinsi banten dilakukan menggunakan Aturan yang berlaku
			</li>
		</div>
	</div>
	<div class="col-sm col-xs login-right">
		<form action="dashboard">
		<h4 class="mb-4">LOGIN - FORM</h4>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		</div><br>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1">
		</div><br>
		<button type="submit" class="btn btn-primary col-sm-12">Masuk Ke Aplikasi</button>
		</form><br>

		<div class="footer-login text-center">
			<small>Ada Masalah Login ? <a href="#"><span class="text-danger">Klik disini</span></a></small><br><br>
		</div>
	</div>

</div>
</div>
<!-- JS dan JQUERY -->
<script src="<?= base_url()?>assets/js/jquery-3.5.1.min.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.min.js">"></script>
</body>
</html>
