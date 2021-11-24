<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Edit Data Struktur Organisasi</h4><br>
            <?php foreach ($data_struktur as $u) { ?>
              <form class="forms-sample" action="<?php echo site_url() . '/struktur/update'; ?>" method="post">
                <tr>
                  <td>
                    <input type="hidden" name="id" value="<?php echo $u->id ?>">
                  </td>
                </tr>
                <div class="form-group">
                  <label for="exampleInputUsername1">NIM</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $u->nim ?>" name="nim">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $u->nama ?>" name="nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Kelamin</label>
                  <select name="jenis_kelamin" id="status" class="form-control">
                    <option value="<?php echo $u->jenis_kelamin ?>" hidden><?php echo $u->jenis_kelamin ?></option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                  </select>
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
                  <label for="exampleInputConfirmPassword1">Jabatan</label>
                  <input type="text" class="form-control" id="exampleInputConfirmPassword1" value="<?php echo $u->jabatan ?>" name="jabatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Prodi</label>
                  <select name="prodi" id="status" class="form-control" required>
                    <option value="<?php echo $u->prodi ?>" hidden><?php echo $u->prodi ?></option>
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
                    <option value="<?php echo $u->angkatan ?>" hidden><?php echo $u->angkatan ?></option>
                    <option value="KMN">56</option>
                    <option value="EKW">57</option>
                    <option value="INF">58</option>
                    <option value="INF">59</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Status</label>
                  <select name="status" id="status" class="form-control">
                    <option value="<?php echo $u->status ?>" hidden><?php echo $u->status ?></option>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                  </select>
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
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Default form</h4>
    <p class="card-description">
      Basic form layout
    </p>
    <form class="forms-sample">
      <div class="form-group">
        <label for="exampleInputUsername1">Username</label>
        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputConfirmPassword1">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
      </div>
      <div class="form-check form-check-flat form-check-primary">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input">
          Remember me
        </label>
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <button class="btn btn-light">Cancel</button>
    </form>
  </div>
</div>
<div class="row">
</div>

<?php


?>
<br><br>


<script type="text/javascript" src="<?= base_url('assets'); ?>/grafik/pustaka_FSC/js/fusioncharts.js"></script>
<script type="text/javascript" src="<?= base_url('assets'); ?>/grafik/pustaka_FSC/js/themes/fusioncharts.theme.fint.js"></script>
<script type="text/javascript">
  FusionCharts.ready(function() {
    var G1 = new FusionCharts({
      "type": "column2d",
      "renderAt": "lokasi",
      "width": "600",
      "height": "250",
      "dataFormat": "jsonurl",
      "dataSource": "grafik/ormawa_column.php"
    });
    G1.render();
  })
</script>
<!-- plugins:js -->
<script src="<?= base_url('assets'); ?>/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= base_url('assets'); ?>/vendors/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="<?= base_url('assets'); ?>/js/dataTables.select.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url('assets'); ?>/js/off-canvas.js"></script>
<script src="<?= base_url('assets'); ?>/js/hoverable-collapse.js"></script>
<script src="<?= base_url('assets'); ?>/js/template.js"></script>
<script src="<?= base_url('assets'); ?>/js/settings.js"></script>
<script src="<?= base_url('assets'); ?>/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= base_url('assets'); ?>/js/dashboard.js"></script>
<script src="<?= base_url('assets'); ?>/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->
</body>

</html>