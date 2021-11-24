<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Input Data Berkas</h4><br>
            <form class="forms-sample" action="<?php echo site_url() . '/lpj/tambah_aksi'; ?>" method="post">
              <div class="form-group">
                <label for="exampleInputUsername1" required>Nama Kegiatan</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Kegiatan" name="nama_kegiatan" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" required>Nama Ormawa</label>
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
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Deskripsi</label>
                <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Deskripsi" name="deskripsi">
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Bentuk</label>
                <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Bentuk" name="bentuk" required>
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Status</label>
                <select name="status" id="status" class="form-control" required>
                  <?php if (($this->session->userdata('status') == 'Ormawa') || ($this->session->userdata('status') == 'DPM')) { ?>
                    <option value="Dikirim">Dikirim</option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Berkas</label>
                <input type="file" class="form-control" id="exampleInputConfirmPassword1" placeholder="Berkas" name="berkas" id="fileToUpload" required>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>