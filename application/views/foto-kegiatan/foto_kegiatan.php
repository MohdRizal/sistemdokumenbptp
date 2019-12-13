<?php
$title = 'Daftar Kegiatan';
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => 'Daftar Kegiatan', 'url' => base_url('kegiatan'), 'class' => ''];
$bc[] = ['label' => $kegiatan['nama_kegiatan'], 'url' => '', 'class' => 'active'];
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
                    Detail Kegiatan
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table>
                        <tr>
                            <td>Nama Kegiatan</td>
                            <td>: <?= $kegiatan['nama_kegiatan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Kegiatan</td>
                            <td>: <?= $kegiatan['tanggal_kegiatan'] ?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi / Keterangan Kegiatan</td>
                            <td>: <?= $kegiatan['keterangan'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>
                    Foto Kegiatan
                </h2>
                <?php
                if($this->session->userdata('role') == 2 || $this->session->userdata('role') == 0)
                {
                ?>
                <a href="<?= base_url('kegiatan/detail/tambah/'.$kegiatan['id_kegiatan']) ?>" class="btn bg-blue waves-effect header-dropdown">Tambah Data</a>
                <?php } ?>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th>Foto</th>
                                <th>Caption</th>
                                <th width="20%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($foto_kegiatan as $d): 
                            ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><img src="<?= base_url() ?>/assets/foto-kegiatan/<?= $d['lokasi'] ?>" width="50" onclick="tampil('<?= base_url() ?>/assets/foto-kegiatan/<?= $d['lokasi'] ?>')"></td>
                                <td><?= $d['caption'] ?></td>
                                <td>
                                    <a href="<?= base_url() ?>/assets/foto-kegiatan/<?= $d['lokasi'] ?>" target="_blank" class="btn bg-green waves-effect" title="Unduh Data"><i class="material-icons">file_download</i></a>
                                    <?php
                                    if($this->session->userdata('role') == 2 || $this->session->userdata('role') == 0):
                                    ?>
                                    <a href="<?= base_url('kegiatan/detail/update/'.$d['id_foto_kegiatan']) ?>" class="btn bg-yellow waves-effect" title="Edit Data"><i class="material-icons">edit</i></a>
                                    <a href="<?= base_url('kegiatan/detail/delete/'.$d['id_foto_kegiatan']) ?>" class="btn bg-red waves-effect" title="Hapus Data" onclick="return confirm('Yakin hapus foto ?')"><i class="material-icons">delete_sweep</i></a>
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
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">              
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="" class="imagepreview" style="width: 100%;" >
      </div>
    </div>
  </div>
</div>
<!-- #END# Basic Examples -->
<?php $this->load->view('templates/footer'); ?>