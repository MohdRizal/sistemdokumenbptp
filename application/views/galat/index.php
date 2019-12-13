<?php
$title = '';
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
// $bc[] = ['label' => 'Dokumen', 'url' => '', 'class' => 'active'];
// $bc[] = ['label' => $detail['jenis_dokumen'], 'url' => '', 'class' => 'active'];
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
        <?php
        if(isset($_SESSION['alert']))
        {
            $type = $this->session->flashdata('alert');
            $bg = '';
            $msg = '';

            switch($type){
                case "hapus":
                    $bg = "bg-red";
                    $msg = "Data berhasil dihapus";
                    break;
                case "tambah":
                    $bg = "bg-green";
                    $msg = "Data berhasil ditambah";
                    break;
                case "edit":
                    $bg = "bg-green";
                    $msg = "Data berhasil diedit";
                    break;
            }
            ?>
            <div class="alert <?= $bg ?> alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?= $msg ?>
            </div>
            <?php
        }
        ?>
        <div class="card">
            
            <div class="body">
                <img src="https://image.freepik.com/free-photo/thoughtful-young-woman-with-question-mark_1134-622.jpg" width="350" class="logo-utama spasi">
                <h2 class="main-judul">HALAMAN TIDAK DITEMUKAN</h2>
                <a href="<?= base_url() ?>" class="btn btn-primary btn-center">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>