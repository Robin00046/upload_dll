    <body>

        <div class="container" style="background-color:#52658f;">
            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <h3 style="text-align: center ;">Input Data User</h3>
                            <table style="width: 100%;">
                                <form method="post" action="<?php echo base_url('user/tambah_aksi') ?>" enctype="multipart/form-data">
                                    <tr>
                                        <td><input style="width:100%" type="Hidden" name="id_user" required></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="text" name="username"></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>:</td>
                                        <td><input style="width:100%" type="password" name="password"></td>
                                    </tr>
                                    <tr>
                                        <td>Id Jenis User</td>
                                        <td>:</td>
                                        <td><select class="form-control" name="id_jenis_user">
                                                <option value="1">Notaris/PPAT</option>
                                                <option value="2">Staff Akta Notaris</option>
                                                <option value="3">Staff Akta PPAT</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>Nama User</td>
                                        <td>:</td>
                                        <td><select class="form-control" name="nama_user">
                                                <option value="Notaris/PPAT">Notaris/PPAT</option>
                                                <option value="Staff Akta Notaris">Staff Akta Notaris</option>
                                                <option value="Staff Akta PPAT">Staff Akta PPAT</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td><button type="submit">SIMPAN</button></td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>