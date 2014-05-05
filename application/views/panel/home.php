<?php
	$meta['title'] = 'Selamat Datang di Sistem Informasi';
?>
<?php $this->load->view( 'panel/common/meta', $meta ); ?>
<body>
	<style>
		body { overflow:hidden; }
	</style>
	
	<?php $this->load->view( 'panel/common/header' ); ?>
	<div id="cnt-content">
		<div class="center">
			<img class="home-img" src="static/img/home.jpg" />
		</div>
	</div>
	<?php $this->load->view( 'panel/common/footer' ); ?>
</body>