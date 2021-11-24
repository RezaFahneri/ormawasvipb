<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Input Data Struktur Organisasi</h4><br>
            <form class="forms-sample" action="<?php echo site_url() . '/struktur/tambah_aksi'; ?>" method="post">
              <div class="form-group">
                <label for="exampleInputUsername1">NIM</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="NIM" name="nim">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="status" class="form-control" required>
                  <option value="">--pilih--</option>
                  <option value="Pria">Pria</option>
                  <option value="Wanita">Wanita</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Jabatan</label>
                <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Jabatan" name="jabatan">
              </div>
              <div class="form-group">
              <label>Nama Ormawa *</label>
              <select name="nama_ormawa" id="status" class="form-control" required>
                <option value="">--pilih--</option>
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
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Prodi</label>
                <select name="prodi" id="status" class="form-control" required>
                  <option value="">--pilih--</option>
                  <option value="KMN">KMN</option>
                  <option value="EKW">EKW</option>
                  <option value="INF">INF</option>
                  <option value="TEK">TEK</option>
                  <option value="JMP">JMP</option>
                  <option value="GZI">GZI</option>
                  <option value="TIB">TIB</option>
                  <option value="IKN">IKN</option>
                  <option value="TNK">TNK</option>
                  <option value="MAB">MAB</option>
                  <option value="MNI">MNI</option>
                  <option value="KIM">KIM</option>
                  <option value="LNK">LNK</option>
                  <option value="AKN">AKN</option>
                  <option value="PVT">PVT</option>
                  <option value="TMP">TMP</option>
                  <option value="PPP">PPP</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Angkatan</label>
                <select name="angkatan" id="status" class="form-control" required>
                  <option value="">--pilih--</option>
                  <option value="56">56</option>
                  <option value="57">57</option>
                  <option value="58">58</option>
                  <option value="59">59</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Status</label>
                <select name="status" id="status" class="form-control" required>
                  <option value="">--pilih--</option>
                  <option value="Aktif">Aktif</option>
                  <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
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
