<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h3 class="m-0 font-weight-bold text-primary">Program Kerja Ormawa</h3><br>
                                <?php if ($this->session->userdata('status') == 'Ormawa') { ?>
                                    <a href="<?php echo base_url(); ?>proker/tambahproker" class="btn btn-primary">Tambah Program Kerja</a>
                                <?php } else if ($this->session->userdata('status') == 'DPM') { ?>
                                    <a href="<?php echo base_url(); ?>proker/tambahproker" class="btn btn-primary">Tambah Program Kerja</a>
                                <?php } ?>
                                <hr>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-no-bordered">
                                        <?php $no = 1;
                                        foreach ($proker as $p) : ?>
                                            <tr>
                                                <th>No</th>
                                                <td><?php echo $no++ ?></td>
                                            </tr>
                                            <tr>
                                                <th>Ormawa</th>
                                                <td><?php echo $p->nama_ormawa ?></td>
                                            </tr>
                                            <tr>
                                                <th>Program Kerja</th>
                                                <td><?php echo $p->nama_proker ?></td>
                                            </tr>
                                            <tr>
                                                <th>Deskripsi</th>
                                                <td><?php echo $p->deskripsi ?></td>
                                            </tr>
                                            <tr>
                                                <th>Target</th>
                                                <td><?php echo $p->target ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal</th>
                                                <td><?php echo $p->tanggal ?></td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td><?php echo $p->status ?></td>
                                            </tr>
                                            <?php if ($this->session->userdata('status') == 'Ormawa') { ?>
                                                <tr>
                                                    <th><a class="btn btn-primary" href="<?php echo base_url('proker/updatedata/' . $p->id_proker) ?> ">Edit</a>
                                                        <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-danger" href="<?php echo base_url('proker/deletedata/' . $p->id_proker) ?> ">Delete</a>
                                                    </th>
                                                </tr>
                                            <?php } else if ($this->session->userdata('status') == 'DPM') { ?>
                                                <tr>
                                                    <th><a class="btn btn-primary" href="<?php echo base_url('proker/updatedata/' . $p->id_proker) ?> ">Edit</a>
                                                        <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-danger" href="<?php echo base_url('proker/deletedata/' . $p->id_proker) ?> ">Delete</a>
                                                    </th>
                                                </tr>
                                            <?php } ?>
                                            <tr>
                                                <th></br> </th>
                                                <td></br></span></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
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