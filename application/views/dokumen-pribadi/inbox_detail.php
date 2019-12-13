<?php
$title = 'Detail Kotak Masuk';
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => 'Dokumen Pribadi', 'url' => '', 'class' => ''];
$bc[] = ['label' => 'Kotak Masuk Dokumen', 'url' => base_url('personal-document/my/share/inbox'), 'class' => ''];
$bc[] = ['label' => $title, 'url' => '', 'class' => 'active'];
?>
<?php $this->load->view('templates/header'); ?>
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ol class="breadcrumb breadcrumb-col-teal align-right">
            <?php foreach($bc as $bc): ?>
            <li class="<?= $bc['class'] ?>">
                <?php if($bc['url'] == ''): ?><?= $bc['label'] ?>
            <?php else: ?>
                <a href="<?= $bc['url'] ?>"><?= $bc['label'] ?></a>
            <?php endif; ?>
            </li>
            <?php endforeach; ?>
        </ol>
        <div class="card">
            <div class="header">
                <h3><?= ucwords($doc['judul']) ?></h3>
            </div>
            <div class="body">
                
                <div class="table-responsive">
                    <table>
                        <tr>
                            <td>E-mail Pengirim </td>
                            <td>&nbsp; : <?= $doc['username'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Dikirim</td>
                            <td>&nbsp; : <?= tgl_date($doc['tanggal']) ?></td>
                        </tr>
                        <tr>
                            <td>Pesan</td>
                            <td>&nbsp; : <?= $doc['pesan'] ?></td>
                        </tr>
                    </table>
                    <hr>
                    <a href="<?= base_url('personal-document/my/download/'.$doc['dokumen_id']) ?>" class="btn bg-blue"><i class="material-icons">cloud_download</i> Unduh Dokumen</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Examples -->
<?php $this->load->view('templates/footer'); ?>