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
                        <span class="pull-left mr-3"><img src="<?= base_url('img/foto_profil') . '/' . $foto; ?>" alt="" class="thumb-lg rounded-circle"></span>
                        <div class="media-body text-white">
                            <h4 class="mt-1 mb-1 font-18"><?= $dt->nama; ?></h4>
                            <p class="font-13 text-light"><?= $dt->jabatan; ?></p>
                            <p class="text-light mb-0"><?= $dt->nomor_hp; ?></p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-right">
                            <a href="<?= $linkCancel; ?>" class="btn btn-light">
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
                        <p class="text-muted font-13"><strong>Nama :</strong> <span class="m-l-15"><?= $dt->nama; ?></span></p>

                        <p class="text-muted font-13"><strong>Nomor HP :</strong><span class="m-l-15"><?= $dt->nomor_hp; ?></span></p>

                        <p class="text-muted font-13"><strong>Username :</strong> <span class="m-l-15"><?= $dt->username; ?></span></p>

                        <p class="text-muted font-13"><strong>Password :</strong> <span class="m-l-15"><?= $dt->password; ?></span></p>

                        <p class="text-muted font-13"><strong>Jabatan :</strong><span class="m-l-15"><?= $dt->jabatan; ?></span></p>
                        <p class="text-muted font-13"><strong>User Level :</strong><span class="m-l-15"><?= $dt->user_level; ?></span></p>
                        <p class="text-muted font-13"><strong>Foto :</strong><span class="m-l-15"><?= $dt->foto; ?></span></p>


                    </div>


                </div>
            </div>
            <!-- Personal-Information -->



        </div>



        <!-- end col -->

    </div>
</div>
<?= $this->endSection(); ?>