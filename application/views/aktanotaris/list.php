<body>

    <body>
        <div style="padding: 15px;">
            <form method="get" action="<?php echo base_url('aktanotaris/filter') ?>">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label>Filter Tanggal</label>
                            <div class="input-group">
                                <input type="date" name="tgl_awal" value="<?= @$_GET['tgl_awal'] ?>" class="form-control tgl_awal datetimepicker-input" placeholder="Tanggal Awal" data-toggle="datetimepicker" data-target=".tgl_awal" autocomplete="off">
                                <div class="input-group-append">
                                    <span class="input-group-text">s/d</span>
                                </div>
                                <input type="date" name="tgl_akhir" value="<?= @$_GET['tgl_akhir'] ?>" class="form-control tgl_akhir datetimepicker-input" placeholder="Tanggal Akhir" data-toggle="datetimepicker" data-target=".tgl_akhir" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" name="filter" value="true" class="btn btn-primary">TAMPILKAN</button>

                <?php
                if (isset($_GET['filter'])) // Jika user mengisi filter tanggal, maka munculkan tombol untuk reset filter
                    echo '<a href="' . base_url('aktanotaris/filter') . '" class="btn btn-default">RESET</a>';
                ?>
            </form>


            <hr />
            <div class="container-fluid">
                <div class="card shadow mb-4">

                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="container">
                                <table class="table table-bordered" id="Table" width="100%" cellspacing="0">
                                    <h3 style="text-align:center"><b>Laporan Akta Notaris</b></h3>
                                    <a href="<?php echo base_url() . 'laporan'  ?>" class="btn btn-success"'><i class="fa fa-back"></i>Laporan</a>    
                                <div style="margin-top: 5px;">
                                        <a href="<?php echo $url_cetak ?>" class="btn btn-success"><i class="fa fa-print"></i>Cetak PDF</a>

                                    </div>
                                    <?php echo $label ?><br />
                                    <h4 style="margin-bottom: 5px;"><b>Data Surat Akta Notaris</b></h4>
                                    <thead>
                                        <tr>
                                            <td>no</td>
                                            <td>no_aktanotaris</td>
                                            <td>tanggal</td>
                                            <td>jenis aktanotaris</td>
                                            <td>nama_penghadap</td>
                                            <td>keterangan</td>
                                            <td>User</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (empty($tbl_aktanotaris)) { // Jika data tidak ada
                                            echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
                                        } else { // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                                            $no = 1;
                                            foreach ($tbl_aktanotaris as $data) { // Looping hasil data transaksi
                                                $tanggal = date('d-m-Y', strtotime($data->tanggal)); // Ubah format tanggal jadi dd-mm-yyyy

                                                echo "<tr>";
                                                echo "<td style='width: 80px;'>" . $no++ . "</td>";
                                                echo "<td style='width: 80px;'>" . $data->no_aktanotaris . "</td>";
                                                echo "<td style='width: 100px;'>" . $data->tanggal . "</td>";
                                                echo "<td style='width: 300px;'>" . $data->jenis_aktanotaris . "</td>";
                                                echo "<td style='width: 60px;'>" . $data->nama_penghadap . "</td>";
                                                echo "<td style='width: 100px;'>" . $data->keterangan . "</td>";
                                                echo "<td style='width: 100px;'>" . $data->nama_user . "</td>";
                                                echo "</tr>";
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    setDateRangePicker(".tgl_awal", ".tgl_akhir")
                                })
                            </script>
    </body>

    </html>