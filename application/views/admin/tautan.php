
<div class="container-fluid">
    <form class="navbar-form navbar-right">
        <div class="input-group">
            <span class="input-group-btn"><a href="<?= site_url('DashboardController/tautanInput');?>"><button type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i> Tambah Tautan</button></a></span>
        </div>
    </form>
    
    <h3>Kelola Tautan</h3>
    <?php
    if ($this->session->flashdata('sukses')) {
        echo "<div class='alert alert-success alert-dismissible' role='alert'>";
        echo "  <i class='fa fa-times-circle'></i>" . $this->session->flashdata('sukses');
        echo "</div>";
    } elseif($this->session->flashdata('gagal')) {
        echo "<div class='alert alert-danger alert-dismissible' role='alert'>";
        echo "  <i class='fa fa-times-circle'></i>" . $this->session->flashdata('gagal');
        echo "</div>";
    } elseif($this->session->flashdata('sukses_hapus')) {
        echo "<div class='alert alert-success alert-dismissible' role='alert'>";
        echo "  <i class='fa fa-times-circle'></i>" . $this->session->flashdata('sukses_hapus');
        echo "</div>";
    } elseif($this->session->flashdata('gagal_hapus')) {
        echo "<div class='alert alert-danger alert-dismissible' role='alert'>";
        echo "  <i class='fa fa-times-circle'></i>" . $this->session->flashdata('gagal_hapus');
        echo "</div>";
    }
    ?>
    <div class="row">
        <div class="col-md-12">
            <!-- TABLE HOVER -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar Tautan</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Instansi</th>
                                <th>Alamat</th>
                                <th>Website</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach ($tautan as $t) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $t->nama; ?></td>
                                    <td><?= $t->alamat; ?></td>

                                    <td><a href="<?= $t->website; ?>" target="_blank"><?= $t->website; ?></a></a></td>
                                    <td>
                                        <a role="button" data-toggle="modal" data-target="#dataHapus<?php echo $t->id ?>"><span class="label label-danger"><i class="lnr lnr-trash"></i> HAPUS</a>
                                    </td>
                                </tr>
                                <?php $no++;
                            } ?>
                        </tbody>
                    </table>

                    <!-- MODAL HAPUS DATA -->
                    <?php foreach ($tautan as $ps) { ?>

                        <div class="modal fade" id="dataHapus<?php echo $ps->id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                        <h3 class="modal-title" id="myModalLabel">Hapus Barang</h3>
                                    </div>
                                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'index.php/PostinganController/dataHapusTautan' ?>">
                                        <div class="modal-body">
                                            <p>Anda yakin mau menghapus <b><?php echo $ps->nama; ?></b></p>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden" name="id" value="<?php echo $ps->id; ?>">
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
    </div>
</div>

