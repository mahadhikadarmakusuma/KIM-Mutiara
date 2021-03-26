<div class="container-fluid"> 
    <form class="navbar-form navbar-right">
        <div class="input-group">
            <span class="input-group-btn"><a href="<?php echo site_url('DashboardController/postingPotensi') ?>"><button type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i> Posting Baru</button></a></span>
        </div>
    </form>
    <h3 class="page-title">Kelola Postingan</h3>
    <p class="panel-subtitle">Potensi</p> 
    <?php
    if ($this->session->flashdata('sukses_hapus')) {
        echo "<div class='alert alert-success alert-dismissible' role='alert'>";
        echo "	<i class='fa fa-times-circle'></i>" . $this->session->flashdata('sukses_hapus');
        echo "</div>";
    }
    ?>
    <div class="row">
        <div class="col-md-12">
            <!-- TABLE HOVER -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Postingan</h3>
                </div>
                <form action="<?= site_url('DashboardController/potensi')?>" method="get">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" name="search" placeholder="Masukkan kata kunci" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-info" type="submit">Cari . .</button>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-danger"  onclick="reset()" type="submit">Reset</button>
                    </div>
                </form>
                <div class="panel-body">
                
                    <table class="table table-lg table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kegiatan</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <div id="result">
                    </div>
                        <tr role="row" class="odd">
                        <?php
                        $no = 1 + $this->uri->segment(3);
                        foreach ($pagination as $ps) { ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $ps->nama ?></td>
                                    <td><?php echo $ps->sub_kategori ?></td>
                                    <td><?php echo $ps->deskripsi ?></td>
                                    <td>
                                        <a href="<?= site_url('PostinganController/dataEdit/' . $ps->id) ?>"><span class="label label-info"><i class="lnr lnr-pencil"></i> EDIT</span></a>
                                        <a role="button" data-toggle="modal" data-target="#dataHapus<?php echo $ps->id ?>"><span class="label label-danger"><i class="lnr lnr-trash"></i> HAPUS</a>
                                    </td>
                                </tr>
                            <?php $no++; }
                             ?>
                             </tr>
                        </tbody>
                    </table>
                    <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
                </div>
            </div>
            <!-- END TABLE HOVER -->

            <!-- MODAL HAPUS DATA -->
            <?php foreach ($postingan as $ps) { ?>

                <div class="modal fade" id="dataHapus<?php echo $ps->id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title" id="myModalLabel">Hapus Barang</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url() . 'index.php/PostinganController/dataHapus' ?>">
                                <div class="modal-body">
                                    <p>Anda yakin mau menghapus <b><?php echo $ps->nama; ?></b></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id_postingan" value="<?php echo $ps->id; ?>">
                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                    <button class="btn btn-danger"><i class="lnr lnr-trash"></i> Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- AKHIR MODAL HAPUS DATA -->

        </div>
    </div>
</div>
<script>

    $('.dataHapus').click(function() {
        var id = $(this).data('id');
        $('#modalDelete').attr('href', 'delete-cover.php?id=' + id);
    })
</script>