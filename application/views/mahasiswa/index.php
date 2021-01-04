<div class="container">
    <?php if ($this->session->flashdata('flash-data')): ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong> berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <a href = "<?= base_url();?>Mahasiswa/tambah" class = "btn btn-primary">Tambah Data</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Data Mahasiswa" name="keyword">
            <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h2>Daftar Mahasiswa</h2>
            <!--Alert-->
            <?php if(empty($mahasiswa)):?>
            <div class="alert alert-danger" role="alert">
                Data Mahasiswa tidak ditemukan
            </div>
            <?php endif; ?>

            <table border=1 class="table-striped" width="100%">
                <tbody>
                    <tr align="center">
                        <td><b>Nomor</b></td>
                        <td><b>Nim</b></td>
                        <!--<td><b>Email</b></td>-->
                        <!--TUGAS-->
                        <td><b>Nama</b></td>
                        <td><b>Jenis Kelamin</b></td>
                        <td><b>Foto Mahasiswa</b></td>
                        <td><b>Foto KTP</b></td>
                        <td><b>Proses</b></td>
                    </tr>
                    <?php foreach($mahasiswa as $mhs):?>
                    <tr>
                        <td><?= $mhs['id'];?></td>
                        <td><?= $mhs['nim'];?></td>
                        <td><?= $mhs['nama'];?></td>
                        <td><?= $mhs['jenis_kelamin'];?></td>
                        <!--<td><?= $mhs['fotoMhs'];?></td>-->
                        <td><img src="<?= base_url().'img/'.$mhs['fotoMhs']; ?>" width = 100 height = 100></td>
                        <!--<td><?= $mhs['fotoKtp'];?></td>-->
                        <td><img src="<?= base_url().'img/'.$mhs['fotoKtp']; ?>" width = 100 height = 100></td>
                        <td><a href="<?= base_url();?>Mahasiswa/hapus/<?= $mhs['id'];?>" 
                        class="badge badge-danger float-right"
                        onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a>
                        <a href="<?= base_url();?>mahasiswa/detail/<?= $mhs['id'];?>"
                        class="badge badge-primary float-right">Detail</a>
                        <a href="<?= base_url();?>mahasiswa/edit/<?= $mhs['id'];?>"
                        class="badge badge-success float-right">Edit</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>