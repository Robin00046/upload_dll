<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="container">
                        <?= $this->session->flashdata('notif') ?>
                        <table class="table table-bordered" id="dataTable" id="#example" width="100%" cellspacing="0">
                            <a href="<?php echo base_url() . 'surat/input_surat'  ?>" class="btn btn-success"'><i class="fa fa-plus"></i> Tambah Data</a>
                            <thead>
                                <tr>
                                    <td>no</td>
                                    <td>No Surat </td>
                                    <td>Jenis Surat</td>
                                    <td>Tanggal</td>
                                    <td>Perihal</td>
                                    <td>Pengirim</td>
                                    <td>Penerima</td>
                                    <td>User</td>
                                    <td>Upload</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                                
                                    <?php
                                    $no = 1;
                                    foreach ($tbl_surat as $surat) : ?>
<tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $surat->no_surat; ?></td>
                                        <td><?php echo $surat->nama_surat; ?></td>
                                        <td><?php echo $surat->tanggal; ?></td>
                                        <td><?php echo $surat->perihal; ?></td>
                                        <td><?php echo $surat->pengirim; ?></td>
                                        <td><?php echo $surat->penerima; ?></td>
                                        <td><?php echo $surat->nama_user; ?></td>
                                        <td><a href="<?php echo base_url('upload/surat/' . $surat->upload_file); ?>" class="btn btn-danger">Download</a></td>
                                        <td>
                                            <a class="btn btn-warning" href="<?php echo base_url() . 'surat/edit_surat/' . $surat->id_surat  ?>"><i class=" fa fa-edit"></i></a>
                                            <a class="btn btn-danger" onclick="deleteConfirm(' <?php echo base_url('surat/hapus/' . $surat->id_surat) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                            </td>
                            </tr>
                        <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>