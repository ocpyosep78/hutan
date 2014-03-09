<?php
	// record data
	$array_record = $this->$module['model_name']->get_array();
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

<div id="cnt-content"><div class="container" style="width: 1800px; padding: 0 20px;"><div class="cnt-normal">
	<h3 class="main-title"><?php echo $module['content']; ?></h3>
	<div class="hide">
		<div class="cnt-data"><?php echo json_encode($page); ?></div>
	</div>
	
	<div class="table">
		<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
			<thead>
				<tr>
					<th colspan="22">Jenis Inventaris Alat Angkutan</th>
					<th rowspan="4">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="11">Darat</th>
					<th colspan="9">Laut</th>
					<th colspan="2">Udara</th>
				</tr>
				<tr>
					<th>Roda-4 Non Fungsional</th>
					<th>Roda-4 Operasional Pamhut</th>
					<th>Roda-4 OPerasional Karhut</th>
					<th>Roda-4 Monilog</th>
					<th>Roda-4 Operasional TSL</th>
					<th>Roda-4 Operasional Penyuluh</th>
					<th>Roda-2 Non Fungsional</th>
					<th>Roda-2 Operasional Pamhut</th>
					<th>Roda-2 Operasional Karhut</th>
					<th>Roda-2 Operasional TSL</th>
					<th>Roda-2 Operasional Penyuluh</th>
					<th>Speed Boat</th>
					<th>Motor Tempel</th>
					<th>Long Boat</th>
					<th>Klotok</th>
					<th>Long Boat</th>
					<th>Kapal Patroli</th>
					<th>Perahu Penumpang</th>
					<th>Perahu Karet</th>
					<th>Floating Platform /Rakit</th>
					<th>Helikopter</th>
					<th>Pesawat Trike</th>
				</tr>
				<tr>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td class="center"><?php echo $row['darat_4_fungsional']; ?></td>
					<td class="center"><?php echo $row['darat_4_pamhut']; ?></td>
					<td class="center"><?php echo $row['darat_4_karhut']; ?></td>
					<td class="center"><?php echo $row['darat_4_monilog']; ?></td>
					<td class="center"><?php echo $row['darat_4_tsl']; ?></td>
					<td class="center"><?php echo $row['darat_4_penyuluh']; ?></td>
					<td class="center"><?php echo $row['darat_2_fungsional']; ?></td>
					<td class="center"><?php echo $row['darat_2_pamhut']; ?></td>
					<td class="center"><?php echo $row['darat_2_karhut']; ?></td>
					<td class="center"><?php echo $row['darat_2_tsl']; ?></td>
					<td class="center"><?php echo $row['darat_2_penyuluh']; ?></td>
					<td class="center"><?php echo $row['speed_boat']; ?></td>
					<td class="center"><?php echo $row['motor_tempel']; ?></td>
					<td class="center"><?php echo $row['long_boat']; ?></td>
					<td class="center"><?php echo $row['klotok']; ?></td>
					<td class="center"><?php echo $row['long_boat_2']; ?></td>
					<td class="center"><?php echo $row['kapal_patroli']; ?></td>
					<td class="center"><?php echo $row['perahu_penumpang']; ?></td>
					<td class="center"><?php echo $row['perahu_karet']; ?></td>
					<td class="center"><?php echo $row['rakit']; ?></td>
					<td class="center"><?php echo $row['helikopter']; ?></td>
					<td class="center"><?php echo $row['pesawat_trike']; ?></td>
					<td class="center">
						<i class="fa fa-pencil btn-edit"></i>
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
		
		<div class="label">Darat</div>
		<div class="clear"></div>
		<div class="label">Roda-4 Non Fungsional</div>
		<div class="input"><input type="text" name="darat_4_fungsional" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Roda-4 Operasional Pamhut</div>
		<div class="input"><input type="text" name="darat_4_pamhut" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Roda-4 OPerasional Karhut</div>
		<div class="input"><input type="text" name="darat_4_karhut" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Roda-4 Monilog</div>
		<div class="input"><input type="text" name="darat_4_monilog" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Roda-4 Operasional TSL</div>
		<div class="input"><input type="text" name="darat_4_tsl" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Roda-4 Operasional Penyuluh</div>
		<div class="input"><input type="text" name="darat_4_penyuluh" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Roda-2 Non Fungsional</div>
		<div class="input"><input type="text" name="darat_2_fungsional" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Roda-2 Operasional Pamhut</div>
		<div class="input"><input type="text" name="darat_2_pamhut" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Roda-2 Operasional Karhut</div>
		<div class="input"><input type="text" name="darat_2_karhut" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Roda-2 Operasional TSL</div>
		<div class="input"><input type="text" name="darat_2_tsl" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Roda-2 Operasional Penyuluh</div>
		<div class="input"><input type="text" name="darat_2_penyuluh" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Laut</div>
		<div class="clear"></div>
		<div class="label">Speed Boat</div>
		<div class="input"><input type="text" name="speed_boat" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Motor Tempel</div>
		<div class="input"><input type="text" name="motor_tempel" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Long Boat</div>
		<div class="input"><input type="text" name="long_boat" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Klotok</div>
		<div class="input"><input type="text" name="klotok" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Long Boat</div>
		<div class="input"><input type="text" name="long_boat_2" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Kapal Patroli</div>
		<div class="input"><input type="text" name="kapal_patroli" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Perahu Penumpang</div>
		<div class="input"><input type="text" name="perahu_penumpang" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Perahu Karet</div>
		<div class="input"><input type="text" name="perahu_karet" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Floating Platform /Rakit</div>
		<div class="input"><input type="text" name="rakit" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Udara</div>
		<div class="clear"></div>
		<div class="label">Helikopter</div>
		<div class="input"><input type="text" name="helikopter" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pesawat Trike</div>
		<div class="input"><input type="text" name="pesawat_trike" class="short" /></div>
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