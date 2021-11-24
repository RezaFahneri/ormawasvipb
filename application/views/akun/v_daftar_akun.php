<!-- partial:partials/_sidebar.html -->
<?php

include "assets/fpdf/panggildataakun.php";

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h4 class="m-0 font-weight-bold text-primary">Daftar Akun</h4><br>
                                <a href="<?php echo base_url(); ?>akun/tambahakun" class="btn btn-primary">Tambah Akun</a>
                                <hr>
                                <!-- <?php echo $this->session->flashdata('pesan') ?> -->
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="tbl_login" width="100%" cellspacing="0" style="text-align: center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Foto</th>
                                                <th>Status</th>
                                                <th>Nama Ormawa</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <?php if ($this->session->userdata('status') == 'Komdisma') { ?>
                                                    <th>Aksi</th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($akun as $d) :  ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $d->nama ?></td>
                                                    <td>
                                                        <img width="70px" src="<?php echo base_url() . 'assets/images/faces/' . $d->foto ?>">
                                                    </td>
                                                    <td><?php echo $d->status ?></td>
                                                    <td><?php echo $d->nama_ormawa ?></td>
                                                    <td><?php echo $d->email ?></td>
                                                    <td><?php echo $d->username ?></td>
                                                    <?php if ($this->session->userdata('status') == 'Komdisma') { ?>
                                                        <td>
                                                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('akun/updatedata/' . $d->id_login) ?>"><i class="mdi mdi-lead-pencil"></i></a>
                                                            <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('akun/deletedata/' . $d->id_login) ?>"><i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    <?php } ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table></br>
                                    <?php if ($this->session->userdata('status') == 'Komdisma') { ?>
                                        <a class="btn btn-danger ti-download" href="assets/fpdf/data_akun.php"> Unduh</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>