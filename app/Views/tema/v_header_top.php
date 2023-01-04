<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">
		<div class="container-fluid">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<a href="/"><img src="https://portal.uad.ac.id/themes/metronic/img/logo-default.png"" alt="logo" class="logo-default" style="margin-top: 18px;"></a>
				<h3 style="margin: -38px 0px 0px 60px;"><strong>Portal SITA</strong></h3>
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- <li class="droddown dropdown-separator">
						<span class="separator"></span>
					</li> -->

					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"  data-close-others="true">
						<img alt="" class="img-circle" src="<?= base_url() ?>/theme/assets/admin/layout3/img/avatar.png">
						<span class="username username-hide-mobile">Howdy, <?= ucfirst(esc(session('nama_user')))?></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="#">
								<i class="icon-user"></i> Profil Saya </a>
							</li>
							<li>
								<a href="<?= site_url('logout') ?>">
								<i class="icon-key"></i> Keluar </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- END HEADER TOP -->