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
					<th>Nama dan Fungsi Kawasan</th>
					<th>Nama Sumber Air</th>
					<th>Luas Sumber Air (m2)</th>
					<th>Debit Air (m3)</th>
					<th>Ketersediaan / Daya Dukung</th>
					<th>Nama Blok / Zona</th>
					<th>Luas Blok / Zona (Ha)</th>
					<th>Koordinat Sumber Air</th>
					<th>Batas Alam</th>
					<th>Keterangan</th>
					<th>Dari</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td><?php echo $row['nama_kawasan']; ?></td>
					<td><?php echo $row['sumber_air']; ?></td>
					<td class="center"><?php echo $row['luas_sumber']; ?></td>
					<td class="center"><?php echo $row['debit_air']; ?></td>
					<td><?php echo $row['ketersediaan']; ?></td>
					<td><?php echo $row['nama_zona']; ?></td>
					<td class="center"><?php echo $row['luas_zona']; ?></td>
					<td><?php echo $row['koordinat_sumber']; ?></td>
					<td><?php echo $row['batas_alam']; ?></td>
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
		
		<div class="label">Nama dan Fungsi Kawasan</div>
		<div class="input"><input type="text" name="nama_kawasan" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Nama Sumber Air</div>
		<div class="input"><input type="text" name="sumber_air" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Luas Sumber Air (m2)</div>
		<div class="input"><input type="text" name="luas_sumber" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Debit Air (m3)</div>
		<div class="input"><input type="text" name="debit_air" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Ketersediaan/Daya Dukung</div>
		<div class="input"><input type="text" name="ketersediaan" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Nama Blok/Zona</div>
		<div class="input"><input type="text" name="nama_zona" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Luas Blok/Zona (Ha)</div>
		<div class="input"><input type="text" name="luas_zona" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Koordinat Sumber Air</div>
		<div class="input"><input type="text" name="koordinat_sumber" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Batas Alam</div>
		<div class="input"><input type="text" name="batas_alam" class="short" /></div>
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