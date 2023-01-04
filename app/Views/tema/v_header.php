<!DOCTYPE html>

<head>
<meta charset="utf-8">
<title>
	<?= $this->renderSection('title') ?>
</title>
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
<link href="<?= base_url() ?>/theme/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN THEME STYLES -->
<link href="<?= base_url() ?>/theme/assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/theme/assets/global/css/plugins-md.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/theme/assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/theme/assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="<?= base_url() ?>/theme/assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->

<!-- BEGIN CSS DATEPICKER -->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/assets/global/plugins/clockface/css/clockface.css"/>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/assets/global/plugins/bootstrap-datepicker/css/datepicker3.css"/>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<!-- END CSS DATEPICKER -->

<!-- BEGIN DATA TABLES -->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/assets/global/plugins/select2/select2.css"/>
<!-- END DATA TABLES -->

<link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>">

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

	.table .btn {
		margin-top: 0px;
		margin-left: 0px;
		margin-right: 5px !important;
	}

	.btn.default {
		margin-right: 5px;
	}

	.btn.btn-sm {
		padding: 6px 15px 6px 10px;
	}

	.panel-heading {
		    border-bottom: none;
	}
</style>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body class="page-md page-header-menu-fixed">