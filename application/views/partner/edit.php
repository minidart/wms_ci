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
						<h1 class="m-0">Rekanan</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item">Data Master</li>
							<li class="breadcrumb-item"><a href="<?= base_url('index.php/partner') ?>">Partner</a></li>
							<li class="breadcrumb-item"><a href="#">Edit</a></li>
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
						<div class="card card-info">
							<div class="card-header">
								<h3 class="card-title">Edit Rekanan</h3>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
							<form class="form-horizontal" method="post" action="<?= base_url('index.php/partner/update') ?>">
								<div class="card-body">

									<input type="hidden" name="id" value="<?= $partner->id ?>">

									<div class="form-group row">
										<label for="inputCode" class="col-sm-2 col-form-label">Jenis</label>
										<div class="col-sm-10">
											<input type="radio" class="form-check-inline" id="inputTypeTransporter" name="type" value="Transporter" <?= $partner->type == 'Transporter' ? 'checked' : '' ?> required>
											<label for="inputCodeTransporter">Transporter</label>
											<br>
											<input type="radio" class="form-check-inline" id="inputTypeVendor" name="type" value="Vendor" <?= $partner->type == 'Vendor' ? 'checked' : '' ?> required>
											<label for="inputCodeVendor">Vendor</label>
										</div>
									</div>

									<div class="form-group row">
										<label for="inputCode" class="col-sm-2 col-form-label">Kode</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputCode" name="code" value="<?= $partner->code ?>" required>
										</div>
									</div>

									<div class="form-group row">
										<label for="inputName" class="col-sm-2 col-form-label">Nama</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputName" placeholder="PT XYZ" name="name"  value="<?= $partner->name ?>" required>
										</div>
									</div>

									<div class="form-group row">
										<label for="inputAddress" class="col-sm-2 col-form-label">Alamat</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputAddress" placeholder="Jl Gajah Mada" name="address" value="<?= $partner->address ?>" required>
										</div>
									</div>

									<div class="form-group row">
										<label for="inputCity" class="col-sm-2 col-form-label">Kota</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputCity" name="city" value="<?= $partner->city ?>" required>
										</div>
									</div>

									<div class="form-group row">
										<label for="inputPhone" class="col-sm-2 col-form-label">No Telepon</label>
										<div class="col-sm-10">
											<input type="tel" class="form-control" id="inputPhone" value="<?= $partner->phone_number ?>" name="phone_number">
										</div>
									</div>

									<div class="form-group row">
										<label for="inputPhone" class="col-sm-2 col-form-label">Fax</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputPhone" value="<?= $partner->fax ?>" name="fax">
										</div>
									</div>

									<div class="form-group row">
										<label for="inputPhone" class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="inputPhone" value="<?= $partner->email ?>" name="email">
										</div>
									</div>
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
									<button type="submit" class="btn btn-info">Edit</button>
								</div>
								<!-- /.card-footer -->
							</form>
						</div>
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


<?php
