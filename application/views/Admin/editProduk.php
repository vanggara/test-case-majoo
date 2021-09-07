<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Admin Logipedia Users</title>
	<link href=<?php echo base_url('assets/admin/css/styles.css')?> rel="stylesheet" />
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
		crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
	</script>
</head>

<body class="sb-nav-fixed">
	<!-- header -->
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<a class="navbar-brand" href="index.html">Majoo Teknologi Indonesia</a>
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
		</form>
		<!-- Navbar-->
		<ul class="navbar-nav ml-auto ml-md-0">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a class="dropdown-item" href=<?php echo base_url('admin/do-logout')?>>Logout</a>
				</div>
			</li>
		</ul>
	</nav>
	<div id="layoutSidenav">
		<!-- sidebar -->
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
				<div class="sb-sidenav-menu">
					<div class="nav">
						<div class="sb-sidenav-menu-heading">Management</div>
						<a class="nav-link" href=<?php echo base_url('admin')?>>
							<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
							Produk
						</a>
						<a class="nav-link" href=<?php echo base_url('admin/pesanan')?>>
							<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
							Pesanan
						</a>
					</div>
				</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid">
					<h1 class="mt-4">Edit Produk</h1>
					<div class="card mb-4">
						<div class="card-header">
							<i class="fas fa-plus"></i>
							Edit Produk
						</div>
						<div class="card-body">
							<?php foreach ($products->result_array() as $product): ?>
							<form action=<?php echo base_url('admin/update-produk')?> enctype="multipart/form-data"
								id="form" name="form" method="post">
								<input hidden type="text" name="idProduk" id="idProduk"
									value='<?php echo $product['ID_PRODUK'] ?>'>
								<div class="form-row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="small mb-1" for="namaProduk">Nama Produk </label>
											<input class="form-control py-4" name="namaProduk" id="namaProduk"
												type="text" value='<?php echo $product['NAMA_PRODUK'] ?>' placeholder=""
												required />
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="small mb-1" for="hargaProduk">Harga Produk </label>
											<input class="form-control py-4" name="hargaProduk" id="hargaProduk"
												type="text" value='<?php echo $product['HARGA_PRODUK'] ?>'
												placeholder="" required />
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="small mb-1" for="deskripsiProduk">Deskripsi Produk</label>
									<div class="input-group">
										<textarea name="deskripsiProduk" id="deskripsiProduk" placeholder="" required
											class="form-control"
											required><?php echo $product['DESKRIPSI_PRODUK'] ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="small mb-1">Foto Produk</label>
									<div class="input-group mb-3">
										<div class="col-lg-2 d-none d-lg-block">
											<?php if($product['FOTO_PRODUK']!=NULL) {?>
											<img src="<?php echo base_url('assets/img/produk/')?><?php echo $product['FOTO_PRODUK'] ?>"
												id="img-upload" class="img-thumbnail"
												style='width:200px;height:200px; object-fit: contain;'>
											<?php }else{ ?>
											<img src="<?php echo base_url('assets/img/avatar.png')?>" id="img-upload"
												class="img-thumbnail"
												style='width:220px;height:220px; object-fit: contain;'>
											<?php } ?>
										</div>
										<div class="custom-file">
											<input hidden type="text" name="fotoProduk" id="fotoProduk"
												value='<?php echo $product['FOTO_PRODUK'] ?>'>
											<input type="file" class="form-control-file" name="fotoProduk"
												id="fotoProduk" accept="image/png, image/jpeg, image/jpg">
										</div>
									</div>
								</div>
								<button class="btn btn-primary btn-lg btn-block" type="submit"
									name="submit">Simpan</button>
							</form>
							<?php endforeach?>
						</div>
					</div>
				</div>
			</main>
			<!-- footer -->
			<footer class="py-4 bg-light mt-auto">
				<div class="container-fluid">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted">2019 &copy; PT Majoo Teknologi Indonesia
						</div>
						<div>
							<a href="#">Privacy Policy</a>
							&middot;
							<a href="#">Terms &amp; Conditions</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous">
	</script>
	<script src=<?php echo base_url('assets/admin/js/scripts.js')?>></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
	<script src=<?php echo base_url('assets/admin/demo/datatables-demo.js')?>></script>
</body>

</html>
