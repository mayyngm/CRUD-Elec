<!--BAGIAN 1 NOMOR 6 JOBSHEET 4-->
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Mahasiswa
            </div>
            <div class="card-body">
                <h5 class="card-title"><?=$mahasiswa['nama']; ?></h5>
                <p class="card-text">
                    <label for=""><b> Nim: </b></label>
                    <?= $mahasiswa['nim']; ?> </p>
                <!--TUGAS-->
                <p class="card-text">
                        <label for=""><b> Jenis Kelamin: </b></label>
                        <?= $mahasiswa['jenis_kelamin']; ?></p>
                <p class="card-text">
                        <label for=""><b> Foto Mahasiswa</b></label> <br>
                        <td><img src="<?= base_url().'img/'.$mahasiswa['fotoMhs']; ?>" width = 100 height = 100></td>
                <p class="card-text">
                        <label for=""><b> Foto KTP</b></label> <br>
                        <td><img src="<?= base_url().'img/'.$mahasiswa['fotoKtp']; ?>" width = 100 height = 100></td> <br><br>
                <a href="<?= base_url();?>mahasiswa" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        </div>
    </div>
</div>