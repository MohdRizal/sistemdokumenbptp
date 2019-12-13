<?php
$title = 'Bagikan Dokumen';
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => 'Dokumen Pribadi', 'url' => '', 'class' => ''];
$bc[] = ['label' => 'Bagikan Dokumen', 'url' => '', 'class' => 'active'];
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
                    <?= $title ?>
                </h2>
            </div>
            <div class="body">
                <form action="personal-document/my/share/<?= $id ?>" method="post">
                <div class="">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th>Pengguna Tujuan</th>
                                <th width="20%">Pilih</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($all_user as $d): 
                            ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $d['username'] ?></td>
                                <td>
                                    <input type="checkbox" name="email[]" id="cb<?= $no ?>" value="<?= $d['username'] ?>">
                                    <label for="cb<?= $no ?>"></label>
                                </td>
                            </tr>
                            <?php 
                            $no++;
                            endforeach; 
                            ?>
                        </tbody>
                    </table>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Examples -->
<?php $this->load->view('templates/footer'); ?>