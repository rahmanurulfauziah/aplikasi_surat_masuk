
              
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-info">Data Surat Masuk
                        </h6>
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
                                            <th>Dari</th>
                                            <th>Kepada</th>
                                            <th>Keterangan</th>
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
                                            <td><?= $dsm->dari ?></td>
                                            <td><?= $dsm->kepada ?></td>
                                            <td><?= $dsm->keterangan ?></td>
                                        </tr>
                                        <?php endforeach ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
