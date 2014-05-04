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
	<h3 class="main-title" style="padding: 0px;"><?php echo $module['module_type_name']; ?></h3>
	<h3 class="main-title"><?php echo $module['content']; ?></h3>
	<div class="hide">
		<div class="cnt-data"><?php echo json_encode($page); ?></div>
	</div>
	
	<div class="table">
		<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
			<thead>
				<tr>
					<th rowspan="3">Nama Kawasan</th>
					<th colspan="6">Surat Keputusan</th>
					<th rowspan="3">Dari</th>
					<th rowspan="3">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="3">Penunjukan</th>
					<th colspan="3">Penetapan</th>
				</tr>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Luas</th>
					<th>No</th>
					<th>Tanggal</th>
					<th>Luas</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td><?php echo $row['nama_kawasan']; ?></td>
					<td><?php echo $row['penunjukan_no']; ?></td>
					<td class="center"><?php echo GetFormatDate($row['penunjukan_tanggal']); ?></td>
					<td class="center"><?php echo $row['penunjukan_luas']; ?></td>
					<td><?php echo $row['penetapan_no']; ?></td>
					<td class="center"><?php echo GetFormatDate($row['penetapan_tangal']); ?></td>
					<td class="center"><?php echo $row['penetapan_luas']; ?></td>
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
		
		<div class="label">Nama Kawasan</div>
		<div class="input"><input type="text" name="nama_kawasan" class="long" /></div>
		<div class="clear"></div>
		
		<div class="label">Surat Keputusan</div>
		<div class="clear"></div>
		<div class="label">- Penunjukan No</div>
		<div class="input"><input type="text" name="penunjukan_no" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Penunjukan Tanggal</div>
		<div class="input"><input type="text" name="penunjukan_tanggal" class="short datepicker" /></div>
		<div class="clear"></div>
		<div class="label">- Penunjukan Luas (Ha)</div>
		<div class="input"><input type="text" name="penunjukan_luas" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Penetapan No</div>
		<div class="input"><input type="text" name="penetapan_no" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Penetapan Tanggal</div>
		<div class="input"><input type="text" name="penetapan_tangal" class="short datepicker" /></div>
		<div class="clear"></div>
		<div class="label">- Penetapan Luas (Ha)</div>
		<div class="input"><input type="text" name="penetapan_luas" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label" style="width: 75%;">Perkembangan Luas & Fungsi Kawasan</div>
		<div class="clear"></div>
		<div class="label">- Fungsi</div>
		<div class="input"><input type="text" name="kawasan_penambahan_fungsi" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Penambahan (Ha)</div>
		<div class="input"><input type="text" name="kawasan_penambahan_luas" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Fungsi</div>
		<div class="input"><input type="text" name="kawasan_pengurangan_fungsi" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Pengurangan (Ha)</div>
		<div class="input"><input type="text" name="kawasan_pengurangan_luas" class="short" /></div>
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