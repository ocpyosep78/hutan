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
					<th colspan="20">Jenis Jabatan</th>
					<th rowspan="3" colspan="3">Jumlah</th>
					<th rowspan="4">Keterangan</th>
					<th rowspan="4">Dari</th>
					<th rowspan="4">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="16">Struktural</th>
					<th colspan="2" rowspan="2">Fungsional Umum</th>
					<th colspan="2" rowspan="2">Fungsional</th>
				</tr>
				<tr>
					<th colspan="2">I-A</th>
					<th colspan="2">I-B</th>
					<th colspan="2">II-A</th>
					<th colspan="2">II-B</th>
					<th colspan="2">III-A</th>
					<th colspan="2">III-B</th>
					<th colspan="2">IV-A</th>
					<th colspan="2">IV-B</th>
				</tr>
				<tr>
					<th>L</th>
					<th>P</th>
					<th>L</th>
					<th>P</th>
					<th>L</th>
					<th>P</th>
					<th>L</th>
					<th>P</th>
					<th>L</th>
					<th>P</th>
					<th>L</th>
					<th>P</th>
					<th>L</th>
					<th>P</th>
					<th>L</th>
					<th>P</th>
					<th>L</th>
					<th>P</th>
					<th>L</th>
					<th>P</th>
					<th>L</th>
					<th>P</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td class="center"><?php echo $row['struktural_1a_l']; ?></td>
					<td class="center"><?php echo $row['struktural_1a_p']; ?></td>
					<td class="center"><?php echo $row['struktural_1b_l']; ?></td>
					<td class="center"><?php echo $row['struktural_1b_p']; ?></td>
					<td class="center"><?php echo $row['struktural_2a_l']; ?></td>
					<td class="center"><?php echo $row['struktural_2a_p']; ?></td>
					<td class="center"><?php echo $row['struktural_2b_l']; ?></td>
					<td class="center"><?php echo $row['struktural_2b_p']; ?></td>
					<td class="center"><?php echo $row['struktural_3a_l']; ?></td>
					<td class="center"><?php echo $row['struktural_3a_p']; ?></td>
					<td class="center"><?php echo $row['struktural_3b_l']; ?></td>
					<td class="center"><?php echo $row['struktural_3b_p']; ?></td>
					<td class="center"><?php echo $row['struktural_4a_l']; ?></td>
					<td class="center"><?php echo $row['struktural_4a_p']; ?></td>
					<td class="center"><?php echo $row['struktural_4b_l']; ?></td>
					<td class="center"><?php echo $row['struktural_4b_p']; ?></td>
					<td class="center"><?php echo $row['fungsional_umum_l']; ?></td>
					<td class="center"><?php echo $row['fungsional_umum_p']; ?></td>
					<td class="center"><?php echo $row['fungsional_l']; ?></td>
					<td class="center"><?php echo $row['fungsional_p']; ?></td>
					<td class="center"><?php echo $row['total_l']; ?></td>
					<td class="center"><?php echo $row['total_p']; ?></td>
					<td class="center"><?php echo $row['total']; ?></td>
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
		
		<div class="label">Struktural</div>
		<div class="clear"></div>
		<div class="label">I-A L</div>
		<div class="input"><input type="text" name="struktural_1a_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">I-A P</div>
		<div class="input"><input type="text" name="struktural_1a_p" class="short" /></div>
		<div class="clear"></div>
		<div class="label">I-B L</div>
		<div class="input"><input type="text" name="struktural_1b_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">I-B P</div>
		<div class="input"><input type="text" name="struktural_1b_p" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">II-A L</div>
		<div class="input"><input type="text" name="struktural_2a_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">II-A P</div>
		<div class="input"><input type="text" name="struktural_2a_p" class="short" /></div>
		<div class="clear"></div>
		<div class="label">II-B L</div>
		<div class="input"><input type="text" name="struktural_2b_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">II-B P</div>
		<div class="input"><input type="text" name="struktural_2b_p" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">III-A L</div>
		<div class="input"><input type="text" name="struktural_3a_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">III-A P</div>
		<div class="input"><input type="text" name="struktural_3a_p" class="short" /></div>
		<div class="clear"></div>
		<div class="label">III-B L</div>
		<div class="input"><input type="text" name="struktural_3b_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">III-B P</div>
		<div class="input"><input type="text" name="struktural_3b_p" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">IV-A L</div>
		<div class="input"><input type="text" name="struktural_4a_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">IV-A P</div>
		<div class="input"><input type="text" name="struktural_4a_p" class="short" /></div>
		<div class="clear"></div>
		<div class="label">IV-B L</div>
		<div class="input"><input type="text" name="struktural_4b_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">IV-B P</div>
		<div class="input"><input type="text" name="struktural_4b_p" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Fungsional Umum</div>
		<div class="clear"></div>
		<div class="label">- L</div>
		<div class="input"><input type="text" name="fungsional_umum_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- P</div>
		<div class="input"><input type="text" name="fungsional_umum_p" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Fungsional</div>
		<div class="clear"></div>
		<div class="label">- L</div>
		<div class="input"><input type="text" name="fungsional_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- P</div>
		<div class="input"><input type="text" name="fungsional_p" class="short" /></div>
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