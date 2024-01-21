<?php $master_data = array('company', 'partner') ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="<?= base_url('assets/img/adminlte/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url('assets/img/adminlte/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Alexander Pierce</a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->

				<!-- Dashboard -->
				<li class="nav-item">
					<a href="<?= base_url('') ?>" class="nav-link <?= $active_menu == 'dashboard' ? 'active' : '' ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>

				<!-- Data Master -->
				<li class="nav-item <?= in_array($active_menu, $master_data) ? 'menu-is-opening menu-open' : '' ?>">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-table"></i>
						<p>
							Data Master
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url('index.php/company') ?>" class="nav-link <?= $active_menu == 'company' ? 'active' : '' ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Perusahaan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/icons.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Rekanan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/buttons.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Unit</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/sliders.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Gudang</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/modals.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Lokasi</p>
							</a>
						</li>
					</ul>
				</li>

				<!-- Data Operasi -->
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-table"></i>
						<p>
							Operasional
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/UI/general.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Penerimaan Barang</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/icons.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Pengeluaran Barang</p>
							</a>
						</li>
					</ul>
				</li>

				<!-- Laporan -->
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-table"></i>
						<p>
							Laporan
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/UI/general.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Inventori Barang</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="pages/UI/general.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Penerimaan Barang</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="pages/UI/general.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Pengeluaran Barang</p>
							</a>
						</li>
					</ul>
				</li>

			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
