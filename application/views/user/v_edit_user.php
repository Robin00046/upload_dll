    <body>
        <div class="container" style="background-color:#52658f;">
            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <h1>Edit User</h1>
                            <table style="width: 100%;">
                                <?php foreach ($tbl_user as $aktanot) : ?>
                                    <form method="post" action="<?php echo base_url('user/update_user/' . $aktanot->id_user) ?>" enctype="multipart/form-data">
                                        <tr>
                                            <td>Id user</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="id_user" value="<?php echo $aktanot->id_user ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Username</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="text" name="username" value="<?php echo $aktanot->username ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>:</td>
                                            <td><input style="width: 100%;" type="password" name="password" value="<?php echo $aktanot->password ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Id Jenis User</td>
                                            <td>:</td>
                                            <td><select class="form-control" name="id_jenis_user">
                                                    <option value="<?php echo $aktanot->id_jenis_user ?>" ?><?= $aktanot->id_jenis_user ?>
                                                    </option>
                                                    <option value="Notaris/PPAT">Notaris/PPAT</option>
                                                    <option value="Staff Akta Notaris">Staff Akta Notaris</option>
                                                    <option value="Staff Akta PPAT">Staff Akta PPAT</option>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td>Nama User</td>
                                            <td>:</td>
                                            <td>
                                                <select class="form-control" name="nama_user">
                                                    <option value="<?php echo $aktanot->nama_user ?>" ?><?= $aktanot->nama_user ?>
                                                    </option>
                                                    <option value="Notaris/PPAT">Notaris/PPAT</option>
                                                    <option value="Staff Akta Notaris">Staff Akta Notaris</option>
                                                    <option value="Staff Akta PPAT">Staff Akta PPAT</option>
                                                </select>
                                            </td>
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