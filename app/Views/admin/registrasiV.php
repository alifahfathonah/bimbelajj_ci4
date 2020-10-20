<?= $this->extend('layoutRegistrasiView') ?>
<?= $this->section('content') ?>



<div class="card">
    <div class="card-block">

        <div class="account-box">

            <div class="card-box p-5">
                <h2 class="text-uppercase text-center pb-0">
                    <a href="index.html" class="text-success">
                        <span><img src="<?= $bgLogo; ?>" alt="" height="26"></span>
                    </a>
                </h2>
                <div class="row pb-4">
                    <div class="col-sm-12 text-center">
                        <p class="text-muted"><?= $keterangan; ?></p>
                        <hr>
                    </div>
                </div>
                <?php echo form_open($proses, 'class="form-horizontal"'); ?>
                <?php $lst = ['username', 'password', 'nama', 'nomor_hp', 'jabatan', 'user_level', 'status']; ?>

                <?php
                $fld = $lst[0];
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $session = session();
                $flashdata = $session->getFlashdata($fld);
                if ($flashdata != null) {
                    $val = $flashdata;
                }
                $err = $validasi->getError($fld);
                ?>

                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Username', $fld); ?>
                        <?= form_input($fld, $val, $extra); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>
                    </div>
                </div>

                <?php
                $fld = $lst[1];
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $session = session();
                $flashdata = $session->getFlashdata($fld);
                if ($flashdata != null) {
                    $val = $flashdata;
                }
                $err = $validasi->getError($fld);
                ?>

                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Username', $fld); ?>
                        <?= form_input($fld, $val, $extra); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>
                    </div>
                </div>

                <?php
                $fld = $lst[2];
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $session = session();
                $flashdata = $session->getFlashdata($fld);
                if ($flashdata != null) {
                    $val = $flashdata;
                }
                $err = $validasi->getError($fld);
                ?>

                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Username', $fld); ?>
                        <?= form_input($fld, $val, $extra); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>
                    </div>
                </div>

                <?php
                $fld = $lst[3];
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $session = session();
                $flashdata = $session->getFlashdata($fld);
                if ($flashdata != null) {
                    $val = $flashdata;
                }
                $err = $validasi->getError($fld);
                ?>

                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Username', $fld); ?>
                        <?= form_input($fld, $val, $extra); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>
                    </div>
                </div>

                <?php
                $fld = $lst[4];
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $session = session();
                $flashdata = $session->getFlashdata($fld);
                if ($flashdata != null) {
                    $val = $flashdata;
                }
                $err = $validasi->getError($fld);
                ?>

                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Username', $fld); ?>
                        <?= form_input($fld, $val, $extra); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>
                    </div>
                </div>

                <?php
                $fld = $lst[5];
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $session = session();
                $flashdata = $session->getFlashdata($fld);
                if ($flashdata != null) {
                    $val = $flashdata;
                }
                $err = $validasi->getError($fld);
                ?>

                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Username', $fld); ?>
                        <?= form_input($fld, $val, $extra); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>
                    </div>
                </div>

                <?php
                $fld = $lst[6];
                $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
                $extra = [
                    'id' => $fld,
                    'class' => $class,
                    'required' => 'required'
                ];
                $val = (old($fld) != null) ? old($fld) : '';
                $session = session();
                $flashdata = $session->getFlashdata($fld);
                if ($flashdata != null) {
                    $val = $flashdata;
                }
                $err = $validasi->getError($fld);
                ?>

                <div class="form-group row m-b-20">
                    <div class="col-12">
                        <?= form_label('Username', $fld); ?>
                        <?= form_input($fld, $val, $extra); ?>
                        <div class="invalid-feedback">
                            <?= $err ?>
                        </div>
                    </div>
                </div>



                <div class="form-group row text-center m-t-10">
                    <div class="col-12">
                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Registrasi</button>
                    </div>
                </div>

                <?= form_close(); ?>

                <div class="row m-t-50">
                    <div class="col-sm-12 text-center">
                        <hr>
                        <p class="text-muted">Belum punya akun? <a href="<?= base_url() ?>/admin/akun" class="text-dark m-l-5"><b>Registrasi</b></a></p>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>


<?= $this->endSection() ?>