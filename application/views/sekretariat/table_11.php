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

<style>
.form-box .label { width: 400px; }
.form-box .input { width: 260px; }
</style>

<div id="cnt-content"><div class="container" style="width: 1400px; padding: 0 20px;"><div class="cnt-normal">
	<h3 class="main-title"><?php echo $module['content']; ?></h3>
	<div class="hide">
		<div class="cnt-data"><?php echo json_encode($page); ?></div>
	</div>
	
	<div class="table">
		<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
			<thead>
				<tr>
					<th rowspan="3">Nama Satker</th>
					<th colspan="15">Jenis Inventaris Gedung dan Bangunan</th>
					<th rowspan="3">&nbsp;</th>
				</tr>
				<tr>
					<th>Kantor Balai</th>
					<th>Kantor Bidang Wilayah</th>
					<th>Kantor Seksi Wilayah</th>
					<th>Kantor Resort</th>
					<th>Pos Jaga</th>
					<th>Pondok Kerja</th>
					<th>Pos Pengamatan</th>
					<th>Rumah Negara Golongan II</th>
					<th>Rumah Negara Golongan III</th>
					<th>Rumah Negara Golongan IV</th>
					<th>Mess/Wisma/ Asrama</th>
					<th>Markas Polhut/SPORC</th>
					<th>DAOPS/ Brigdalkar</th>
					<th>PLG/PPG</th>
					<th rowspan="2">Keterangan</th>
				</tr>
				<tr>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
					<th>Unit</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td class="center"><?php echo $row['satker']; ?></td>
					<td class="center"><?php echo $row['kantor_balai']; ?></td>
					<td class="center"><?php echo $row['kantor_bidang_wilayah']; ?></td>
					<td class="center"><?php echo $row['kantor_seksi_wilayah']; ?></td>
					<td class="center"><?php echo $row['kantor_resort']; ?></td>
					<td class="center"><?php echo $row['pos_jaga']; ?></td>
					<td class="center"><?php echo $row['pondok_kerja']; ?></td>
					<td class="center"><?php echo $row['pos_pengamatan']; ?></td>
					<td class="center"><?php echo $row['rumah_negara_gol2']; ?></td>
					<td class="center"><?php echo $row['rumah_negara_gol3']; ?></td>
					<td class="center"><?php echo $row['rumah_negara_gol4']; ?></td>
					<td class="center"><?php echo $row['wisma']; ?></td>
					<td class="center"><?php echo $row['markas_polhut']; ?></td>
					<td class="center"><?php echo $row['daops']; ?></td>
					<td class="center"><?php echo $row['plg_ppg']; ?></td>
					<td class="center"><?php echo $row['keterangan']; ?></td>
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
		
		<div class="label">Nama Satker</div>
		<div class="input"><input type="text" name="satker" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Kantor Balai</div>
		<div class="input"><input type="text" name="kantor_balai" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Kantor Bidang Wilayah</div>
		<div class="input"><input type="text" name="kantor_bidang_wilayah" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Kantor Seksi Wilayah</div>
		<div class="input"><input type="text" name="kantor_seksi_wilayah" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Kantor Resort</div>
		<div class="input"><input type="text" name="kantor_resort" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pos Jaga</div>
		<div class="input"><input type="text" name="pos_jaga" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pondok Kerja</div>
		<div class="input"><input type="text" name="pondok_kerja" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Pos Pengamatan</div>
		<div class="input"><input type="text" name="pos_pengamatan" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Rumah Negara Golongan II</div>
		<div class="input"><input type="text" name="rumah_negara_gol2" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Rumah Negara Golongan III</div>
		<div class="input"><input type="text" name="rumah_negara_gol3" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Rumah Negara Golongan IV</div>
		<div class="input"><input type="text" name="rumah_negara_gol4" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Mess/Wisma/ Asrama</div>
		<div class="input"><input type="text" name="wisma" class="short" /></div>
		<div class="clear"></div>
		<div class="label">Markas Polhut/SPORC</div>
		<div class="input"><input type="text" name="markas_polhut" class="short" /></div>
		<div class="clear"></div>
		<div class="label">DAOPS/ Brigdalkar</div>
		<div class="input"><input type="text" name="daops" class="short" /></div>
		<div class="clear"></div>
		<div class="label">PLG/PPG</div>
		<div class="input"><input type="text" name="plg_ppg" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Keterangan</div>
		<div class="input"><textarea name="keterangan" class="short"></textarea></div>
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