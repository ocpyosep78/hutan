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

<div id="cnt-content"><div class="container" style="width: 1800px; padding: 0 20px"><div class="cnt-normal">
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
						<th colspan="2">Sekop</th>
						<th colspan="2">Garu</th>
						<th colspan="2">Garu Tajam</th>
						<th colspan="2">Kapak 2 Fungsi Pulaski</th>
						<th colspan="2">Gepyok</th>
						<th colspan="2">Cangkul</th>
						<th colspan="2">Golok</th>
						<th colspan="2">Pengait Semak</th>
						<th colspan="2">Obor Sulut Tetes</th>
						<th colspan="2">Jet Shooter</th>
						<th colspan="2">Kikir</th>
						<th colspan="2">Chainsaw</th>
						<th rowspan="2">Lain-lain</th>
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
						<td class="center"><?php echo $row['sekop_baik']; ?></td>
						<td class="center"><?php echo $row['sekop_rusak']; ?></td>
						<td class="center"><?php echo $row['garu_baik']; ?></td>
						<td class="center"><?php echo $row['garu_rusak']; ?></td>
						<td class="center"><?php echo $row['garu_tajam_baik']; ?></td>
						<td class="center"><?php echo $row['garu_tajam_rusak']; ?></td>
						<td class="center"><?php echo $row['kapak_baik']; ?></td>
						<td class="center"><?php echo $row['kapak_rusak']; ?></td>
						<td class="center"><?php echo $row['gepyok_baik']; ?></td>
						<td class="center"><?php echo $row['gepyok_rusak']; ?></td>
						<td class="center"><?php echo $row['cangkul_baik']; ?></td>
						<td class="center"><?php echo $row['cangkul_rusak']; ?></td>
						<td class="center"><?php echo $row['golok_baik']; ?></td>
						<td class="center"><?php echo $row['golok_rusak']; ?></td>
						<td class="center"><?php echo $row['pengait_baik']; ?></td>
						<td class="center"><?php echo $row['pengait_rusak']; ?></td>
						<td class="center"><?php echo $row['obor_baik']; ?></td>
						<td class="center"><?php echo $row['obor_rusak']; ?></td>
						<td class="center"><?php echo $row['shooter_baik']; ?></td>
						<td class="center"><?php echo $row['shooter_rusak']; ?></td>
						<td class="center"><?php echo $row['kirir_baik']; ?></td>
						<td class="center"><?php echo $row['kirir_rusak']; ?></td>
						<td class="center"><?php echo $row['chainsaw_baik']; ?></td>
						<td class="center"><?php echo $row['chainsaw_rusak']; ?></td>
						<td class="center"><?php echo $row['lain']; ?></td>
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
						<th colspan="2">Sekop</th>
						<th colspan="2">Garu</th>
						<th colspan="2">Garu Tajam</th>
						<th colspan="2">Kapak 2 Fungsi Pulaski</th>
						<th colspan="2">Gepyok</th>
						<th colspan="2">Cangkul</th>
						<th colspan="2">Golok</th>
						<th colspan="2">Pengait Semak</th>
						<th colspan="2">Obor Sulut Tetes</th>
						<th colspan="2">Jet Shooter</th>
						<th colspan="2">Kikir</th>
						<th colspan="2">Chainsaw</th>
						<th rowspan="2">Lain-lain</th>
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
						<td class="center"><?php echo $row['sekop_baik']; ?></td>
						<td class="center"><?php echo $row['sekop_rusak']; ?></td>
						<td class="center"><?php echo $row['garu_baik']; ?></td>
						<td class="center"><?php echo $row['garu_rusak']; ?></td>
						<td class="center"><?php echo $row['garu_tajam_baik']; ?></td>
						<td class="center"><?php echo $row['garu_tajam_rusak']; ?></td>
						<td class="center"><?php echo $row['kapak_baik']; ?></td>
						<td class="center"><?php echo $row['kapak_rusak']; ?></td>
						<td class="center"><?php echo $row['gepyok_baik']; ?></td>
						<td class="center"><?php echo $row['gepyok_rusak']; ?></td>
						<td class="center"><?php echo $row['cangkul_baik']; ?></td>
						<td class="center"><?php echo $row['cangkul_rusak']; ?></td>
						<td class="center"><?php echo $row['golok_baik']; ?></td>
						<td class="center"><?php echo $row['golok_rusak']; ?></td>
						<td class="center"><?php echo $row['pengait_baik']; ?></td>
						<td class="center"><?php echo $row['pengait_rusak']; ?></td>
						<td class="center"><?php echo $row['obor_baik']; ?></td>
						<td class="center"><?php echo $row['obor_rusak']; ?></td>
						<td class="center"><?php echo $row['shooter_baik']; ?></td>
						<td class="center"><?php echo $row['shooter_rusak']; ?></td>
						<td class="center"><?php echo $row['kirir_baik']; ?></td>
						<td class="center"><?php echo $row['kirir_rusak']; ?></td>
						<td class="center"><?php echo $row['chainsaw_baik']; ?></td>
						<td class="center"><?php echo $row['chainsaw_rusak']; ?></td>
						<td class="center"><?php echo $row['lain']; ?></td>
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
		<div class="label">Sekop Baik</div>
		<div class="input"><input type="text" name="sekop_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Sekop Rusak</div>
		<div class="input"><input type="text" name="sekop_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Garu Baik</div>
		<div class="input"><input type="text" name="garu_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Garu Rusak</div>
		<div class="input"><input type="text" name="garu_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Garu Tajam Baik</div>
		<div class="input"><input type="text" name="garu_tajam_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Garu Tajam Rusak</div>
		<div class="input"><input type="text" name="garu_tajam_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Kapak 2 Fungsi Pulaski Baik</div>
		<div class="input"><input type="text" name="kapak_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Kapak 2 Fungsi Pulaski Rusak</div>
		<div class="input"><input type="text" name="kapak_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Gepyok Baik</div>
		<div class="input"><input type="text" name="gepyok_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Gepyok Rusak</div>
		<div class="input"><input type="text" name="gepyok_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Cangkul Baik</div>
		<div class="input"><input type="text" name="cangkul_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Cangkul Rusak</div>
		<div class="input"><input type="text" name="cangkul_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Golok Baik</div>
		<div class="input"><input type="text" name="golok_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Golok Rusak</div>
		<div class="input"><input type="text" name="golok_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pengait Semak Baik</div>
		<div class="input"><input type="text" name="pengait_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pengait Semak Rusak</div>
		<div class="input"><input type="text" name="pengait_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Obor Sulut Tetes Baik</div>
		<div class="input"><input type="text" name="obor_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Obor Sulut Tetes Rusak</div>
		<div class="input"><input type="text" name="obor_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Jet Shooter Baik</div>
		<div class="input"><input type="text" name="shooter_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Jet Shooter Rusak</div>
		<div class="input"><input type="text" name="shooter_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Kikir Baik</div>
		<div class="input"><input type="text" name="kirir_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Kikir Rusak</div>
		<div class="input"><input type="text" name="kirir_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Chainsaw Baik</div>
		<div class="input"><input type="text" name="chainsaw_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Chainsaw Rusak</div>
		<div class="input"><input type="text" name="chainsaw_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Lain - Lain</div>
		<div class="input"><input type="text" name="lain" class="long" /></div>
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