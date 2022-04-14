
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Surat Masuk</title>
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
					foreach($edit_surat_masuk as $esm):
						$no = $esm->no;
					endforeach;
					?>
					<form method="post" action="<?=base_url('Admin/proses_edit_surat_masuk')?>" autocomplete="off">
					<input type="hidden" name="no" value="<?= $no ?>">
						
						
                        
						</div>
						<div class="form-group col-lg-12">
							<label>Tanggal Terima : </label>
                            <input type="date" name="tanggal_terima" id="tanggal_terima" class="form-control" value="<?= $esm->tanggal_terima ?>">
						</div>
							<div class="form-group col-lg-12">
							<label>Nomor Surat : </label>
  							<input type="text" name="nomor_surat" id="nomor_surat" class="form-control" value="<?= $esm->nomor_surat ?>">	
				        </div>
						<div class="form-group col-lg-12">
							<label>Tanggal Surat : </label>
                            <input type="date" name="tanggal_surat" id="tanggal_suratl" class="form-control" value="<?= $esm->tanggal_surat ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Isi Ringkas  : </label>
                            <textarea name="isi_ringkas" id="isi_ringkas" cols="30" rows="7" class="form-control"><?= $esm->isi_ringkas ?></textarea>					
						</div>
						<div class="form-group col-lg-12">
							<label>Pengirim :  </label>
                            <input type="text" name="pengirim" id="pengirim" class="form-control" value="<?= $esm->pengirim ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Penerima :  </label>
                            <input type="text" name="penerima" id="penerima" class="form-control" value="<?= $esm->penerima ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Keterangan :</label>
							<textarea name="keterangan" id="keterangan" cols="30" rows="4" class="form-control"><?= $esm->keterangan ?></textarea>		
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
