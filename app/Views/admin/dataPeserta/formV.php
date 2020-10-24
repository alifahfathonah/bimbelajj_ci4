<?= $this->extend('layoutView') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">

            <div class="card-box">
                <h4 class="m-t-0 header-title">Edit Data</h4>
                <p class="text-muted m-b-30 font-14">
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">
                            <?php echo form_open($proses, 'class="form-horizontal"', ['id' => $dt->id]); ?>
                            <?php $fld = 'nama' ?>
                            <?= $ff->input_text('nama', 'Nama', old('nama'), $validasi, $dt->$fld) ?>
                            <?php $fld = 'username' ?>
                            <?= $ff->input_text($fld, 'Username', old($fld), $validasi, $dt->$fld) ?>
                            <?php $fld = 'password' ?>
                            <?= $ff->input_text($fld, 'Password', old($fld), $validasi, $dt->$fld) ?>
                            <?php $fld = 'tgl_lahir' ?>
                            <?= $ff->input_text($fld, 'Tanggal Lahir', old($fld), $validasi, $dt->$fld, 'date') ?>
                            <?php $fld = 'alamat' ?>
                            <?= $ff->input_text($fld, 'Alamat', old($fld), $validasi, $dt->$fld) ?>
                            <?php $fld = 'nomor_hp' ?>
                            <?= $ff->input_text($fld, 'Nomor HP', old($fld), $validasi, $dt->$fld) ?>
                            <?php $fld = 'asal_sekolah' ?>
                            <?= $ff->input_text($fld, 'Asal Sekolah', old($fld), $validasi, $dt->$fld) ?>
                            <?php $fld = 'alamat_sekolah' ?>
                            <?= $ff->input_text($fld, 'Alamat Sekolah', old($fld), $validasi, $dt->$fld) ?>
                            <?php $fld = 'kelas' ?>
                            <?= $ff->input_text($fld, 'Kelas', old($fld), $validasi, $dt->$fld) ?>
                            <?php $fld = 'program_pilihan' ?>
                            <?= $ff->input_text($fld, 'Program Pilihan', old($fld), $validasi, $dt->$fld) ?>
                            <?php $fld = 'status_diterima' ?>
                            <?= $ff->input_text($fld, 'Status Diterima', old($fld), $validasi, $dt->$fld) ?>
                            <hr>
                            <div class="text-right">
                                <a href="<?= $linkCancel ?>" class="btn btn-light mr-5">Cancel</a>
                                <?= form_submit('submit', 'Update', 'class="btn btn-primary"'); ?>
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