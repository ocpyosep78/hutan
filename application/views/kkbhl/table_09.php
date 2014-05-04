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
					<th rowspan="3">Lokasi Kegiatan</th>
					<th rowspan="3">Nama Kegiatan</th>
					<th rowspan="3">Pelaksana Kegiatan</th>
					<th rowspan="3">Waktu Kegiatan</th>
					<th rowspan="3">Sumber Dana</th>
					<th colspan="4">Desa Yang Dibina</th>
					<th rowspan="3">Dari</th>
					<th rowspan="3">&nbsp;</th>
				</tr>
				<tr>
					<th rowspan="2">Nama</th>
					<th colspan="2">Jumlah Penduduk</th>
					<th rowspan="2">Jumlah KK</th>
				</tr>
				<tr>
					<th>Laki-laki</th>
					<th>Perempuan</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td><?php echo $row['lokasi_kegiatan']; ?></td>
					<td><?php echo $row['nama_kegiatan']; ?></td>
					<td><?php echo $row['pelaksana_kegiatan']; ?></td>
					<td><?php echo $row['waktu_kegiatan']; ?></td>
					<td><?php echo $row['sumber_dana']; ?></td>
					<td><?php echo $row['desa_nama']; ?></td>
					<td class="center"><?php echo $row['desa_penduduk_laki']; ?></td>
					<td class="center"><?php echo $row['desa_penduduk_perempuan']; ?></td>
					<td class="center"><?php echo $row['desa_jumlah_kk']; ?></td>
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
		
		<div class="label">Lokasi Kegiatan</div>
		<div class="input"><input type="text" name="lokasi_kegiatan" class="long" /></div>
		<div class="clear"></div>
		<div class="label">Nama Kegiatan</div>
		<div class="input"><input type="text" name="nama_kegiatan" class="long" /></div>
		<div class="clear"></div>
		<div class="label">Pelaksana Kegiatan</div>
		<div class="input"><input type="text" name="pelaksana_kegiatan" class="long" /></div>
		<div class="clear"></div>
		<div class="label">Waktu Kegiatan</div>
		<div class="input"><input type="text" name="waktu_kegiatan" class="long" /></div>
		<div class="clear"></div>
		<div class="label">Sumber Dana</div>
		<div class="input"><input type="text" name="sumber_dana" class="long" /></div>
		<div class="clear"></div>
		
		<div class="label">Desa Yang Dibina</div>
		<div class="clear"></div>
		<div class="label">- Nama</div>
		<div class="input"><input type="text" name="desa_nama" class="long" /></div>
		<div class="clear"></div>
		<div class="label">- Jumlah Penduduk Laki Laki</div>
		<div class="input"><input type="text" name="desa_penduduk_laki" class="long" /></div>
		<div class="clear"></div>
		<div class="label">- Jumlah Penduduk Perempuan</div>
		<div class="input"><input type="text" name="desa_penduduk_perempuan" class="long" /></div>
		<div class="clear"></div>
		<div class="label">- Jumlah KK</div>
		<div class="input"><input type="text" name="desa_jumlah_kk" class="long" /></div>
		<div class="clear"></div>
		
		<div class="label">Respon Masyarakat</div>
		<div class="input"><input type="text" name="respon" class="long" /></div>
		<div class="clear"></div>
		<div class="label">Tingkat Keberhasilan (%)</div>
		<div class="input"><input type="text" name="keberhasilan" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Dampak</div>
		<div class="clear"></div>
		<div class="label">- Positif</div>
		<div class="input"><input type="text" name="dampak_positif" class="long" /></div>
		<div class="clear"></div>
		<div class="label">- Negatif</div>
		<div class="input"><input type="text" name="dampak_negatif" class="long" /></div>
		<div class="clear"></div>
		
		<div class="label">Tindak Lanjut</div>
		<div class="input"><input type="text" name="tindak_lanjut" class="long" /></div>
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
	$('#form-editor').validate({
		rules: {
			keberhasilan: { digits: true }
		}
	});
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