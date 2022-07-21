<?php if ($this->session->userdata('id_jenis_user') == '1') { ?>

    <body>
        <div class="container" style="background-color:#52658f;">
            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <h1 style="text-align: center;">Edit Data Surat</h1>
                            <table style="width:100%">
                                <?php foreach ($tbl_surat as $surat) : ?>
                                    <form method="post" action="<?php echo base_url('surat/update_surat') ?>" enctype="multipart/form-data">
                                        <tr>
                                            <td><input style="width:100%" type="Hidden" name="id_surat" value="<?php echo $surat->id_surat ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>No Surat</td>
                                            <td>:</td>
                                            <td><input style="width:100%" type="text" name="no_surat" value="<?php echo $surat->no_surat ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Surat</td>
                                            <td>:</td>
                                            <td><select class="form-control" name="id_jenis_surat">
                                                    <?php
                                                    foreach ($nama_surat as $each) { ?>
                                                        <option value="<?= $each->id_jenis_surat ?>"><?= $each->nama_surat ?></option>
                                                    <?php }
                                                    ?>
                                            </td>
                                            </select>
                                        </tr>
                                        <tr>
                                            <td>tanggal</td>
                                            <td>:</td>
                                            <td><input style="width:100%" type="date" name="tanggal" value="<?php echo $surat->tanggal ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>perihal</td>
                                            <td>:</td>
                                            <td><input style="width:100%" type="text" name="perihal" value="<?php echo $surat->perihal ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>pengirim</td>
                                            <td>:</td>
                                            <td><input style="width:100%" type="text" name="pengirim" value="<?php echo $surat->pengirim ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>penerima</td>
                                            <td>:</td>
                                            <td><input style="width:100%" type="text" name="penerima" value="<?php echo $surat->penerima ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>User</td>
                                            <td>:</td>
                                            <td><select class="form-control" name="id_user">
                                                    <option value="<?php echo $surat->id_user ?>" ?><?= $surat->nama_user ?>
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
                            <h1 style="text-align: center;">Edit Data Surat</h1>
                            <table style="width:100%">
                                <?php foreach ($tbl_surat as $surat) : ?>
                                    <form method="post" action="<?php echo base_url('surat/update_surat') ?>" enctype="multipart/form-data">
                                        <tr>
                                            <td><input style="width:100%" type="Hidden" name="id_surat" value="<?php echo $surat->id_surat ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>No Surat</td>
                                            <td>:</td>
                                            <td><input style="width:100%" type="text" name="no_surat" value="<?php echo $surat->no_surat ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Surat</td>
                                            <td>:</td>
                                            <td><select class="form-control" name="id_jenis_surat">
                                                    <?php
                                                    foreach ($nama_surat as $each) { ?>
                                                        <option value="<?= $each->id_jenis_surat ?>"><?= $each->nama_surat ?></option>
                                                    <?php }
                                                    ?>
                                            </td>
                                            </select>
                                        </tr>
                                        <tr>
                                            <td>tanggal</td>
                                            <td>:</td>
                                            <td><input style="width:100%" type="date" name="tanggal" value="<?php echo $surat->tanggal ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>perihal</td>
                                            <td>:</td>
                                            <td><input style="width:100%" type="text" name="perihal" value="<?php echo $surat->perihal ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>pengirim</td>
                                            <td>:</td>
                                            <td><input style="width:100%" type="text" name="pengirim" value="<?php echo $surat->pengirim ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>penerima</td>
                                            <td>:</td>
                                            <td><input style="width:100%" type="text" name="penerima" value="<?php echo $surat->penerima ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>User</td>
                                            <td>:</td>
                                            <td><select class="form-control" name="id_user">
                                                    <option value="<?php echo $surat->id_user ?>" ?><?= $surat->nama_user ?>
                                                    </option>
                                                    <option value="3">Staff surataris</option>
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

<?php } elseif ($this->session->userdata('id_jenis_user') == '3') { ?>

    <body>
        <div class="container" style="background-color:#52658f;">
            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <h1 style="text-align: center;">Edit Data Surat</h1>
                            <table style="width:100%">
                                <?php foreach ($tbl_surat as $surat) : ?>
                                    <form method="post" action="<?php echo base_url('surat/update_surat') ?>" enctype="multipart/form-data">
                                        <tr>
                                            <td><input style="width:100%" type="Hidden" name="id_surat" value="<?php echo $surat->id_surat ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>No Surat</td>
                                            <td>:</td>
                                            <td><input style="width:100%" type="text" name="no_surat" value="<?php echo $surat->no_surat ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Surat</td>
                                            <td>:</td>
                                            <td><select class="form-control" name="id_jenis_surat">
                                                    <?php
                                                    foreach ($nama_surat as $each) { ?>
                                                        <option value="<?= $each->id_jenis_surat ?>"><?= $each->nama_surat ?></option>
                                                    <?php }
                                                    ?>
                                            </td>
                                            </select>
                                        </tr>
                                        <tr>
                                            <td>tanggal</td>
                                            <td>:</td>
                                            <td><input style="width:100%" type="date" name="tanggal" value="<?php echo $surat->tanggal ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>perihal</td>
                                            <td>:</td>
                                            <td><input style="width:100%" type="text" name="perihal" value="<?php echo $surat->perihal ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>pengirim</td>
                                            <td>:</td>
                                            <td><input style="width:100%" type="text" name="pengirim" value="<?php echo $surat->pengirim ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>penerima</td>
                                            <td>:</td>
                                            <td><input style="width:100%" type="text" name="penerima" value="<?php echo $surat->penerima ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>User</td>
                                            <td>:</td>
                                            <td><select class="form-control" name="id_user">
                                                    <option value="<?php echo $surat->id_user ?>" ?><?= $surat->nama_user ?>
                                                    </option>
                                                    <option value="4">Staff PPAT</option>
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