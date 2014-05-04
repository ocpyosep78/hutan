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
						<th colspan="2">Gudang</th>
						<th colspan="2">Kantor</th>
						<th colspan="2">Garasi</th>
						<th colspan="2">Bengkel</th>
						<th colspan="2">Tempat Pencucian Alat</th>
						<th colspan="2">Tandon Persediaan Air/ Embung</th>
						<th colspan="2">Saran Olah Raga</th>
						<th colspan="2">Sarana Pelatihan</th>
						<th colspan="2">Barak Atau Kamar Tidur</th>
						<th colspan="2">Sarana Ibadah</th>
						<th colspan="2">Dapu dan Ruang Makan</th>
						<th colspan="2">Menara</th>
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
						<td class="center"><?php echo $row['gudang_baik']; ?></td>
						<td class="center"><?php echo $row['gudang_rusak']; ?></td>
						<td class="center"><?php echo $row['kantor_baik']; ?></td>
						<td class="center"><?php echo $row['kantor_rusak']; ?></td>
						<td class="center"><?php echo $row['garasi_baik']; ?></td>
						<td class="center"><?php echo $row['garasi_rusak']; ?></td>
						<td class="center"><?php echo $row['bengkel_baik']; ?></td>
						<td class="center"><?php echo $row['bengkel_rusak']; ?></td>
						<td class="center"><?php echo $row['tempat_cuci_baik']; ?></td>
						<td class="center"><?php echo $row['tempat_cuci_rusak']; ?></td>
						<td class="center"><?php echo $row['tandon_baik']; ?></td>
						<td class="center"><?php echo $row['tandon_rusak']; ?></td>
						<td class="center"><?php echo $row['olahraga_baik']; ?></td>
						<td class="center"><?php echo $row['olahraga_rusak']; ?></td>
						<td class="center"><?php echo $row['pelatihan_baik']; ?></td>
						<td class="center"><?php echo $row['pelatihan_rusak']; ?></td>
						<td class="center"><?php echo $row['barak_baik']; ?></td>
						<td class="center"><?php echo $row['barak_rusak']; ?></td>
						<td class="center"><?php echo $row['ibadah_baik']; ?></td>
						<td class="center"><?php echo $row['ibadah_rusak']; ?></td>
						<td class="center"><?php echo $row['dapur_baik']; ?></td>
						<td class="center"><?php echo $row['dapur_rusak']; ?></td>
						<td class="center"><?php echo $row['menara_baik']; ?></td>
						<td class="center"><?php echo $row['menara_rusak']; ?></td>
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
						<th colspan="2">Gudang</th>
						<th colspan="2">Kantor</th>
						<th colspan="2">Garasi</th>
						<th colspan="2">Bengkel</th>
						<th colspan="2">Tempat Pencucian Alat</th>
						<th colspan="2">Tandon Persediaan Air/ Embung</th>
						<th colspan="2">Saran Olah Raga</th>
						<th colspan="2">Sarana Pelatihan</th>
						<th colspan="2">Barak Atau Kamar Tidur</th>
						<th colspan="2">Sarana Ibadah</th>
						<th colspan="2">Dapu dan Ruang Makan</th>
						<th colspan="2">Menara</th>
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
						<td class="center"><?php echo $row['gudang_baik']; ?></td>
						<td class="center"><?php echo $row['gudang_rusak']; ?></td>
						<td class="center"><?php echo $row['kantor_baik']; ?></td>
						<td class="center"><?php echo $row['kantor_rusak']; ?></td>
						<td class="center"><?php echo $row['garasi_baik']; ?></td>
						<td class="center"><?php echo $row['garasi_rusak']; ?></td>
						<td class="center"><?php echo $row['bengkel_baik']; ?></td>
						<td class="center"><?php echo $row['bengkel_rusak']; ?></td>
						<td class="center"><?php echo $row['tempat_cuci_baik']; ?></td>
						<td class="center"><?php echo $row['tempat_cuci_rusak']; ?></td>
						<td class="center"><?php echo $row['tandon_baik']; ?></td>
						<td class="center"><?php echo $row['tandon_rusak']; ?></td>
						<td class="center"><?php echo $row['olahraga_baik']; ?></td>
						<td class="center"><?php echo $row['olahraga_rusak']; ?></td>
						<td class="center"><?php echo $row['pelatihan_baik']; ?></td>
						<td class="center"><?php echo $row['pelatihan_rusak']; ?></td>
						<td class="center"><?php echo $row['barak_baik']; ?></td>
						<td class="center"><?php echo $row['barak_rusak']; ?></td>
						<td class="center"><?php echo $row['ibadah_baik']; ?></td>
						<td class="center"><?php echo $row['ibadah_rusak']; ?></td>
						<td class="center"><?php echo $row['dapur_baik']; ?></td>
						<td class="center"><?php echo $row['dapur_rusak']; ?></td>
						<td class="center"><?php echo $row['menara_baik']; ?></td>
						<td class="center"><?php echo $row['menara_rusak']; ?></td>
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
		<div class="label">Gudang Baik</div>
		<div class="input"><input type="text" name="gudang_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Gudang Rusak</div>
		<div class="input"><input type="text" name="gudang_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Kantor Baik</div>
		<div class="input"><input type="text" name="kantor_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Kantor Rusak</div>
		<div class="input"><input type="text" name="kantor_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Garasi Baik</div>
		<div class="input"><input type="text" name="garasi_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Garasi Rusak</div>
		<div class="input"><input type="text" name="garasi_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Bengkel Baik</div>
		<div class="input"><input type="text" name="bengkel_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Bengkel Rusak</div>
		<div class="input"><input type="text" name="bengkel_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Tempat Pencucian Alat Baik</div>
		<div class="input"><input type="text" name="tempat_cuci_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Tempat Pencucian Alat Rusak</div>
		<div class="input"><input type="text" name="tempat_cuci_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Tandon Persediaan Air / Embung Baik</div>
		<div class="input"><input type="text" name="tandon_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Tandon Persediaan Air / Embung Rusak</div>
		<div class="input"><input type="text" name="tandon_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Saran Olah Raga Baik</div>
		<div class="input"><input type="text" name="olahraga_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Saran Olah Raga Rusak</div>
		<div class="input"><input type="text" name="olahraga_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Sarana Pelatihan Baik</div>
		<div class="input"><input type="text" name="pelatihan_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Sarana Pelatihan Rusak</div>
		<div class="input"><input type="text" name="pelatihan_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Barak Atau Kamar Tidur Baik</div>
		<div class="input"><input type="text" name="barak_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Barak Atau Kamar Tidur Rusak</div>
		<div class="input"><input type="text" name="barak_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Sarana Ibadah Baik</div>
		<div class="input"><input type="text" name="ibadah_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Sarana Ibadah Rusak</div>
		<div class="input"><input type="text" name="ibadah_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Dapu dan Ruang Makan Baik</div>
		<div class="input"><input type="text" name="dapur_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Dapu dan Ruang Makan Rusak</div>
		<div class="input"><input type="text" name="dapur_rusak" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Menara Baik</div>
		<div class="input"><input type="text" name="menara_baik" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Menara Rusak</div>
		<div class="input"><input type="text" name="menara_rusak" class="short" /></div>
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