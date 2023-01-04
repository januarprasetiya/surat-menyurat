<?= $this->extend('tema/v_main') ?>

<?= $this->section('title') ?>
SITA | Data Fakultas
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
                <li class="active">
					Data Fakultas
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
                                    <span class="caption-subject font-green-sharp bold">Data Fakultas</span>
                                </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse" data-original-title="" title="">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <a href="<?= site_url('admin/tambah_fakultas/' . encrypt_url('tambah_fakultas')) ?>" class="btn btn-sm blue">
                                    <i class="fa fa-plus-circle"></i>
                                    Tambah Data
                                </a>

                                <!-- Alert success added begin -->
                                <?php if (!empty(session()->getFlashdata('tambah'))) : ?>
                                    <div class="alert alert-success" style="margin-top: 20px;">
								        <?= (session()->getFlashdata('tambah')); ?>
							        </div>
                                <?php endif; ?>
                                <!-- Alert success added close -->

                                <!-- Alert success added begin -->
                                <?php if (!empty(session()->getFlashdata('edit'))) : ?>
                                    <div class="alert alert-success" style="margin-top: 20px;">
								        <?= (session()->getFlashdata('edit')); ?>
							        </div>
                                <?php endif; ?>
                                <!-- Alert success added close -->

                                <!-- Alert success deleted begin -->
                                <?php if (!empty(session()->getFlashdata('hapus'))) : ?>
                                    <div class="alert alert-danger" style="margin-top: 20px;">
								        <?= (session()->getFlashdata('hapus')); ?>
							        </div>
                                <?php endif; ?>
                                <!-- Alert success deleted close -->

                                <div class="table-scrollable">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Fakultas</th>
                                                <th width=35%>Nama Fakultas</th>
                                                <th class="text-center" width=20%>Jumlah Prodi</th>
                                                <th width=15%>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Koneksi database Fakultas untuk Cek data fakultas open -->
                                            <?php
                                                $db = \Config\Database::connect();
                                                $fakultas = $db->table('tbl_fakultas')->get()->getResultArray();
                                            ?>
                                            <!-- End -->

                                            <!-- Jika data Fakultas kosong Open -->
                                            <?php if($fakultas == null) { ?>
                                                <td colspan="5" class="text-danger text-center"><i>Data tidak ditemukan.</i></td>
                                            <!-- Jika data Fakultas kosong End -->

                                            <?php } else { ?>
                                                <!-- Jika data Fakultas ada Open -->
                                                <?php $no=1; foreach ($data_fakultas as $data => $data_fakultas) : ?>
                                                    <?php
                                                        // Cek data jumlah program studi begin
                                                        $db = \Config\Database::connect();
                                                        $builder = $db->table('tbl_prodi');
                                                        $prodi = $builder->where('kode_fakultas', $data_fakultas['kode_fakultas'])
                                                            ->countAllResults();
                                                        // Cek data jumlah program studi end
                                                    ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= esc($data_fakultas['kode_fakultas']) ?></td>
                                                            <td><?= esc($data_fakultas['nama_fakultas']) ?></td>
                                                            <td class="text-center">
                                                                <a href="" style="text-decoration: underline; color: #3598dc" title="Detail Prodi" data-container="body" data-placement="bottom" class="tooltips">
                                                                    <?= esc($prodi) ?>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <a href="<?= site_url('admin/detail_fakultas/' . encrypt_url('detail_fakultas') . '/' . encrypt_url($data_fakultas['id_fakultas'])) ?>" title="Detail Fakultas" class="btn btn-xs btn-circle yellow-crusta tooltips" data-placement="bottom">
                                                                        <i class="fa fa-search"></i>
                                                                        <!-- Detail -->
                                                                    </a>
                                                                    <a href="<?= site_url('admin/v_edit_fakultas/' . encrypt_url('v_edit_fakultas') . '/' . encrypt_url($data_fakultas['id_fakultas'])) ?>" title="Ubah data" class="btn btn-xs btn-circle blue tooltips" data-placement="bottom">
                                                                        <i class="fa fa-pencil"></i>
                                                                        <!-- Ubah -->
                                                                    </a>
                                                                    
                                                                    <a href="#basic<?= encrypt_url($data_fakultas['id_fakultas']) ?>" title="Hapus data" class="btn btn-xs btn-circle red-sunglo tooltips" data-toggle="modal" data-placement="bottom">
                                                                        <i class="fa fa-trash"></i>
                                                                        <!-- Hapus -->
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <div class="modal fade bs-modal-sm" id="basic<?= encrypt_url($data_fakultas['id_fakultas']) ?>" tabindex="-1" role="basic" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                        <h4 class="modal-title text-danger">Hapus Data Fakultas</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                            Apakah anda yakin ingin menghapus data <span class="text-danger"><?= $data_fakultas['nama_fakultas'] ?></span>?
                                                                    </div>
                                                                    
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn default" data-dismiss="modal">
                                                                            <i class="fa fa-times"></i>
                                                                            Batal
                                                                        </button>
                                                                        <form action="<?= site_url('admin/hapus_fakultas/' . encrypt_url($data_fakultas['id_fakultas'])) ?>" method="POST" class="inline">
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