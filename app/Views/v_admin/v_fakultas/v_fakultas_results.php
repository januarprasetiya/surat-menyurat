<?= $this->extend('tema/v_main') ?>

<?= $this->section('title') ?>
SITA | Data Detail Fakultas
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
					Data Detail Pejabat Fakultas
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
                    <div class="col-md-9 col-sm-12">
                        <div class="portlet light">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-bank font-green-sharp"></i>
                                    <span class="caption-subject font-green-sharp bold">Data <?= esc($data_fakultas['nama_fakultas']) ?></span>
                                </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse" data-original-title="" title="">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <a href="<?= site_url('admin/fakultas/' . encrypt_url('fakultas')) ?>" class="btn btn-sm default">
                                    <i class="fa fa-arrow-circle-left"></i>
                                    Kembali
                                </a>

                                <a href="<?= site_url('admin/tambah_pejabat_fakultas/' . encrypt_url($id_fakultas)) ?>" class="btn btn-sm blue">
                                    <i class="fa fa-plus-circle"></i>
                                    Tambah Data Pimpinan
                                </a>

                                <!-- Alert success added begin -->
                                <?php if (!empty(session()->getFlashdata('tambah'))) : ?>
                                    <div class="alert alert-success" style="margin-top: 20px;">
								        <?= (session()->getFlashdata('tambah')); ?>
							        </div>
                                <?php endif; ?>
                                <!-- Alert success added close -->

                                <!-- Alert success edited begin -->
                                <?php if (!empty(session()->getFlashdata('edit'))) : ?>
                                    <div class="alert alert-success" style="margin-top: 20px;">
								        <?= (session()->getFlashdata('edit')); ?>
							        </div>
                                <?php endif; ?>
                                <!-- Alert success edited close -->


                                <!-- Alert success deleted begin -->
                                <?php if (!empty(session()->getFlashdata('hapus'))) : ?>
                                    <div class="alert alert-danger" style="margin-top: 20px;">
								        <?= (session()->getFlashdata('hapus')); ?>
							        </div>
                                <?php endif; ?>
                                <!-- Alert success deleted close -->

                                <!-- Pencarian berdasarkan periode jabatan begin -->
                                <form class="form-horizontal" method="post" action="<?= site_url('admin/cari_periode_fakultas/' . encrypt_url($id_fakultas)) ?>" role="form">
                                    <?= csrf_field(); ?>
                                        <div class="table-scrollable table-scrollable-borderless"> 
                                            <table class="table table-hover table-light"> 
                                                <tbody>
                                                    <tr> 
                                                        <td width=5%><b>Periode</b></td> 
                                                        <td width=20%>
                                                            <select name="cari_periode" class="form-control" style="width:300px">
                                                                <option value="">-- Pilih Periode --</option>
                                                                <?php foreach ($periode as $period) : ?>
                                                                    <option value="<?= encrypt_url($period['id_periode_fakultas']) ?>"><?= esc($period['nama_periode_fakultas']) ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span class="input-group-btn">
                                                                <button type="submit" class="btn btn-success">
                                                                    <span class="md-click-circle md-click-animate"></span>
                                                                    <i class="fa fa-search"></i>
                                                                    Cari
                                                                </button>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                </form>
                                 <!-- Pencarian berdasarkan periode jabatan end -->
                                
                                <div class="table-scrollable" style="margin-top: 20px;">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead class="">
                                            <tr>
                                                <th>No</th>
                                                <th>NIY / NIP</th>
                                                <th>Nama Pejabat</th>
                                                <th>Jabatan</th>
                                                <th>Masa Periode</th>
                                                <th>Periode</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Koneksi database Fakultas untuk Cek data fakultas open -->
                                            <?php
                                                $db = \Config\Database::connect();
                                                $pejabat = $db->table('tbl_fakultas_pejabat')->get()->getResultArray();
                                            ?>
                                            <!-- End -->

                                            <!-- Jika data Fakultas kosong Open -->
                                            <?php if($data_pejabat == null) { ?>
                                                <td colspan="7" class="text-danger text-center"><i>Data tidak ditemukan.</i></td>
                                            <!-- Jika data Fakultas kosong End -->

                                            <?php } else { ?>
                                                <!-- Jika data Fakultas ada Open -->
                                                <?php $no=1; foreach ($periode_fakultas as $data => $data_pejabat) : ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= esc($data_pejabat['niyp_pejabat']) ?></td>
                                                            <td><?= esc($data_pejabat['nama_pejabat']) ?></td>
                                                            <td><?= esc($data_pejabat['jabatan']) ?></td>
                                                            <td>
                                                                <?= esc(date_indo($data_pejabat['masa_mulai'])) . ' s.d. ' . esc(date_indo($data_pejabat['masa_akhir'])) ?>
                                                            </td>
                                                            <td><?= esc($data_pejabat['nama_periode_fakultas']) ?></td>
                                                            <td>
                                                                <div>
                                                                    <a href="<?= site_url('admin/edit_pejabat_fakultas/' . encrypt_url($data_pejabat['id_pejabat_fakultas']) . '/' . encrypt_url($data_fakultas['id_fakultas'])) ?>" title="Ubah data" class="btn btn-xs btn-circle blue tooltips" data-placement="bottom">
                                                                        <i class="fa fa-pencil"></i>
                                                                        <!-- Ubah -->
                                                                    </a>
                                                                    
                                                                    <a href="#basic<?= encrypt_url($data_pejabat['id_pejabat_fakultas']) . encrypt_url($id_fakultas) ?>" title="Hapus data" class="btn btn-xs btn-circle red-sunglo tooltips" data-toggle="modal" data-placement="bottom">
                                                                        <i class="fa fa-trash"></i>
                                                                        <!-- Hapus -->
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <div class="modal fade bs-modal-sm" id="basic<?= encrypt_url($data_pejabat['id_pejabat_fakultas']) . encrypt_url($id_fakultas) ?>" tabindex="-1" role="basic" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                        <h4 class="modal-title text-danger">Hapus Data Pimpinan</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                            Apakah anda yakin ingin menghapus data?
                                                                    </div>
                                                                    
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn default" data-dismiss="modal">
                                                                            <i class="fa fa-times"></i>
                                                                            Batal
                                                                        </button>
                                                                        <form action="<?= site_url('admin/hapus_pejabat_fakultas/' . encrypt_url($data_pejabat['id_pejabat_fakultas']) . '/' . encrypt_url($id_fakultas)) ?>" method="POST" class="inline">
                                                                            <?= csrf_field(); ?>
                                                                            <input type="hidden" name="_method" value="DELETE">
                                                                            <button type="submit" class="btn btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus Data">
                                                                                <i class="fa fa-trash"></i>
                                                                                Hapus
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>
                                                <?php endforeach ?>
                                                <!-- Jika data Fakultas ada Close -->
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
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
                        	        <?= $this->include('tema/v_info') ?>
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