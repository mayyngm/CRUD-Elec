<!--praktikum bagian 2 no 4-->
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!--https://getbootstrap.com/docs/4.1/component/card/-->
            <div class = "card">
                <div class = "card-header">
                    Form Tambah Data Mahasiswa
            </div>
                <div class = "card-body">
                <!--percobaan bagian 2 no7j-->
                <?php if (validation_errors()):?> 
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif ?>
                    <form action="tambah" method="post" enctype="multipart/form-data">   
                    <!--https://getbootstrap.com/docs/4.1/component/form/--> 
                        <div class = "form-group">
                            <label for="nim">Nim</label>
                            <input type="number" class="form-control" id="nim" name= "nim">
                        </div>
                        <div class = "form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name= "nama">
                        </div>
                        <!--TUGAS-->
                        <div class = "form-group">
                            <label for="nama">Jenis Kelamin</label>

                            <input type="radio" class="form-check" id="pria" name="jenis_kelamin" value="pria">
                            <label for="male">Male</label><br>

                            <input type="radio" class="form-check" id="wanita" name="jenis_kelamin" value="wanita">
                            <label for="female">Female</label><br>
                        </div>
                        <div class = "form-group">
                            <label for="fotoMhs">Foto Mahasiswa</label>
                            <input type="file" class="form-control" id="fotoMhs" name= "fotoMhs">
                        </div>
                        <div class = "form-group">
                            <label for="fotoKtp">Foto KTP</label>
                            <input type="file" name="berkas" />
                        </div>
                        <button type = "submit" name = "submit" class = "btn btn-primary float-right" value="upload"> Submit </button>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>