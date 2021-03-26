<script src="<?= base_url("assets/tinymce/js/tinymce/tinymce.min.js");?>" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>
<?php $a = $dataEditPemerintahan->row(); /*echo "<pre>"; print_r($dataEditPemerintahan); echo "</pre>"*/;?>
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Detail Postingan</h3>
        </div>
        <div class="panel-body">
            <div class="form-group row">
                <div class="col-md-4">
                    <?= form_open_multipart("PostinganController/ubah_foto_prestasi")?>
                        <div class=" form-group">
                            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                            <?php if($a->gambar != NULL || $a->gambar != "") {?>
                                <img src="<?= base_url("images/uploads/$a->gambar");?>" alt="<?= $a->nama ?>" width="200px">
                            <?php } else { ?>
                                <img src="<?= base_url("images/uploads/noimage.png");?>" alt="<?= $a->nama ?>" width="200px">
                            <?php } ?><br>
                            <label for="inputEmail3" class="col-form-label">Ubah Gambar</label>
                            <input class="form-control col-sm-2" type="file" name="foto">
                            <input type="hidden" name="fotolama" value="<?= $a->gambar?>">
                            <input type="hidden" name="id" value="<?= $a->id?>">
                        </div><br><br>
                        <div class="form-group">
                            <button class=" btn btn-success" type="submit">UBAH</button>
                        </div> 
                    </form>
                </div>
                <div class="col-md-8">
                    <?= form_open_multipart('PostinganController/editPemerintahanPrestasi') ?>
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
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea name="deskripsi" class="form-control" placeholder="textarea" rows="4"><?= $a->deskripsi ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea name="keterangan" class="form-control" placeholder="textarea" rows="4"><?= $a->keterangan ?></textarea>
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Ubah Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" name="gambar">
                                </div>
                            </div> -->
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