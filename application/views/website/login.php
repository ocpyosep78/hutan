<?php $this->load->view( 'website/common/meta' ); ?>
<body>
<?php $this->load->view( 'website/common/header' ); ?>
<div id="cnt-content">
	<div style="width: 400px; margin: 0 auto; text-align: center;"><form id="form-login">
		<input type="hidden" name="action" value="login" />
		<div style="padding: 0 0 10px 0;">
			<div>Username</div>
			<div><input type="text" name="alias" /></div>
		</div>
		<div style="padding: 0 0 20px 0;">
			<div>Password</div>
			<div><input type="password" name="passwd" /></div>
		</div>
		<div>
			<div><input type="submit" name="action" value="Login" /></div>
		</div>
	</form></div>
</div>
<?php $this->load->view( 'website/common/footer' ); ?>

<script>
$('#form-login').validate({
	rules: {
		user_name: { required: true },
		passwd: { required: true }
	}
});

$('#form-login').submit(function(e) {
	e.preventDefault();
	if (! $('#form-login').valid()) {
		return false;
	}
	
	var param = Site.Form.GetValue('form-login');
	Func.ajax({ url: web.host + 'login/action', param: param, callback: function(result) {
		if (result.status == 1) {
			window.location = web.host + 'pph';
		} else {
			$.notify(result.message, "error");
		}
		
	} });
	
	return false;
});
</script>
</body>