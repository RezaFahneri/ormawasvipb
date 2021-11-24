<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/js/select.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>../vendors/mdi/css/materialdesignicons.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('assets'); ?>/images/logoipb.png" />


</head>
<!-- <header> -->

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-1" href="<?= base_url(); ?>beranda"><img src="<?= base_url('assets'); ?>/images/logosvipb.png" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="<?= base_url(); ?>beranda/komdisma"><img src="<?= base_url('assets'); ?>/images/logoipb.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <div class="profile_info my-auto">
                        <span>welcome,</span>
                        <h5><?php echo $this->db->where('username', $this->session->userdata('username'))->get('tbl_login')->row('nama'); ?></h5>
                    </div>&nbsp;&nbsp;
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="<?php echo base_url() ?>assets/images/faces/<?php echo $this->db->where('username', $this->session->userdata('username'))->get('tbl_login')->row('foto') ?>" class="img-circle profile_img" alt="profile">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="<?php echo base_url() ?>profil/akun">
                                <i class="mdi mdi-account text-primary"></i>
                                Profil
                            </a>
                            <a class="dropdown-item" href="<?php echo base_url() ?>beranda/logout">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                            <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                </div>
            </div>

            <!-- <sidebar> -->

            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>beranda">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Beranda</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('status') == "DPM") { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>akun" aria-expanded="false">
                                <i class="icon-head menu-icon"></i>
                                <span class="menu-title">Akun</span>
                            </a>
                        </li>
                    <?php } else if ($this->session->userdata('status') == "Komdisma") { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>akun" aria-expanded="false">
                                <i class="icon-head menu-icon"></i>
                                <span class="menu-title">Akun</span>
                            </a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>profil" aria-expanded="false">
                            <i class="icon-bar-graph menu-icon"></i>
                            <span class="menu-title">Profil</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>proker" aria-expanded="false">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Program Kerja</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>prestasi" aria-expanded="false">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">Prestasi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>struktur" aria-expanded="false">
                            <i class="icon-bar-graph menu-icon"></i>
                            <span class="menu-title">Struktur Organisasi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>jadwal">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Jadwal</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#berkas" aria-expanded="false">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Berkas</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="berkas">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>proposal ">Proposal</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>lpj">LPJ</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>