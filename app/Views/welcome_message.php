<!DOCTYPE html>

<head>
<meta charset="utf-8">
<title>Dashboard | Surat Menyurat</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<script src="../livecss.js" type="text/javascript"></script>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN THEME STYLES -->
<link href="<?= base_url() ?>/theme/assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/theme/assets/global/css/plugins-md.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/theme/assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/theme/assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="<?= base_url() ?>/theme/assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico">

<style>
	.btn + .btn {
		margin: 0 !important;
	}

	.top-news span {
		font-size: 14px;
	}

	.top-news em {
		font-size: 12px;
		text-transform: capitalize;
	}
</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body class="page-md page-header-menu-fixed">
<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">
		<div class="container-fluid">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<a href=""><img src="https://portal.uad.ac.id/themes/metronic/img/logo-default.png"" alt="logo" class="logo-default" style="margin-top: 18px;"></a>
				<h3 style="margin: -38px 0px 0px 60px;"><strong>Sisumé</strong></h3>
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

				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- END HEADER TOP -->
    
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu" >
		<div class="container-fluid">
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li>
						<a href="<?= site_url(); ?>">Beranda</a>
					</li>

					<li>
						<a href="<?= site_url(); ?>">FAQ</a>
					</li>
				</ul>
			</div>
			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>
<!-- END HEADER -->

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
				<li class="active">
					Halaman Utama
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
                    <div class="col-md-9 col-sm-12">
                        <div class="portlet light ">
                            <div class="caption" style="padding-bottom: 10px;">
                                <i class="fa fa-bookmark-o font-green-sharp"></i>
                                <span class="caption-subject font-green-sharp uppercase">Tentang Sisumé</span>
                            </div>

                            <div class="row">
			                    <div class="col-md-12" style="border-bottom:1px solid #eee;">
				                    <div class="well portal_info">
										<p class="info_title"><strong>SISTEM INFORMASI SURAT MENYURAT</strong><br></p>		
					                    <p align="justify">Sistem Informasi Surat Menyurat (Sisumé) merupakan <i>webApps</i> yang digunakan untuk membuat dan mengarsipkan admninistrasi persuratan. Sistem ini memiliki dasar penggunaan untuk merekap dan membuat surat masuk dan keluar di linkungan Fakultas Keguruan dan Ilmu Pendidikan.</p>
									</div>
			                    </div>

								<div class="col-md-12" style="margin-top:10px;">
									<div class="caption" style="padding-bottom: 10px;">
										<i class="fa fa-rss-square font-green-sharp"></i>
										<span class="caption-subject font-green-sharp uppercase">Fitur-fitur Sisumé</span>
									</div>

									<div class="">
					                    <p align="justify">Berikut ini adalah beberapa fitur yang bisa digunakan dalam Sistem Informasi Surat Menyurat.</p>
										<ul>
											<li>Menambahkan Fakultas dan Program Studi</li>
											<li>Menambahkan User/Admin surat menyurat, Pejabat Fakultas/Program Studi</li>
											<li>Merekan surat masuk dan keluar.</li>
											<li>Monitoring disposisi surat masuk dan keluar.</li>
										</ul>
										<p align="justify" class="text-danger"><i class="fa fa-info-circle"></i> Sementara ini, akun Sisumé belum bisa terintergrasi dengan akun Portal Universitas. Semoga ke depan, bisa terintregasi oleh akun Portal Universitas.</p>
									</div>
								</div>
		                    </div>
                        </div>
                    </div>
					
                    <div class="col-md-3 col-sm-12">
                        <div class="portlet light">
                            <div class="portlet-body form">                        
                                <div class="form-login" style="border-bottom:1px solid #eee;">
                                    <h3 class="form-title">Login Sisumé</h3>
									<!-- // Get session will data user don't match begin -->
                                    <?php if (!empty(session()->getFlashdata('login_gagal'))) : ?>
                                        <div class="alert alert-danger mb-4" role="alert">
                                            <b>Error !! </b><?php echo session()->getFlashdata('login_gagal'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <!-- // Get session will data user don't match end -->
										

                                    <form action="<?= site_url('login') ?>" id="form" role="form" method="post" accept-charset="utf-8">
									<?= csrf_field() ?>
                                        <div class="form-group ">
                                            <label class="control-label visible-ie8 visible-ie9">Username</label>
                                            <div class="input-icon">
                                                <i class="fa fa-user"></i>
                                                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" title="NIM/NIY/NIP" name="nama_user" value="<?= old('nama_user') ?>" autofocus="">
                                            </div>
                                        </div>					
                                        <div class="form-group ">
                                            <label class="control-label visible-ie8 visible-ie9">Kata Sandi</label>
                                            <div class="input-icon">
                                                <i class="fa fa-lock"></i>
                                                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Kata Sandi" name="pass_user">
                                            </div>
                                        </div>
										<p>Silahkan menggunakan akun Sisumé dari admin.</p>
                                        <div class="form-actions">
                                            <button type="submit" class="btn blue pull-left">
                                                Masuk <i class="m-icon-swapright m-icon-white"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <div class="forget-password">
                                        <h4>Lupa kata sandi anda ?</h4>
                                        <p>
                                            Silahkan klik <a href="#" target="_blank" id="forget-password" class="forget-password"><strong style="color:#3598dc">URL ini</strong></a> untuk mereset kata sandi anda.
                                        </p>
                                    </div>
                                </div>
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

<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="container-fluid text-center">
		 2020 - <?= date('Y') ?> Develop by <a href="https://instagram.com/januarprasetiya" target="_blank" style="color: #a2abb7;"><strong>&copy;januarprasetiya</strong></a>
	</div>
</div>
<div class="scroll-to-top">
	<i class="icon-arrow-up"></i>
</div>
<script src="<?= base_url() ?>/theme/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>

<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?= base_url() ?>/theme/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= base_url() ?>/theme/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>

<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo(theme settings page)
   Index.init(); // init index page
   Tasks.initDashboardWidget(); // init tash dashboard widget
});
</script>

<script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            })
        }, 3000);
    </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>