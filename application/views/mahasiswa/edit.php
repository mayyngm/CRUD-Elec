<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!--https://getbootstrap.com/docs/4.1/component/card/-->
            <div class = "card">
                <div class = "card-header">
                    Form Tambah Data Mahasiswa
            </div>
                <div class = "card-body">
                <?php if (validation_errors()):?> 
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif ?>
                    <form action = "" method = "post">
                    <!--BAGIAN 1 NOMOR 7F JOBSHEET 4-->
                    <input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
                    <!--https://getbootstrap.com/docs/4.1/component/form/-->
                        <div class = "form-group">
                            <label for="nim">NIM</label>
                            <!--BAGIAN 1 NOMOR 7D JOBSHEET 4-->
                            <input type="number" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'];?>">
                        </div> 
                        <div class = "form-group">
                            <label for="nama">Nama</label>
                            <!--BAGIAN 1 NOMOR 7D JOBSHEET 4-->
                            <input type="text" class="form-control" id="nama" name= "nama" value="<?= $mahasiswa['nama'];?>">
                        </div>
                        <div class = "form-group">
                            <label for="nama">Jenis Kelamin</label>

                            <input type="radio" class="form-check" id="pria" name="jenis_kelamin" value="pria">
                            <label for="male">Male</label><br>

                            <input type="radio" class="form-check" id="wanita" name="jenis_kelamin" value="wanita">
                            <label for="female">Female</label><br>
                        </div>
                        <div class = "form-group">
                            <label for="fotoMhs">Foto Mahasiswa</label>
                            <input type="file" class="form-control" id="fotoMhs" name="fotoMhs" value="<?= $mahasiswa['fotoMhs']; ?>">
                        </div>
                        <div class = "form-group">
                            <label for="fotoKtp">Foto KTP</label>
                            <input type="file" class="form-control" id="fotoKtp" name="fotoKtp" value="<?= $mahasiswa['fotoKtp']; ?>">
                        </div>
                        <button type = "submit" name = "submit" class = "btn btn-primary float-right"> Submit </button>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>