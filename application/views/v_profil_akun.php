<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="card shadow mb-4">

                            <body>
                                <div class="col-md-12 col-lg-12 col-xs-12"><br>
                                    <h3 class="m-0 font-weight-bold text-primary">Profil Akun</h3>
                                    <hr>
                                    <div class="col-lg-5 col-md-5 col-xs-12">
                                        <img src="<?php echo base_url() ?>assets/images/faces/<?php echo $this->db->where('username', $this->session->userdata('username'))->get('tbl_login')->row('foto') ?>" class="img-thumbnail" style="height: 110px;width: 110px" alt="profile">
                                    </div><br>
                                    <div class="col-lg-7 col-md-7 col-xs-12">
                                        <h4>Nama Lengkap</h4>
                                        <p>&emsp;&nbsp;<?php echo $user['nama'] ?></p>
                                        <h4>Username</h4>
                                        <p>&emsp;&nbsp;<?php echo $user['username'] ?></p>
                                        <h4>Status</h4>
                                        <p>&emsp;&nbsp;<?php echo $user['status'] ?></p>
                                        <?php if ($this->session->userdata('status') == 'Ormawa') { ?>
                                            <h4>Nama Ormawa</h4>
                                            <p>&emsp;&nbsp;<?php echo $user['nama_ormawa'] ?></p>
                                        <?php } else if ($this->session->userdata('status') == 'DPM') { ?>
                                            <h4>Nama Ormawa</h4>
                                            <p>&emsp;&nbsp;<?php echo $user['nama_ormawa'] ?></p>
                                        <?php } else if ($this->session->userdata('status') == 'Pembina Ormawa') { ?>
                                            <h4>Nama Ormawa</h4>
                                            <p>&emsp;&nbsp;<?php echo $user['nama_ormawa'] ?></p>
                                        <?php } ?>
                                        <h4>Email</h4>
                                        <p>&emsp;&nbsp;<?php echo $user['email'] ?></p>
                                    </div><br>
                                </div>
                            </body>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>