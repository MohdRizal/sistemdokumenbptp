<?php
$title = 'Tambah '.$detail['jenis_dokumen'];
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => $detail['jenis_dokumen'], 'url' => base_url('dokumen/type/').$detail['id_jenis_dokumen'], 'class' => ''];
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
                <form action="<?= base_url('dokumen/tambah/type/') ?><?= $detail['id_jenis_dokumen'] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label>Judul Dokumen</label>
                            <input type="text" name="judul" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label>Tahun Dokumen</label>
                            <input type="number" name="tahun_dokumen" class="form-control" min="1945" max="<?= date('Y') ?>">
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label>Ringkasan</label>
                            <textarea rows="4" name="ringkasan" class="form-control no-resize" required></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label>File (yang diizinkan : PDF, DOC / DOCX, PPT / PPTX) dengan ukuran maksimum 10 MB</label>
                            <input type="file" name="dokumen" class="form-control no-resize" required>                           
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