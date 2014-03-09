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

<style>
.form-box .label { width: 300px; }
.form-box .input { width: 260px; }
</style>

<div id="cnt-content"><div class="container"><div class="cnt-normal">
	<h3 class="main-title"><?php echo $module['content']; ?></h3>
	<div class="hide">
		<div class="cnt-data"><?php echo json_encode($page); ?></div>
	</div>
	
	<div class="table">
		<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
			<thead>
				<tr>
					<th rowspan="2">Nama Kawasan</th>
					<th rowspan="2">Waktu Kejadian</th>
					<th rowspan="2">Lokasi Kejadian</th>
					<th colspan="2">Jumlah Korban (Wisatawan)</th>
					<th colspan="2">Jenis Kecelakaan</th>
					<th rowspan="2">Upaya Pencegahan Kecelakaan</th>
					<th rowspan="2">Keterangan</th>
					<th rowspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th>DN</th>
					<th>LN</th>
					<th>Ringan</th>
					<th>Berat</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td><?php echo $row['nama_kawasan']; ?></td>
					<td><?php echo $row['waktu']; ?></td>
					<td><?php echo $row['lokasi']; ?></td>
					<td class="center"><?php echo $row['korban_dn']; ?></td>
					<td class="center"><?php echo $row['korban_ln']; ?></td>
					<td class="center"><?php echo $row['kecelakaan_ringan']; ?></td>
					<td class="center"><?php echo $row['kecelakaan_berat']; ?></td>
					<td><?php echo $row['upaya']; ?></td>
					<td><?php echo $row['keterangan']; ?></td>
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
		
		<div class="label">Nama Kawasan</div>
		<div class="input"><input type="text" name="nama_kawasan" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Waktu Kejadian</div>
		<div class="input"><input type="text" name="waktu" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Lokasi Kejadian</div>
		<div class="input"><input type="text" name="lokasi" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Jumlah Korban (Wisatawan) DN</div>
		<div class="input"><input type="text" name="korban_dn" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Jumlah Korban (Wisatawan) LN</div>
		<div class="input"><input type="text" name="korban_ln" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Jenis Kecelakaan Ringan</div>
		<div class="input"><input type="text" name="kecelakaan_ringan" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Jenis Kecelakaan Berat</div>
		<div class="input"><input type="text" name="kecelakaan_berat" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Upaya Pencegahan Kecelakaan</div>
		<div class="input"><input type="text" name="upaya" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Keterangan</div>
		<div class="input"><textarea name="keterangan" class="short"></textarea></div>
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