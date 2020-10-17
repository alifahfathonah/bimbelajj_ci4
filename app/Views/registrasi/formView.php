<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Bimbelajj - Form Registrasi Peserta Baru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Bimbelajj" name="description" />
    <meta content="Mundir Muzaini" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/template/assets/images/favicon.ico">

    <!-- App css -->
    <link href="/template/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="/template/assets/js/modernizr.min.js"></script>

</head>


<body class="account-pages">

    <!-- Begin page -->
    <div class="accountbg" style="background: url('/template/assets/images/bg-2.jpg');background-size: cover;"></div>

    <div class="wrapper-page account-page-full">

        <div class="card">
            <div class="card-block">

                <div class="account-box">

                    <div class="card-box p-5">
                        <h2 class="text-uppercase text-center pb-0">
                            <a href="index.html" class="text-success">
                                <span><img src="/template/assets/images/logo.png" alt="" height="26"></span>
                            </a>
                        </h2>
                        <div class="row pb-4">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted">Registrasi Peserta Baru Bimbelajj </p>
                                <hr>
                            </div>
                        </div>

                        <?php echo form_open('registrasi/simpan', 'class="form-horizontal"'); ?>
                        <?php $fld = 'nama'; ?>

                        <div class="form-group row m-b-20">
                            <div class="col-12">
                                <label for="<?php echo $fld; ?>">Nama Lengkap</label>
                                <input type="text" class="form-control <?php echo ($validasi->hasError($fld)) ? 'is-invalid' : ''; ?>" id="<?php echo $fld; ?>" name="<?php echo $fld; ?>" value="<?php echo old($fld); ?>" required="required">
                                <div class="invalid-feedback">
                                    <?php echo $validasi->getError($fld); ?>
                                </div>
                            </div>
                        </div>

                        <?php $fld = 'tgl_lahir'; ?>
                        <div class="form-group row m-b-20">
                            <div class="col-12">
                                <label for="<?php echo $fld; ?>">Tgl Lahir</label>
                                <input type="date" class="form-control <?php echo ($validasi->hasError($fld)) ? 'is-invalid' : ''; ?>" id="<?php echo $fld; ?>" name="<?php echo $fld; ?>" value="<?php echo old($fld); ?>" required="required">
                                <div class="invalid-feedback">
                                    <?php echo $validasi->getError($fld); ?>
                                </div>
                            </div>
                        </div>

                        <?php $fld = 'alamat'; ?>
                        <div class="form-group row m-b-20">
                            <div class="col-12">
                                <label for="<?php echo $fld; ?>">Alamat Rumah</label>
                                <input type="text" class="form-control <?php echo ($validasi->hasError($fld)) ? 'is-invalid' : ''; ?>" id="<?php echo $fld; ?>" name="<?php echo $fld; ?>" value="<?php echo old($fld); ?>" required="required">
                                <div class="invalid-feedback">
                                    <?php echo $validasi->getError($fld); ?>
                                </div>
                            </div>
                        </div>


                        <?php $fld = 'nomor_hp'; ?>
                        <div class="form-group row m-b-20">
                            <div class="col-12">
                                <label for="<?php echo $fld; ?>">Nomor HP Aktif</label>
                                <input type="text" class="form-control <?php echo ($validasi->hasError($fld)) ? 'is-invalid' : ''; ?>" id="<?php echo $fld; ?>" name="<?php echo $fld; ?>" value="<?php echo old($fld); ?>" required="required">
                                <div class="invalid-feedback">
                                    <?php echo $validasi->getError($fld); ?>
                                </div>
                            </div>
                        </div>

                        <?php $fld = 'asal_sekolah'; ?>
                        <div class="form-group row m-b-20">
                            <div class="col-12">
                                <label for="<?php echo $fld; ?>">Asal Sekolah</label>
                                <input type="text" class="form-control <?php echo ($validasi->hasError($fld)) ? 'is-invalid' : ''; ?>" id="<?php echo $fld; ?>" name="<?php echo $fld; ?>" value="<?php echo old($fld); ?>" required="required">
                                <div class="invalid-feedback">
                                    <?php echo $validasi->getError($fld); ?>
                                </div>
                            </div>
                        </div>


                        <?php $fld = 'alamat_sekolah'; ?>
                        <div class="form-group row m-b-20">
                            <div class="col-12">
                                <label for="<?php echo $fld; ?>">Alamat Sekolah</label>
                                <input type="text" class="form-control <?php echo ($validasi->hasError($fld)) ? 'is-invalid' : ''; ?>" id="<?php echo $fld; ?>" name="<?php echo $fld; ?>" value="<?php echo old($fld); ?>" required="required">
                                <div class="invalid-feedback">
                                    <?php echo $validasi->getError($fld); ?>
                                </div>
                            </div>
                        </div>


                        <?php $fld = 'kelas'; ?>
                        <div class="form-group row m-b-20">
                            <div class="col-12">
                                <label for="<?php echo $fld; ?>">Kelas</label>
                                <select class="form-control <?php echo ($validasi->hasError($fld)) ? 'is-invalid' : ''; ?>" id="<?php echo $fld; ?>" name="<?php echo $fld; ?>" required="required">
                                    <option value="">pilih kelas...</option>
                                    <?php foreach ($dtKelas as $dt) : ?>
                                        <?php
                                        $id = $dt['id'];
                                        $old = old($fld);
                                        ?>
                                        <option value=<?php echo $id ?> <?php echo ($id == $old) ? 'selected' : ''; ?>><?php echo $dt['nama_kelas']; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>




                        <?php $fld = 'program_pilihan'; ?>
                        <div class="form-group row m-b-20">
                            <div class="col-12">
                                <label for="<?php echo $fld; ?>">Program Pilihan</label>
                                <select class="form-control <?php echo ($validasi->hasError($fld)) ? 'is-invalid' : ''; ?>" id="<?php echo $fld; ?>" name="<?php echo $fld; ?>" required="required">
                                    <option value="">pilih Program...</option>
                                    <?php foreach ($dtProgram as $dt) : ?>
                                        <?php
                                        $id = $dt['id'];
                                        $old = old($fld);
                                        ?>
                                        <option value=<?php echo $id ?> <?php echo ($id == $old) ? 'selected' : ''; ?>><?php echo $dt['nama_program']; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row text-center m-t-10">
                            <div class="col-12">
                                <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Simpan</button>
                            </div>
                        </div>

                        </form>

                        <div class="row m-t-50">
                            <div class="col-sm-12 text-center">
                                <hr>
                                <p class="text-muted">Sudah terdaftar? <a href="/registrasi/dataku/" class="text-dark m-l-5"><b>Login</b></a></p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="m-t-4 text-center">
                <p class="account-copyright">2020 © Bimbelajj.com</p>
            </div>
        </div>



    </div>



    <!-- jQuery  -->
    <script src="/template/assets/js/jquery.min.js"></script>
    <script src="/template/assets/js/popper.min.js"></script>
    <script src="/template/assets/js/bootstrap.min.js"></script>
    <script src="/template/assets/js/metisMenu.min.js"></script>
    <script src="/template/assets/js/waves.js"></script>
    <script src="/template/assets/js/jquery.slimscroll.js"></script>

    <!-- App js -->
    <script src="/template/assets/js/jquery.core.js"></script>
    <script src="/template/assets/js/jquery.app.js"></script>

</body>

</html>