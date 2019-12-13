<?php
$title = 'Edit Jenis Dokumen';
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => 'Jenis Dokumen', 'url' => base_url().'jenis-dokumen', 'class' => ''];
$bc[] = ['label' => 'Edit Jenis Dokumen', 'url' => '', 'class' => 'active'];
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
                <form action="<?= base_url('jenis-dokumen/update/'.$dokumen['id_jenis_dokumen']) ?>" method="post">
                    <input type="hidden" name="id_jenis_dokumen" value="<?= $dokumen['id_jenis_dokumen'] ?>">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="jenis_dokumen" class="form-control" value="<?= $dokumen['jenis_dokumen'] ?>" required>
                            <label class="form-label">Jenis Dokumen</label>
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