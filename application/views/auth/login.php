<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | BALAI PENGKAJIAN TEKNOLOGI PERTANIAN</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?= base_url() ?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= base_url() ?>assets/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= base_url() ?>assets/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <style>
        .logo-utama{
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .main-judul{
            text-align: center;
        }
        .spasi{
            margin-bottom: 50px;
        }
        body{
            background-image: url("<?= base_url() ?>assets/bg-login.jpg");
            background-repeat: no-repeat;
            height: 100%;
            background-position: center;
            background-size: cover;
        }
        .card{
            opacity: 0.9;
        }
    </style>
</head>

<body class="login-page">
    <div class="login-box">
        
        <div class="card">
            <div class="body">
                <div class="logo">
                    <img src="./assets/bptp-logo.png" width="150" class="logo-utama">
                    <p class="main-judul">BALAI PENGKAJIAN TEKNOLOGI PERTANIAN (BPTP) RIAU</p>
                </div>
            <?php
            if(isset($_SESSION['alert']))
            {
                $type = $this->session->flashdata('alert');
                $bg = '';
                $msg = '';

                switch($type){
                    case "nf":
                        $bg = "bg-red";
                        $msg = "Username tidak ditemukan";
                        break;
                    case "nm":
                        $bg = "bg-red";
                        $msg = "Username dan Password tidak cocok";
                        break;
                }
                ?>
                <div class="alert <?= $bg ?> alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?= $msg ?>
                </div>
                <?php
            }

            if(validation_errors() != FALSE){
                ?>
                <div class="alert bg-red alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?= validation_errors() ?>
                </div>
                <?php
            }
            ?>
                <form id="sign_in" method="POST" action="<?= base_url('auth') ?>">
                    <div class="msg">Selamat Datang, silakan login</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" minlength="8" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">LOGIN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                           
                        </div>
                        <div class="col-xs-6 align-right">
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

   <!-- Jquery Core Js -->
    <script src="<?= base_url() ?>assets/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url() ?>assets/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?= base_url() ?>assets/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?= base_url() ?>assets/js/admin.js"></script>
    <script src="<?= base_url() ?>assets/js/pages/examples/sign-in.js"></script>
</body>

</html>