<?= $this->extend('layoutView') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">

            <div class="card-box">
                <h4 class="m-t-0 header-title">Edit Data Saya</h4>
                <p class="text-muted m-b-30 font-14">
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">
                            <?php echo form_open($proses, 'class="form-horizontal"', ['id' => $dt->id]); ?>
                            <?= $ff->input_text('nama', 'Nama', old('nama'), $validasi, $dt->nama) ?>
                            <?= $ff->input_text('username', 'Username', old('username'), $validasi, $dt->username) ?>
                            <?= $ff->input_text('password', 'Password', old('password'), $validasi, $dt->password) ?>
                            <?= $ff->input_text('tgl_lahir', 'Tgl Lahir', old('tgl_lahir'), $validasi, $dt->tgl_lahir, 'date') ?>
                            <?= $ff->input_text('alamat', 'Alamat', old('alamat'), $validasi, $dt->alamat) ?>
                            <?= $ff->input_text('nomor_hp', 'Nomor HP', old('nomor_hp'), $validasi, $dt->nomor_hp) ?>
                            <?= $ff->input_text('asal_sekolah', 'Asal Sekolah', old('asal_sekolah'), $validasi, $dt->asal_sekolah) ?>
                            <?= $ff->input_text('alamat_sekolah', 'Alamat Sekolah', old('alamat_sekolah'), $validasi, $dt->alamat_sekolah) ?>
                            <?= $ff->input_text('kelas', 'Kelas', old('kelas'), $validasi, $dt->kelas) ?>
                            <?= $ff->input_text('program_pilihan', 'Program Pilihan', old('program_pilihan'), $validasi, $dt->program_pilihan) ?>
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