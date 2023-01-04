<?= $this->extend('tema/v_main') ?>

<?= $this->section('title') ?>
SITA | Edit Data Fakultas
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container-fluid">
			<!-- BEGIN PAGE TITLE -->
			<!-- <div class="page-title">
				<h1>Data Fakultas</h1>
			</div> -->
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
					<a href="<?= site_url('/') ?>">Home</a><i class="fa fa-circle"></i>
				</li>
                <li>
					<a href="<?= site_url('admin/fakultas/' . encrypt_url('fakultas')) ?>">Data Fakultas</a><i class="fa fa-circle"></i>
				</li>
                <li class="active">
					Edit Data Fakultas
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
                    <div class="col-md-9 col-sm-12">
                       <div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-plus-circle font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Edit data fakultas</span>
							</div>
                            <div class="tools">
								<a href="javascript:;" class="collapse" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="<?= site_url('admin/proses_edit_fakultas/' . encrypt_url('proses_edit_fakultas') . '/' . encrypt_url($data_fakultas['id_fakultas'])) ?>" method="POST" id="form_sample_2" class="form-horizontal" novalidate="novalidate">
                            <?= csrf_field() ?>
								<div class="form-body">
                                    <?php if($validation->hasError('kode_fakultas')) { ?>
                                        <div class="alert alert-danger display-hide" style="display: block;">
                                            <button class="close" data-close="alert"></button>
                                            Ada bagian yang kurang tepat. Silahkan cek kembali !!
                                        </div>
                                    <?php } ?>
                                    
									<div class="form-group <?= ($validation->hasError('kode_fakultas')) ? 'has-error' :'' ?>">
										<label class="col-md-3 control-label">
											Kode Fakultas
											<span class="required" aria-required="true">
												*
											</span>
										</label>
										<div class="col-md-9">
											<input type="text" class="form-control input-inline input-large" placeholder="Buat kode fakultas" name="kode_fakultas" value="<?= esc($data_fakultas['kode_fakultas']) ?>" autofocus>
											<span class="help-inline">
												<?= $validation->getError('kode_fakultas') ?>
											</span>
										</div>
									</div>

									<div class="form-group <?= ($validation->hasError('nama_fakultas')) ? 'has-error' :'' ?>">
										<label class="col-md-3 control-label">
											Nama Fakultas
											<span class="required" aria-required="true">
												*
											</span>
										</label>
										<div class="col-md-9">
											<input type="text" class="form-control input-inline input-large" placeholder="Buat nama fakultas" name="nama_fakultas" value="<?= esc($data_fakultas['nama_fakultas']) ?>">
											<span class="help-inline">
												<?= $validation->getError('nama_fakultas') ?>
											</span>
										</div>
									</div>
									
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<a href="<?= site_url('admin/fakultas/' . encrypt_url('fakultas')) ?>" type="button" class="btn btn-sm default" style="margin-left:5px !important">
                                                <i class="fa fa-times"></i>
                                                Batal
                                            </a>
                                            <button type="submit" class="btn btn-sm green">
                                                <span class="md-click-circle md-click-animate" style="height: 73px; width: 73px; top: -19.7031px; left: 0px;"></span>
                                                <i class="fa fa-save"></i>
                                                Simpan
                                            </button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
                    </div>
					
                    <div class="col-md-3 col-sm-12">
                        <div class="portlet light">
                            <div class="portlet-body form">
								<div class="caption" style="margin-top: 10px;">
									<i class="fa fa-tags font-green-sharp"></i>
									<span class="caption-subject font-green-sharp bold uppercase">Info Akademik</span>
								</div>

								<div class="top-news">
                        	        <div class="top-news">
                        	            <?= $this->include('tema/v_info') ?>
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
<?= $this->endSection() ?>