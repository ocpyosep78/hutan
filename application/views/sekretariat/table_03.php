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

<div id="cnt-content"><div class="container" style="width: 1600px; padding: 0 20px;"><div class="cnt-normal">
	<h3 class="main-title"><?php echo $module['content']; ?></h3>
	<div class="hide">
		<div class="cnt-data"><?php echo json_encode($page); ?></div>
	</div>
	
	<div class="table">
		<table cellpadding="0" cellspacing="0" border="1" class="display datatable">
			<thead>
				<tr>
					<th colspan="4">POLHUT</th>
					<th rowspan="2">Jumlah POLHUT</th>
					<th colspan="4">PEH</th>
					<th rowspan="2">Jumlah PEH</th>
					<th colspan="4">Pranata Komputer</th>
					<th rowspan="2">Jumlah Pranata Komputer</th>
					<th colspan="4">Analis Kepegawaian</th>
					<th rowspan="2">Jumlah Analis Kepegawaian</th>
					<th colspan="4">Statistisi</th>
					<th rowspan="2">Jumlah Statistisi</th>
					<th colspan="4">Arsiparis</th>
					<th rowspan="2">Jumlah Arsiparis</th>
					<th colspan="4">Perencana Perundang-undangan</th>
					<th rowspan="2">Jumlah Perencana Perundang-undangan</th>
					<th rowspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th>Terampil</th>
					<th>Calon Terampil</th>
					<th>Ahli</th>
					<th>Calon Ahli</th>
					<th>Terampil</th>
					<th>Calon Terampil</th>
					<th>Ahli</th>
					<th>Calon Ahli</th>
					<th>Terampil</th>
					<th>Calon Terampil</th>
					<th>Ahli</th>
					<th>Calon Ahli</th>
					<th>Terampil</th>
					<th>Calon Terampil</th>
					<th>Ahli</th>
					<th>Calon Ahli</th>
					<th>Terampil</th>
					<th>Calon Terampil</th>
					<th>Ahli</th>
					<th>Calon Ahli</th>
					<th>Terampil</th>
					<th>Calon Terampil</th>
					<th>Ahli</th>
					<th>Calon Ahli</th>
					<th>Terampil</th>
					<th>Calon Terampil</th>
					<th>Ahli</th>
					<th>Calon Ahli</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array_record as $key => $row) { ?>
				<tr class="<?php echo (($key % 2) == 0) ? 'even' : 'odd'; ?> gradeA">
					<td class="center"><?php echo $row['polhut_terampil']; ?></td>
					<td class="center"><?php echo $row['polhut_calon_terampil']; ?></td>
					<td class="center"><?php echo $row['polhut_ahli']; ?></td>
					<td class="center"><?php echo $row['polhut_calon_ahli']; ?></td>
					<td class="center"><?php echo $row['polhut_total']; ?></td>
					<td class="center"><?php echo $row['peh_terampil']; ?></td>
					<td class="center"><?php echo $row['peh_calon_terampil']; ?></td>
					<td class="center"><?php echo $row['peh_ahli']; ?></td>
					<td class="center"><?php echo $row['peh_calon_ahli']; ?></td>
					<td class="center"><?php echo $row['peh_total']; ?></td>
					<td class="center"><?php echo $row['pranata_terampil']; ?></td>
					<td class="center"><?php echo $row['pranata_calon_terampil']; ?></td>
					<td class="center"><?php echo $row['pranata_ahli']; ?></td>
					<td class="center"><?php echo $row['pranata_calon_ahli']; ?></td>
					<td class="center"><?php echo $row['pranata_total']; ?></td>
					<td class="center"><?php echo $row['analis_terampil']; ?></td>
					<td class="center"><?php echo $row['analis_calon_terampil']; ?></td>
					<td class="center"><?php echo $row['analis_ahli']; ?></td>
					<td class="center"><?php echo $row['analis_calon_ahli']; ?></td>
					<td class="center"><?php echo $row['analis_total']; ?></td>
					<td class="center"><?php echo $row['statistisi_terampil']; ?></td>
					<td class="center"><?php echo $row['statistisi_calon_terampil']; ?></td>
					<td class="center"><?php echo $row['statistisi_ahli']; ?></td>
					<td class="center"><?php echo $row['statistisi_calon_ahli']; ?></td>
					<td class="center"><?php echo $row['statistisi_total']; ?></td>
					<td class="center"><?php echo $row['arsiparis_terampil']; ?></td>
					<td class="center"><?php echo $row['arsiparis_calon_terampil']; ?></td>
					<td class="center"><?php echo $row['arsiparis_ahli']; ?></td>
					<td class="center"><?php echo $row['arsiparis_calon_ahli']; ?></td>
					<td class="center"><?php echo $row['arsiparis_total']; ?></td>
					<td class="center"><?php echo $row['perencana_terampil']; ?></td>
					<td class="center"><?php echo $row['perencana_calon_terampil']; ?></td>
					<td class="center"><?php echo $row['perencana_ahli']; ?></td>
					<td class="center"><?php echo $row['perencana_calon_ahli']; ?></td>
					<td class="center"><?php echo $row['perencana_total']; ?></td>
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
		
		<div class="label">Polhut</div>
		<div class="clear"></div>
		<div class="label">- Terampil</div>
		<div class="input"><input type="text" name="polhut_terampil" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon Terampil</div>
		<div class="input"><input type="text" name="polhut_calon_terampil" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Ahli</div>
		<div class="input"><input type="text" name="polhut_ahli" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon Ahli</div>
		<div class="input"><input type="text" name="polhut_calon_ahli" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">PEH</div>
		<div class="clear"></div>
		<div class="label">- Terampil</div>
		<div class="input"><input type="text" name="peh_terampil" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon Terampil</div>
		<div class="input"><input type="text" name="peh_calon_terampil" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Ahli</div>
		<div class="input"><input type="text" name="peh_ahli" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon Ahli</div>
		<div class="input"><input type="text" name="peh_calon_ahli" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Pranata Komputer</div>
		<div class="clear"></div>
		<div class="label">- Terampil</div>
		<div class="input"><input type="text" name="pranata_terampil" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon Terampil</div>
		<div class="input"><input type="text" name="pranata_calon_terampil" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Ahli</div>
		<div class="input"><input type="text" name="pranata_ahli" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon Ahli</div>
		<div class="input"><input type="text" name="pranata_calon_ahli" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Analis Kepegawaian</div>
		<div class="clear"></div>
		<div class="label">- Terampil</div>
		<div class="input"><input type="text" name="analis_terampil" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon Terampil</div>
		<div class="input"><input type="text" name="analis_calon_terampil" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Ahli</div>
		<div class="input"><input type="text" name="analis_ahli" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon Ahli</div>
		<div class="input"><input type="text" name="analis_calon_ahli" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Statistisi</div>
		<div class="clear"></div>
		<div class="label">- Terampil</div>
		<div class="input"><input type="text" name="statistisi_terampil" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon Terampil</div>
		<div class="input"><input type="text" name="statistisi_calon_terampil" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Ahli</div>
		<div class="input"><input type="text" name="statistisi_ahli" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon Ahli</div>
		<div class="input"><input type="text" name="statistisi_calon_ahli" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Arsiparis</div>
		<div class="clear"></div>
		<div class="label">- Terampil</div>
		<div class="input"><input type="text" name="arsiparis_terampil" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon Terampil</div>
		<div class="input"><input type="text" name="arsiparis_calon_terampil" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Ahli</div>
		<div class="input"><input type="text" name="arsiparis_ahli" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon Ahli</div>
		<div class="input"><input type="text" name="arsiparis_calon_ahli" class="short" /></div>
		<div class="clear"></div>
		
		<div class="label">Perencana Perundang-undangan</div>
		<div class="clear"></div>
		<div class="label">- Terampil</div>
		<div class="input"><input type="text" name="perencana_terampil" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon Terampil</div>
		<div class="input"><input type="text" name="perencana_calon_terampil" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Ahli</div>
		<div class="input"><input type="text" name="perencana_ahli" class="short" /></div>
		<div class="clear"></div>
		<div class="label">- Calon Ahli</div>
		<div class="input"><input type="text" name="perencana_calon_ahli" class="short" /></div>
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