<?= $this->extend('layoutView') ?>
<?= $this->section('content') ?>
<link href="<?= base_url(); ?>/plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css">
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h4 class="m-t-0 header-title">Berikut hasil Ujian anda</h4>

            <!-- <div class="card m-b-30 card-body text-xs-center"> -->
            <div class="card m-b-30 card-body text-center">
                <p class="mb-0">Jumlah Soal</p>
                <h3 class="mt-0"><?= $jml_soal; ?></h3>

                <p class="mb-0">Jumlah Benar</p>
                <h3 class="mt-0"><?= $jml_benar; ?></h3>


                <h3 class="mb-0">Nilai</h3>
                <h1 class="text-danger mt-0"><?= $nilai; ?></h1>


                <a href="<?= base_url('peserta'); ?>"" class=" btn btn-success waves-effect waves-light">OK</a>
            </div>



        </div>
    </div>
</div>
<!-- Sweet Alert Js  -->
<script src="<?= base_url(); ?>/plugins/sweet-alert/sweetalert2.min.js"></script>
<script src="<?= base_url('template'); ?>/assets/pages/jquery.sweet-alert.init.js"></script>
<?= $this->endSection(); ?>