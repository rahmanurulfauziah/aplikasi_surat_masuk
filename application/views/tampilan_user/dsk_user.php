
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-info">Data Surat Keluar
                        </h6>
                    </div >
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
                                        </tr>
                                        <?php endforeach ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
