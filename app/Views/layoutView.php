<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Bimbelajj - <?= $judulWeb; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="MundirMuzaini" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/template/assets/images/favicon.ico">

    <!-- App css -->
    <link rel="shortcut icon" href="<?= base_url() ?>/template/assets/images/favicon.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> <!-- App css -->
    <link href="<?= base_url() ?>/template/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/template/metismenu-master/dist/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/template/assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="<?= base_url() ?>/template/assets/js/modernizr.min.js"></script>

</head>


<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">

            <div class="slimscroll-menu" id="remove-scroll">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="<?= base_url() ?>/template/assets/images/logo.png" alt="" height="22">
                        </span>
                        <i>
                            <img src="<?= base_url() ?>/template/assets/images/logo_sm.png" alt="" height="28">
                        </i>
                    </a>
                </div>

                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="<?= base_url() ?>/template/assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                    </div>
                    <h5><a href="#"><?= $nama; ?></a> </h5>
                    <p class="text-muted"><?= $program; ?></p>
                </div>

                <!--- Sidemenu -->

                <!-- Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">

                    <ul class="list-unstyled topbar-right-menu float-right mb-0">

                        <!-- <li class="hide-phone app-search">
                            <form>
                                <input type="text" placeholder="Search..." class="form-control">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </li> -->





                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?= base_url() ?>/template/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1"><?= $nama; ?><i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-head"></i> <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-cog"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-help"></i> <span>Support</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-lock"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="<?= base_url() ?>/registrasi/logout" class="dropdown-item notify-item">
                                    <i class="fi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left disable-btn">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li>
                            <div class="page-title-box">
                                <h4 class="page-title"><?= $judulPage; ?> </h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Peserta</a></li>
                                    <!-- <li class="breadcrumb-item"><a href="#">Dataku</a></li> -->
                                    <li class="breadcrumb-item active">Dataku</li>
                                </ol>
                            </div>
                        </li>

                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->



            <!-- Start Page content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card-box">

                        <div class="row">
                            <div class="col-sm-6 m-t-20 p-5">
                                <h4 class="m-t-0 header-title">Pemberitahuan</h4>
                                <p class="m-b-30">
                                    berikut adalah hal-hal yang harus di perhatikan oleh peserta baru.
                                    Data anda sudah tersimpan di Database kami. untuk terdaftar sebagai member
                                    silahkan lakukan pembaran ke rekening Bank BCA 350714225400008 atas nama
                                    bimbelajj. kirimkan bukti tranfer melalui WA ke nomor 081555333123.
                                    tim kami akan segera memproses keanggota-an anda di bimbelajj.
                                </p>
                                <p>Terima Kasih</p>
                            </div>

                            <div class="col-sm-6 m-t-20 p-5">
                                <h4 class="m-t-0 header-title">Berikut data pendaftaran anda</h4>

                                <dl class="row">
                                    <dt class="col-sm-3">Nama</dt>
                                    <dd class="col-sm-9"><?= $dt['nama']; ?></dd>

                                    <dt class="col-sm-3">Tgl Lahir</dt>
                                    <dd class="col-sm-9"><?= $dt['tgl_lahir']; ?></dd>

                                    <dt class="col-sm-3">Alamat</dt>
                                    <dd class="col-sm-9"><?= $dt['alamat']; ?></dd>

                                    <dt class="col-sm-3">Nomor HP</dt>
                                    <dd class="col-sm-9"><?= $dt['nomor_hp']; ?></dd>

                                    <dt class="col-sm-3">Asal Sekolah</dt>
                                    <dd class="col-sm-9"><?= $dt['asal_sekolah']; ?></dd>

                                    <dt class="col-sm-3">Alamat Sekolah</dt>
                                    <dd class="col-sm-9"><?= $dt['alamat_sekolah']; ?></dd>

                                    <dt class="col-sm-3">Kelas</dt>
                                    <dd class="col-sm-9"><?= $dt['nama_kelas']; ?></dd>

                                    <dt class="col-sm-3">Program Pilihan</dt>
                                    <dd class="col-sm-9"><?= $dt['nama_program']; ?></dd>

                                </dl>

                            </div>

                        </div>
                        <!-- end row -->

                    </div>


                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer text-right">
                2020 © Bimbelajj.com
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <!-- jQuery  -->
    <script src="<?= base_url() ?>/template/assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/template/metismenu-master/dist/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/waves.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/jquery.slimscroll.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>/template/assets/js/jquery.core.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/jquery.app.js"></script>

</body>

</html>