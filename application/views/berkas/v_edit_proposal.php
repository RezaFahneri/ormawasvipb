<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Edit Berkas Proposal</h4><br>
            <?php foreach ($data_proposal as $u) { ?>
              <form class="forms-sample" action="<?php echo base_url(); ?>proposal/update" method="post">
                <tr>
                  <td>
                    <input type="hidden" name="id" value="<?php echo $u->id ?>">
                  </td>
                </tr>
                <div class="form-group">
                  <label for="exampleInputUsername1">Nama Kegiatan</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $u->nama_kegiatan ?>" name="nama_kegiatan">
                </div>
                <div class="form-group">
                  <label>Nama Ormawa *</label>
                  <select name="nama_ormawa" id="status" class="form-control" required>
                    <option value="<?php echo $u->nama_ormawa ?>" hidden><?php echo $u->nama_ormawa ?></option>
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
                  <label for="exampleInputPassword1">Deskripsi</label>
                  <input type="text" class="form-control" id="exampleInputConfirmPassword1" value="<?php echo $u->deskripsi ?>" name="deskripsi">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Bentuk</label>
                  <input type="text" class="form-control" id="exampleInputConfirmPassword1" value="<?php echo $u->bentuk ?>" name="bentuk">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Status</label>
                  <select name="status" id="status" class="form-control" required>
                    <option value="Revisi">Revisi</option>
                    <option value="Diterima">Diterima</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Berkas</label>
                  <input type="file" class="form-control" id="fileToUpload" value="<?php echo $u->berkas ?>" required>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="row">
</div