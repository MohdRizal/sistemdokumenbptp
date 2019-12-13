<?php
$title = 'Tambah Dokumen Pribadi';
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => 'Dokumen Pribadi', 'url' => base_url('personal-document/my'), 'class' => ''];
$bc[] = ['label' => 'Tambah Data', 'url' => '', 'class' => 'active'];
?>
<?php $this->load->view('templates/header'); ?>
<!-- Horizontal Layout -->
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
        if(isset($_SESSION['gagal']))
        {         
            $bg = 'bg-red';
            $msg = $this->session->flashdata('gagal');
            ?>
            <div class="alert <?= $bg ?> alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?= $msg ?>
            </div>
            <?php
        }
        ?>
        <div class="card">
            <div class="header">
                <h2>
                    <?= $title ?>
                </h2>
            </div>
            <div class="body">
                <?php echo validation_errors(); ?>
                <form action="<?= base_url('personal-document/my/tambah') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label>Nama Dokumen</label>
                            <input type="text" name="judul" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label>File (yang diizinkan : PDF, DOC / DOCX, PPT / PPTX, XLS / XLSX) dengan ukuran maksimum 50 MB</label>
                            <input type="file" name="dokumen" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Horizontal Layout -->
<?php $this->load->view('templates/footer'); ?>