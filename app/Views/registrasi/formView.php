<?= $this->extend('layoutRegistrasiView') ?>
<?= $this->section('content') ?>


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

                <?php
                $fld = 'nama';
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $err = $validasi->getError($fld);
                ?>
                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Nama', $fld); ?>
                        <?= form_input($fld, $val, $extra); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>
                    </div>
                </div>

                <?php
                $fld = 'username';
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $err = $validasi->getError($fld);
                ?>
                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Username, gunakan username ini untuk login', $fld); ?>
                        <?= form_input($fld, $val, $extra); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>
                    </div>
                </div>

                <?php $fld = 'tgl_lahir' ?>
                <?php
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $err = $validasi->getError($fld);
                ?>
                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Tgl Lahir', $fld); ?>
                        <?= form_input($fld, $val, $extra, 'date'); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>
                    </div>
                </div>

                <?php $fld = 'alamat'; ?>
                <?php
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $err = $validasi->getError($fld);
                ?>
                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Alamat Rumah', $fld); ?>
                        <?= form_input($fld, $val, $extra, 'text'); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>
                    </div>
                </div>



                <?php $fld = 'nomor_hp'; ?>
                <?php
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $err = $validasi->getError($fld);
                ?>
                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Nomor HP', $fld); ?>
                        <?= form_input($fld, $val, $extra, 'text'); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>
                    </div>
                </div>


                <?php $fld = 'asal_sekolah'; ?>
                <?php
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $err = $validasi->getError($fld);
                ?>
                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Asal Sekolah', $fld); ?>
                        <?= form_input($fld, $val, $extra, 'text'); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>
                    </div>
                </div>



                <?php $fld = 'alamat_sekolah'; ?>
                <?php
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $err = $validasi->getError($fld);
                ?>

                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Alamat Sekolah', $fld); ?>
                        <?= form_input($fld, $val, $extra, 'text'); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>
                    </div>
                </div>


                <?php $fld = 'kelas'; ?>

                <?php
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $err = $validasi->getError($fld);

                $options[''] = 'Pilih Kelas...';
                foreach ($dtKelas as $opt) {
                    $options[$opt['id']] = $opt['nama_kelas'];
                }
                ?>
                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Kelas', $fld); ?>
                        <?= form_dropdown($fld, $options, $val, $extra); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>

                    </div>
                </div>




                <?php $fld = 'program_pilihan'; ?>
                <?php
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $err = $validasi->getError($fld);

                $options[''] = 'Program Pilihan...';
                foreach ($dtProgram as $opt) {
                    $options[$opt['id']] = $opt['nama_program'];
                }
                ?>
                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Program Pilihan', $fld); ?>
                        <?= form_dropdown($fld, $options, $val, $extra); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>

                    </div>
                </div>


                <div class="form-group row text-center m-t-10">
                    <div class="col-12">
                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Simpan</button>
                    </div>
                </div>

                <?= form_close(); ?>

                <div class="row m-t-50">
                    <div class="col-sm-12 text-center">
                        <hr>
                        <p class="text-muted">Sudah terdaftar? <a href="/registrasi/login" class="text-dark m-l-5"><b>Login</b></a></p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="m-t-4 text-center">
        <p class="account-copyright">2020 © Bimbelajj.com</p>
    </div>
</div>


<?= $this->endSection() ?>