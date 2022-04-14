
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-info">Data Surat Masuk
                        </h6>
                            <a href="<?= base_url('Admin/tambah_surat_masuk')?>">
 				        <button class="btn btn-sm btn-info float-right" type="">
                     <i class="fas fa-plus fa-sm"></i> Tambah Data</button></a></h6>
                     </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center"  id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Terima</th>
                                            <th>Nomor Surat</th>
                                            <th>Tanggal Surat</th>
                                            <th>Isi Ringkas</th>
                                            <th>pengirim</th>
                                            <th>penerima</th>
                                            <th>Keterangan</th>
                                            <th>aksi</th>
                                        </tr>
                                     </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($data_surat_masuk as $dsm):?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?= $dsm->tanggal_terima ?></td>
                                            <td><?= $dsm->nomor_surat ?></td>
                                            <td><?= $dsm->tanggal_surat ?></td>
                                            <td><?= $dsm->isi_ringkas ?></td>
                                            <td><?= $dsm->pengirim ?></td>
                                            <td><?= $dsm->penerima ?></td>
                                            <td><?= $dsm->keterangan ?></td>
                                            <td>
                                                <a href="<?= base_url('Admin/edit_surat/'.$dsm-> no)?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                                                <a href="<?= base_url('Admin/hapus_surat/'.$dsm-> no)?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
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
