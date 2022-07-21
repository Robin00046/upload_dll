
    <div class="container-fluid">
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <!-- tambahi class container biar pas tabelnya -->
                    <div class="container">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <?= $this->session->flashdata('notif') ?>
                            <a href="<?php echo base_url() . 'aktanotaris/input_aktanotaris'  ?>" class="btn btn-success"'><i class="fa fa-plus"></i> Tambah Data</a>
                            <thead>
                                <tr>
                                    <td>no</td>
                                    <td>no_aktanotaris</td>
                                    <td>tanggal</td>
                                    <td>jenis aktanotaris</td>
                                    <td>nama_penghadap</td>
                                    <td>keterangan</td>
                                    <td>user</td>
                                    <td>upload</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                                <?php
                                    $no = 1;
                                    foreach ($tbl_aktanotaris as $akn) : 
                                        $tanggal = date('d-m-Y', strtotime($akn->tanggal)); ?>
                                <tr>
                                    

                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $akn->no_aktanotaris; ?></td>
                                        <td><?php echo $tanggal; ?></td>
                                        <td><?php echo $akn->jenis_aktanotaris; ?></td>

                                        <td><?php echo $akn->nama_penghadap; ?></td>
                                        <td><?php echo $akn->keterangan; ?></td>
                                        <td><?php echo $akn->nama_user; ?></td>

                                        <td><a href="<?php echo base_url('upload/aktanotaris/' . $akn->upload_file); ?>" class="btn btn-danger">Download</a></td>

                                        <td>
                                            <a class="btn btn-warning" href="<?php echo base_url() . 'aktanotaris/edit_aktanotaris/' . $akn->id_aktanotaris  ?>"><i class=" fa fa-edit"></i></a>
                                            <a class="btn btn-danger" onclick="deleteConfirm(' <?php echo base_url('aktanotaris/hapus/' . $akn->id_aktanotaris) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                            </td>
                            </tr>
                        <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
