<?php
$title = 'Edit Daftar Kegiatan';
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => 'Daftar Kegiatan', 'url' => base_url().'kegiatan', 'class' => ''];
$bc[] = ['label' => 'Edit Daftar Kegiatan', 'url' => '', 'class' => 'active'];
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
        <div class="card">
            <div class="header">
                <h2>
                    <?= $title ?>
                </h2>
            </div>
            <div class="body">
                <form action="<?= base_url('kegiatan/update/'.$kegiatan['id_kegiatan']) ?>" method="post">
                    <input type="hidden" name="id_kegiatan" value="<?= $kegiatan['id_kegiatan'] ?>">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label>Jenis Kegiatan</label>
                            <input type="text" name="nama_kegiatan" class="form-control" value="<?= $kegiatan['nama_kegiatan'] ?>" required>
                            
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label>Tanggal Kegiatan</label>
                            <input type="date" name="tanggal_kegiatan" class="form-control" value="<?= $kegiatan['tanggal_kegiatan'] ?>" required>                           
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control" required><?= $kegiatan['keterangan'] ?></textarea>                          
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Horizontal Layout -->
<?php $this->load->view('templates/footer'); ?>