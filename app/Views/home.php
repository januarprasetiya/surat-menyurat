<?= $this->extend('tema/v_main') ?>

<?= $this->section('title') ?>
Sisumé | Dashboard
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container-fluid">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Sistem Informasi Surat Menyurat</h1>
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->
			<div class="page-toolbar">
			</div>
			<!-- END PAGE TOOLBAR -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container-fluid">
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="/">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Halaman Utama</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-9 col-sm-12">
					<div class="portlet light ">
						<div class="caption" style="padding-bottom: 10px;">
							<i class="fa fa-bookmark-o font-green-sharp"></i>
							<span class="caption-subject font-green-sharp uppercase">&nbsp; DASHBOARD</span>
						</div>
						
						<div class="row">
							<div class="col-md-12" style="border-bottom:1px solid #eee;">
								<div class="well portal_info">
									<p class="info_title"><strong>👋🏻 Selamat datang,</strong><br></p>		
									<p align="justify">Halo, <strong>"<?= ucfirst(esc(session('nama_user'))) ?>"</strong>. Semoga selalu diberikan kemudahan dalam menjalankan aktivitas. Kamu saat ini masuk sebagai <strong>"<?= (session('role_user') == 1 ? "Super Admin" : ((session('role_user') == 2 ? 'Admin' : 'Guest'))) ?>"</strong>.</p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
								<a class="dashboard-stat dashboard-stat-light green-meadow" href="javascript:;">
								<div class="visual">
									<i class="fa fa-send"></i>
								</div>
								<div class="details">
									<div class="number">
										50 Surat
									</div>
									<div class="desc">
										Surat Keluar
									</div>
								</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
								<a class="dashboard-stat dashboard-stat-light blue" href="javascript:;">
								<div class="visual">
									<i class="fa fa-inbox"></i>
								</div>
								<div class="details">
									<div class="number">
										60 Surat
									</div>
									<div class="desc">
										Surat Masuk
									</div>
								</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
								<a class="dashboard-stat dashboard-stat-light red-sunglo" href="javascript:;">
								<div class="visual">
									<i class="fa fa-info-circle fa-icon-medium"></i>
								</div>
								<div class="details">
									<div class="number">
										6 Pesan Masuk
									</div>
									<div class="desc">
										Pengajuan Masuk
									</div>
								</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<a class="dashboard-stat dashboard-stat-light yellow-crusta" href="javascript:;">
								<div class="visual">
									<i class="fa fa-external-link fa-icon-medium"></i>
								</div>
								<div class="details">
									<div class="number">
										5 Belum diproses
									</div>
									<div class="desc">
										Disposisi
									</div>
								</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<?= $this->endSection() ?>