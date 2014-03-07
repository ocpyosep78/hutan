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
					<th colspan="4">Nama Kawasan Lama</th>
					<th colspan="4">Nama Kawasan Baru</th>
					<th rowspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th>Nama Kawasan</th>
					<th>No</th>
					<th>Tanggal SK</th>
					<th>Luas</th>
					<th>Nama Kawasan</th>
					<th>No</th>
					<th>Tanggal SK</th>
					<th>Luas</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td><?php echo $row['kawasan_nama_lama']; ?></td>
					<td><?php echo $row['kawasan_no_lama']; ?></td>
					<td class="center"><?php echo GetFormatDate($row['kawasan_tanggal_lama']); ?></td>
					<td class="center"><?php echo $row['kawasan_luas_lama']; ?></td>
					<td><?php echo $row['kawasan_nama_baru']; ?></td>
					<td><?php echo $row['kawasan_no_baru']; ?></td>
					<td class="center"><?php echo GetFormatDate($row['kawasan_tanggal_baru']); ?></td>
					<td class="center"><?php echo $row['kawasan_luas_baru']; ?></td>
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
		
		<div class="label">Nama Kawasan Lama</div>
		<div class="clear"></div>
		<div class="label">- Nama dan Fungsi Kawasan</div>
		<div class="input"><input type="text" name="kawasan_nama_lama" class="long" /></div>
		<div class="clear"></div>
		<div class="label">- No</div>
		<div class="input"><input type="text" name="kawasan_no_lama" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Tanggal SK</div>
		<div class="input"><input type="text" name="kawasan_tanggal_lama" class="short datepicker" /></div>
		<div class="clear"></div>
		<div class="label">- Luas (Ha)</div>
		<div class="input"><input type="text" name="kawasan_luas_lama" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Nama Kawasan Baru</div>
		<div class="clear"></div>
		<div class="label">- Nama dan Fungsi Kawasan</div>
		<div class="input"><input type="text" name="kawasan_nama_baru" class="long" /></div>
		<div class="clear"></div>
		<div class="label">- No</div>
		<div class="input"><input type="text" name="kawasan_no_baru" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Tanggal SK</div>
		<div class="input"><input type="text" name="kawasan_tanggal_baru" class="short datepicker" /></div>
		<div class="clear"></div>
		<div class="label">- Luas (Ha)</div>
		<div class="input"><input type="text" name="kawasan_luas_baru" class="short" /></div>
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