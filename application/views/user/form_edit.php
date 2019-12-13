<?php
$title = 'Update User';
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => 'User', 'url' => base_url('account'), 'class' => ''];
$bc[] = ['label' => 'Update Data', 'url' => '', 'class' => 'active'];
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
        <?php
        if(isset($_SESSION['gagal']))
        {         
            $bg = 'bg-red';
            $msg = $this->session->flashdata('gagal');
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
            <?php echo validation_errors(); ?>  
                <form action="<?= base_url('account/update/'.$user['id_user']) ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label>Username</label>
                            <input type="email" name="username" class="form-control" required value="<?= $user['username'] ?>">
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label>Password (kosongkan jika tidak ingin mengganti password)</label>
                            <input type="password" name="password" minlength="8" class="form-control">
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" value="<?= $user['nama_lengkap'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label>Tipe Akun</label>
                            <select class="form-control show-tick" name="role" data-live-search="true"> 
                                <option value="0" <?php if($user['role'] == 0) echo 'selected' ?>>Administrator Sistem</option> 
                                <option value="1" <?php if($user['role'] == 1) echo 'selected' ?>>Administrator Tim Program</option>
                                <option value="2" <?php if($user['role'] == 2) echo 'selected' ?>>Administrator KSPP</option>
                                <option value="3" <?php if($user['role'] == 3) echo 'selected' ?>>Pegawai</option>                         
                            </select>
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