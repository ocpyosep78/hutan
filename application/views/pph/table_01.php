<?php
	// master
	$array_satuan = get_array_satuan_hutan();
	
	// record data
	$array_record = $this->$module['model_name']->get_array();
	$message = get_flash_message();
	
	// page
	$page = array();
	if (!empty($message)) {
		$page['message'] = $message;
	}
?>
<?php $this->load->view( 'panel/common/meta' ); ?>
<body>
<?php $this->load->view( 'panel/common/header' ); ?>

<div id="cnt-content"><div class="container"><div class="cnt-normal">
	<h3 class="main-title"><?php echo $module['content']; ?></h3>
	<div class="hide">
		<div class="cnt-data"><?php echo json_encode($page); ?></div>
	</div>
	
	<div class="table">
		<table cellpadding="0" cellspacing="0" border="0" class="display datatable">
			<thead>
				<tr>
					<th>Hutan Produksi</th>
					<th>Hutan Lindung</th>
					<th>Hutan Lainnya</th>
					<th>Nilai Kerugian</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td><?php echo $row['hutan_produksi_text']; ?></td>
					<td><?php echo $row['hutan_lindung_text']; ?></td>
					<td><?php echo $row['hutan_lain_text']; ?></td>
					<td class="center"><?php echo $row['nilai_rugi']; ?></td>
					<td class="center">
						<i class="fa fa-pencil btn-edit"></i>
						<i class="fa fa-times btn-delete"></i>
						<span class="hide"><?php echo json_encode($row); ?></div>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	
	<div class="form-box hide"><form id="form-editor">
		<input type="hidden" name="id" value="0" />
		<input type="hidden" name="action" value="update" />
		
		<div class="label">Hutan Produksi</div>
		<div class="input">
			<input type="text" name="hutan_produksi_value" class="short" />
			<select name="hutan_produksi_satuan">
				<?php echo ShowOption(array( 'Array' => $array_satuan )); ?>
			</select>
		</div>
		<div class="clear"></div>
		<div class="label">Hutan Lindung</div>
		<div class="input">
			<input type="text" name="hutan_lidung_value" class="short" />
			<select name="hutan_lindung_satuan">
				<?php echo ShowOption(array( 'Array' => $array_satuan )); ?>
			</select>
		</div>
		<div class="clear"></div>
		<div class="label">KSA</div>
		<div class="input">
			<input type="text" name="ksa_value" class="short" />
			<select name="ksa_satuan">
				<?php echo ShowOption(array( 'Array' => $array_satuan )); ?>
			</select>
		</div>
		<div class="clear"></div>
		<div class="label">KPA</div>
		<div class="input">
			<input type="text" name="kpa_value" class="short" />
			<select name="kps_satuan">
				<?php echo ShowOption(array( 'Array' => $array_satuan )); ?>
			</select>
		</div>
		<div class="clear"></div>
		<div class="label">TB</div>
		<div class="input">
			<input type="text" name="tb_value" class="short" />
			<select name="tb_satuan">
				<?php echo ShowOption(array( 'Array' => $array_satuan )); ?>
			</select>
		</div>
		<div class="clear"></div>
		<div class="label">Hutan Lainnya</div>
		<div class="input">
			<input type="text" name="hutan_lain_value" class="short" />
			<select name="hutan_lain_satuan">
				<?php echo ShowOption(array( 'Array' => $array_satuan )); ?>
			</select>
		</div>
		<div class="clear"></div>
		<div class="label">Nilai Rugi</div>
		<div class="input"><input type="text" name="nilai_rugi" class="short" /></div>
		<div class="clear"></div>
		<div class="clear"></div>
		<div class="label">Upaya Pengendalian</div>
		<div class="input"><input type="text" name="upaya" class="long" /></div>
		<div class="clear"></div>
		<div class="label">Keterangan</div>
		<div class="input"><textarea name="keterangan" class="long"></textarea></div>
		<div class="clear"></div>
		<div class="label">&nbsp;</div>
		<div class="input">
			<button type="button" class="btn-cancel"><i class="fa fa-mail-reply"></i> Batal</button>
			<button type="submit" class="btn-submit"><i class="fa fa-save"></i> Simpan</button>
		</div>
		<div class="clear"></div>
	</form></div>
</div></div></div>

<script type="text/javascript">
$(document).ready(function() {
	var page = {
		show_form: function() {
			$('.table').hide();
			$('.form-box').show();
		},
		show_grid: function() {
			$('.table').show();
			$('.form-box').hide();
		}
	}
	
	// datatable
	$('.btn-edit').click(function() {
		var raw_record = $(this).parent('td').find('.hide').text();
		eval('var record = ' + raw_record);
		Func.populate({ cnt: '#form-editor', record: record });
		page.show_form();
	});
	$('.btn-delete').click(function() {
		var raw_record = $(this).parent('td').find('.hide').text();
		eval('var record = ' + raw_record);
		Func.form.delete({
			url: web.host + 'pph/table_01/action',
			param: { action: 'delete', id: record.id },
			callback: function(result) {
				if (result.status) {
					window.location = window.location.href;
				}
			}
		});
	});
	
	// form
	$('#form-editor').validate({ });
	$('#form-editor').submit(function(e) {
		e.preventDefault();
		if (! $('#form-editor').valid()) {
			return false;
		}
		
		Func.form.submit({
			url: web.host + 'pph/table_01/action',
			param: Func.form.get_galue('form-editor'),
			callback: function(result) {
				if (result.status) {
					window.location = window.location.href;
				}
			}
		});
	});
	
	// helper
	$('.dataTables_length').prepend('<div style="float: left; width: 65px; padding: 2px 0 0 0;"><button class="btn show-form">Tambah</button></div>');
	$('.show-form').click(function() {
		$('#form-editor')[0].reset();
		$('#form-editor [name="id"]').val(0);
		page.show_form();
	});
	$('.btn-cancel').click(function() {
		page.show_grid();
	});
} );
</script>

<?php $this->load->view( 'panel/common/footer' ); ?>
</body>