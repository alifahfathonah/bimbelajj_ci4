<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Elearning | Coba Ujian</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?= base_url() ?>/adminlte/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/adminlte/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url() ?>/adminlte/dist/css/skins/skin-green.min.css">


    <link rel="stylesheet" href="<?= base_url() ?>/adminlte/plugins/sweet-alert/sweet-alert.css">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= base_url() ?>/adminlte/plugins/iCheck/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>/my/css/custom.css">

    <style>
        .days {
            float: left;
            margin-right: 4px;
        }

        .hours {
            float: left;
        }

        .minutes {
            float: left;
        }

        .seconds {
            float: left;
        }

        .clearDiv {
            clear: both;
        }
    </style>




    <!-- jQuery 2.2.3 -->
    <script src="<?= base_url() ?>/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?= base_url() ?>/adminlte/bootstrap/js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-green layout-top-nav">
    <div class="wrapper">

        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="#" class="navbar-brand"><b>E-Learning</b> Coba Ujian</a>
                        <!--          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>-->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <!--        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>
        </div>-->
                    <!-- /.navbar-collapse -->
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->

                            <!-- /.messages-menu -->

                            <!-- Notifications Menu -->

                            <!-- Tasks Menu -->

                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="<?= base_url() ?>aset/foto/null_foto.jpg" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">Pengguna Umum</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="<?= base_url() ?>aset/foto/null_foto.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            Pengguna Umum
                                            <small>Selamat Mengerjakan</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <!--                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  
                </li>
                
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>-->
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">
                <!-- Content Header (Page header) -->
                <!--      <section class="content-header">
<!--        <h1>
          Coba Ujian
          <small>Bahasa Indonesia Kelas 3</small>
        </h1>
        
        <div class="pull-right"><span class="time"><i class="fa fa-clock-o"></i> 12:05</span></div>
<!--        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol>
      </section>-->

                <!-- Main content -->
                <section class="content">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <table>
                                        <tr>
                                            <th>Nama Soal</th>
                                            <td>: <?= $dt_soal->nama ?></td>
                                        </tr>
                                        <tr>
                                            <th>Mapel</th>
                                            <td>: <?= $dt_soal->nama ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-4">
                                    <table>
                                        <tr>
                                            <th>Kelas</th>
                                            <td>: <?= $dt_soal->nama ?></td>
                                        </tr>
                                        <tr>
                                            <th>Waktu</th>
                                            <td>: <?= $dt_soal->waktu ?> menit</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="col-sm-4">
                                    <table>
                                        <tr>
                                            <th>Siswa Waktu</th>
                                            <td>: <div class="pull-right"><span class="timer" data-minutes-left="<?= $dt_soal->waktu ?>"></span></div>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-9">

                            <div class="box box-default">
                                <div class="box-header with-border">
                                    <i class="fa fa-comments-o"></i>

                                    <h3 class="box-title">Soal ke : <span id="soal-ke"></span> </h3>

                                </div>

                                <div class="box-body parent tingginya" id="box-soal">

                                    <!--<a class="btn btn-app child">
                <i class="fa fa-play"></i> Play
              </a>-->
                                    <div class="xloading child"><img src="<?= base_url() ?>/my/img/loading1.gif"></img></div>


                                </div>
                                <div class="box-footer">
                                    <div class="row">

                                        <div class="col-md-4">
                                            Jawaban : <span id="jawaban">-</span>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <!--echo 'checked'-->
                                                <label>
                                                    <input type="radio" name="r1" id="rda" onclick="setJwb('a')"> A &nbsp;&nbsp;
                                                </label>
                                                <label>
                                                    <input type="radio" name="r1" id="rdb" onclick="setJwb('b')"> B &nbsp;&nbsp;
                                                </label>
                                                <label>
                                                    <input type="radio" name="r1" id="rdc" onclick="setJwb('c')"> C &nbsp;&nbsp;
                                                </label>
                                                <label>
                                                    <input type="radio" name="r1" id="rdd" onclick="setJwb('d')"> D &nbsp;&nbsp;
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="pull-right">
                                                <div class="btn-group btn-block">
                                                    <button type="button" id="btnprev" class="btn btn-default" onclick="getprev()"><i class="fa fa-fw fa-backward"></i></button>
                                                    <button type="button" class="btn btn-warning" onclick="setragu()">Ragu</button>
                                                    <button type="button" id="btnnext" class="btn btn-default" onclick="getnext()"><i class="fa fa-fw fa-forward"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>
                        <!-- /.box (chat box) -->
                        <div class="col-sm-3">



                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Nomer Soal</h3>
                                </div>
                                <div class="box-body tingginya">

                                    <?php $urutan = 0; ?>
                                    <?php foreach ($list_id as $dt) : ?>

                                        <button type="button" id="goto<?= $urutan; ?>" class="btn btn-app btn-app-ku" onclick="gotoNum(<?= $urutan ?>)">
                                            <span class="badge bg-gray">-</span>
                                            <?= $urutan + 1; ?>
                                        </button>

                                        <?php $urutan++ ?>
                                    <?php endforeach ?>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="button" onclick="getfinish()" class="btn btn-primary btn-block">Finish</button>
                                </div>


                            </div>


                        </div>


                    </div>




                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="container">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.8
                </div>
                <strong>Copyright &copy; 2017-2018 <a href="https://bimbelajj.com">Bimbelajj.com</a>.</strong> All rights
                reserved.
            </div>
            <!-- /.container -->
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- SlimScroll -->
    <script src="<?= base_url() ?>/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url() ?>/adminlte/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/adminlte/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!--<script src="<?= base_url() ?>dist/js/demo.js"></script>-->
    <!-- iCheck 1.0.1 -->
    <!--<script src="<?= base_url() ?>plugins/iCheck/icheck.min.js"></script>-->

    <script src="<?= base_url() ?>/adminlte/plugins/sweet-alert/sweet-alert.min.js"></script>
    <script src="<?= base_url() ?>/my/js/cookies.js"></script>


    <script src="<?php echo base_url(); ?>/my/js/jquery.simple.timer.js"></script>