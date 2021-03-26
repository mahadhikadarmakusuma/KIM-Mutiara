<form action="<?= site_url('PostinganController/inputTautan') ?>" method="POST" enctype="multipart/form-data">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Tambah Tautan Baru</h3>
        </div>
        <div class="panel-body">
            <p class="panel-title">Nama </p>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Instansi atau Perusahaan">
            <br>
            <p class="panel-title">Alamat</p>
            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Instansi atau Perusahaan">
            <br>
            <p class="panel-title">Website</p>
            <input type="text" name="website" class="form-control" placeholder="contoh WWW.EXAMPLE.COM">
            <br>
            <button type="submit" class="btn btn-primary" name="POST">Tambah</button>
            <!-- <button type="submit" class="btn btn-danger" name></button> -->
        </div>
    </div>
</form>