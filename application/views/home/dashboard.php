
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
                <img src="./assets/bptp-logo.png" width="180" class="logo-utama spasi">
                <h2 class="main-judul">BALAI PENGKAJIAN TEKNOLOGI PERTANIAN (BPTP) RIAU</h2>
                

                <p class="main-judul">Jl. Kaharuddin Nasution KM. 10 No. 341 Pekanbaru - Riau</p>
                <p class="main-judul">Website : <a href="http://riau.litbang.pertanian.go.id" target="_blank">http://riau.litbang.pertanian.go.id</a></p>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Examples -->
<?php $this->load->view('templates/footer'); ?>