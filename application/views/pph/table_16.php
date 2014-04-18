<?php
	// user
	$user = $this->User_model->get_session();
	
	// master
	$array_satuan = get_array_satuan_hutan();
	
	// record data
	$array_record = $this->$module['model_name']->get_array(array( 'user_type_id' => $user['user_type_id'] ));
	$message = get_flash_message();
	
	// page
	$page['module'] = $module;
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
		<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
			<thead>
				<tr>
					<th colspan="11">Jenis Sarana</th>
					<th rowspan="4">Dari</th>
					<th rowspan="4">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="6">Senjata Api (pucuk)</th>
					<th colspan="3" rowspan="2">Senjata Bius</th>
					<th colspan="2">Persediaan amunisi</th>
				</tr>
				<tr>
					<th colspan="3">Lrs. Panjang</th>
					<th colspan="3">Genggam</th>
					<th rowspan="2">Lrs. Panjang</th>
					<th rowspan="2">Genggam</th>
				</tr>
				<tr>
					<th>Nomor fisik</th>
					<th>No.& Tgl Buku Pas</th>
					<th>Kondisi</th>
					<th>Nomor fisik</th>
					<th>No.& Tgl Buku Pas</th>
					<th>Kondisi</th>
					<th>Nomor fisik</th>
					<th>No.& Tgl Buku Pas</th>
					<th>Kondisi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td><?php echo $row['senpi_panjang_fisik']; ?></td>
					<td><?php echo $row['senpi_panjang_buku']; ?></td>
					<td><?php echo $row['senpi_panjang_kondisi']; ?></td>
					<td><?php echo $row['senpi_genggam_fisik']; ?></td>
					<td><?php echo $row['senpi_genggam_buku']; ?></td>
					<td><?php echo $row['senpi_genggam_kondisi']; ?></td>
					<td><?php echo $row['bius_fisik']; ?></td>
					<td><?php echo $row['bius_buku']; ?></td>
					<td><?php echo $row['bius_kondisi']; ?></td>
					<td><?php echo $row['amunisi_panjang']; ?></td>
					<td><?php echo $row['amunisi_genggam']; ?></td>
					<td><?php echo $row['user_type_name']; ?></td>
					<td class="center">
						<i class="fa fa-pencil btn-edit"></i>
						<i class="fa fa-mail-forward btn-forward"></i>
						<i class="fa fa-times btn-delete"></i>
						<span class="hide"><?php echo json_encode($row); ?></span>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	
	<div class="form-box hide"><form id="form-editor">
		<input type="hidden" name="id" value="0" />
		<input type="hidden" name="action" value="update" />
		
		<div class="label">Senjata Api (pucuk) - Lrs. Panjang</div>
		<div class="clear"></div>
		<div class="label">- Nomor fisik</div>
		<div class="input"><input type="text" name="senpi_panjang_fisik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- No.& Tgl Buku Pas</div>
		<div class="input"><input type="text" name="senpi_panjang_buku" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Kondisi</div>
		<div class="input"><input type="text" name="senpi_panjang_kondisi" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Senjata Api (pucuk) - Genggam</div>
		<div class="clear"></div>
		<div class="label">- Nomor fisik</div>
		<div class="input"><input type="text" name="senpi_genggam_fisik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- No.& Tgl Buku Pas</div>
		<div class="input"><input type="text" name="senpi_genggam_buku" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Kondisi</div>
		<div class="input"><input type="text" name="senpi_genggam_kondisi" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Senjata Api (pucuk) - Senjata Bius</div>
		<div class="clear"></div>
		<div class="label">- Nomor fisik</div>
		<div class="input"><input type="text" name="bius_fisik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- No.& Tgl Buku Pas</div>
		<div class="input"><input type="text" name="bius_buku" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Kondisi</div>
		<div class="input"><input type="text" name="bius_kondisi" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Persediaan amunisi</div>
		<div class="clear"></div>
		<div class="label">- Lrs. Panjang</div>
		<div class="input"><input type="text" name="amunisi_panjang" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Genggam</div>
		<div class="input"><input type="text" name="amunisi_genggam" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Penggunaan Amunisi</div>
		<div class="clear"></div>
		<div class="label">- Latihan</div>
		<div class="input"><input type="text" name="latihan" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Operasi</div>
		<div class="input"><input type="text" name="operasi" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Sisa</div>
		<div class="input"><input type="text" name="sisa" class="short" /></div>
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
		init: function() {
			var raw_data = $('.cnt-data').text();
			eval('var data = ' + raw_data);
			page.data = data;
		},
		show_form: function() {
			$('.table').hide();
			$('.form-box').show();
		},
		show_grid: function() {
			$('.table').show();
			$('.form-box').hide();
		}
	}
	page.init();
	
	// datatable
	$('.btn-edit').click(function() {
		var raw_record = $(this).parent('td').find('.hide').text();
		eval('var record = ' + raw_record);
		Func.populate({ cnt: '#form-editor', record: record });
		page.show_form();
	});
	$('.btn-forward').click(function() {
		var raw_record = $(this).parent('td').find('.hide').text();
		eval('var record = ' + raw_record);
		
		Func.form.submit({
			url: page.data.module.module_link + '/action',
			param: { action: 'forward', id: record.id },
			callback: function(result) {
				if (result.status) {
					window.location = window.location.href;
				}
			}
		});
	});
	$('.btn-delete').click(function() {
		var raw_record = $(this).parent('td').find('.hide').text();
		eval('var record = ' + raw_record);
		Func.form.delete({
			url: page.data.module.module_link + '/action',
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
			url: page.data.module.module_link + '/action',
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