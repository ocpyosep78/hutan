<?php
	// user
	$user = $this->User_model->get_session();
	
	// record data
	$array_satwa = $this->$module['model_name']->get_array(array( 'jenis' => 'satwa', 'user_type_id' => $user['user_type_id'] ));
	$array_tumbuhan = $this->$module['model_name']->get_array(array( 'jenis' => 'tumbuhan', 'user_type_id' => $user['user_type_id'] ));
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
	
	<div class="cnt-table">
		<h4 class="main-title">Tumbuhan</h4>
		<div class="table">
			<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
				<thead>
					<tr>
						<th>Nama Kelas / Famili</th>
						<th>Nama Indonesia</th>
						<th>Nama Ilmiah</th>
						<th>Lokasi</th>
						<th>Jumlah Populasi</th>
						<th>Keterangan</th>
						<th>Dari</th>
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($array_tumbuhan as $key => $row) { ?>
					<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
						<td><?php echo $row['nama_kelas']; ?></td>
						<td><?php echo $row['nama_spesies_indo']; ?></td>
						<td><?php echo $row['nama_spesies_ilmiah']; ?></td>
						<td><?php echo $row['lokasi']; ?></td>
						<td><?php echo $row['populasi']; ?></td>
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
		
		<h4 class="main-title" style="padding: 25px 0 0 0;">Satwa Liar</h4>
		<div class="table">
			<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
				<thead>
					<tr>
						<th>Nama Kelas / Famili</th>
						<th>Nama Indonesia</th>
						<th>Nama Ilmiah</th>
						<th>Lokasi</th>
						<th>Jumlah Populasi</th>
						<th>Keterangan</th>
						<th>Dari</th>
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($array_satwa as $key => $row) { ?>
					<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
						<td><?php echo $row['nama_kelas']; ?></td>
						<td><?php echo $row['nama_spesies_indo']; ?></td>
						<td><?php echo $row['nama_spesies_ilmiah']; ?></td>
						<td><?php echo $row['lokasi']; ?></td>
						<td><?php echo $row['populasi']; ?></td>
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
	</div>
	
	<div class="form-box hide"><form id="form-editor">
		<input type="hidden" name="id" value="0" />
		<input type="hidden" name="jenis" value="" />
		<input type="hidden" name="action" value="update" />
		
		<div class="label">Nama Kelas</div>
		<div class="input">
			<input type="text" name="nama_kelas" class="short" />
		</div>
		<div class="clear"></div>
		<div class="label">Nama Spesies Indonesia</div>
		<div class="input">
			<input type="text" name="nama_spesies_indo" class="short" />
		</div>
		<div class="clear"></div>
		<div class="label">Nama Spesies Ilmiah</div>
		<div class="input">
			<input type="text" name="nama_spesies_ilmiah" class="short" />
		</div>
		<div class="clear"></div>
		<div class="label">Lokasi</div>
		<div class="input">
			<input type="text" name="lokasi" class="short" />
		</div>
		<div class="clear"></div>
		<div class="label">Populasi</div>
		<div class="input">
			<input type="text" name="populasi" class="short" />
		</div>
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
	$('.dataTables_length').eq(0).prepend('<div style="float: left; width: 65px; padding: 2px 0 0 0;"><button class="btn show-form" data-jenis="tumbuhan">Tambah</button></div>');
	$('.dataTables_length').eq(1).prepend('<div style="float: left; width: 65px; padding: 2px 0 0 0;"><button class="btn show-form" data-jenis="satwa">Tambah</button></div>');
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