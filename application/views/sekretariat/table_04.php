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
					<th colspan="2">Sarjana</th>
					<th colspan="2">D3</th>
					<th colspan="2">SLTA</th>
					<th colspan="2">SLTP</th>
					<th colspan="2">SD</th>
					<th colspan="3">Jumlah</th>
					<th rowspan="2">Keterangan</th>
					<th rowspan="2">&nbsp;</th>
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
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<!--
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td class="center"><?php echo $row['s3_l']; ?></td>
					<td class="center"><?php echo $row['s3_p']; ?></td>
					<td class="center"><?php echo $row['s2_l']; ?></td>
					<td class="center"><?php echo $row['s2_p']; ?></td>
					<td class="center"><?php echo $row['s1_l']; ?></td>
					<td class="center"><?php echo $row['s1_p']; ?></td>
					<td class="center"><?php echo $row['d3_l']; ?></td>
					<td class="center"><?php echo $row['d3_p']; ?></td>
					<td class="center"><?php echo $row['slta_l']; ?></td>
					<td class="center"><?php echo $row['slta_p']; ?></td>
					<td class="center"><?php echo $row['sltp_l']; ?></td>
					<td class="center"><?php echo $row['sltp_p']; ?></td>
					<td class="center"><?php echo $row['sd_l']; ?></td>
					<td class="center"><?php echo $row['sd_p']; ?></td>
					<td class="center"><?php echo $row['total_l']; ?></td>
					<td class="center"><?php echo $row['total_p']; ?></td>
					<td class="center"><?php echo $row['total']; ?></td>
					<td class="center">
						<i class="fa fa-pencil btn-edit"></i>
						<i class="fa fa-times btn-delete"></i>
						<span class="hide"><?php echo json_encode($row); ?></span>
					</td>
				</tr>
				<?php } ?>
				-->
			</tbody>
		</table>
	</div>
	
	<div class="form-box hide"><form id="form-editor">
		<input type="hidden" name="id" value="0" />
		<input type="hidden" name="action" value="update" />
		
		<div class="label">S3 L</div>
		<div class="input"><input type="text" name="s3_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">S3 P</div>
		<div class="input"><input type="text" name="s3_p" class="short" /></div>
		<div class="clear"></div>
		<div class="label">S2 L</div>
		<div class="input"><input type="text" name="s2_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">S2 P</div>
		<div class="input"><input type="text" name="s2_p" class="short" /></div>
		<div class="clear"></div>
		<div class="label">S1 L</div>
		<div class="input"><input type="text" name="s1_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">S1 P</div>
		<div class="input"><input type="text" name="s1_p" class="short" /></div>
		<div class="clear"></div>
		<div class="label">D3 L</div>
		<div class="input"><input type="text" name="d3_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">D3 P</div>
		<div class="input"><input type="text" name="d3_p" class="short" /></div>
		<div class="clear"></div>
		<div class="label">SLTA L</div>
		<div class="input"><input type="text" name="slta_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">SLTA P</div>
		<div class="input"><input type="text" name="slta_p" class="short" /></div>
		<div class="clear"></div>
		<div class="label">SLTP L</div>
		<div class="input"><input type="text" name="sltp_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">SLTP P</div>
		<div class="input"><input type="text" name="sltp_p" class="short" /></div>
		<div class="clear"></div>
		<div class="label">SD L</div>
		<div class="input"><input type="text" name="sd_l" class="short" /></div>
		<div class="clear"></div>
		<div class="label">SD P</div>
		<div class="input"><input type="text" name="sd_p" class="short" /></div>
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