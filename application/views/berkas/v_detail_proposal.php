<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h3 class="m-0 font-weight-bold text-primary">Detail Proposal</h3><br>
                                <table class="table table-no-bordered">
                                    <tr>
                                        <th>Nama Kegiatan</th>
                                        <td><?php echo $detail->nama_kegiatan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Ormawa</th>
                                        <td><?php echo $detail->nama_ormawa ?></td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td><?php echo $detail->deskripsi ?></td>
                                    </tr>
                                    <tr>
                                        <th>Bentuk</th>
                                        <td><?php echo $detail->bentuk ?></td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td><?php echo $detail->status ?></td>
                                    </tr>
                                    <tr>
                                        <th>Berkas</th>
                                        <td><?php echo $detail->berkas ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="btn btn-primary" href="<?php echo base_url(); ?>proposal">
                                                <i class="fa fa-arrow-left " aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;
                                            </a>
                                        </td>
                                    </tr>
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