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

<div id="cnt-content"><div class="container" style="width: 1250px;"><div class="cnt-normal">
	<h3 class="main-title"><?php echo $module['content']; ?></h3>
	<div class="hide">
		<div class="cnt-data"><?php echo json_encode($page); ?></div>
	</div>
	
	<div class="table">
		<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
			<thead>
				<tr>
					<th rowspan="3">Provinsi</th>
					<th colspan="6">Manggala Agni</th>
					<th colspan="2">Masyarakat Peduli Api/ MPA</th>
					<th colspan="2">Instansi Lain (MPA)</th>
					<th colspan="2">Pemangku Kepentingan (MPA)</th>
					<th rowspan="3">Jumlah Regu</th>
					<th rowspan="3">Jumlah<br />Anggota<br />(ORANG)</th>
					<th rowspan="3">Keterangan</th>
					<th rowspan="3">Dari</th>
					<th rowspan="3">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="3">Daops</th>
					<th colspan="3">Non Daops</th>
					<th rowspan="2">Regu</th>
					<th rowspan="2">Jumlah<br />Orang</th>
					<th rowspan="2">Regu</th>
					<th rowspan="2">Jumlah<br />Orang</th>
					<th rowspan="2">Regu</th>
					<th rowspan="2">Jumlah<br />Orang</th>
				</tr>
				<tr>
					<th>Nama</th>
					<th>Regu</th>
					<th>Jumlah<br />Orang</th>
					<th>Satuan<br />Kerja</th>
					<th>Regu</th>
					<th>Jumlah<br />Orang</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td><?php echo $row['propinsi']; ?></td>
					<td><?php echo $row['daops_nama']; ?></td>
					<td><?php echo $row['daops_regu']; ?></td>
					<td class="center"><?php echo $row['daops_jumlah']; ?></td>
					<td><?php echo $row['daops_non_satuan']; ?></td>
					<td><?php echo $row['daops_non_regu']; ?></td>
					<td class="center"><?php echo $row['daops_non_jumlah']; ?></td>
					<td><?php echo $row['masyarakat_regu']; ?></td>
					<td class="center"><?php echo $row['masyarakat_jumlah']; ?></td>
					<td><?php echo $row['instansi_regu']; ?></td>
					<td class="center"><?php echo $row['instansi_jumlah']; ?></td>
					<td><?php echo $row['pemangku_regu']; ?></td>
					<td class="center"><?php echo $row['pemangku_jumlah']; ?></td>
					<td><?php echo $row['jumlah_regu']; ?></td>
					<td class="center"><?php echo $row['jumlah_anggota']; ?></td>
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
		
		<div class="label">Propinsi</div>
		<div class="input"><input type="text" name="propinsi" class="long" /></div>
		<div class="clear"></div>
		
		<div class="label">Manggala Agni</div>
		<div class="clear"></div>
		<div class="label">- Daops Nama</div>
		<div class="input"><input type="text" name="daops_nama" class="long" /></div>
		<div class="clear"></div>
		<div class="label">- Daops Regu</div>
		<div class="input"><input type="text" name="daops_regu" class="long" /></div>
		<div class="clear"></div>
		<div class="label">- Daops Jumlah Orang</div>
		<div class="input"><input type="text" name="daops_jumlah" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Non Daops Satuan Kerja</div>
		<div class="input"><input type="text" name="daops_non_satuan" class="long" /></div>
		<div class="clear"></div>
		<div class="label">- Non Daops Regu</div>
		<div class="input"><input type="text" name="daops_non_regu" class="long" /></div>
		<div class="clear"></div>
		<div class="label">- Non Daops Jumlah Orang</div>
		<div class="input"><input type="text" name="daops_non_jumlah" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Masyarakat Peduli Api/ MPA</div>
		<div class="clear"></div>
		<div class="label">- Regu</div>
		<div class="input"><input type="text" name="masyarakat_regu" class="long" /></div>
		<div class="clear"></div>
		<div class="label">- Jumlah Orang</div>
		<div class="input"><input type="text" name="masyarakat_jumlah" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Instansi Lain (MPA)</div>
		<div class="clear"></div>
		<div class="label">- Regu</div>
		<div class="input"><input type="text" name="instansi_regu" class="long" /></div>
		<div class="clear"></div>
		<div class="label">- Jumlah Orang</div>
		<div class="input"><input type="text" name="instansi_jumlah" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Pemangku Kepentingan (MPA)</div>
		<div class="clear"></div>
		<div class="label">- Regu</div>
		<div class="input"><input type="text" name="pemangku_regu" class="long" /></div>
		<div class="clear"></div>
		<div class="label">- Jumlah Orang</div>
		<div class="input"><input type="text" name="pemangku_jumlah" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Jumlah Regu</div>
		<div class="input"><input type="text" name="jumlah_regu" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Jumlah Anggota (ORANG)</div>
		<div class="input"><input type="text" name="jumlah_anggota" class="short" /></div>
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
		console.log(record);
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