<body>

    <div class="container-fluid">
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <!-- tambahi class container biar pas tabelnya -->
                    <div class="container">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <?= $this->session->flashdata('notif') ?>
                            <a href="<?php echo base_url() . 'user/input_user'  ?>" class="btn btn-success"'><i class="fa fa-plus"></i> Tambah Data</a>
                            <thead>
                                <tr>
                                    <td>Id User</td>
                                    <td>Username</td>
                                    <td>Nama User</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $no = 1;
                                    foreach ($tbl_user as $akn) : ?>

                                        <td><?php echo $akn->id_user; ?></td>
                                        <td><?php echo $akn->username; ?></td>
                                        <td><?php echo $akn->nama_user; ?></td>
                                        <td>
                                            <a class="btn btn-warning" href="<?php echo base_url() . 'user/edit_user/' . $akn->id_user  ?>"><i class=" fa fa-edit"></i>Ganti Password</a>
                                            <a class="btn btn-danger" onclick="deleteConfirm(' <?php echo base_url('user/hapus/' . $akn->id_user) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i>Hapus</a>
                            </td>
                            </tr>
                            </tbody>
                        <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>