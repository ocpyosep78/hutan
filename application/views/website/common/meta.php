<?php
	$web['host'] = base_url();
?>
<head>
	<link rel="stylesheet" href="<?php echo base_url('static/css/common.css'); ?>" />
	
	<script type="text/javascript">var web = <?php echo json_encode($web); ?></script>
	<script type="text/javascript" src="<?php echo base_url('static/js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/js/notify.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/js/jquery.validate.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/js/PublicFunction.js'); ?>"></script>
</head>