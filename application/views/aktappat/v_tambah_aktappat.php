<?php if ($this->session->userdata('id_jenis_user') == '1') { ?>

    <body>
        <div class="container" style="background-color:#52658f;">
            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <h3 style="text-align: center;">Input Data Akta PPAT</h3>

                            <table style="width: 100%;">
                                <form method="post" action="<?php echo base_url('aktappat/tambah_aksi') ?>" enctype="multipart/form-data">
                                    <tr>
                                        <td><input style="width: 100%;" type="Hidden" name="id_aktappat"></td>
                                    </tr>
                                    <tr>
                                        <td>No Akta ppat</td>
                                        <td>:</td>
                                        <td><input style="width: 100%;" type="text" name="no_aktappat" required></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>:</td>
                                        <td><input style="width: 100%;" type="date" name="tanggal"></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Akta PPAT</td>
                                        <td>:</td>
                                        <td><input style="width: 100%;" type="text" name="jenis_aktappat"></td>
                                    </tr>
                                    <tr>
                                        <td>Pihak 1</td>
                                        <td>:</td>
                                        <td><input style="width: 100%;" type="text" name="pihak1"></td>
                                    </tr>
                                    <tr>
                                        <td>Pihak 2</td>
                                        <td>:</td>
                                        <td><input style="width: 100%;" type="text" name="pihak2"></td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td><input style="width: 100%;" type="text" name="keterangan"></td>
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
<?php } elseif ($this->session->userdata('id_jenis_user') == '3') { ?>

    <body>
        <div class="container" style="background-color:#52658f;">
            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <h3 style="text-align: center;">Input Data Akta PPAT</h3>

                            <table style="width: 100%;">
                                <form method="post" action="<?php echo base_url('aktappat/tambah_aksi') ?>" enctype="multipart/form-data">
                                    <tr>
                                        <td><input style="width: 100%;" type="Hidden" name="id_aktappat"></td>
                                    </tr>
                                    <tr>
                                        <td>No Akta ppat</td>
                                        <td>:</td>
                                        <td><input style="width: 100%;" type="text" name="no_aktappat" required></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>:</td>
                                        <td><input style="width: 100%;" type="date" name="tanggal"></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Akta PPAT</td>
                                        <td>:</td>
                                        <td><input style="width: 100%;" type="text" name="jenis_aktaPPAT"></td>
                                    </tr>
                                    <tr>
                                        <td>Pihak 1</td>
                                        <td>:</td>
                                        <td><input style="width: 100%;" type="text" name="pihak1"></td>
                                    </tr>
                                    <tr>
                                        <td>Pihak 2</td>
                                        <td>:</td>
                                        <td><input style="width: 100%;" type="text" name="pihak2"></td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td><input style="width: 100%;" type="text" name="keterangan"></td>
                                    </tr>
                                    <tr>
                                        <td>User</td>
                                        <td>:</td>
                                        <td><select class="form-control" name="id_user">
                                                <option value="3">Staff PPAT</option>
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