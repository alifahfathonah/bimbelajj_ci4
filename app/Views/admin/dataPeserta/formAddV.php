<?= $this->extend('layoutView') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">

            <div class="card-box">
                <h4 class="m-t-0 header-title">Tambah Data</h4>
                <p class="text-muted m-b-30 font-14">
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">
                            <?php echo form_open($proses, 'class="form-horizontal"'); ?>
                            <?php $fld = 'nama' ?>
                            <?= $ff->input_text('nama', 'Nama', old('nama'), $validasi) ?>
                            <?php $fld = 'username' ?>
                            <?= $ff->input_text($fld, 'Username', old($fld), $validasi) ?>
                            <?php $fld = 'password' ?>
                            <?= $ff->input_text($fld, 'Password', old($fld), $validasi) ?>
                            <?php $fld = 'nomor_hp' ?>
                            <?= $ff->input_text($fld, 'Nomor HP', old($fld), $validasi) ?>
                            <?php $fld = 'jabatan' ?>
                            <?= $ff->input_text($fld, 'Jabatan', old($fld), $validasi) ?>
                            <?php $fld = 'foto' ?>
                            <?= $ff->input_text($fld, 'Foto', old($fld), $validasi) ?>
                            <?php $fld = 'user_level' ?>
                            <?= $ff->input_text($fld, 'User Level', old($fld), $validasi) ?>
                            <?php $fld = 'status' ?>
                            <?= $ff->input_text($fld, 'Status', old($fld), $validasi) ?>
                            <hr>
                            <div class="text-right">
                                <?= form_submit('submit', 'Tambah', 'class="btn btn-primary"'); ?>
                            </div>
                        </div>



                        <?php echo form_close() ?>
                    </div>
                </div>

            </div>
            <!-- end row -->

        </div> <!-- end card-box -->


    </div>
</div>

</div>


<?= $this->endSection() ?>