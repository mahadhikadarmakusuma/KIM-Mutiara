<script src="<?= base_url("assets/tinymce/js/tinymce/tinymce.min.js");?>" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>
<?php $a = $dataEditPemerintahan->row(); /*echo "<pre>"; print_r($dataEditPemerintahan); echo "</pre>"*/;?>
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Detail Postingan</h3>
        </div>
        <div class="panel-body">
            <div class="form-group row">
                <div class="col-md-8">
                    <?= form_open_multipart('PostinganController/editPemerintahanTentang') ?>
                        <div class="form-group row">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="hidden" value="<?= $a->id ?>" name="id">
                                    <input name="nama" type="text" class="form-control" id="nama" value="<?= $a->nama ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input name="tanggal" type="date" class="form-control" id="tanggal" value="<?= $a->tanggal ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea name="keterangan" class="form-control" placeholder="textarea" rows="4"><?= $a->keterangan ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button class="btn btn-success" type="submit">UBAH</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>