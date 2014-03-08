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
					<th rowspan="4">Propinsi</th>
					<th colspan="14">Lokasi Hotspot</th>
					<th rowspan="4">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="13">Lokasi Kawasan Hutan</th>
					<th rowspan="3">Diluar Kawasan Hutan</th>
				</tr>
				<tr>
					<th colspan="7">Hutan Konservasi</th>
					<th rowspan="2">HL</th>
					<th colspan="4">Hutan Produksi</th>
					<th rowspan="2">Jml Hotspot</th>
				</tr>
				<tr>
					<th>SM</th>
					<th>CA</th>
					<th>TN</th>
					<th>THR</th>
					<th>TWA</th>
					<th>TB</th>
					<th>JML</th>
					<th>HTI</th>
					<th>HA</th>
					<th>HTR</th>
					<th>JML</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td><?php echo $row['propinsi']; ?></td>
					<td class="center"><?php echo $row['hutan_sm']; ?></td>
					<td class="center"><?php echo $row['hutan_ca']; ?></td>
					<td class="center"><?php echo $row['hutan_tn']; ?></td>
					<td class="center"><?php echo $row['hutan_thr']; ?></td>
					<td class="center"><?php echo $row['hutan_twa']; ?></td>
					<td class="center"><?php echo $row['hutan_tb']; ?></td>
					<td class="center"><?php echo $row['hutan_konservasi']; ?></td>
					<td class="center"><?php echo $row['hutan_hl']; ?></td>
					<td class="center"><?php echo $row['hutan_hti']; ?></td>
					<td class="center"><?php echo $row['hutan_ha']; ?></td>
					<td class="center"><?php echo $row['hutan_htr']; ?></td>
					<td class="center"><?php echo $row['hutan_produksi']; ?></td>
					<td class="center"><?php echo $row['hotspot']; ?></td>
					<td class="center"><?php echo $row['hutan_luar']; ?></td>
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
		
		<div class="label">Propinsi</div>
		<div class="input"><input type="text" name="propinsi" /></div>
		<div class="clear"></div>
		
		<div class="label">Hutan Konservasi</div>
		<div class="clear"></div>
		<div class="label">- SM</div>
		<div class="input"><input type="text" name="hutan_sm" /></div>
		<div class="clear"></div>
		<div class="label">- CA</div>
		<div class="input"><input type="text" name="hutan_ca" /></div>
		<div class="clear"></div>
		<div class="label">- TN</div>
		<div class="input"><input type="text" name="hutan_tn" /></div>
		<div class="clear"></div>
		<div class="label">- THR</div>
		<div class="input"><input type="text" name="hutan_thr" /></div>
		<div class="clear"></div>
		<div class="label">- TWA</div>
		<div class="input"><input type="text" name="hutan_twa" /></div>
		<div class="clear"></div>
		<div class="label">- TB</div>
		<div class="input"><input type="text" name="hutan_tb" /></div>
		<div class="clear"></div>
		<div class="label">HL</div>
		<div class="input"><input type="text" name="hutan_hl" /></div>
		<div class="clear"></div>
		
		<div class="label">Hutan Konservasi</div>
		<div class="clear"></div>
		<div class="label">- HTI</div>
		<div class="input"><input type="text" name="hutan_hti" /></div>
		<div class="clear"></div>
		<div class="label">- HA</div>
		<div class="input"><input type="text" name="hutan_ha" /></div>
		<div class="clear"></div>
		<div class="label">- HTR</div>
		<div class="input"><input type="text" name="hutan_htr" /></div>
		<div class="clear"></div>
		
		<div class="label">Jumlah Hotspot</div>
		<div class="input"><input type="text" name="hotspot" /></div>
		<div class="clear"></div>
		<div class="label">Diluar Kawasan Hutan</div>
		<div class="input"><input type="text" name="hutan_luar" /></div>
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