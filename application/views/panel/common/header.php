<?php
	$is_login = $this->User_model->is_login();
?>
<div id="cnt-header">
	<a href="<?php echo base_url(); ?>">HOME</a>
	<?php if ($is_login) { ?>
	| <a href="<?php echo base_url('pph/index'); ?>">PPH</a>
	| <a href="<?php echo base_url('login/logout'); ?>">LOGOUT</a>
	<?php } else { ?>
	| <a href="<?php echo base_url('login'); ?>">LOGIN</a>
	<?php } ?>
</div>