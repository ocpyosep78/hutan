<?php
	// record data
	$array_daops = $this->$module['model_name']->get_array(array( 'jenis' => 'daops' ));
	$array_non_daops = $this->$module['model_name']->get_array(array( 'jenis' => 'non_daops' ));
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

<div id="cnt-content"><div class="container" style="width: 1800px; padding: 0 20px"><div class="cnt-normal">
	<h3 class="main-title"><?php echo $module['content']; ?></h3>
	<div class="hide">
		<div class="cnt-data"><?php echo json_encode($page); ?></div>
	</div>
	
	<div class="cnt-table">
		<h4 class="main-title">Daops</h4>
		<div class="table">
			<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
				<thead>
					<tr>
						<th rowspan="3">Daops / Non Daops</th>
						<th colspan="11">Transportasi Darat</th>
						<th colspan="7">Transportasi Laut</th>
						<th rowspan="3">&nbsp;</th>
					</tr>
					<tr>
						<th colspan="2">Slip On Unit</th>
						<th colspan="2">Monilog</th>
						<th colspan="2">Sepeda Motor Patroli</th>
						<th colspan="2">Mobil Patroli / Pick Up</th>
						<th colspan="2">Mobil Operasional / Pick Up</th>
						<th rowspan="2">Lain-lain</th>
						<th colspan="2">Boat</th>
						<th colspan="2">Klotok</th>
						<th colspan="2">Katinting</th>
						<th rowspan="2">Lain-lain</th>
					</tr>
					<tr>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($array_daops as $key => $row) { ?>
					<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
						<td><?php echo $row['title']; ?></td>
						<td class="center"><?php echo $row['slip_on_baik']; ?></td>
						<td class="center"><?php echo $row['slip_on_rusak']; ?></td>
						<td class="center"><?php echo $row['monilog_baik']; ?></td>
						<td class="center"><?php echo $row['monilog_rusak']; ?></td>
						<td class="center"><?php echo $row['sepeda_baik']; ?></td>
						<td class="center"><?php echo $row['sepeda_rusak']; ?></td>
						<td class="center"><?php echo $row['mobil_patroli_baik']; ?></td>
						<td class="center"><?php echo $row['mobil_patroli_rusak']; ?></td>
						<td class="center"><?php echo $row['mobil_operasional_baik']; ?></td>
						<td class="center"><?php echo $row['mobil_operasional_rusak']; ?></td>
						<td class="center"><?php echo $row['darat_lain']; ?></td>
						<td class="center"><?php echo $row['boat_baik']; ?></td>
						<td class="center"><?php echo $row['boat_rusak']; ?></td>
						<td class="center"><?php echo $row['klotok_baik']; ?></td>
						<td class="center"><?php echo $row['klotok_rusak']; ?></td>
						<td class="center"><?php echo $row['katinting_baik']; ?></td>
						<td class="center"><?php echo $row['katinting_rusak']; ?></td>
						<td class="center"><?php echo $row['air_lain']; ?></td>
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
		
		<h4 class="main-title" style="padding: 25px 0 0 0;">Non Daops</h4>
		<div class="table">
			<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
				<thead>
					<tr>
						<th rowspan="3">Daops / Non Daops</th>
						<th colspan="11">Transportasi Darat</th>
						<th colspan="7">Transportasi Laut</th>
						<th rowspan="3">&nbsp;</th>
					</tr>
					<tr>
						<th colspan="2">Slip On Unit</th>
						<th colspan="2">Monilog</th>
						<th colspan="2">Sepeda Motor Patroli</th>
						<th colspan="2">Mobil Patroli / Pick Up</th>
						<th colspan="2">Mobil Operasional / Pick Up</th>
						<th rowspan="2">Lain-lain</th>
						<th colspan="2">Boat</th>
						<th colspan="2">Klotok</th>
						<th colspan="2">Katinting</th>
						<th rowspan="2">Lain-lain</th>
					</tr>
					<tr>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($array_non_daops as $key => $row) { ?>
					<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
						<td><?php echo $row['title']; ?></td>
						<td class="center"><?php echo $row['slip_on_baik']; ?></td>
						<td class="center"><?php echo $row['slip_on_rusak']; ?></td>
						<td class="center"><?php echo $row['monilog_baik']; ?></td>
						<td class="center"><?php echo $row['monilog_rusak']; ?></td>
						<td class="center"><?php echo $row['sepeda_baik']; ?></td>
						<td class="center"><?php echo $row['sepeda_rusak']; ?></td>
						<td class="center"><?php echo $row['mobil_patroli_baik']; ?></td>
						<td class="center"><?php echo $row['mobil_patroli_rusak']; ?></td>
						<td class="center"><?php echo $row['mobil_operasional_baik']; ?></td>
						<td class="center"><?php echo $row['mobil_operasional_rusak']; ?></td>
						<td class="center"><?php echo $row['darat_lain']; ?></td>
						<td class="center"><?php echo $row['boat_baik']; ?></td>
						<td class="center"><?php echo $row['boat_rusak']; ?></td>
						<td class="center"><?php echo $row['klotok_baik']; ?></td>
						<td class="center"><?php echo $row['klotok_rusak']; ?></td>
						<td class="center"><?php echo $row['katinting_baik']; ?></td>
						<td class="center"><?php echo $row['katinting_rusak']; ?></td>
						<td class="center"><?php echo $row['air_lain']; ?></td>
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
	</div>
	
	<div class="form-box hide"><form id="form-editor">
		<input type="hidden" name="id" value="0" />
		<input type="hidden" name="jenis" value="" />
		<input type="hidden" name="action" value="update" />
		
		<div class="label">Daops / Non Daops</div>
		<div class="input"><input type="text" name="title" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Transportasi Darat</div>
		<div class="clear"></div>
		<div class="label">Slip On Unit Baik</div>
		<div class="input"><input type="text" name="slip_on_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Slip On Unit Rusak</div>
		<div class="input"><input type="text" name="slip_on_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Monilog Baik</div>
		<div class="input"><input type="text" name="monilog_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Monilog Rusak</div>
		<div class="input"><input type="text" name="monilog_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Sepeda Motor Patroli Baik</div>
		<div class="input"><input type="text" name="sepeda_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Sepeda Motor Patroli Rusak</div>
		<div class="input"><input type="text" name="sepeda_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Mobil Patroli / Pick Up Baik</div>
		<div class="input"><input type="text" name="mobil_patroli_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Mobil Patroli / Pick Up Rusak</div>
		<div class="input"><input type="text" name="mobil_patroli_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Mobil Operasional / Pick Up Baik</div>
		<div class="input"><input type="text" name="mobil_operasional_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Mobil Operasional / Pick Up Rusak</div>
		<div class="input"><input type="text" name="mobil_operasional_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Lain-lain</div>
		<div class="input"><input type="text" name="darat_lain" class="long" /></div>
		<div class="clear"></div>
		
		<div class="label">Transportasi Air</div>
		<div class="clear"></div>
		<div class="label">Boat Baik</div>
		<div class="input"><input type="text" name="boat_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Boat Rusak</div>
		<div class="input"><input type="text" name="boat_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Klotok Baik</div>
		<div class="input"><input type="text" name="klotok_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Klotok Rusak</div>
		<div class="input"><input type="text" name="klotok_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Katinting Baik</div>
		<div class="input"><input type="text" name="katinting_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Katinting Rusak</div>
		<div class="input"><input type="text" name="katinting_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Lain-lain</div>
		<div class="input"><input type="text" name="air_lain" class="long" /></div>
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
			$('.cnt-table').hide();
			$('.form-box').show();
		},
		show_grid: function() {
			$('.cnt-table').show();
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
	$('.dataTables_length').eq(0).prepend('<div style="float: left; width: 65px; padding: 2px 0 0 0;"><button class="btn show-form" data-jenis="daops">Tambah</button></div>');
	$('.dataTables_length').eq(1).prepend('<div style="float: left; width: 65px; padding: 2px 0 0 0;"><button class="btn show-form" data-jenis="non_daops">Tambah</button></div>');
	$('.show-form').click(function() {
		$('#form-editor')[0].reset();
		$('#form-editor [name="id"]').val(0);
		$('#form-editor [name="jenis"]').val($(this).data('jenis'));
		
		page.show_form();
	});
	$('.btn-cancel').click(function() {
		page.show_grid();
	});
} );
</script>

<?php $this->load->view( 'panel/common/footer' ); ?>
</body>