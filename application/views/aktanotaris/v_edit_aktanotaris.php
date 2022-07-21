<?php if ($this->session->userdata('id_jenis_user') == '1') { ?>

    <body>
        <div class="container" style="background-color:#52658f;">
            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <h1>Edit aktanotaris</h1>
                            <table style="width: 100%;">
                                <?php foreach ($tbl_aktanotaris as $aktanot) : ?>
                                    <form method="post" action="<?php echo base_url('aktanotaris/update_aktanotaris/' . $aktanot->id_aktanotaris) ?>" enctype="multipart/form-data">
                                        <tr>
                                            <td><input style="width: 100%;" type="Hidden" name="id_aktanotaris" value="<?php echo $aktanot->id_aktanotaris ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>no aktanotaris</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="no_aktanotaris" value="<?php echo $aktanot->no_aktanotaris ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>jenis aktanotaris</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="jenis_aktanotaris" value="<?php echo $aktanot->jenis_aktanotaris ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Penghadap</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="nama_penghadap" value="<?php echo $aktanot->nama_penghadap ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>tanggal</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="date" name="tanggal" value="<?php echo $aktanot->tanggal ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="keterangan" value="<?php echo $aktanot->keterangan ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>user</td>
                                            <td>:</td>
                                            <td>
                                                <select class="form-control" name="id_user">
                                                    <option value="<?php echo $aktanot->id_user ?>" ?><?= $aktanot->nama_user ?>
                                                    </option>
                                                    <option value="1">Notaris/PPAT</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>upload_file</td>
                                            <td>:</td>
                                            <td><input type="file" name="upload_file"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="submit" value="SIMPAN"></td>
                                        </tr>
                                    </form>
                                <?php endforeach; ?>
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
                            <h1>Edit aktanotaris</h1>
                            <table style="width: 100%;">
                                <?php foreach ($tbl_aktanotaris as $aktanot) : ?>
                                    <form method="post" action="<?php echo base_url('aktanotaris/update_aktanotaris/' . $aktanot->no_aktanotaris) ?>" enctype="multipart/form-data">
                                        <tr>
                                            <td><input style="width: 100%;" type="Hidden" name="id_aktanotaris" value="<?php echo $aktanot->id_aktanotaris ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>no aktanotaris</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="no_aktanotaris" value="<?php echo $aktanot->no_aktanotaris ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>jenis aktanotaris</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="jenis_aktanotaris" value="<?php echo $aktanot->jenis_aktanotaris ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Penghadap</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="nama_penghadap" value="<?php echo $aktanot->nama_penghadap ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>tanggal</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="date" name="tanggal" value="<?php echo $aktanot->tanggal ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="keterangan" value="<?php echo $aktanot->keterangan ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>user</td>
                                            <td>:</td>
                                            <td>
                                                <select class="form-control" name="id_user">
                                                    <option value="<?php echo $aktanot->id_user ?>" ?><?= $aktanot->nama_user ?>
                                                    </option>
                                                    <option value="3">Staff Aktanotaris</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>upload_file</td>
                                            <td>:</td>
                                            <td><input type="file" name="upload_file"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="submit" value="SIMPAN"></td>
                                        </tr>
                                    </form>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php } ?>