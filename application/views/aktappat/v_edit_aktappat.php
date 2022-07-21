<?php if ($this->session->userdata('id_jenis_user') == '1') { ?>

    <body>
        <div class="container" style="background-color:#52658f;">
            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <h3 style="text-align: center;">Edit data Akta PPAT</h3>
                            <table style="width: 100%;">
                                <?php foreach ($tbl_aktappat as $aktapp) : ?>
                                    <form method="post" action="<?php echo base_url('aktappat/update_aktappat') ?>" enctype="multipart/form-data">
                                        <tr>
                                            <td><input style="width: 100%;" type="Hidden" name="id_aktappat" value="<?php echo $aktapp->id_aktappat ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>No akta ppat</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="no_aktappat" value="<?php echo $aktapp->no_aktappat ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>tanggal</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="date" name="tanggal" value="<?php echo $aktapp->tanggal ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>jenis aktappat</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="jenis_aktappat" value="<?php echo $aktapp->jenis_aktappat ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Pihak 1</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="pihak1" value="<?php echo $aktapp->pihak1 ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Pihak 2</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="pihak2" value="<?php echo $aktapp->pihak2 ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="keterangan" value="<?php echo $aktapp->keterangan ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>User</td>
                                            <td>:</td>
                                            <td>
                                                <select class="form-control" name="id_user">
                                                    <option value="<?php echo $aktapp->id_user ?>" ?><?= $aktapp->nama_user ?></option>
                                                    <?php
                                                    foreach ($nama_user as $each) { ?>
                                                        <option value="<?= $each->id_user ?>"><?= $each->nama_user ?></option>
                                                    <?php }
                                                    ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>upload_file</td>
                                            <td>:</td>
                                            <td><input type="file" name="upload_file" value="<?php echo $aktapp->upload_file ?>"></td>
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
                            <h3 style="text-align: center;">Edit data Akta PPAT</h3>
                            <table style="width: 100%;">
                                <?php foreach ($tbl_aktappat as $aktapp) : ?>
                                    <form method="post" action="<?php echo base_url('aktappat/update_aktappat') ?>" enctype="multipart/form-data">
                                        <tr>
                                            <td><input style="width: 100%;" type="Hidden" name="id_aktappat" value="<?php echo $aktapp->id_aktappat ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>No akta ppat</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="no_aktappat" value="<?php echo $aktapp->no_aktappat ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>tanggal</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="date" name="tanggal" value="<?php echo $aktapp->tanggal ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>jenis aktappat</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="jenis_aktappat" value="<?php echo $aktapp->jenis_aktappat ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Pihak 1</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="pihak1" value="<?php echo $aktapp->pihak1 ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Pihak 2</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="pihak2" value="<?php echo $aktapp->pihak2 ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="keterangan" value="<?php echo $aktapp->keterangan ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>User</td>
                                            <td>:</td>
                                            <td>
                                                <select class="form-control" name="id_user">
                                                    <option value="<?php echo $aktapp->id_user ?>" ?><?= $aktapp->nama_user ?>
                                                    </option>
                                                    <option value="4">Staff PPAT</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>upload_file</td>
                                            <td>:</td>
                                            <td><input type="file" name="upload_file" value="<?php echo $aktapp->upload_file ?>"></td>
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