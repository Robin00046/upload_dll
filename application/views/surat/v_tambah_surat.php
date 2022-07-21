<?php if ($this->session->userdata('id_jenis_user') == '1') { ?>

    <body>
        <div class="container" style="background-color:#52658f;">
            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <h3 style="text-align: center;">Input Data Surat</h3>

                            <table style="width:100%">
                                <form method="post" action="<?php echo base_url('surat/tambah_aksi') ?>" enctype="multipart/form-data">
                                    <tr>
                                        <td>No Surat </td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="text" name="no_surat" required></td>
                                    </tr>
                                    <tr>
                                        <td>Id Jenis Surat</td>
                                        <td>:</td>
                                        <td><select class="form-control" name="id_jenis_surat">
                                                <?php
                                                foreach ($nama_surat as $each) { ?>
                                                    <option value="<?= $each->id_jenis_surat ?>"><?= $each->nama_surat ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>perihal</td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="text" name="perihal"></td>
                                    </tr>
                                    <tr>
                                        <td>pengirim</td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="text" name="pengirim"></td>
                                    </tr>
                                    <tr>
                                        <td>penerima</td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="text" name="penerima"></td>
                                    </tr>
                                    <tr>
                                        <td>tanggal</td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="date" name="tanggal"></td>
                                    </tr>
                                    <tr>
                                        <td>User</td>
                                        <td>:</td>
                                        <td><select class="form-control" name="id_user">
                                                <option value="1">Notaris/PPAT</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Upload File</td>
                                        <td>:</td>
                                        <td><input type="file" name="upload_file" required></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" value="SIMPAN"></td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php } elseif ($this->session->userdata('id_jenis_user') == '2') { ?>

    <body>
        <div class="container" style="background-color:#52658f;">
            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <h3 style="text-align: center;">Input Data Surat</h3>

                            <table style="width:100%">
                                <form method="post" action="<?php echo base_url('surat/tambah_aksi') ?>" enctype="multipart/form-data">
                                    <tr>
                                        <td>No Surat </td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="text" name="no_surat" required></td>
                                    </tr>
                                    <tr>
                                        <td>Id Jenis Surat</td>
                                        <td>:</td>
                                        <td><select class="form-control" name="id_jenis_surat">
                                                <?php
                                                foreach ($nama_surat as $each) { ?>
                                                    <option value="<?= $each->id_jenis_surat ?>"><?= $each->nama_surat ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>perihal</td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="text" name="perihal"></td>
                                    </tr>
                                    <tr>
                                        <td>pengirim</td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="text" name="pengirim"></td>
                                    </tr>
                                    <tr>
                                        <td>penerima</td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="text" name="penerima"></td>
                                    </tr>
                                    <tr>
                                        <td>tanggal</td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="date" name="tanggal"></td>
                                    </tr>
                                    <tr>
                                        <td>User</td>
                                        <td>:</td>
                                        <td><select class="form-control" name="id_user">
                                                <option value="3">Staff Akta Notaris</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Upload File</td>
                                        <td>:</td>
                                        <td><input type="file" name="upload_file" required></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" value="SIMPAN"></td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php } elseif ($this->session->userdata('id_jenis_user') == '3') { ?>

    <body>
        <div class="container" style="background-color:#52658f;">
            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <h3 style="text-align: center;">Input Data Surat</h3>

                            <table style="width:100%">
                                <form method="post" action="<?php echo base_url('surat/tambah_aksi') ?>" enctype="multipart/form-data">
                                    <tr>
                                        <td>No Surat </td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="text" name="no_surat" required></td>
                                    </tr>
                                    <tr>
                                        <td>Id Jenis Surat</td>
                                        <td>:</td>
                                        <td><select class="form-control" name="id_jenis_surat">
                                                <?php
                                                foreach ($nama_surat as $each) { ?>
                                                    <option value="<?= $each->id_jenis_surat ?>"><?= $each->nama_surat ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>perihal</td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="text" name="perihal"></td>
                                    </tr>
                                    <tr>
                                        <td>pengirim</td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="text" name="pengirim"></td>
                                    </tr>
                                    <tr>
                                        <td>penerima</td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="text" name="penerima"></td>
                                    </tr>
                                    <tr>
                                        <td>tanggal</td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="date" name="tanggal"></td>
                                    </tr>
                                    <tr>
                                        <td>User</td>
                                        <td>:</td>
                                        <td><select class="form-control" name="id_user">
                                                <option value="4">Staff PPAT</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Upload File</td>
                                        <td>:</td>
                                        <td><input type="file" name="upload_file" required></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" value="SIMPAN"></td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php } ?>