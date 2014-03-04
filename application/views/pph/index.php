<?php
	$array_pph = $this->pph_model->get_array();
?>
<?php $this->load->view( 'panel/common/meta' ); ?>
<body>
<?php $this->load->view( 'panel/common/header' ); ?>
<div id="cnt-content">
	<div style="width: 1000px; margin: 0 auto; text-align: center;">
		<table class="reference">
			<tr>
				<th style="width: 70%">KETERANGAN</th>
				<th style="width: 15%">SUMBER DANA</th>
				<th style="width: 15%">PERIODE</th></tr>
			<?php foreach ($array_pph as $row) { ?>
			<tr>
				<td><?php echo $row['content']; ?></td>
				<td><?php echo $row['sumber_dana']; ?></td>
				<td><?php echo $row['periode']; ?></td></tr>
			<?php } ?>
		</table>
	</div>
</div>
<?php $this->load->view( 'panel/common/footer' ); ?>
</body>