<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('_partials/head.php') ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

	<!-- Preloader -->
	<div class="preloader flex-column justify-content-center align-items-center">
		<img class="animation__shake" src="<?= base_url('assets/img/adminlte/AdminLTELogo.png') ?>" alt="AdminLTELogo" height="60" width="60">
	</div>

	<!-- Navbar -->
	<?php $this->load->view('_partials/navbar.php') ?>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<?php $this->load->view('_partials/aside.php') ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Gudang</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item">Data Master</li>
							<li class="breadcrumb-item"><a href="#">Warehouse</a></li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<!-- Small boxes (Stat box) -->
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">
									<a href="<?= base_url('index.php/warehouse/add') ?>">
										<button class="btn btn-primary">+ Tambah</button>
									</a>
								</h3>

								<div class="card-tools">
									<div class="input-group input-group-sm" style="width: 150px;">
										<input type="text" name="table_search" class="form-control float-right" placeholder="Search">

										<div class="input-group-append">
											<button type="submit" class="btn btn-default">
												<i class="fas fa-search"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /.card-header -->
							<div class="card-body table-responsive p-0">
								<table class="table table-hover text-nowrap">
									<thead>
									<tr>
										<th>No</th>
										<th>Kode</th>
										<th>Nama</th>
										<th>Keterangan</th>
										<th>Aksi</th>
									</tr>
									</thead>
									<tbody>
									<?php $i = 0 ?>
									<?php foreach ($warehouses as $warehouse): ?>
										<?php $i++ ?>
										<tr>
											<td><?= $i ?></td>
											<td><?= $warehouse->code ?></td>
											<td><?= $warehouse->name ?></td>
											<td><?= $warehouse->info ?></td>
											<td>
												<button
													class="btn btn-primary"
													onclick="window.location.href = '<?= base_url('index.php/warehouse/edit/'.$warehouse->id) ?>'">
													Ubah
												</button>
												<button
													class="btn btn-danger"
													onclick="window.location.href = '<?= base_url('index.php/warehouse/delete/'.$warehouse->id) ?>'">
													Hapus
												</button>
											</td>
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
				</div>
				<!-- /.row -->
				<!-- Main row -->
				<div class="row">
				</div>
				<!-- /.row (main row) -->
			</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<?php $this->load->view('_partials/footer.php') ?>

</div>
<!-- ./wrapper -->

<?php $this->load->view('_partials/script.php') ?>
</body>
</html>
