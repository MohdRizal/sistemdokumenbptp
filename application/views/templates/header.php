<?php
//untuk notif kotak masuk
$CI =& get_instance();
$CI->load->model('Menu_model');
$notif = $CI->Menu_model->getNotifMasuk();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>BALAI PENGKAJIAN TEKNOLOGI PERTANIAN RIAU</title>
    <!-- Favicon-->
    <link rel="icon" href="<?= base_url() ?>/assets/bptp-logo.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?= base_url() ?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= base_url() ?>assets/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= base_url() ?>assets/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?= base_url() ?>assets/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="<?= base_url() ?>assets/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?= base_url() ?>assets/css/themes/all-themes.css" rel="stylesheet" />

    <style>
        .my-custom-scrollbar {
            position: relative;
            height: 200px;
            overflow: auto;
        }
        .table-wrapper-scroll-y {
            display: block;
        }
        .mybadge{
            color : white !important;
        }

    </style>

    <!--
    Custom css beranda
    -->
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
        .btn-center{
            margin-left: 40%;
            margin-right: 40%;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body class="theme-green">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?= base_url() ?>">BPTP DIGITAL DOCUMENT CENTER</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <?php
                    $model = $this->User_model->userPhoto($this->session->userdata('username'));
                    $src = base_url('/assets/user.png');
                    if(is_file('./assets/user/'.$model['foto']))
                    {
                        //echo "Foto : ".is_file('./assets/user/'.$model['foto']);
                        $src = base_url('/assets/user/'.$model['foto']);
                    }                 
                  
                    ?>
                    <img src="<?= $src ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('username'); ?></div>
                    <div class="email"><?= role($this->session->userdata('role')) ?></div>
                    <!-- <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                         <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li> 
                            
                        </ul>
                    </div> -->
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <?php 
            $uri = $this->uri->segment('1');
            ?>
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li <?php if($uri == 'beranda') echo 'class = "active"'; ?>>
                        <a href="<?= base_url('beranda') ?>">
                            <i class="material-icons col-green">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <?php
                    if($this->session->userdata('role') == 0):
                    ?>
                    <li <?php if($uri == 'account') echo 'class = "active"'; ?>>
                        <a href="<?= base_url('account') ?>">
                            <i class="material-icons col-orange">person_pin</i>
                            <span>User</span>
                        </a>
                    </li>
                    <?php
                    endif;
                    ?>
                    
                    <li <?php if($uri == 'jenis-dokumen' || $uri == 'dokumen') echo 'class = "active"'; ?>>
                        <a href="<?= base_url('jenis-dokumen') ?>">
                            <i class="material-icons col-cyan">folder_open</i>
                            <span>Dokumen</span>
                        </a>
                    </li>
                    <li <?php if($uri == 'kegiatan') echo 'class = "active"'; ?>>
                        <a href="<?= base_url('kegiatan') ?>">
                            <i class="material-icons col-blue">insert_photo</i>
                            <span>Foto Kegiatan</span>
                        </a>
                    </li>
                    <?php
                    if($this->session->userdata('role') == 0):
                    ?>
                     <li <?php if($uri == 'personal-document') echo 'class = "active"'; ?>>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons col-purple">folder_shared</i>
                            <span>Dokumen Pribadi</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?= base_url('personal-document/all') ?>">Semua Dokumen</a>
                                <a href="<?= base_url('personal-document/my') ?>">Dokumen Ku</a>
                                <a href="<?= base_url('personal-document/my/share/inbox') ?>">Kotak Masuk Dokumen <span class="mybadge badge bg-cyan"><?= $notif['total'] ?></span></a>
                            </li>
                        </ul>
                    </li>
                    <?php
                    else:
                    ?>
                    <li <?php if($uri == 'personal-document') echo 'class = "active"'; ?>>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons col-purple">folder_shared</i>
                            <span>Dokumen Pribadi</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?= base_url('personal-document/my') ?>">Dokumen Ku</a>
                                <a href="<?= base_url('personal-document/my/share/inbox') ?>">Kotak Masuk Dokumen <span class="mybadge badge bg-cyan"><?= $notif['total'] ?></span></a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <?php
                    if($this->session->userdata('role') == 0):
                    ?>
                    <li <?php if($uri == 'log') echo 'class = "active"'; ?>>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons col-orange">format_list_bulleted</i>
                            <span>Log Akses</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?= base_url('log/login') ?>" target="_blank">Login</a>
                                <a href="<?= base_url('log/accounting') ?>" target="_blank">Akses Sistem</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('database-backup') ?>"><i class="material-icons">cloud_download</i><span>Backup Database</span></a></li>
                    <?php
                    endif;
                    ?>
                    <li <?php if($uri == 'pengaturan-akun') echo 'class = "active"'; ?>><a href="<?= base_url('pengaturan-akun') ?>"><i class="material-icons">build</i><span>Pengaturan Akun</span></a></li>
                    <li><a href="<?= base_url('checkout/byebye') ?>"><i class="material-icons">input</i><span>Sign Out</span></a></li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="http://riau.litbang.pertanian.go.id/" target="_blank">BPTP RIAU</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- <div class="block-header">
                <h2>BLANK PAGE</h2>
            </div> -->
        

   