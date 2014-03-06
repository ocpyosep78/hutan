<?php
	$module_info = get_module_name($_SERVER['REQUEST_URI']);
	$module_type = $this->module_type_model->get_by_id(array( 'alias' => $module_info['module_type_alias'] ));
	$array_module = $this->module_model->get_array(array( 'module_type_id' => $module_type['id'] ));
	
	// meta
	$meta['title'] = $module_type['name'];
?>
<?php $this->load->view( 'panel/common/meta', $meta ); ?>
<body>
<?php $this->load->view( 'panel/common/header' ); ?>
<div id="cnt-content">
	<div style="width: 1000px; margin: 0 auto; text-align: center;">
		<table class="reference">
			<tr>
				<th style="width: 70%">KETERANGAN</th>
				<th style="width: 15%">SUMBER DANA</th>
				<th style="width: 15%">PERIODE</th></tr>
			<?php foreach ($array_module as $row) { ?>
			<tr>
				<td><a href="<?php echo $row['module_link']; ?>"><?php echo $row['content']; ?></a></td>
				<td><?php echo $row['sumber_dana']; ?></td>
				<td><?php echo $row['periode']; ?></td></tr>
			<?php } ?>
		</table>
	</div>
</div>
<?php $this->load->view( 'panel/common/footer' ); ?>
</body>