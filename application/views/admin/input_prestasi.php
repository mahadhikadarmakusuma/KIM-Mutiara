<?php
if ($this->session->flashdata('sukses_posting')) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>";
    echo "	<i class='fa fa-times-circle'></i>" . $this->session->flashdata('sukses_posting');
    echo "</div>";
}
?>
<!-- <?php print_r($kategori)?> -->
<script src="<?= base_url("assets/tinymce/js/tinymce/tinymce.min.js");?>" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>


<?php
    if ($this->session->flashdata('message')) {
        echo "<div class='alert alert-success alert-dismissible' role='alert'>";
        echo "  <i class='fa fa-times-circle'></i>" . $this->session->flashdata('message');
        echo "</div>";
    }
?>

<form action="<?= site_url('PostinganController/input_prestasi') ?>" method="POST" enctype="multipart/form-data">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Postingan</h3>
        </div>
        <div class="panel-body">
            <p class="panel-title">Nama</p>
            <input type="text" name="nama" class="form-control" placeholder="Nama Postingan">
            <br>
            <p class="panel-title">Tanggal</p>
            <input type="date" name="tanggal" class="form-control" placeholder="Tanggal Penyelenggaraan">
            <br>
            <p class="panel-title">Deskripsi</p>
            <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi" rows="1"></textarea>
            <br>
            <p class="panel-title">Keterangan</p>
            <textarea class="form-control" name="keterangan" placeholder="Keterangan . . ." rows="4"></textarea>
            <br>
            <p class="panel-title">Gambar / Video</p>
            <input type="file" name="file" class="form-control" multiple>
            <br>
            <button type="submit" class="btn btn-primary" name="POST">Posting</button>
            <!-- <button type="submit" class="btn btn-danger" name></button> -->
        </div>
    </div>
</form>