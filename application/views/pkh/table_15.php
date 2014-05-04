<?php
	// user
	$user = $this->User_model->get_session();
	
	// record data
	$array_daops = $this->$module['model_name']->get_array(array( 'jenis' => 'daops', 'user_type_id' => $user['user_type_id'] ));
	$array_non_daops = $this->$module['model_name']->get_array(array( 'jenis' => 'non_daops', 'user_type_id' => $user['user_type_id'] ));
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
	
	<div class="cnt-table">
		<h4 class="main-title">Daops</h4>
		<div class="table">
			<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
				<thead>
					<tr>
						<th rowspan="2">Daops / Non Daops</th>
						<th colspan="2">Tenda</th>
						<th colspan="2">Perlengkapan Memasak (Set)</th>
						<th colspan="2">Kotak P3K</th>
						<th colspan="2">Generator</th>
						<th colspan="2">Lain-lain</th>
						<th rowspan="2">Dari</th>
						<th rowspan="2">&nbsp;</th>
					</tr>
					<tr>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($array_daops as $key => $row) { ?>
					<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
						<td><?php echo $row['title']; ?></td>
						<td class="center"><?php echo $row['tenda_baik']; ?></td>
						<td class="center"><?php echo $row['tenda_rusak']; ?></td>
						<td class="center"><?php echo $row['masak_baik']; ?></td>
						<td class="center"><?php echo $row['masak_rusak']; ?></td>
						<td class="center"><?php echo $row['p3k_baik']; ?></td>
						<td class="center"><?php echo $row['p3k_rusak']; ?></td>
						<td class="center"><?php echo $row['generator_baik']; ?></td>
						<td class="center"><?php echo $row['generator_rusak']; ?></td>
						<td class="center"><?php echo $row['lain_baik']; ?></td>
						<td class="center"><?php echo $row['lain_rusak']; ?></td>
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
		
		<h4 class="main-title" style="padding: 25px 0 0 0;">Non Daops</h4>
		<div class="table">
			<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
				<thead>
					<tr>
						<th rowspan="2">Daops / Non Daops</th>
						<th colspan="2">Tenda</th>
						<th colspan="2">Perlengkapan Memasak (Set)</th>
						<th colspan="2">Kotak P3K</th>
						<th colspan="2">Generator</th>
						<th colspan="2">Lain-lain</th>
						<th rowspan="2">Dari</th>
						<th rowspan="2">&nbsp;</th>
					</tr>
					<tr>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
						<th>Baik</th>
						<th>Rusak</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($array_non_daops as $key => $row) { ?>
					<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
						<td><?php echo $row['title']; ?></td>
						<td class="center"><?php echo $row['tenda_baik']; ?></td>
						<td class="center"><?php echo $row['tenda_rusak']; ?></td>
						<td class="center"><?php echo $row['masak_baik']; ?></td>
						<td class="center"><?php echo $row['masak_rusak']; ?></td>
						<td class="center"><?php echo $row['p3k_baik']; ?></td>
						<td class="center"><?php echo $row['p3k_rusak']; ?></td>
						<td class="center"><?php echo $row['generator_baik']; ?></td>
						<td class="center"><?php echo $row['generator_rusak']; ?></td>
						<td class="center"><?php echo $row['lain_baik']; ?></td>
						<td class="center"><?php echo $row['lain_rusak']; ?></td>
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
		
		<div class="label">Daops / Non Daops</div>
		<div class="input"><input type="text" name="title" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Tenda Baik</div>
		<div class="input"><input type="text" name="tenda_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Tenda Rusak</div>
		<div class="input"><input type="text" name="tenda_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Perlengkapan Memasak (Set) Baik</div>
		<div class="input"><input type="text" name="masak_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Perlengkapan Memasak (Set) Rusak</div>
		<div class="input"><input type="text" name="masak_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Kotak P3K Baik</div>
		<div class="input"><input type="text" name="p3k_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Kotak P3K Rusak</div>
		<div class="input"><input type="text" name="p3k_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Generator Baik</div>
		<div class="input"><input type="text" name="generator_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Generator Rusak</div>
		<div class="input"><input type="text" name="generator_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Lain-lain Baik</div>
		<div class="input"><input type="text" name="lain_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Lain-lain Rusak</div>
		<div class="input"><input type="text" name="lain_rusak" class="short" /></div>
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
	$('.dataTables_length').eq(0).prepend('<div style="float: left; width: 65px; padding: 2px 0 0 0;"><button class="btn show-form" data-jenis="daops">Tambah</button></div>');
	$('.dataTables_length').eq(1).prepend('<div style="float: left; width: 65px; padding: 2px 0 0 0;"><button class="btn show-form" data-jenis="non_daops">Tambah</button></div>');
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