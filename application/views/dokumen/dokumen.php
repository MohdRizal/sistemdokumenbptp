<?php
$title = $detail['jenis_dokumen'];
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => 'Jenis Dokumen', 'url' => base_url('jenis-dokumen'), 'class' => ''];
$bc[] = ['label' => $detail['jenis_dokumen'], 'url' => '', 'class' => 'active'];
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
                if($this->session->userdata('role') == 1 || $this->session->userdata('role') == 0)
                {
                ?>
                <a href="<?= base_url('dokumen/tambah/type/') ?><?= $detail['id_jenis_dokumen'] ?>" class="btn bg-blue waves-effect header-dropdown">Tambah Data</a>
                <?php } ?>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th width="25%">Judul</th>
                                <th width="5%">Tahun Dokumen</th>
                                <th width="27%">Ringkasan</th>
                                <th width="10%">Tanggal Upload</th>
                                <th width="18%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($dokumen as $d): 
                            ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $d['judul'] ?></td>
                                <td><?= $d['tahun_dokumen'] ?></td>
                                <td><?= $d['ringkasan'] ?></td>
                                <td><?= $d['tanggal_upload'] ?></td>
                                <td>
                                    <?php
                                    if($this->session->userdata('role') == 1 || $this->session->userdata('role') == 0):
                                    ?>
                                    <a href="<?= base_url('dokumen/update/type/'.$d['id_dokumen']) ?>" class="btn bg-yellow waves-effect" title="Edit Data"><i class="material-icons">edit</i></a>
                                    <a href="<?= base_url('dokumen/delete/'.$d['id_dokumen']) ?>" class="btn bg-red waves-effect" title="Hapus Data" onclick="return confirm('Yakin hapus <?= $d['judul'] ?> ?')"><i class="material-icons">delete_sweep</i></a>
                                    <?php endif; ?>
                                    <a href="<?= base_url('dokumen/unduh/'.$d['id_dokumen']) ?>" class="btn bg-green waves-effect" title="Unduh Data" onclick="return confirm('Unduh dokumen \'<?= $d['judul'] ?>\' ?')"><i class="material-icons">file_download</i></a>
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