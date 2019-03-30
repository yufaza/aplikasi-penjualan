<!doctype html>
<html lang="en">

<head>
	<title>Aplikasi Penjualan</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/dashboard.css">
</head>

<body>
	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Penjualan</a>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<nav id="navigation" class="col-md-2 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url('kategori')?>">
								Kategori Produk
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url('produk')?>">
								Produk
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url('penjualan')?>">
								Penjualan
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
				<?php $this->load->view($view)?>
			</main>
		</div>
	</div>
</body>

</html>
