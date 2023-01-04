<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu" >
		<div class="container-fluid">
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li>
						<a href="<?= site_url('/'); ?>">Home</a>
					</li>

					<!-- // Menu for Admin Begin -->
					<!-- auto hover: data-close-others="true" -->
						<?php if (session('role_user') == 1) { ?>
						<li class="menu-dropdown classic-menu-dropdown ">
							<a data-close-others="true" data-toggle="dropdown" href="javascript:;">
								Master Data <i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu pull-left">
								<li class=" dropdown">
									<a href="<?= site_url('admin/fakultas/' . encrypt_url('fakultas')) ?>">
										<i class="fa fa-angle-right"></i>
										Fakultas
									</a>
								</li>

								<li class=" dropdown">
									<a href="#">
										<i class="fa fa-angle-right"></i>
										Program Studi
									</a>
								</li>

								<li class=" dropdown">
									<a href="#">
										<i class="fa fa-angle-right"></i>
										Tahun Akademik
									</a>
								</li>

								<li class=" dropdown">
									<a href="#">
										<i class="fa fa-angle-right"></i>
										Periode Pimpinnan
									</a>
								</li>
							</ul>
						</li>

						<li class="menu-dropdown classic-menu-dropdown ">
							<a data-close-others="true" data-toggle="dropdown" href="javascript:;">
								Data Surat<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li class=" ">
									<a href="#">
									<i class="fa fa-angle-right"></i>
									Surat Masuk </a>
								</li>
								<li class=" ">
									<a href="#">
									<i class="fa fa-angle-right"></i>
									Surat Masuk </a>
								</li>

								<li class=" ">
									<a href="#">
									<i class="fa fa-angle-right"></i>
									Surat Keluar</a>
								</li>
							</ul>
						</li>
						<?php } ?>
					<!-- // Menu for Admin End -->

				</ul>
			</div>
			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>
<!-- END HEADER -->