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

<div id="cnt-content"><div class="container" style="width: 1200px; padding: 0 20px"><div class="cnt-normal">
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
						<th colspan="14">Peralatan Komunikasi</th>
						<th colspan="3">Peralatan Cuaca</th>
						<th rowspan="3">Dari</th>
						<th rowspan="3">&nbsp;</th>
					</tr>
					<tr>
						<th colspan="2">Handy Talky</th>
						<th colspan="2">Radio Mobil</th>
						<th colspan="2">Megaphone</th>
						<th colspan="2">Peluit</th>
						<th colspan="2">GPS</th>
						<th colspan="2">Telepon</th>
						<th colspan="2">Internet</th>
						<th colspan="2">Pengamat Cuaca Otomatis</th>
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
						<td class="center"><?php echo $row['handy_talky_baik']; ?></td>
						<td class="center"><?php echo $row['handy_talky_rusak']; ?></td>
						<td class="center"><?php echo $row['radio_baik']; ?></td>
						<td class="center"><?php echo $row['radio_rusak']; ?></td>
						<td class="center"><?php echo $row['megaphone_baik']; ?></td>
						<td class="center"><?php echo $row['megaphone_rusak']; ?></td>
						<td class="center"><?php echo $row['peluit_baik']; ?></td>
						<td class="center"><?php echo $row['peluit_rusak']; ?></td>
						<td class="center"><?php echo $row['gps_baik']; ?></td>
						<td class="center"><?php echo $row['gps_rusak']; ?></td>
						<td class="center"><?php echo $row['telepon_baik']; ?></td>
						<td class="center"><?php echo $row['telepon_rusak']; ?></td>
						<td class="center"><?php echo $row['internet_baik']; ?></td>
						<td class="center"><?php echo $row['internet_rusak']; ?></td>
						<td class="center"><?php echo $row['cuaca_baik']; ?></td>
						<td class="center"><?php echo $row['cuaca_rusak']; ?></td>
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
						<th colspan="14">Peralatan Komunikasi</th>
						<th colspan="3">Peralatan Cuaca</th>
						<th rowspan="3">Dari</th>
						<th rowspan="3">&nbsp;</th>
					</tr>
					<tr>
						<th colspan="2">Handy Talky</th>
						<th colspan="2">Radio Mobil</th>
						<th colspan="2">Megaphone</th>
						<th colspan="2">Peluit</th>
						<th colspan="2">GPS</th>
						<th colspan="2">Telepon</th>
						<th colspan="2">Internet</th>
						<th colspan="2">Pengamat Cuaca Otomatis</th>
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
						<td class="center"><?php echo $row['handy_talky_baik']; ?></td>
						<td class="center"><?php echo $row['handy_talky_rusak']; ?></td>
						<td class="center"><?php echo $row['radio_baik']; ?></td>
						<td class="center"><?php echo $row['radio_rusak']; ?></td>
						<td class="center"><?php echo $row['megaphone_baik']; ?></td>
						<td class="center"><?php echo $row['megaphone_rusak']; ?></td>
						<td class="center"><?php echo $row['peluit_baik']; ?></td>
						<td class="center"><?php echo $row['peluit_rusak']; ?></td>
						<td class="center"><?php echo $row['gps_baik']; ?></td>
						<td class="center"><?php echo $row['gps_rusak']; ?></td>
						<td class="center"><?php echo $row['telepon_baik']; ?></td>
						<td class="center"><?php echo $row['telepon_rusak']; ?></td>
						<td class="center"><?php echo $row['internet_baik']; ?></td>
						<td class="center"><?php echo $row['internet_rusak']; ?></td>
						<td class="center"><?php echo $row['cuaca_baik']; ?></td>
						<td class="center"><?php echo $row['cuaca_rusak']; ?></td>
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
		
		<div class="label">Peralatan Komunikasi</div>
		<div class="clear"></div>
		<div class="label">Handy Talky Baik</div>
		<div class="input"><input type="text" name="handy_talky_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Handy Talky Rusak</div>
		<div class="input"><input type="text" name="handy_talky_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Radio Mobil Baik</div>
		<div class="input"><input type="text" name="radio_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Radio Mobil Rusak</div>
		<div class="input"><input type="text" name="radio_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Megaphone Baik</div>
		<div class="input"><input type="text" name="megaphone_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Megaphone Rusak</div>
		<div class="input"><input type="text" name="megaphone_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Peluit Baik</div>
		<div class="input"><input type="text" name="peluit_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Peluit Rusak</div>
		<div class="input"><input type="text" name="peluit_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">GPS Baik</div>
		<div class="input"><input type="text" name="gps_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">GPS Rusak</div>
		<div class="input"><input type="text" name="gps_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Telepon Baik</div>
		<div class="input"><input type="text" name="telepon_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Telepon Rusak</div>
		<div class="input"><input type="text" name="telepon_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Internet Baik</div>
		<div class="input"><input type="text" name="internet_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Internet Rusak</div>
		<div class="input"><input type="text" name="internet_rusak" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Peralatan Cuaca</div>
		<div class="clear"></div>
		<div class="label">- Pengamat Cuaca Otomatis Baik</div>
		<div class="input"><input type="text" name="cuaca_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Pengamat Cuaca Otomatis Rusak</div>
		<div class="input"><input type="text" name="cuaca_rusak" class="short" /></div>
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