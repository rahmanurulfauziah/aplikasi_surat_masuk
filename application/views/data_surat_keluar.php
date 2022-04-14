
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-info">Data Surat Keluar
                        </h6>
                            <a href="<?= base_url('Admin/tambah_surat_keluar')?>">
 				        <button class="btn btn-sm btn-info float-right" type="">
                     <i class="fas fa-plus fa-sm"></i> Tambah Data</button></a></h6>

                            <a href="<?= base_url('Admin/buat_surat')?>">
 				        <button class="btn btn-sm btn-info float-right" type="">
                     <i class="fas fa-plus fa-sm"></i> Buat Surat</button></a></h6>
                        </div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center"  id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nomor Surat</th>
                                            <th>Ditujukan Kepada</th>
                                            <th>Perihal</th>
                                            <th>Keterangan</th>
                                            <th>Gambar</th>
                                            <th>aksi</th>
                                        </tr>
                                     </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($data_surat_keluar as $dsk):?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?= $dsk->tanggal ?></td>
                                            <td><?= $dsk->nomor_surat ?></td>
                                            <td><?= $dsk->ditujukan_kepada ?></td>
                                            <td><?= $dsk->perihal ?></td>
                                            <td><?= $dsk->keterangan ?></td>
                                            <td><img src="<? . '/gambar/' . $dsk['gambar']; ?>" width ="100"></td>
                                            <td>
                                                <a href="<?= base_url('Admin/edit_surat_data_keluar/'.$dsk-> no)?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                                                <a href="<?= base_url('Admin/hapus_data_surat/'.$dsk-> no)?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
                                            </td>
                                        </tr>
                                        <?php endforeach ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
