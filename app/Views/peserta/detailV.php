<?= $this->extend('layoutView') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <!-- meta -->
            <div class="profile-user-box card-box bg-custom">
                <div class="row">
                    <div class="col-sm-6">
                        <?php if ($dt->foto == '') {
                            $foto = 'default.jpg';
                        } else {
                            $foto = $dt->foto;
                        }


                        ?>

                        <span class="pull-left mr-3">
                            <a href="<?= $linkUpload; ?>"> <img id="img-foto" src="<?= base_url('img/foto_profil') . '/' . $foto; ?>" alt="" class="thumb-lg rounded-circle"></a>
                        </span>
                        <div class="media-body text-white">
                            <h4 class="mt-1 mb-1 font-18"><?= $dt->nama; ?></h4>
                            <p class="font-13 text-light"><?= $dt->nama_program; ?></p>
                            <a href="<?= $linkUpload; ?>" class="btn btn-light">Upload Foto</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-sm-flex justify-content-end mt-2 mt-sm-0">
                            <a href="<?= $linkCancel; ?>" class="btn btn-light mr-2">
                                <i class="fa fa-mail-reply mr-1"></i> Back
                            </a>
                            <a href="<?= $linkEdit . '/' . $dt->id ?>" class="btn btn-light">
                                <i class="fa fa-pencil-square-o mr-1"></i> Edit
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!--/ meta -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <!-- Personal-Information -->
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-20">Detail Data</h4>
                <div class="panel-body">
                    <div class="text-left">
                        <p class="font-15"><strong>Nama :</strong> <span class="m-l-15"><?= $dt->nama; ?></span></p>
                        <p class="font-15"><strong>Username :</strong> <span class="m-l-15"><?= $dt->username; ?></span></p>
                        <p class="font-15"><strong>Password :</strong> <span class="m-l-15"><?= $dt->password; ?></span></p>
                        <p class="font-15"><strong>Tgl Lahir :</strong> <span class="m-l-15"><?= $dt->tgl_lahir; ?></span></p>
                        <p class="font-15"><strong>Alamat :</strong> <span class="m-l-15"><?= $dt->alamat; ?></span></p>
                        <p class="font-15"><strong>Nomor HP :</strong> <span class="m-l-15"><?= $dt->nomor_hp; ?></span></p>
                        <p class="font-15"><strong>Asal Sekolah :</strong> <span class="m-l-15"><?= $dt->asal_sekolah; ?></span></p>
                        <p class="font-15"><strong>Alamat Sekolah :</strong> <span class="m-l-15"><?= $dt->alamat_sekolah ?></span></p>
                        <p class="font-15"><strong>Kelas :</strong> <span class="m-l-15"><?= $dt->nama_kelas; ?></span></p>
                        <p class="font-15"><strong>Program Pilihan :</strong> <span class="m-l-15"><?= $dt->nama_program; ?></span></p>
                        <p class="font-15"><strong>Status :</strong> <span class="m-l-15"><?= $dt->status_diterima; ?></span></p>
                    </div>


                </div>
            </div>
            <!-- Personal-Information -->



        </div>



        <!-- end col -->

    </div>
</div>


<div id="upload-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-8">
                        <img src="" id="sample_image" class="img-fluid" alt="Responsive image" />
                    </div>
                    <div class="col-sm-4">
                        <div class="preview"></div>
                    </div>
                </div>

                <div class="form-group account-btn text-center m-t-10">
                    <div class="col-12">
                        <button type="button" id="crop" class="btn w-lg btn-rounded btn-primary waves-effect waves-light">Crop</button>
                    </div>
                </div>



            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?= $this->endSection(); ?>