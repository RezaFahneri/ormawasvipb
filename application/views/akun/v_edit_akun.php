<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary">Edit Data Akun</h4>
                    </div>
                    <div class="card-body">
                        <?php foreach ($akun_edit as $to) : ?>
                            <form method="POST" action="<?php echo base_url('akun/updatedataaksi'); ?>">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="hidden" name="id_login" class="form-control" value="<?php echo $to->id_login ?>">
                                    <input type="text" name="nama" class="form-control" value="<?php echo $to->nama ?>">
                                    <?php echo form_error('nama', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" name="foto" class="form-control-file"><br>
                                    <img src="<?php echo base_url() . 'assets/images/faces/' . $to->foto ?>">
                                    <p><b><?php echo $to->foto ?></b></p>
                                    <?php echo form_error('foto', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Status </label></br>
                                    <select name="status" id="status" class="form-control" value="<?php echo $to->status ?>" required>
                                        <option value="">--pilih--</option>
                                        <option value="Ormawa">Ormawa</option>
                                        <option value="DPM">DPM</option>
                                        <option value="Komdisma">komdisma</option>
                                        <option value="Pembina Ormawa">Pembina Ormawa</option>
                                        <option value="Pimpinan">Pimpinan</option>
                                    </select>
                                    <?php echo form_error('status', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Nama Ormawa *</label>
                                    <select name="nama_ormawa" id="nama_ormawa" class="form-control" value="<?php echo $to->nama_ormawa ?>" required>
                                        <option value="-">-</option>
                                        <option value="BEM">Badan Eksekutif Mahasiswa</option>
                                        <option value="DPM">Dewan Perwakilan Mahasiswa</option>
                                        <option value="Himavo Micro IT">Himavo Micro IT</option>
                                        <option value="Himavo Likista">Himavo Likista</option>
                                        <option value="Himavo Akmapesa">Himavo Akmapesa</option>
                                        <option value="Himavo Pangan dan Gizi">Himavo Pangan dan Gizi</option>
                                        <option value="Himavo Pertanian">Himavo Pertanian</option>
                                        <option value="Forum Mahasiswa Islam">Forum Mahasiswa Islam</option>
                                        <option value="Forum Keluarga Mahasiswa Kristen">Forum Keluarga Mahasiswa Kristen</option>
                                        <option value="Forum Keluarga Mahasiswa Katolik">Forum Keluarga Mahasiswa Katolik</option>
                                        <option value="KPL Angsana">KPL Angsana</option>
                                        <option value="Medical Team">Medical Team</option>
                                        <option value="Teater Jendela">Teater Jendela</option>
                                        <option value="PSM D’Voice">PSM D’Voice</option>
                                        <option value="Music of Vocation">Music of Vocation</option>
                                        <option value="Gema Nusantara">Gema Nusantara</option>
                                        <option value="Agrimove">Agrimove</option>
                                        <option value="Obscura">Obscura</option>
                                    </select>
                                    <?php echo form_error('nama_ormawa', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="<?php echo $to->email ?>">
                                    <?php echo form_error('email', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $to->username ?>">
                                    <?php echo form_error('username', '<div class="text-small text-danger"></div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" value="<?php echo $to->password ?>">
                                    <?php echo form_error('password', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <p>Keterangan:</p>
                                <p> * Wajib diisi untuk akun Ormawa, DPM, dan Pembina Ormawa</p>
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>