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

<div id="cnt-content"><div class="container"><div class="cnt-normal">
	<h3 class="main-title"><?php echo $module['content']; ?></h3>
	<div class="hide">
		<div class="cnt-data"><?php echo json_encode($page); ?></div>
	</div>
	
	<div class="table">
		<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
			<thead>
				<tr>
					<th colspan="3">Profil Desa Model</th>
					<th colspan="2">Jumlah Penduduk</th>
					<th rowspan="2">Jumlah KK</th>
					<th rowspan="2">Bentuk/Jenis Kegiatan</th>
					<th rowspan="2">Aksesbilitas</th>
					<th rowspan="2">Tindak Lanjut</th>
					<th rowspan="2">Ket</th>
					<th rowspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th>Nama</th>
					<th>Letak</th>
					<th>5</th>
					<th>Laki Laki</th>
					<th>Perempuan</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td><?php echo $row['desa_nama']; ?></td>
					<td><?php echo $row['desa_letak']; ?></td>
					<td><?php echo $row['desa_x']; ?></td>
					<td class="center"><?php echo $row['jumlah_laki']; ?></td>
					<td class="center"><?php echo $row['jumlah_perempuan']; ?></td>
					<td class="center"><?php echo $row['jumlah_kk']; ?></td>
					<td><?php echo $row['jenis_kegiatan']; ?></td>
					<td><?php echo $row['aksesbilitas']; ?></td>
					<td><?php echo $row['tindak_lanjut']; ?></td>
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
		
		<div class="label">Profil Desa Model</div>
		<div class="clear"></div>
		<div class="label">- Nama Desa</div>
		<div class="input"><input type="text" name="desa_nama" class="long" /></div>
		<div class="clear"></div>
		<div class="label">- Letak</div>
		<div class="input"><input type="text" name="desa_letak" class="long" /></div>
		<div class="clear"></div>
		<div class="label">- 5</div>
		<div class="input"><input type="text" name="desa_x" class="long" /></div>
		<div class="clear"></div>
		
		<div class="label">Jumlah Penduduk</div>
		<div class="clear"></div>
		<div class="label">- Laki Laki</div>
		<div class="input"><input type="text" name="jumlah_laki" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Perempuan</div>
		<div class="input"><input type="text" name="jumlah_perempuan" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Jumlah KK</div>
		<div class="input"><input type="text" name="jumlah_kk" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Bentuk/Jenis Kegiatan</div>
		<div class="input"><input type="text" name="jenis_kegiatan" class="long" /></div>
		<div class="clear"></div>
		<div class="label">Aksesbilitas</div>
		<div class="input"><input type="text" name="aksesbilitas" class="long" /></div>
		<div class="clear"></div>
		<div class="label">Tindak Lanjut</div>
		<div class="input"><input type="text" name="tindak_lanjut" class="long" /></div>
		<div class="clear"></div>
		<div class="label">Ket</div>
		<div class="input"><input type="text" name="keterangan" class="long" /></div>
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