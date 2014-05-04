<?php
	$web['host'] = base_url();
	$title = (isset($title)) ? $title : 'Selamat Datang';
?>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo base_url('static/css/common.css'); ?>" />
	<link rel="icon shortcut" href="<?php echo base_url('static/img/favicon.png'); ?>" type="image/x-icon" />
	
	<script type="text/javascript">var web = <?php echo json_encode($web); ?></script>
	<script type="text/javascript" src="<?php echo base_url('static/js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/js/notify.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/js/jquery.validate.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/js/public_function.js'); ?>"></script>
	
	<!-- font awesome -->
	<link rel="stylesheet" href="<?php echo base_url('static/css/font-awesome.css'); ?>" />
	
	<!-- datatable -->
	<link rel="stylesheet" href="<?php echo base_url('static/js/datatable/css/demo_page.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('static/js/datatable/css/demo_table.css'); ?>" />
	<script type="text/javascript" src="<?php echo base_url('static/js/datatable/js/jquery.dataTables.js'); ?>"></script>
	
	<!-- jquery ui -->
	<link href="<?php echo base_url('static/js/jqueryui/css/ui-lightness/jquery-ui-1.10.3.custom.css'); ?>" rel="stylesheet">
	<script src="<?php echo base_url('static/js/jqueryui/js/jquery-ui-1.10.3.custom.js'); ?>"></script>
</head>