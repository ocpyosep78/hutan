<?php
	// user
	$user = $this->User_model->get_session();
	
	// record data
	$array_record = $this->$module['model_name']->get_array(array( 'user_type_id' => $user['user_type_id'] ));
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
					<th>Nama Kawasan</th>
					<th>SK Penunjukan No</th>
					<th>SK Penunjukan Tanggal</th>
					<th>SK Penetapan No</th>
					<th>SK Penetapan Tanggal</th>
					<th>Luas Inti</th>
					<th>Luas Rimba</th>
					<th>Dari</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td><?php echo $row['nama_kawasan']; ?></td>
					<td><?php echo $row['kawasan_penunjukan_no']; ?></td>
					<td class="center"><?php echo GetFormatDate($row['kawasan_penunjukan_tanggal']); ?></td>
					<td><?php echo $row['kawasan_penetapan_no']; ?></td>
					<td class="center"><?php echo GetFormatDate($row['kawasan_penetapan_tanggal']); ?></td>
					<td class="center"><?php echo $row['blog_luas_inti']; ?></td>
					<td class="center"><?php echo $row['blog_luas_rimba']; ?></td>
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
		<div class="input"><input type="text" name="nama_kawasan" class="long" /></div>
		<div class="clear"></div>
		<div class="label">SK Kawasan</div>
		<div class="clear"></div>
		<div class="label">- Penunjukan No</div>
		<div class="input"><input type="text" name="kawasan_penunjukan_no" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Penunjukan Tanggal</div>
		<div class="input"><input type="text" name="kawasan_penunjukan_tanggal" class="short datepicker" /></div>
		<div class="clear"></div>
		<div class="label">- Penunjukan Luas (Ha)</div>
		<div class="input"><input type="text" name="kawasan_penunjukan_luas" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Penetapan No</div>
		<div class="input"><input type="text" name="kawasan_penetapan_no" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Penetapan Tanggal</div>
		<div class="input"><input type="text" name="kawasan_penetapan_tanggal" class="short datepicker" /></div>
		<div class="clear"></div>
		<div class="label">- Penetapan Luas (Ha)</div>
		<div class="input"><input type="text" name="kawasan_penetapan_luas" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Zonasi/Blok</div>
		<div class="clear"></div>
		<div class="label">- SK Penataan Pengesah</div>
		<div class="input"><input type="text" name="blog_penata_pengesah" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- SK Penataan No</div>
		<div class="input"><input type="text" name="blog_penata_no" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- SK Penataan Tanggal</div>
		<div class="input"><input type="text" name="blog_penata_tanggal" class="short datepicker" /></div>
		<div class="clear"></div>
		<div class="label">- Luas Inti</div>
		<div class="input"><input type="text" name="blog_luas_inti" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Luas Rimba</div>
		<div class="input"><input type="text" name="blog_luas_rimba" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Luas Pemanfaatan</div>
		<div class="input"><input type="text" name="blog_luas_manfaat" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Luas Lainnya</div>
		<div class="input"><input type="text" name="blog_luas_lain" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Rencana Pengelolaan</div>
		<div class="clear"></div>
		<div class="label">- SP Pengesahan No</div>
		<div class="input"><input type="text" name="sk_pengesahaan_no" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- SP Pengesahan Tanggal</div>
		<div class="input"><input type="text" name="sk_pengesahaan_tanggal" class="short datepicker" /></div>
		<div class="clear"></div>
		<div class="label">- SP Pengesahan Periode</div>
		<div class="input"><input type="text" name="sk_pengesahaan_periode" class="short" /></div>
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