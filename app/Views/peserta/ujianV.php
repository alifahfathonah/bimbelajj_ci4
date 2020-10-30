<?php
echo $this->extend('layoutUjianView');

echo $this->section('content');
?>
<link href="<?= base_url(); ?>/plugins/spinkit/spinkit.css" rel="stylesheet" />
<style>
    #spinner {
        width: 60px;
        height: 60px;

        position: absolute;
        top: 50%;
        left: 50%;

        margin: -30px 0 0 -30px;
    }
</style>
<div id="spinner" class="sk-circle">
    <div class="sk-circle1 sk-child"></div>
    <div class="sk-circle2 sk-child"></div>
    <div class="sk-circle3 sk-child"></div>
    <div class="sk-circle4 sk-child"></div>
    <div class="sk-circle5 sk-child"></div>
    <div class="sk-circle6 sk-child"></div>
    <div class="sk-circle7 sk-child"></div>
    <div class="sk-circle8 sk-child"></div>
    <div class="sk-circle9 sk-child"></div>
    <div class="sk-circle10 sk-child"></div>
    <div class="sk-circle11 sk-child"></div>
    <div class="sk-circle12 sk-child"></div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title mb-4"><?= $dt_soal->nama; ?></h4>

            <div class="row">
                <div class="col-6 col-md-3">
                    <p>Jumlah Soal : <?= $jml_soal; ?></p>
                </div>
                <div class="col-6 col-md-3">
                    <p>Mulai : <?= date("h:i:sa", strtotime($dt->mulai)); ?></p>
                </div>
                <div class="col-6 col-md-3">
                    <p>Selesai :<?= date("h:i:sa", strtotime($dt->selesai)); ?></p>
                </div>
                <div class="col-6 col-md-3">
                    <p>Timer :</p>
                </div>

            </div>
            <!-- end row -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-8">
        <div class="card-box">
            <h4 id="soal-keberapa" class="header-title mb-4">Soal ke 1</h4>

            <div id="pertanyaan">

            </div>
        </div>
        <div class="card-box">
            <div class="row">
                <div class="col-sm-6 text-center mb-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jawaban" id="rda" value="A" onclick="setJwb('a')">
                        <label class="form-check-label" for="rda">A</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jawaban" id="rdb" value="B" onclick="setJwb('b')">
                        <label class="form-check-label" for="rdb">B</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jawaban" id="rdc" value="C" onclick="setJwb('c')">
                        <label class="form-check-label" for="rdc">C</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jawaban" id="rdd" value="D" onclick="setJwb('d')">
                        <label class="form-check-label" for="rdd">D</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jawaban" id="rde" value="E" onclick="setJwb('e')">
                        <label class="form-check-label" for="rde">E</label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="button-list text-center">
                        <button id="btnPrev" type="button" class="btn btn-primary waves-light waves-effect" onclick="getPrev()"><i class="fa fa-arrow-left"></i></button>
                        <button id="btnRagu" onclick="ragu()" type="button" class="btn btn-warning waves-light waves-effect">Ragu</button>
                        <button id="btnNext" type="button" class="btn btn-primary waves-light waves-effect" onclick="getNext()"><i class="fa fa-arrow-right"></i></button>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card-box">
            <h4 class="header-title mb-4">Jawaban</h4>
            <div class="row">
                <div class="col-12">
                    <?php $hit = 0 ?>
                    <?php while ($hit < $jml_soal) : ?>

                        <button id="goto<?= $hit; ?>" type="button" onclick="goTo(<?= $hit; ?>)" class="btn btn-light mb-1"> <?= sprintf('%02d', $hit + 1); ?> <span id="" class="badge ml-1">A</span> </button>
                        <?php $hit++ ?>
                    <?php endwhile ?>
                </div>

            </div>
            <hr>
            <button type="button" class="btn btn-danger waves-effect waves-light btn-block" data-toggle="modal" data-target="#myModal">Selesai</button>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
            </div>
            <?= form_open('ujian/selesai'); ?>
            <div class="modal-body">
                Apakah anda yakin menyelesaikan ujian ini?
                <?= form_hidden('jawaban', ''); ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger waves-light waves-effect">Selesai</button>

            </div>
            <?= form_close(); ?>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?= $this->endSection(); ?>