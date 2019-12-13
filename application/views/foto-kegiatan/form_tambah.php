<?php
$title = 'Tambah Foto Kegiatan';
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => 'Daftar Kegiatan', 'url' => base_url('kegiatan'), 'class' => ''];
$bc[] = ['label' => $kegiatan['nama_kegiatan'], 'url' => base_url('kegiatan/detail/'.$kegiatan['id_kegiatan']), 'class' => ''];
$bc[] = ['label' => 'Tambah Foto', 'url' => '', 'class' => 'active'];
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
                <form action="<?= base_url('kegiatan/detail/tambah/'.$kegiatan['id_kegiatan']) ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label>Foto Kegiatan</label>
                            <input type="file" name="foto_kegiatan[]" accept="image/*" class="form-control" required multiple>                            
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label>Keterangan Foto</label>
                            <textarea name="caption" class="form-control" required></textarea>                          
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