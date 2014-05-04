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
						<th rowspan="3">Daops / Non Daops</th>
						<th colspan="2">Jumlah</th>
						<th colspan="20">Jenis pelatihan</th>
						<th rowspan="3">Dari</th>
						<th rowspan="3">&nbsp;</th>
					</tr>
					<tr>
						<th rowspan="2">Regu</th>
						<th rowspan="2">Orang</th>
						<th colspan="3">Tingkat Dasar</th>
						<th rowspan="2">SMART</th>
						<th rowspan="2">Calon DANRU</th>
						<th rowspan="2">Calon KADAOP</th>
						<th rowspan="2">SPBK</th>
						<th rowspan="2">Mekanik Pompa</th>
						<th rowspan="2">TOT</th>
						<th rowspan="2">MMP</th>
						<th rowspan="2">ORAKOM & MP</th>
						<th rowspan="2">PB KAMP</th>
						<th rowspan="2">PULBAKET</th>
						<th rowspan="2">MCN</th>
						<th rowspan="2">GPS</th>
						<th rowspan="2">GIS</th>
						<th rowspan="2">SAR</th>
						<th rowspan="2">ICS</th>
						<th rowspan="2">AWS</th>
						<th rowspan="2">LAIN-LAIN</th>
					</tr>
					<tr>
						<th>I</th>
						<th>II</th>
						<th>III</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($array_daops as $key => $row) { ?>
					<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
						<td><?php echo $row['title']; ?></td>
						<td class="center"><?php echo $row['jumlah_regu']; ?></td>
						<td class="center"><?php echo $row['jumlah_orang']; ?></td>
						<td class="center"><?php echo $row['tingkat_1']; ?></td>
						<td class="center"><?php echo $row['tingkat_2']; ?></td>
						<td class="center"><?php echo $row['tingkat_3']; ?></td>
						<td class="center"><?php echo $row['smart']; ?></td>
						<td class="center"><?php echo $row['danru']; ?></td>
						<td class="center"><?php echo $row['kadaop']; ?></td>
						<td class="center"><?php echo $row['spbk']; ?></td>
						<td class="center"><?php echo $row['pompa']; ?></td>
						<td class="center"><?php echo $row['tot']; ?></td>
						<td class="center"><?php echo $row['mmp']; ?></td>
						<td class="center"><?php echo $row['orakom']; ?></td>
						<td class="center"><?php echo $row['pb_kamp']; ?></td>
						<td class="center"><?php echo $row['pulbaket']; ?></td>
						<td class="center"><?php echo $row['mcn']; ?></td>
						<td class="center"><?php echo $row['gps']; ?></td>
						<td class="center"><?php echo $row['gis']; ?></td>
						<td class="center"><?php echo $row['sar']; ?></td>
						<td class="center"><?php echo $row['ics']; ?></td>
						<td class="center"><?php echo $row['aws']; ?></td>
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
						<th rowspan="3">Daops / Non Daops</th>
						<th colspan="2">Jumlah</th>
						<th colspan="20">Jenis pelatihan</th>
						<th rowspan="3">Dari</th>
						<th rowspan="3">&nbsp;</th>
					</tr>
					<tr>
						<th rowspan="2">Regu</th>
						<th rowspan="2">Orang</th>
						<th colspan="3">Tingkat Dasar</th>
						<th rowspan="2">SMART</th>
						<th rowspan="2">Calon DANRU</th>
						<th rowspan="2">Calon KADAOP</th>
						<th rowspan="2">SPBK</th>
						<th rowspan="2">Mekanik Pompa</th>
						<th rowspan="2">TOT</th>
						<th rowspan="2">MMP</th>
						<th rowspan="2">ORAKOM & MP</th>
						<th rowspan="2">PB KAMP</th>
						<th rowspan="2">PULBAKET</th>
						<th rowspan="2">MCN</th>
						<th rowspan="2">GPS</th>
						<th rowspan="2">GIS</th>
						<th rowspan="2">SAR</th>
						<th rowspan="2">ICS</th>
						<th rowspan="2">AWS</th>
						<th rowspan="2">LAIN-LAIN</th>
					</tr>
					<tr>
						<th>I</th>
						<th>II</th>
						<th>III</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($array_non_daops as $key => $row) { ?>
					<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
						<td><?php echo $row['title']; ?></td>
						<td class="center"><?php echo $row['jumlah_regu']; ?></td>
						<td class="center"><?php echo $row['jumlah_orang']; ?></td>
						<td class="center"><?php echo $row['tingkat_1']; ?></td>
						<td class="center"><?php echo $row['tingkat_2']; ?></td>
						<td class="center"><?php echo $row['tingkat_3']; ?></td>
						<td class="center"><?php echo $row['smart']; ?></td>
						<td class="center"><?php echo $row['danru']; ?></td>
						<td class="center"><?php echo $row['kadaop']; ?></td>
						<td class="center"><?php echo $row['spbk']; ?></td>
						<td class="center"><?php echo $row['pompa']; ?></td>
						<td class="center"><?php echo $row['tot']; ?></td>
						<td class="center"><?php echo $row['mmp']; ?></td>
						<td class="center"><?php echo $row['orakom']; ?></td>
						<td class="center"><?php echo $row['pb_kamp']; ?></td>
						<td class="center"><?php echo $row['pulbaket']; ?></td>
						<td class="center"><?php echo $row['mcn']; ?></td>
						<td class="center"><?php echo $row['gps']; ?></td>
						<td class="center"><?php echo $row['gis']; ?></td>
						<td class="center"><?php echo $row['sar']; ?></td>
						<td class="center"><?php echo $row['ics']; ?></td>
						<td class="center"><?php echo $row['aws']; ?></td>
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
		<div class="label">Jumlah Regu</div>
		<div class="input"><input type="text" name="jumlah_regu" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Jumlah Orang</div>
		<div class="input"><input type="text" name="jumlah_orang" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Jenis pelatihan</div>
		<div class="clear"></div>
		<div class="label">- Tingkat Dasar I</div>
		<div class="input"><input type="text" name="tingkat_1" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Tingkat Dasar II</div>
		<div class="input"><input type="text" name="tingkat_2" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Tingkat Dasar III</div>
		<div class="input"><input type="text" name="tingkat_3" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- SMART</div>
		<div class="input"><input type="text" name="smart" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon DANRU</div>
		<div class="input"><input type="text" name="danru" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon KADAOP</div>
		<div class="input"><input type="text" name="kadaop" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- SPBK</div>
		<div class="input"><input type="text" name="spbk" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Mekanik Pompa</div>
		<div class="input"><input type="text" name="pompa" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- TOT</div>
		<div class="input"><input type="text" name="tot" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- MMP</div>
		<div class="input"><input type="text" name="mmp" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- ORAKOM & MP</div>
		<div class="input"><input type="text" name="orakom" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- PB KAMP</div>
		<div class="input"><input type="text" name="pb_kamp" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- PULBAKET</div>
		<div class="input"><input type="text" name="pulbaket" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- MCN</div>
		<div class="input"><input type="text" name="mcn" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- GPS</div>
		<div class="input"><input type="text" name="gps" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- GIS</div>
		<div class="input"><input type="text" name="gis" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- SAR</div>
		<div class="input"><input type="text" name="sar" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- ICS</div>
		<div class="input"><input type="text" name="ics" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- AWS</div>
		<div class="input"><input type="text" name="aws" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- LAIN-LAIN</div>
		<div class="input"><input type="text" name="lain" class="short" /></div>
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