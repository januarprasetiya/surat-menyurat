<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="container-fluid text-center">
		 2020 - <?= date('Y') ?> Developer <a href="https://instagram.com/januarprasetiya" target="_blank" style="color: #a2abb7;"><strong>&copy;januarprasetiya</strong></a>
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

<!-- BEGIN DATEPICKER SCRIPT -->
<script type="text/javascript" src="<?= base_url() ?>/theme/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/theme/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/theme/assets/global/plugins/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/theme/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<!-- END DATEPICKER SCRIPT -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= base_url() ?>/theme/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/theme/assets/admin/pages/scripts/components-pickers.js"></script>
<script src="<?= base_url() ?>/theme/assets/admin/pages/scripts/table-managed.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->


<!-- BEGIN DATA TABLE -->
<script type="text/javascript" src="<?= base_url() ?>/theme/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/theme/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/theme/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END DATA TABLE -->

<script>
    jQuery(document).ready(function() {       
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        TableManaged.init();
    });
</script>

<script>
    jQuery(document).ready(function() {       
        // initiate layout and plugins
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        ComponentsPickers.init();
    });   
</script>

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