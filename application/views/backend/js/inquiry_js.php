<script type="text/javascript" src="<?php echo base_url() ."assets/plugins/jquery-validation/dist/jquery.validate.min.js"; ?>"></script><!-- For Validation -->
<script type="text/javascript" src="<?php echo base_url() ."assets/plugins/select2/select2.min.js"; ?>"></script>
<script type="text/javascript" src="<?php echo base_url() ."assets/plugins/data-tables/jquery.dataTables.js"; ?>"></script><!-- For Tables -->
<script type="text/javascript" src="<?php echo base_url() ."assets/plugins/data-tables/DT_bootstrap.js"; ?>"></script><!-- For Tables -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url() ."assets/pagescript/app.js"; ?>"></script>
<script src="<?php echo base_url() ."assets/pagescript/InquiryManage.js"; ?>"></script>
<script>
	jQuery(document).ready(function() {
		App.init();
		Inquiry.init_table();
		Inquiry.init_formvalidation();
		Inquiry.init_uijquery();
	}); 
</script>