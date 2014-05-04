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
	<h3 class="main-title" style="padding: 0px;"><?php echo $module['module_type_name']; ?></h3>
	<h3 class="main-title"><?php echo $module['content']; ?></h3>
	<div class="hide">
		<div class="cnt-data"><?php echo json_encode($page); ?></div>
	</div>
	
	<div class="table">
		<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
			<thead>
				<tr>
					<th colspan="12">Jenis Sarana</th>
					<th rowspan="3">Ket</th>
					<th rowspan="3">Dari</th>
					<th rowspan="3">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="3">Senjata Api (buah)</th>
					<th colspan="5">Alat Transportasi (buah)</th>
					<th colspan="4">Alat Komunikasi (buah)</th>
				</tr>
				<tr>
					<th>Genggam</th>
					<th>Lrs. Panjang</th>
					<th>Senjata Bius</th>
					<th>Mobil</th>
					<th>Spd. Motor</th>
					<th>Speed Boat</th>
					<th>Perahu/ Kapal</th>
					<th>Pesawat Trike</th>
					<th>Radiokom</th>
					<th>HT</th>
					<th>SSB</th>
					<th>Lain-lain</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td class="center"><?php echo $row['senpi_genggam']; ?></td>
					<td class="center"><?php echo $row['senpi_panjang']; ?></td>
					<td class="center"><?php echo $row['senpi_bius']; ?></td>
					<td class="center"><?php echo $row['transport_mobil']; ?></td>
					<td class="center"><?php echo $row['transport_sepeda']; ?></td>
					<td class="center"><?php echo $row['transport_boat']; ?></td>
					<td class="center"><?php echo $row['transport_kapal']; ?></td>
					<td class="center"><?php echo $row['transport_pesawat']; ?></td>
					<td class="center"><?php echo $row['alat_radio']; ?></td>
					<td class="center"><?php echo $row['alat_ht']; ?></td>
					<td class="center"><?php echo $row['alat_ssb']; ?></td>
					<td class="center"><?php echo $row['alat_lain']; ?></td>
					<td><?php echo $row['keterangan']; ?></td>
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
		
		<div class="label">Senjata Api</div>
		<div class="clear"></div>
		<div class="label">- Genggam</div>
		<div class="input"><input type="text" name="senpi_genggam" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Lrs. Panjang</div>
		<div class="input"><input type="text" name="senpi_panjang" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Senjata Bius</div>
		<div class="input"><input type="text" name="senpi_bius" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Alat Transportasi</div>
		<div class="clear"></div>
		<div class="label">- Mobil</div>
		<div class="input"><input type="text" name="transport_mobil" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Spd. Motor</div>
		<div class="input"><input type="text" name="transport_sepeda" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Speed Boat</div>
		<div class="input"><input type="text" name="transport_boat" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Perahu/ Kapal</div>
		<div class="input"><input type="text" name="transport_kapal" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Pesawat Trike</div>
		<div class="input"><input type="text" name="transport_pesawat" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Alat Komunikasi</div>
		<div class="clear"></div>
		<div class="label">- Radiokom</div>
		<div class="input"><input type="text" name="alat_radio" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- HT</div>
		<div class="input"><input type="text" name="alat_ht" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- SSB</div>
		<div class="input"><input type="text" name="alat_ssb" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Lain-lain</div>
		<div class="input"><input type="text" name="alat_lain" class="short" /></div>
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