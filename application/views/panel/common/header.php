<?php
	$is_login = $this->User_model->is_login();
	if ($is_login) {
		$user = $this->User_model->get_session();
	}
?>
<div id="cnt-header">
	<a href="<?php echo base_url(); ?>">HOME</a>
	
	<?php if ($is_login) { ?>
		<?php if ($user['user_type_id'] == USER_TYPE_ADMINISTRATOR) { ?>
		| <a href="<?php echo base_url('user'); ?>">USER</a>
		<?php } else { ?>
		| <a href="<?php echo base_url('kkh/index'); ?>">KKH</a>
		| <a href="<?php echo base_url('kkbhl/index'); ?>">KKBHL</a>
		| <a href="<?php echo base_url('pph/index'); ?>">PPH</a>
		| <a href="<?php echo base_url('pkh/index'); ?>">PKH</a>
		| <a href="<?php echo base_url('sekretariat/index'); ?>">Sekretariat</a>
		| <a href="<?php echo base_url('pjlkkhl/index'); ?>">PJLKKHL</a>
		<?php } ?>
		| <a href="<?php echo base_url('login/logout'); ?>">LOGOUT</a>
	<?php } else { ?>
	| <a href="<?php echo base_url('login'); ?>">LOGIN</a>
	<?php } ?>
	
</div>