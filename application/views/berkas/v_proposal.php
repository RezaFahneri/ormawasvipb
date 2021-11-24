<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-8 grid-margin ">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between m-auto">
                            <h3 class="m-0 font-weight-bold text-primary">Proposal</h3><br>
                            <?php if (($this->session->userdata('status') == 'Ormawa') || ($this->session->userdata('status') == 'DPM')) { ?>
                                <a href="<?php echo base_url(); ?>proposal/tambah" class="btn btn-sm btn-outline-info ti-plus"> Tambah Proposal</a>
                            <?php } ?>
                        </div><br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Kegiatan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data_proposal as $u) :
                                    ?>
                                        <tr>
                                            <td><?= date("d/m/y, H:i:s") ?></td>
                                            <td><?php echo $u->nama_kegiatan ?></td>
                                            <td>
                                                <?php if ($u->status = "Diterima") { ?>
                                                    <span class="badge badge-success"></span><?php echo $u->status ?>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-link ti-zoom-in" href="<?php echo site_url('/proposal/detail/' . $u->id) ?>"></a> |
                                                <?php if ($this->session->userdata('status') == 'DPM') { ?>
                                                    <a class="btn btn-sm btn-link" href="<?php echo site_url('/proposal/edit/' . $u->id) ?>"><i class="mdi mdi-lead-pencil"></i></a> |
                                                <?php } ?>
                                                <a class="btn btn-sm btn-link ti-download" href="#"></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kategori Proposal</h4>
                        <p class="card-description">

                        </p>
                        <a class="btn btn-sm btn-outline-success">Diterima</a> |
                        <a class="btn btn-sm btn-outline-warning">Revisi</a> |
                        <a class="btn btn-sm btn-outline-secondary">Dikirim</a>

                    </div>
                    <div class="card-body">
                        <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <h4 class="card-title">Simpan Proposal ke Drive</h4>
                        </a>
                        <!-- <div class="collapse" id="collapseExample"> -->
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url() . 'proposal/gdrive'; ?>">
                            Pilih File:
                            <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">

                            <br>
                            <input type="submit" class="btn btn-sm btn-success" value="Upload File" name="submit">
                            <!-- <a class="btn btn-sm" href="https://drive.google.com/drive/u/0/folders/1xWnJAfVqiojGURXdS_CCXeXelZQJczZk">Upload Drive</a> -->
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>