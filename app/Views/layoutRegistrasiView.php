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
    <link rel="shortcut icon" href="<?= base_url() ?>/template/assets/images/favicon.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> <!-- App css -->
    <link href="<?= base_url() ?>/template/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/template/metismenu-master/dist/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/template/assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="<?= base_url() ?>/template/assets/js/modernizr.min.js"></script>

</head>


<body class="account-pages">

    <!-- Begin page -->
    <div class="accountbg" style="background: url('<?= $bgImage; ?>');background-size: cover;"></div>

    <div class="wrapper-page account-page-full">

        <!-- disini tempat isinya -->
        <?php echo $this->renderSection('content'); ?>
        <div class="m-t-4 text-center">
            <p class="account-copyright">2020 © Bimbelajj.com</p>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <!-- jQuery  -->
    <!-- <script src="<?= base_url() ?>/template/assets/js/jquery.min.js"></script> -->
    <script src="<?= base_url() ?>/template/metismenu-master/dist/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/waves.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/jquery.slimscroll.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>/template/assets/js/jquery.core.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/jquery.app.js"></script>

</body>

</html>