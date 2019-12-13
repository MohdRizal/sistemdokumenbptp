<?php
$title = 'Daftar Kegiatan';
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => 'Daftar Kegiatan', 'url' => '', 'class' => 'active'];
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
                <?php
                if($this->session->userdata('role') == 2 || $this->session->userdata('role') == 0)
                {
                ?>
                <a href="<?= base_url('kegiatan/tambah') ?>" class="btn bg-blue waves-effect header-dropdown">Tambah Data</a>
                <?php } ?>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal Kegiatan</th>
                                <th width="20%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($daftar_kegiatan as $d): 
                            ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $d['nama_kegiatan'] ?></td>
                                <td><?= $d['tanggal_kegiatan'] ?></td>
                                <td>
                                    <a href="<?= base_url('kegiatan/detail/'.$d['id_kegiatan']) ?>" class="btn bg-green waves-effect" title="Lihat Data"><i class="material-icons">search</i></a>
                                    <?php
                                    if($this->session->userdata('role') == 2 || $this->session->userdata('role') == 0):
                                    ?>
                                    <a href="<?= base_url('kegiatan/update/'.$d['id_kegiatan']) ?>" class="btn bg-yellow waves-effect" title="Edit Data"><i class="material-icons">edit</i></a>
                                    <a href="<?= base_url('kegiatan/delete/'.$d['id_kegiatan']) ?>" class="btn bg-red waves-effect" title="Hapus Data" onclick="return confirm('Yakin hapus <?= $d['nama_kegiatan'] ?> ?')"><i class="material-icons">delete_sweep</i></a>
                                    <?php endif; ?>
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