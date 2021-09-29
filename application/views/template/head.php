<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<title><?php echo $judul ?></title>
</head>

<body>
	<!-- As a link -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="<?php echo base_url(); ?>">Home</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link" href="<?php echo base_url('datahosting/sistem'); ?>">Sistem</a>
					<a class="nav-link" href="<?php echo base_url('datahosting/proses'); ?>">Proses</a>
					<a class="nav-link" href="<?php echo base_url('datahosting/admin'); ?>">Admin</a>
					<a class="nav-link" href="<?php echo base_url('datahosting/help'); ?>">Help</a>
					<a class="nav-link" href="<?php echo base_url('datahosting/about'); ?>">About</a>
				</div>
			</div>
		</div>
	</nav>