<?php
	// user
	$user = $this->User_model->get_session();
	
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

<div id="cnt-content"><div class="container" style="width: 1800px; padding: 0 20px;"><div class="cnt-normal">
	<h3 class="main-title" style="padding: 0px;"><?php echo $module['module_type_name']; ?></h3>
	<h3 class="main-title"><?php echo $module['content']; ?></h3>
	<div class="hide">
		<div class="cnt-data"><?php echo json_encode($page); ?></div>
	</div>
	
	<div class="table">
		<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
			<thead>
				<tr>
					<th rowspan="4">Daops / Non Daops</th>
					<th rowspan="4">Waktu Terpantau Hotspot (TGL- BLN)</th>
					<th rowspan="2" colspan="2">Hotspot Hasil Pemantauan Satelit NOAA 18</th>
					<th rowspan="2" colspan="2">Hotspot Dari Sumber Lain</th>
					<th colspan="17">Hasl Ground Check Lapangan</th>
					<th rowspan="4">Dari</th>
					<th rowspan="4">&nbsp;</th>
				</tr>
				<tr>
					<th rowspan="3">Waktu Ground Check (TGL)</th>
					<th colspan="2">Koordinat</th>
					<th rowspan="3">Lokasi (Desa, Kec, Kab)</th>
					<th colspan="12">Lokasi Kawasan Hutan</th>
					<th rowspan="3">Diluar Kawasan Htuan</th>
				</tr>
				<tr>
					<th rowspan="2">Lintang</th>
					<th rowspan="2">Bujur</th>
					<th rowspan="2">Lintang</th>
					<th rowspan="2">Bujur</th>
					<th rowspan="2">Lintang</th>
					<th rowspan="2">Bujur</th>
					<th colspan="7">Hutan Konservasi</th>
					<th rowspan="2">HL</th>
					<th colspan="4">Hutan Produksi</th>
				</tr>
				<tr>
					<th>SM</th>
					<th>CA</th>
					<th>TN</th>
					<th>THR</th>
					<th>TWA</th>
					<th>TB</th>
					<th>JML</th>
					<th>HTI</th>
					<th>HA</th>
					<th>HTR</th>
					<th>JML</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td><?php echo $row['daops']; ?></td>
					<td><?php echo $row['waktu']; ?></td>
					<td><?php echo $row['satelit_lintang']; ?></td>
					<td><?php echo $row['satelit_bujur']; ?></td>
					<td><?php echo $row['sumber_lintang']; ?></td>
					<td><?php echo $row['sumber_bujur']; ?></td>
					<td class="center"><?php echo GetFormatDate($row['ground_check']); ?></td>
					<td><?php echo $row['koordinat_lintang']; ?></td>
					<td><?php echo $row['koordinat_bujur']; ?></td>
					<td><?php echo $row['lokasi']; ?></td>
					<td class="center"><?php echo $row['hutan_sm']; ?></td>
					<td class="center"><?php echo $row['hutan_ca']; ?></td>
					<td class="center"><?php echo $row['hutan_tn']; ?></td>
					<td class="center"><?php echo $row['hutan_thr']; ?></td>
					<td class="center"><?php echo $row['hutan_twa']; ?></td>
					<td class="center"><?php echo $row['hutan_tb']; ?></td>
					<td class="center"><?php echo $row['hutan_konservasi']; ?></td>
					<td class="center"><?php echo $row['hutan_hl']; ?></td>
					<td class="center"><?php echo $row['hutan_hti']; ?></td>
					<td class="center"><?php echo $row['hutan_ha']; ?></td>
					<td class="center"><?php echo $row['hutan_htr']; ?></td>
					<td class="center"><?php echo $row['hutan_produksi']; ?></td>
					<td class="center"><?php echo $row['hutan_luar']; ?></td>
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
		
		<div class="label">Daops / Non Daops</div>
		<div class="input"><input type="text" name="daops" /></div>
		<div class="clear"></div>
		<div class="label">Waktu Terpantau Hotspot</div>
		<div class="input"><input type="text" name="waktu" /></div>
		<div class="clear"></div>
		
		<div class="label" style="width: 75%;">Hotspot Hasil Pemantauan Satelit NOAA 18</div>
		<div class="clear"></div>
		<div class="label">- Lintang</div>
		<div class="input"><input type="text" name="satelit_lintang" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Bujur</div>
		<div class="input"><input type="text" name="satelit_bujur" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Hotspot Dari Sumber Lain</div>
		<div class="clear"></div>
		<div class="label">- Lintang</div>
		<div class="input"><input type="text" name="sumber_lintang" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Bujur</div>
		<div class="input"><input type="text" name="sumber_bujur" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Hasil Ground Check Lapangan</div>
		<div class="clear"></div>
		<div class="label">- Waktu Ground Check</div>
		<div class="input"><input type="text" name="ground_check" class="short datepicker" /></div>
		<div class="clear"></div>
		<div class="label">- Koordinat Lintang</div>
		<div class="input"><input type="text" name="koordinat_lintang" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Koordinat Bujur</div>
		<div class="input"><input type="text" name="koordinat_bujur" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Lokasi</div>
		<div class="input"><input type="text" name="lokasi" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Hutan Konservasi</div>
		<div class="clear"></div>
		<div class="label">- SM</div>
		<div class="input"><input type="text" name="hutan_sm" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- CA</div>
		<div class="input"><input type="text" name="hutan_ca" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- TN</div>
		<div class="input"><input type="text" name="hutan_tn" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- THR</div>
		<div class="input"><input type="text" name="hutan_thr" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- TWA</div>
		<div class="input"><input type="text" name="hutan_twa" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- TB</div>
		<div class="input"><input type="text" name="hutan_tb" class="short" /></div>
		<div class="clear"></div>
		<div class="label">HL</div>
		<div class="input"><input type="text" name="hutan_hl" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Hutan Produksi (HA)</div>
		<div class="clear"></div>
		<div class="label">- HTI</div>
		<div class="input"><input type="text" name="hutan_hti" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- HA</div>
		<div class="input"><input type="text" name="hutan_ha" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- HTR</div>
		<div class="input"><input type="text" name="hutan_htr" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Diluar Kawasan Htuan</div>
		<div class="input"><input type="text" name="hutan_luar" class="short" /></div>
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