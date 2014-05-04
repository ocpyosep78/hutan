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

<style>
.form-box .label { width: 300px; }
.form-box .input { width: 260px; }
</style>

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
					<th colspan="2">Kawasan</th>
					<th rowspan="2">Dasar Hukum Pemanfaatan</th>
					<th colspan="7">Jenis IUPJL (Ha)</th>
					<th rowspan="2">Keterangan</th>
					<th rowspan="2">Dari</th>
					<th rowspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th>Nama dan Fungsi</th>
					<th>Koordinat</th>
					<th>Pemanfaatan Aliran Air/Energi Air</th>
					<th>Pemanfaatan Air</th>
					<th>Wisata Alam</th>
					<th>Plasma Nutfah dan Tanaman Obat</th>
					<th>Jasa Geotermal</th>
					<th>Penyerapan Karbon</th>
					<th>Jasa Lainnya</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td><?php echo $row['nama_kawasan']; ?></td>
					<td><?php echo $row['koordinat']; ?></td>
					<td><?php echo $row['dasar_hukum']; ?></td>
					<td class="center"><?php echo $row['pemanfaatan_aliran_air']; ?></td>
					<td class="center"><?php echo $row['pemanfaatan_air']; ?></td>
					<td class="center"><?php echo $row['wisata_alam']; ?></td>
					<td class="center"><?php echo $row['tanaman_obat']; ?></td>
					<td class="center"><?php echo $row['jasa_geotermal']; ?></td>
					<td class="center"><?php echo $row['penyerapan_karbon']; ?></td>
					<td class="center"><?php echo $row['jasa_lain']; ?></td>
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
	
	<div class="form-box hide"><form id="form-editor">
		<input type="hidden" name="id" value="0" />
		<input type="hidden" name="action" value="update" />
		
		<div class="label">Kawasan</div>
		<div class="clear"></div>
		<div class="label">- Nama dan Fungsi</div>
		<div class="input"><input type="text" name="nama_kawasan" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Koordinat</div>
		<div class="input"><input type="text" name="koordinat" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Dasar Hukum Pemanfaatan</div>
		<div class="input"><input type="text" name="dasar_hukum" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Jenis IUPJL (Ha)</div>
		<div class="clear"></div>
		<div class="label">- Pemanfaatan Aliran Air/Energi Air</div>
		<div class="input"><input type="text" name="pemanfaatan_aliran_air" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Pemanfaatan Air</div>
		<div class="input"><input type="text" name="pemanfaatan_air" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Wisata Alam</div>
		<div class="input"><input type="text" name="wisata_alam" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Plasma Nutfah dan Tanaman Obat</div>
		<div class="input"><input type="text" name="tanaman_obat" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Jasa Geotermal</div>
		<div class="input"><input type="text" name="jasa_geotermal" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Penyerapan Karbon</div>
		<div class="input"><input type="text" name="penyerapan_karbon" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Jasa Lainnya</div>
		<div class="input"><input type="text" name="jasa_lain" class="short" /></div>
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