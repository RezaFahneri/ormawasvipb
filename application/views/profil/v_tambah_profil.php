<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Profil</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?php echo base_url('profil/tambahprofilaksi') ?>">
                                <div class="form-group">
                                    <label>Nama Ormawa </label>
                                    <select name="nama_ormawa" id="nama_ormawa" class="form-control" required>
                                            <option value="">---pilih---</option>
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
                                    <label>Sejarah </label>
                                    <input type="text" name="sejarah" class="form-control" required>
                                    <?php echo form_error('sejarah', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Visi Misi </label>
                                    <input type="text" name="visi_misi" class="form-control" required>
                                    <?php echo form_error('visi_misi', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Sekretariat</label>
                                    <input type="text" name="sekretariat" class="form-control" required>
                                    <?php echo form_error('sekretariat', '<div class="text-small text-danger"></div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Kontak </label>
                                    <input type="text" name="kontak" class="form-control" required>
                                    <?php echo form_error('kontak', '<div class="text-small text-danger"></div>') ?>
                                </div>


                                <button type="submit" class="btn btn-primary"><a onclick="return confirm('Profil berhasil ditambahkan!')">Submit</a></button>&nbsp &nbsp
                                <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>profil">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>