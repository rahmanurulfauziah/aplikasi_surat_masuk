
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Surat Keluar</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Data</h1>


	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<?php
					foreach($edit_surat_keluar as $esk):
						$no = $esk->no;
					endforeach;
					?>
					<form method="post" action="<?=base_url('Admin/proses_edit_surat_keluar')?>" autocomplete="off">
					<input type="hidden" name="no" value="<?= $no ?>">
						
						
                        
						</div>
						<div class="form-group col-lg-12">
							<label>Tanggal : </label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $esk->tanggal ?>">
						</div>
							<div class="form-group col-lg-12">
							<label>Nomor Surat : </label>
  							<input type="text" name="nomor_surat" id="nomor_surat" class="form-control" value="<?= $esk->nomor_surat ?>">	
				</div>
						<div class="form-group col-lg-12">
							<label>Ditujukan Kepada : </label>
                            <input type="text" name="ditujukan_kepada" id="ditujukan_kepada" class="form-control" value="<?= $esk->ditujukan_kepada ?>">						
						</div>
						<div class="form-group col-lg-12">
							<label>Perihal : </label>
							<textarea name="perihal" id="perihal" cols="30" rows="7" class="form-control" > <?= $esk->perihal ?></textarea>
						</div>
						<div class="form-group col-lg-12">
							<label>Keterangan  : </label>
							<textarea name="keterangan" id="keterangan" cols="30" rows="4" class="form-control" > <?= $esk->perihal ?></textarea>
						</div>
					

						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat">
								<i class="fa fa-pencil"></i> Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
				</div>
			</div>
			<br>
			<br>
		</div>
				</div>
	</div>

</div>
	
