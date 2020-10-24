<?= $this->extend('layoutView') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><?= $judulTable; ?></h4>
                <!-- <p class="text-muted font-14 m-b-20">
                    For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
                </p> -->

                <div class="mb-3"><a href="<?= $linkTambah; ?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Asal Sekolah</th>
                            <th>Kelas</th>
                            <th>Program Pilihan</th>
                            <th>Detail</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dts as $dt) : ?>
                            <tr>
                                <th scope="row"><?= $dt->id; ?></th>
                                <td><?= $dt->nama; ?></td>
                                <td><?= $dt->alamat; ?></td>
                                <td><?= $dt->asal_sekolah; ?></td>
                                <td><?= $dt->nama_kelas; ?></td>
                                <td><?= $dt->nama_program; ?></td>
                                <td><a href="<?= $linkDetail . '/' . $dt->id; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a></td>
                                <td><a href="<?= $linkEdit . '/' . $dt->id; ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a></td>
                                <td><a onClick="return confirm('Yakin hapus data ini?')" href="<?= $linkHapus . '/' . $dt->id; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>

        </div>


    </div>
</div>
<?= $this->endSection(); ?>