    <div class="container-fluid">
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <div class="container">
                        <?= $this->session->flashdata('notif') ?>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <a href="<?php echo base_url() . 'aktappat/input_aktappat'  ?>" class="btn btn-success"'><i class="fa fa-plus"></i> Tambah Data</a>
                <thead>
                    <tr>
                        <td>No</td>
                        <td>No Aktappat</td>
                        <td>Tanggal</td>
                        <td>Jenis Akta ppat</td>
                        <td>Pihak 1</td>
                        <td>Pihak 2</td>
                        <td>Keterangan</td>
                        <td>User</td>
                        <td>Upload File</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <?php
                $no = 1;
                foreach ($tbl_aktappat as $aktappat) :
                $tanggal = date('d-m-Y', strtotime($aktappat->tanggal)); ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $aktappat->no_aktappat; ?></td>
                        <td><?php echo $tanggal; ?></td>
                        <td><?php echo $aktappat->jenis_aktappat; ?></td>
                        <td><?php echo $aktappat->pihak1; ?></td>
                        <td><?php echo $aktappat->pihak2; ?></td>
                        <td><?php echo $aktappat->keterangan; ?></td>
                        <td><?php echo $aktappat->nama_user; ?></td>
                        <td><a href="<?php echo base_url('upload/aktappat/' . $aktappat->upload_file); ?>" class="btn btn-danger">Download</a></td>
                        <td>
                            <a class="btn btn-warning" href="<?php echo base_url() . 'aktappat/edit_aktappat/' . $aktappat->id_aktappat  ?>"><i class=" fa fa-edit"></i></a>
                            <a class="btn btn-danger" onclick="deleteConfirm(' <?php echo base_url('aktappat/hapus/' . $aktappat->id_aktappat) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                            </td>
                            </tr>
                        <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>