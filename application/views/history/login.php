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
        <p class="right">Waktu unduh : <?= date('d/m/Y H:i:s') ?></p>
        <br>
        <h1 class="judul">Log Login BPTP Digital Document Center</h1>
        <h5>Tanggal <?= tgl($from) ?> s/d <?= tgl($to) ?></h5>
        <hr>
        <table cellspacing="0" width="100%">
            <tr class="head">
                <th>No.</th>
                <th>Username</th>
                <th>Waktu Login (Y-m-d)</th>
                <th>IP Address</th>
            </tr>
            
                <?php
                $no = 1;
                foreach($login as $l)
                {
                    ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $l['username'] ?></td>
                    <td><?= $l['waktu_login'] ?></td>
                    <td><?= $l['ip_address'] ?></td>
                </tr>
                    <?php
                    $no++;
                }
                ?>
            
        </table>
    </body>
</html>