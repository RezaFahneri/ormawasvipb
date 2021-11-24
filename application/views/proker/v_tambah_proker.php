<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Program Kerja</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?php echo base_url('proker/tambahprokeraksi') ?>">
                                <div class="form-group">
                                    <label>Nama Ormawa</label>
                                    <select name="nama_ormawa" id="nama_ormawa" class="form-control" required>
                                        <option value="">---Pilih---</option>
                                        <option value="BEM">Badan Eksekutif Mahasiswa</option>
                                        <option value="DPM">Dewan Perwakilan Mahasiswa</option>
                                        <option value="Micro IT">Himavo Micro IT</option>
                                        <option value="Likista">Himavo Likista</option>
                                        <option value="Akmapesa">Himavo Akmapesa</option>
                                        <option value="Pangan dan Gizi">Himavo Pangan dan Gizi</option>
                                        <option value="Pertanian">Himavo Pertanian</option>
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
                                    <label>Program Kerja</label>
                                    <input type="text" name="nama_proker" class="form-control" required>
                                    <?php echo form_error('nama_proker', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control" required>
                                    <?php echo form_error('deskripsi', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Target</label>
                                    <input type="text" name="target" class="form-control" required>
                                    <?php echo form_error('target', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" required>
                                    <?php echo form_error('tanggal', '<div class="text-small text-danger"></div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" name="status" class="form-control" required>
                                    <?php echo form_error('status', '<div class="text-small text-danger"></div>') ?>
                                </div>


                                <button type="submit" class="btn btn-primary"><a onclick="return confirm('Program Kerja berhasil ditambahkan!')">Submit</a></button>&nbsp &nbsp
                                <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>proker">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>