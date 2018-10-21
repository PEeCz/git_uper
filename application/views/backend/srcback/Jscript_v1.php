	<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url(); ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/theme/default.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/d3/3.5.2/d3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/nvd3/build/nv.d3.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->


	<!-- Angular JS -->
	<script src="<?php echo base_url('assets/js/angular/angular.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/angular/app.js'); ?>"></script>

	<script src="<?php echo base_url('assets/js/angular/loginController.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/angular/indexService.js'); ?>"></script>

	<!-- ================== BEGIN jQuery Datatable JS ================== -->
	<script src="<?php echo base_url(); ?>assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/DataTables/extensions/FixedHeader/js/dataTables.fixedHeader.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo/table-manage-fixed-header.demo.js"></script>
	<!-- ================== END jQuery Datatable JS ================== -->

	<!-- ================== BEGIN Form Colorpicker JS ================== -->
	<script src="<?php echo base_url(); ?>assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/masked-input/masked-input.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/password-indicator/js/password-indicator.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
	<!-- ================== END Form Colorpicker JS ================== -->

	<script src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>

	<script src="<?php echo base_url('assets/function/fn.js'); ?>"></script>
	
	<script>
		$(document).ready(function() {
			App.init();
			$.getScript('<?php echo base_url(); ?>assets/plugins/DataTables/media/js/jquery.dataTables.js').done(function() {
			$.getScript('<?php echo base_url(); ?>assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js').done(function() {
			$.getScript('<?php echo base_url(); ?>assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js').done(function() {
			$.getScript('<?php echo base_url(); ?>assets/js/demo/table-manage-responsive.demo.min.js').done(function() {
			TableManageResponsive.init();
			$.getScript('<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js').done(function() {
			$.getScript('<?php echo base_url(); ?>assets/js/demo/form-plugins.demo.min.js').done(function() {
			handleDateRangePicker();
			FormPlugins.init();
			});
			});
			});
			});
			});
			});
			TableManageFixedHeader.init();
		});
	</script>