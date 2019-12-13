<?php
$title = 'Dokumen Pribadi';
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => 'Dokumen Pribadi', 'url' => '', 'class' => ''];
$bc[] = ['label' => $this->session->userdata('username'), 'url' => '', 'class' => 'active'];
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
                case "share":
                    $bg = "bg-blue";
                    $msg = "Dokumen berhasil dibagikan";
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
                
                <a href="<?= base_url('personal-document/my/tambah') ?>" class="btn bg-blue waves-effect header-dropdown">Tambah Data</a>
                
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th>Judul</th>
                                <th width="20%">Tanggal Upload</th>
                                <th width="25%">Aksi</th>
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
                                    <a href="<?= base_url('personal-document/my/update/'.$d['id']) ?>" class="btn bg-yellow waves-effect" title="Edit Data"><i class="material-icons">edit</i></a>
                                    <a href="<?= base_url('personal-document/my/delete/'.$d['id']) ?>" class="btn bg-red waves-effect" title="Hapus Data" onclick="return confirm('Yakin hapus <?= $d['judul'] ?> ?')"><i class="material-icons">delete_sweep</i></a>
                                    <a href="<?= base_url('personal-document/my/download/'.$d['id']) ?>" class="btn bg-green waves-effect" title="Unduh Data" onclick="return confirm('Unduh dokumen \'<?= $d['judul'] ?>\' ?')"><i class="material-icons">file_download</i></a>
                                    <a href="#" class="btn bg-blue waves-effect" title="Bagikan Dokumen" onclick="share('<?= base_url('personal-document/my/share/'.$d['id']) ?>')"><i class="material-icons">share</i></a>
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
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">   
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Bagikan Dokumen</h4>
        </div>           
        <div class="modal-body">
            <form action="" method="post" class="my-form">
            <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Cari email nya disini aja..." title="Type in a name">
            <br>
            <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered table-striped table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th width="20%">No.</th>
                            <th width="60%">Pengguna Tujuan</th>
                            <th>Pilih</th>
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
                                <input type="checkbox" name="email[]" id="cb<?= $no ?>" value="<?= $d['id_user'] ?>">
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
            <br>
            <div class="form-group form-float">
                <div class="form-line">
                    <label>Pesan</label>
                    <textarea name="pesan" class="form-control"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Bagikan</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #END# Basic Examples -->
<?php $this->load->view('templates/footer'); ?>