<?php
	// user
	$user = $this->User_model->get_session();
	
	// record data
	$array_daops = $this->$module['model_name']->get_array(array( 'jenis' => 'daops', 'user_type_id' => $user['user_type_id'] ));
	$array_non_daops = $this->$module['model_name']->get_array(array( 'jenis' => 'non_daops', 'user_type_id' => $user['user_type_id'] ));
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

<div id="cnt-content"><div class="container" style="width: 2200px; padding: 0 20px"><div class="cnt-normal">
	<h3 class="main-title" style="padding: 0px;"><?php echo $module['module_type_name']; ?></h3>
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
						<th rowspan="2" colspan="2">Impuls Gun</th>
						<th rowspan="2" colspan="2">Kompresor</th>
						<th rowspan="2" colspan="2">Pompa Jinjing</th>
						<th rowspan="2" colspan="2">Pompa Apung</th>
						<th rowspan="2" colspan="2">Pompa Induk / Fix Pump</th>
						<th rowspan="2" colspan="2">Pompa Sorong</th>
						<th rowspan="2" colspan="2">Tangki Air Lipat</th>
						<th colspan="4">Selang Kirim</th>
						<th colspan="4">Nozel Variable</th>
						<th rowspan="2" colspan="2">Check Valve</th>
						<th rowspan="2" colspan="2">Sunbut</th>
						<th rowspan="2" colspan="2">Pemasang Kopling</th>
						<th rowspan="2" colspan="2">Pencuci Selang</th>
						<th rowspan="3">Lain-lain</th>
						<th rowspan="3">Dari</th>
						<th rowspan="3">&nbsp;</th>
					</tr>
					<tr>
						<th colspan="2">1,5'</th>
						<th colspan="2">2,5'</th>
						<th colspan="2">1,5'</th>
						<th colspan="2">2,5'</th>
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
						<td class="center"><?php echo $row['impuls_baik']; ?></td>
						<td class="center"><?php echo $row['impuls_rusak']; ?></td>
						<td class="center"><?php echo $row['kompresor_baik']; ?></td>
						<td class="center"><?php echo $row['kompresor_rusak']; ?></td>
						<td class="center"><?php echo $row['pompa_jinjing_baik']; ?></td>
						<td class="center"><?php echo $row['pompa_jinjing_rusak']; ?></td>
						<td class="center"><?php echo $row['pompa_apung_baik']; ?></td>
						<td class="center"><?php echo $row['pompa_apung_rusak']; ?></td>
						<td class="center"><?php echo $row['pompa_induk_baik']; ?></td>
						<td class="center"><?php echo $row['pompa_induk_rusak']; ?></td>
						<td class="center"><?php echo $row['pompa_sorong_baik']; ?></td>
						<td class="center"><?php echo $row['pompa_sorong_rusak']; ?></td>
						<td class="center"><?php echo $row['tangki_baik']; ?></td>
						<td class="center"><?php echo $row['tangki_rusak']; ?></td>
						<td class="center"><?php echo $row['selang_15_baik']; ?></td>
						<td class="center"><?php echo $row['selang_15_rusak']; ?></td>
						<td class="center"><?php echo $row['selang_25_baik']; ?></td>
						<td class="center"><?php echo $row['selang_25_rusak']; ?></td>
						<td class="center"><?php echo $row['nozel_15_baik']; ?></td>
						<td class="center"><?php echo $row['nozel_15_rusak']; ?></td>
						<td class="center"><?php echo $row['nozel_25_baik']; ?></td>
						<td class="center"><?php echo $row['nozel_25_rusak']; ?></td>
						<td class="center"><?php echo $row['valve_baik']; ?></td>
						<td class="center"><?php echo $row['valve_rusak']; ?></td>
						<td class="center"><?php echo $row['sunbut_baik']; ?></td>
						<td class="center"><?php echo $row['sunbut_rusak']; ?></td>
						<td class="center"><?php echo $row['kopling_baik']; ?></td>
						<td class="center"><?php echo $row['kopling_rusak']; ?></td>
						<td class="center"><?php echo $row['pencuci_baik']; ?></td>
						<td class="center"><?php echo $row['pencuci_rusak']; ?></td>
						<td class="center"><?php echo $row['lain']; ?></td>
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
		
		<h4 class="main-title" style="padding: 25px 0 0 0;">Non Daops</h4>
		<div class="table">
			<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
				<thead>
					<tr>
						<th rowspan="3">Daops / Non Daops</th>
						<th rowspan="2" colspan="2">Impuls Gun</th>
						<th rowspan="2" colspan="2">Kompresor</th>
						<th rowspan="2" colspan="2">Pompa Jinjing</th>
						<th rowspan="2" colspan="2">Pompa Apung</th>
						<th rowspan="2" colspan="2">Pompa Induk / Fix Pump</th>
						<th rowspan="2" colspan="2">Pompa Sorong</th>
						<th rowspan="2" colspan="2">Tangki Air Lipat</th>
						<th colspan="4">Selang Kirim</th>
						<th colspan="4">Nozel Variable</th>
						<th rowspan="2" colspan="2">Check Valve</th>
						<th rowspan="2" colspan="2">Sunbut</th>
						<th rowspan="2" colspan="2">Pemasang Kopling</th>
						<th rowspan="2" colspan="2">Pencuci Selang</th>
						<th rowspan="3">Lain-lain</th>
						<th rowspan="3">Dari</th>
						<th rowspan="3">&nbsp;</th>
					</tr>
					<tr>
						<th colspan="2">1,5'</th>
						<th colspan="2">2,5'</th>
						<th colspan="2">1,5'</th>
						<th colspan="2">2,5'</th>
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
						<td class="center"><?php echo $row['impuls_baik']; ?></td>
						<td class="center"><?php echo $row['impuls_rusak']; ?></td>
						<td class="center"><?php echo $row['kompresor_baik']; ?></td>
						<td class="center"><?php echo $row['kompresor_rusak']; ?></td>
						<td class="center"><?php echo $row['pompa_jinjing_baik']; ?></td>
						<td class="center"><?php echo $row['pompa_jinjing_rusak']; ?></td>
						<td class="center"><?php echo $row['pompa_apung_baik']; ?></td>
						<td class="center"><?php echo $row['pompa_apung_rusak']; ?></td>
						<td class="center"><?php echo $row['pompa_induk_baik']; ?></td>
						<td class="center"><?php echo $row['pompa_induk_rusak']; ?></td>
						<td class="center"><?php echo $row['pompa_sorong_baik']; ?></td>
						<td class="center"><?php echo $row['pompa_sorong_rusak']; ?></td>
						<td class="center"><?php echo $row['tangki_baik']; ?></td>
						<td class="center"><?php echo $row['tangki_rusak']; ?></td>
						<td class="center"><?php echo $row['selang_15_baik']; ?></td>
						<td class="center"><?php echo $row['selang_15_rusak']; ?></td>
						<td class="center"><?php echo $row['selang_25_baik']; ?></td>
						<td class="center"><?php echo $row['selang_25_rusak']; ?></td>
						<td class="center"><?php echo $row['nozel_15_baik']; ?></td>
						<td class="center"><?php echo $row['nozel_15_rusak']; ?></td>
						<td class="center"><?php echo $row['nozel_25_baik']; ?></td>
						<td class="center"><?php echo $row['nozel_25_rusak']; ?></td>
						<td class="center"><?php echo $row['valve_baik']; ?></td>
						<td class="center"><?php echo $row['valve_rusak']; ?></td>
						<td class="center"><?php echo $row['sunbut_baik']; ?></td>
						<td class="center"><?php echo $row['sunbut_rusak']; ?></td>
						<td class="center"><?php echo $row['kopling_baik']; ?></td>
						<td class="center"><?php echo $row['kopling_rusak']; ?></td>
						<td class="center"><?php echo $row['pencuci_baik']; ?></td>
						<td class="center"><?php echo $row['pencuci_rusak']; ?></td>
						<td class="center"><?php echo $row['lain']; ?></td>
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
	</div>
	
	<div class="form-box hide"><form id="form-editor">
		<input type="hidden" name="id" value="0" />
		<input type="hidden" name="jenis" value="" />
		<input type="hidden" name="action" value="update" />
		
		<div class="label">Daops / Non Daops</div>
		<div class="input"><input type="text" name="title" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Impuls Gun Baik</div>
		<div class="input"><input type="text" name="impuls_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Impuls Gun Rusak</div>
		<div class="input"><input type="text" name="impuls_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Kompresor Baik</div>
		<div class="input"><input type="text" name="kompresor_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Kompresor Rusak</div>
		<div class="input"><input type="text" name="kompresor_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pompa Jinjing Baik</div>
		<div class="input"><input type="text" name="pompa_jinjing_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pompa Jinjing Rusak</div>
		<div class="input"><input type="text" name="pompa_jinjing_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pompa Apung Baik</div>
		<div class="input"><input type="text" name="pompa_apung_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pompa Apung Rusak</div>
		<div class="input"><input type="text" name="pompa_apung_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pompa Induk / Fix Pump Baik</div>
		<div class="input"><input type="text" name="pompa_induk_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pompa Induk / Fix Pump Rusak</div>
		<div class="input"><input type="text" name="pompa_induk_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pompa Sorong Baik</div>
		<div class="input"><input type="text" name="pompa_sorong_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pompa Sorong Rusak</div>
		<div class="input"><input type="text" name="pompa_sorong_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Tangki Air Lipat Baik</div>
		<div class="input"><input type="text" name="tangki_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Tangki Air Lipat Rusak</div>
		<div class="input"><input type="text" name="tangki_rusak" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Selang Kirim</div>
		<div class="clear"></div>
		<div class="label">- 1,5' Baik</div>
		<div class="input"><input type="text" name="selang_15_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- 1,5' Rusak</div>
		<div class="input"><input type="text" name="selang_15_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- 2,5' Baik</div>
		<div class="input"><input type="text" name="selang_25_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- 2,5' Rusak</div>
		<div class="input"><input type="text" name="selang_25_rusak" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Nozel Variable</div>
		<div class="clear"></div>
		<div class="label">- 1,5' Baik</div>
		<div class="input"><input type="text" name="nozel_15_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- 1,5' Rusak</div>
		<div class="input"><input type="text" name="nozel_15_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- 2,5' Baik</div>
		<div class="input"><input type="text" name="nozel_25_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- 2,5' Rusak</div>
		<div class="input"><input type="text" name="nozel_25_rusak" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Check Valve Baik</div>
		<div class="input"><input type="text" name="valve_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Check Valve Rusak</div>
		<div class="input"><input type="text" name="valve_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Sunbut Baik</div>
		<div class="input"><input type="text" name="sunbut_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Sunbut Rusak</div>
		<div class="input"><input type="text" name="sunbut_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pemasang Kopling Baik</div>
		<div class="input"><input type="text" name="kopling_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pemasang Kopling Rusak</div>
		<div class="input"><input type="text" name="kopling_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pencuci Selang Baik</div>
		<div class="input"><input type="text" name="pencuci_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pencuci Selang Rusak</div>
		<div class="input"><input type="text" name="pencuci_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Lain-lain</div>
		<div class="input"><input type="text" name="lain" class="long" /></div>
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