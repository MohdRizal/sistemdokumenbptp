<?php
$title = 'User';
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => 'User', 'url' => '', 'class' => 'active'];
//$bc[] = ['label' => $detail['jenis_dokumen'], 'url' => '', 'class' => 'active'];
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
                <a href="<?= base_url('account/tambah/') ?>" class="btn bg-blue waves-effect header-dropdown">Tambah Data</a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th width="30%">Username</th>
                                <th width="30%">Last Login</th>
                                <th width="20%">Role</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($user as $d): 
                               
                                ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $d['username'] ?></td>
                                    <td><?= $d['last_login'] ?></td>
                                    <td><?= role($d['role']) ?></td>
                                    <td>
                                        <a href="<?= base_url('account/update/'.$d['id_user']) ?>" class="btn bg-yellow waves-effect" title="Edit Data"><i class="material-icons">edit</i></a>
                                        <a href="<?= base_url('account/delete/'.$d['id_user']) ?>" class="btn bg-red waves-effect" title="Hapus Data" onclick="return confirm('Yakin hapus <?= $d['username'] ?> ?')"><i class="material-icons">delete_sweep</i></a>
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