<?= $this->extend('tema/v_main') ?>

<?= $this->section('title') ?>
SITA | Tambah Pejabat Fakultas
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
					<a href="<?= site_url('admin/detail_fakultas/' . encrypt_url('detail_fakultas') . '/' . encrypt_url($id_fakultas)) ?>">Data Pejabat Fakultas</a><i class="fa fa-circle"></i>
				</li>
                <li class="active">
					Tambah Data Fakultas
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
								<span class="caption-subject font-green-sharp bold uppercase">Tambah pejabat fakultas</span>
							</div>
                            <div class="tools">
								<a href="javascript:;" class="collapse" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="<?= site_url('admin/proses_tambah_pejabat_fakultas/' . encrypt_url($id_fakultas)) ?>" method="POST" id="form_sample_2" class="form-horizontal" novalidate="novalidate">
                            <?= csrf_field() ?>
								<div class="form-body">
                                    <?php if($validation->hasError('niyp_pejabat') || $validation->hasError('nama_pejabat') || $validation->hasError('masa_mulai') || $validation->hasError('masa_akhir')) { ?>
                                        <div class="alert alert-danger display-hide" style="display: block;">
                                            <button class="close" data-close="alert"></button>
                                            Ada bagian yang kurang tepat. Silahkan cek kembali !!
                                        </div>
                                    <?php } ?>
                                    
									<div class="form-group <?= ($validation->hasError('niyp_pejabat')) ? 'has-error' :'' ?>">
										<label class="col-md-3 control-label">
											NIY / NIP Pimpinan
											<span class="required" aria-required="true">
												*
											</span>
										</label>
										<div class="col-md-9">
											<input type="text" class="form-control input-inline input-large" placeholder="NIY / NIP Pejabat" name="niyp_pejabat" value="<?= old('niyp_pejabat') ?>" autofocus>
											<span class="help-inline">
												<?= $validation->getError('niyp_pejabat') ?>
											</span>
										</div>
									</div>

									<div class="form-group <?= ($validation->hasError('nama_pejabat')) ? 'has-error' :'' ?>">
										<label class="col-md-3 control-label">
											Nama Pimpinan
											<span class="required" aria-required="true">
												*
											</span>
										</label>
										<div class="col-md-9">
											<input type="text" class="form-control input-inline input-large" placeholder="ex: Dr. Nama, M.Pd., Ph.D." name="nama_pejabat" value="<?= old('nama_pejabat') ?>">
											<span class="help-inline">
												<?= $validation->getError('nama_pejabat') ?>
											</span>
										</div>
									</div>

                                    <div class="form-group <?= ($validation->hasError('jabatan')) ? 'has-error' :'' ?>">
										<label class="col-md-3 control-label">
											Jabatan
											<span class="required" aria-required="true">
												*
											</span>
										</label>
										<div class="col-md-9">
											<input type="text" class="form-control input-inline input-large" placeholder="Masukkan jabatan" name="jabatan" value="<?= old('jabatan') ?>">
											<span class="help-inline">
												<?= $validation->getError('jabatan') ?>
											</span>
										</div>
									</div>

                                    <div class="form-group <?= ($validation->hasError('periode')) ? 'has-error' :'' ?>">
										<label class="col-md-3 control-label">
											Periode
											<span class="required" aria-required="true">
												*
											</span>
										</label>
										<div class="col-md-9">
											<select name="periode" class="form-control" style="width:300px">
                                                <option value="">-- Pilih Periode --</option>
                                                <?php foreach ($periode_fakultas as $periode) : ?>
                                                    <option value="<?= encrypt_url($periode['id_periode_fakultas']) ?>"><?= $periode['nama_periode_fakultas'] ?></option>     
                                                <?php endforeach ?>             
                                            </select>
											<span class="help-inline">
												<?= $validation->getError('periode') ?>
											</span>
										</div>
									</div>

                                    <div class="form-group <?= ($validation->hasError('masa_mulai') || $validation->hasError('masa_akhir')) ? 'has-error' :'' ?>">
										<label class="control-label col-md-3">
                                            Masa Jabatan
                                            <span class="required" aria-required="true">
												*
											</span>
                                        </label>
										<div class="col-md-4">
											<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control" name="masa_mulai" value="<?= old('masa_mulai') ?>">
												<span class="input-group-addon">
												s.d. </span>
												<input type="text" class="form-control" name="masa_akhir" value="<?= old('masa_akhir') ?>">
											</div>
											<!-- /input-group -->
											<span class="help-block">
                                                <?= ($validation->hasError('masa_mulai') || $validation->hasError('masa_akhir')) ? ($validation->getError('masa_mulai') . ' ' . $validation->getError('masa_akhir')) : "Pilih Rentang Waktu" ?>
                                            </span>
										</div>
									</div>
									
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<a href="<?= site_url('admin/detail_fakultas/' . encrypt_url('detail_fakultas') . '/' . encrypt_url($id_fakultas)) ?> ?>" type="button" class="btn btn-sm default" style="margin-left:5px !important">
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