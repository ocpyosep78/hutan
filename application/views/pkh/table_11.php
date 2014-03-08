<?php
	// record data
	$array_daops = $this->$module['model_name']->get_array(array( 'jenis' => 'daops' ));
	$array_non_daops = $this->$module['model_name']->get_array(array( 'jenis' => 'non_daops' ));
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
						<th colspan="2">Pakaian Pemadam</th>
						<th colspan="2">Helm</th>
						<th colspan="2">Lampu Kepala</th>
						<th colspan="2">Gogles</th>
						<th colspan="2">Slayer</th>
						<th colspan="2">Sarung Tangan</th>
						<th colspan="2">Sabuk Perlengkapan</th>
						<th colspan="2">Velples</th>
						<th colspan="2">Sepatu Boat</th>
						<th colspan="2">Ransel</th>
						<th rowspan="2">Lain-lain</th>
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
					</tr>
				</thead>
				<tbody>
					<?php foreach ($array_daops as $key => $row) { ?>
					<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
						<td><?php echo $row['title']; ?></td>
						<td class="center"><?php echo $row['pakaian_baik']; ?></td>
						<td class="center"><?php echo $row['pakaian_rusak']; ?></td>
						<td class="center"><?php echo $row['helm_baik']; ?></td>
						<td class="center"><?php echo $row['helm_rusak']; ?></td>
						<td class="center"><?php echo $row['lampu_baik']; ?></td>
						<td class="center"><?php echo $row['lampu_rusak']; ?></td>
						<td class="center"><?php echo $row['gogles_baik']; ?></td>
						<td class="center"><?php echo $row['gogles_rusak']; ?></td>
						<td class="center"><?php echo $row['slayer_baik']; ?></td>
						<td class="center"><?php echo $row['slayer_rusak']; ?></td>
						<td class="center"><?php echo $row['sarung_tangan_baik']; ?></td>
						<td class="center"><?php echo $row['sarung_tangan_rusak']; ?></td>
						<td class="center"><?php echo $row['sabuk_baik']; ?></td>
						<td class="center"><?php echo $row['sabuk_rusak']; ?></td>
						<td class="center"><?php echo $row['veples_baik']; ?></td>
						<td class="center"><?php echo $row['veples_rusak']; ?></td>
						<td class="center"><?php echo $row['sepatu_baik']; ?></td>
						<td class="center"><?php echo $row['sepatu_rusak']; ?></td>
						<td class="center"><?php echo $row['ransel_baik']; ?></td>
						<td class="center"><?php echo $row['ransel_rusak']; ?></td>
						<td class="center"><?php echo $row['lain']; ?></td>
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
		
		<h4 class="main-title" style="padding: 25px 0 0 0;">Non Daops</h4>
		<div class="table">
			<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
				<thead>
					<tr>
						<th rowspan="2">Daops / Non Daops</th>
						<th colspan="2">Pakaian Pemadam</th>
						<th colspan="2">Helm</th>
						<th colspan="2">Lampu Kepala</th>
						<th colspan="2">Gogles</th>
						<th colspan="2">Slayer</th>
						<th colspan="2">Sarung Tangan</th>
						<th colspan="2">Sabuk Perlengkapan</th>
						<th colspan="2">Velples</th>
						<th colspan="2">Sepatu Boat</th>
						<th colspan="2">Ransel</th>
						<th rowspan="2">Lain-lain</th>
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
					</tr>
				</thead>
				<tbody>
					<?php foreach ($array_non_daops as $key => $row) { ?>
					<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
						<td><?php echo $row['title']; ?></td>
						<td class="center"><?php echo $row['pakaian_baik']; ?></td>
						<td class="center"><?php echo $row['pakaian_rusak']; ?></td>
						<td class="center"><?php echo $row['helm_baik']; ?></td>
						<td class="center"><?php echo $row['helm_rusak']; ?></td>
						<td class="center"><?php echo $row['lampu_baik']; ?></td>
						<td class="center"><?php echo $row['lampu_rusak']; ?></td>
						<td class="center"><?php echo $row['gogles_baik']; ?></td>
						<td class="center"><?php echo $row['gogles_rusak']; ?></td>
						<td class="center"><?php echo $row['slayer_baik']; ?></td>
						<td class="center"><?php echo $row['slayer_rusak']; ?></td>
						<td class="center"><?php echo $row['sarung_tangan_baik']; ?></td>
						<td class="center"><?php echo $row['sarung_tangan_rusak']; ?></td>
						<td class="center"><?php echo $row['sabuk_baik']; ?></td>
						<td class="center"><?php echo $row['sabuk_rusak']; ?></td>
						<td class="center"><?php echo $row['veples_baik']; ?></td>
						<td class="center"><?php echo $row['veples_rusak']; ?></td>
						<td class="center"><?php echo $row['sepatu_baik']; ?></td>
						<td class="center"><?php echo $row['sepatu_rusak']; ?></td>
						<td class="center"><?php echo $row['ransel_baik']; ?></td>
						<td class="center"><?php echo $row['ransel_rusak']; ?></td>
						<td class="center"><?php echo $row['lain']; ?></td>
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
	</div>
	
	<div class="form-box hide"><form id="form-editor">
		<input type="hidden" name="id" value="0" />
		<input type="hidden" name="jenis" value="" />
		<input type="hidden" name="action" value="update" />
		
		<div class="label">Daops / Non Daops</div>
		<div class="input"><input type="text" name="title" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pakaian Pemadam Baik</div>
		<div class="input"><input type="text" name="pakaian_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pakaian Pemadam Rusak</div>
		<div class="input"><input type="text" name="pakaian_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Helm Baik</div>
		<div class="input"><input type="text" name="helm_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Helm Rusak</div>
		<div class="input"><input type="text" name="helm_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Lampu Kepala Baik</div>
		<div class="input"><input type="text" name="lampu_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Lampu Kepala Rusak</div>
		<div class="input"><input type="text" name="lampu_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Gogles Baik</div>
		<div class="input"><input type="text" name="gogles_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Gogles Rusak</div>
		<div class="input"><input type="text" name="gogles_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Slayer Baik</div>
		<div class="input"><input type="text" name="slayer_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Slayer Rusak</div>
		<div class="input"><input type="text" name="slayer_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Sarung Tangan Baik</div>
		<div class="input"><input type="text" name="sarung_tangan_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Sarung Tangan Rusak</div>
		<div class="input"><input type="text" name="sarung_tangan_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Sabuk Perlengkapan Baik</div>
		<div class="input"><input type="text" name="sabuk_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Sabuk Perlengkapan Rusak</div>
		<div class="input"><input type="text" name="sabuk_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Velples Baik</div>
		<div class="input"><input type="text" name="veples_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Velples Rusak</div>
		<div class="input"><input type="text" name="veples_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Sepatu Boat Baik</div>
		<div class="input"><input type="text" name="sepatu_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Sepatu Boat Rusak</div>
		<div class="input"><input type="text" name="sepatu_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Ransel Baik</div>
		<div class="input"><input type="text" name="ransel_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Ransel Rusak</div>
		<div class="input"><input type="text" name="ransel_rusak" class="short" /></div>
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