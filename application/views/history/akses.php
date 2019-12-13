<html>
    <head>
        <style>
            .judul{
                text-align: center;
            }
            table, th, td{
                border: 1px solid black;
            }
            .head{
                background-color: yellow;
            }
            .right{
                float: right;
            }
        </style>
    </head>
    <body>
        <p class="right">Waktu unduh : <?= date('Y-m-d H:i:s') ?></p>
        <br>
        <h1 class="judul">Log Akses BPTP Digital Document Center</h1>
        <h5>Tanggal <?= tgl($from) ?> s/d <?= tgl($to) ?></h5>
        <hr>
        <table cellspacing="0" width="100%">
            <tr class="head">
                <th>No.</th>
                <th>Username</th>
                <th>Halaman</th>
                <th>Kegiatan</th>
                <th>Waktu Akses (Y-m-d)</th>
            </tr>
            
                <?php
                $no = 1;
                foreach($akses as $l)
                {
                    ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $l['username'] ?></td>
                    <td><?= $l['halaman'] ?></td>
                    <td><?= $l['kegiatan'] ?></td>
                    <td><?= $l['waktu'] ?></td>
                </tr>
                    <?php
                    $no++;
                }
                ?>
            
        </table>
    </body>
</html>