<html>

<head>
    <title>Cetak PDF</title>
    <style>
        .table {
            border-collapse: collapse;
            table-layout: fixed;
            width:100%;
        }

        .table tr {
            padding: 5px;
        }

        .table td {
            word-wrap: break-word;
            width: 12%;
            padding: 1px;
        }

        .tandatangan {

            text-align: center;
            margin-left: 345px;

        }
    </style>
</head>

<body>
    <h2 align=center>Laporan Data Aktanotaris</h2>
    <h4 align=center><?php echo $label ?></h4>

    <table class="table" align=center border=1 cellpadding=20 cellspacing=0>
        <tr align=center>
            <td>No</td>
            <td>No Aktanotaris</td>
            <td>Tanggal</td>
            <td>Jenis Aktanotaris</td>
            <td>Nama Penghadap</td>
            <td>Keterangan</td>
            <td>User</td>
        </tr>

        <?php
        if (empty($tbl_aktanotaris)) { // Jika data tidak ada
            echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
        } else { // Jika jumlah data lebih dari 0 (Berarti jika data ada)
            $no = 1;
            foreach ($tbl_aktanotaris as $data) { // Looping hasil data transaksi
                $tanggal = date('d-m-Y', strtotime($data->tanggal)); // Ubah format tanggal jadi dd-mm-yyyy

                echo "<tr align=center>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $data->no_aktanotaris . "</td>";
                echo "<td>" . $tanggal . "</td>";
                echo "<td>" . $data->jenis_aktanotaris . "</td>";
                echo "<td>" . $data->nama_penghadap . "</td>";
                echo "<td>" . $data->keterangan . "</td>";
                echo "<td>" . $data->nama_user . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    <div class="tandatangan">

        <br />

        <b>Magelang, <?php echo date(' d - M - y'); ?></b>

        <p>Diketahui</p>
        <br>
        <br>

        <p>Soraya Isnaini, SH., M.Kn.</p>

    </div>
</body>

</html>