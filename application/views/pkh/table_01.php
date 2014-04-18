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

<div id="cnt-content"><div class="container"><div class="cnt-normal">
	<h3 class="main-title"><?php echo $module['content']; ?></h3>
	<div class="hide">
		<div class="cnt-data"><?php echo json_encode($page); ?></div>
	</div>
	
	<div class="table">
		<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
			<thead>
				<tr>
					<th rowspan="2">Tanggal Kebakaran</th>
					<th colspan="2">Koordinat</th>
					<th rowspan="2">Lokasi</th>
					<th colspan="4">Fungsi Hutan</th>
					<th rowspan="2">Kerugian</th>
					<th rowspan="2">Dari</th>
					<th rowspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th>Lintang</th>
					<th>Bujur</th>
					<th>Luas Konservasi</th>
					<th>HL</th>
					<th>Luas Produksi</th>
					<th>Luas Terbakar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td class="center"><?php echo GetFormatDate($row['tanggal_kebakaran']); ?></td>
					<td><?php echo $row['lintang']; ?></td>
					<td><?php echo $row['bujur']; ?></td>
					<td><?php echo $row['lokasi']; ?></td>
					<td class="center"><?php echo $row['total_konservasi']; ?></td>
					<td class="center"><?php echo $row['hutan_hl']; ?></td>
					<td class="center"><?php echo $row['total_produksi']; ?></td>
					<td class="center"><?php echo $row['hutan_terbakar']; ?></td>
					<td><?php echo $row['kerugian']; ?></td>
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
		
		<div class="label">Tanggal Terjadinya Kebakaran</div>
		<div class="input"><input type="text" name="tanggal_kebakaran" class="datepicker" /></div>
		<div class="clear"></div>
		<div class="label">Koordinat</div>
		<div class="clear"></div>
		<div class="label">- Lintang</div>
		<div class="input"><input type="text" name="lintang" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Bujur</div>
		<div class="input"><input type="text" name="bujur" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Lokasi</div>
		<div class="input"><input type="text" name="lokasi" class="long" /></div>
		<div class="clear"></div>
		
		<div class="label">Hutan Konservsi (HA)</div>
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
		<div class="label">- Luas yang Terbakar</div>
		<div class="input"><input type="text" name="hutan_terbakar" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Taksiran Kerugian</div>
		<div class="input"><input type="text" name="kerugian" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Luas Yang Terbakar Diluar Kawasan Hutan</div>
		<div class="input"><input type="text" name="luas_lain" class="short" /></div>
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