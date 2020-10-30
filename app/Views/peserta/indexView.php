<?php
echo $this->extend('layoutView');

echo $this->section('content');
?>

<div class="container-fluid">
    <div class="card-box">

        <div class="row">
            <div class="col-sm-6 m-t-20 p-5">
                <h4 class="m-t-0 header-title">Pemberitahuan</h4>
                <p>
                    Data anda sudah tersimpan di database kami. Agar terdaftar sebagai member ajj, silahkan lakukan langkah-langkah berikut: </p>
                <ol>
                    <li>Biaya pendaftaran adalah Rp 150.000</li>
                    <li>Transfer ke rekening BANK MANDIRI 1400019999490 an. Drs Muhammad Jailani ( CEO Ajj)</li>
                    <li>kirimkan bukti transfer melalui WA ke No. 087777287561</li>
                    <li>Pendaftar akan mendapat buku Modul Materi Ajar</li>
                </ol>
                <p>Tim kami akan segera memperoses keanggotaan anda di Bimbel Ajj. </p>
                <p>Terima Kasih</p>
            </div>

            <div class="col-sm-6 m-t-20 p-5">
                <h4 class="m-t-0 header-title">Berikut data pendaftaran anda</h4>

                <dl class="row">
                    <dt class="col-sm-3">Nama</dt>
                    <dd class="col-sm-9"><?= $dt->nama; ?></dd>

                    <dt class="col-sm-3">Tgl Lahir</dt>
                    <dd class="col-sm-9"><?= $dt->tgl_lahir; ?></dd>

                    <dt class="col-sm-3">Alamat</dt>
                    <dd class="col-sm-9"><?= $dt->alamat; ?></dd>

                    <dt class="col-sm-3">Nomor HP</dt>
                    <dd class="col-sm-9"><?= $dt->nomor_hp; ?></dd>

                    <dt class="col-sm-3">Asal Sekolah</dt>
                    <dd class="col-sm-9"><?= $dt->asal_sekolah; ?></dd>

                    <dt class="col-sm-3">Alamat Sekolah</dt>
                    <dd class="col-sm-9"><?= $dt->alamat_sekolah; ?></dd>

                    <dt class="col-sm-3">Kelas</dt>
                    <dd class="col-sm-9"><?= $dt->nama_kelas; ?></dd>

                    <dt class="col-sm-3">Program Pilihan</dt>
                    <dd class="col-sm-9"><?= $dt->nama_program; ?></dd>

                </dl>

            </div>
            <hr>
            <div class="text-right">
                <a href="<?= $linkDetail; ?>" class="btn btn-primary">Detail</a>
                <a href="<?= $linkEdit; ?>" class="btn btn-success">edit</a>
            </div>
        </div>
        <!-- end row -->

    </div>


</div> <!-- container -->

<?= $this->endSection(); ?>