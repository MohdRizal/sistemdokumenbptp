<?php
//print_r($user);
$title = 'Dokumen Pribadi';
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => 'Dokumen Pribadi', 'url' => base_url('personal-document/all'), 'class' => ''];
$bc[] = ['label' => $user['username'], 'url' => '', 'class' => 'active'];
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
            <div class="header">
                <h2>
                    <?= $title ?>
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th>Judul</th>
                                <th width="20%">Tanggal Upload</th>
                                <th width="20%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($doc as $d): 
                            ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $d['judul'] ?></td>
                                <td><?= $d['tanggal_upload'] ?></td>
                                <td>
                                    <a href="<?= base_url('dokumen/unduh/'.$d['id']) ?>" class="btn bg-green waves-effect" title="Unduh Data" onclick="return confirm('Unduh dokumen \'<?= $d['judul'] ?>\' ?')"><i class="material-icons">file_download</i></a>
                                </td>
                            </tr>
                            <?php 
                            $no++;
                            endforeach; 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Examples -->
<?php $this->load->view('templates/footer'); ?>