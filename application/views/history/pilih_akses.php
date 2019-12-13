<?php
$title = 'History Akses';
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => 'History Akses', 'url' => '', 'class' => 'active'];
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
                <h2>
                    Pilih tanggal log akses
                </h2>
            </div>
            <div class="body">
                <form method="post" action="<?= base_url('log/accounting') ?>">
                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Dari</label>
                                    <input type="date" name="from" class="form-control" placeholder="col-sm-4" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Sampai</label>
                                    <input type="date" name="to" class="form-control" placeholder="col-sm-4" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4"></div>
                        <input type="submit" name="cetak" value="Cetak" class="btn btn-primary">             
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>