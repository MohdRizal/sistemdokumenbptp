<?php
$title = 'Pengaturan Akun';
$bc[] = ['label' => 'Home', 'url' => base_url(), 'class' => ''];
$bc[] = ['label' => 'Account', 'url' => '', 'class' => 'active'];
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
                case "edit-password":
                    $bg = "bg-green";
                    $msg = "Password berhasil diedit";
                    break;
                case "password-unmatch":
                    $bg = "bg-red";
                    $msg = "Password baru tidak cocok";
                    break;
                case "password-wrong":
                    $bg = "bg-red";
                    $msg = "Password lama salah";
                    break;
                case "ganti-foto":
                    $bg = "bg-green";
                    $msg = "Foto Berhasil Diganti";
                    break;
                case "p1-less":
                    $bg = "bg-red";
                    $msg = "Password lama kurang dari 8 karakter";
                    break;
                case "p2-less":
                    $bg = "bg-red";
                    $msg = "Password baru kurang dari 8 karakter";
                    break;
                case "p3-less":
                    $bg = "bg-red";
                    $msg = "Password baru (ulangi) kurang dari 8 karakter";
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

        <?php
        if(isset($_SESSION['gagal']))
        {
            ?>
            <div class="alert bg-red alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?= $this->session->flashdata('gagal') ?>
            </div>
            <?php
        }
        ?>
        <div class="col-xs-12 col-lg-4">
            <div class="card profile-card">
                <div class="profile-header"></div>
                <div class="profile-body">
                    <?php
                    $src = base_url('assets/user.png');
                    if(is_file('./assets/user/'.$user['foto']))
                    {
                        //echo '1';
                        $src = base_url('assets/user/'.$user['foto']);
                    }

                    $role = '';
                    switch($user['role'])
                    {
                        case "0":
                        $role = 'Administrator';
                        break;
                        case "1":
                        $role = 'Perencanaan';
                        break;
                        case "2":
                        $role = 'Pegawai';
                        break;
                    }
                    ?>
                    <div class="image-area">
                        <img src="<?= $src ?>" height="100">
                    </div>
                    <div class="content-area">
                        <h3><?= $user['username'] ?></h3>
                        <p><?= $role ?></p>
                    </div>
                    
                    
                </div>
                <div class="body">
                    <div class="content-area">
                        <form action="<?= base_url('pengaturan-akun/ganti-foto') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label>Foto Profil</label>
                                    <input type="file" name="foto_profil" class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Ganti Foto Profil</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-lg-8">
            <div class="card">
                <div class="header">
                    <h2>
                        Ganti Password
                    </h2>
                </div>
                <div class="body">
                    <div class="content-area">
                        <form class="form-horizontal" action="<?= base_url('pengaturan-akun/ganti-password') ?>" method="post">
                            <div class="form-group">
                                <label for="OldPassword" class="col-sm-3 control-label">Password Lama</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="password" class="form-control" id="OldPassword" name="OldPassword" minlength="8" placeholder="Password Lama" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="NewPassword" class="col-sm-3 control-label">Password Baru</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="password" class="form-control" id="NewPassword" name="NewPassword" minlength="8" placeholder="Password Baru" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">Password Baru (Ulangi)</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="password" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" minlength="8" placeholder="Password Baru (Ulangi)" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-danger">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- #END# Basic Examples -->
<?php $this->load->view('templates/footer'); ?>