<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Data Prestasi Mahasiswa Ormawa Micro IT</h4><br>
            <div class="col-12">
              <?php if ($this->session->userdata('status') == 'Ormawa') { ?>
                <a href="<?php echo site_url(); ?>/prestasi/tambah" class="btn btn-primary">Tambah Data </a>
              <?php } ?>
              <a href="<?php echo site_url(); ?>/prestasi/excel" class="btn btn-sm btn-success ti-download"> Excel </a>
              <a href="<?php echo site_url(); ?>/prestasi/pdf" class="btn btn-sm btn-danger ti-download"> PDF </a>
            </div>
            <hr>
            <!-- <?php echo $this->session->flashdata('pesan') ?> -->
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm" id="tbl_login" width="100%" cellspacing="0" style="text-align: center;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Nama Ormawa</th>
                    <th>Jabatan</th>
                    <th>Prestasi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($data_prestasi as $u) {
                  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $u->nama ?></td>
                      <td><?php echo $u->nim ?></td>
                      <td><?php echo $u->nama_ormawa ?></td>
                      <td><?php echo $u->jabatan ?></td>
                      <td><?php echo $u->prestasi ?></td>

                      <td>
                        <?php if ($this->session->userdata('status') == 'Ormawa') { ?>
                          <a class="btn btn-sm btn-primary" href="<?php echo site_url('/prestasi/edit/' . $u->id) ?>">
                            <i class="mdi mdi-lead-pencil"></i>
                          </a> |
                          <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo site_url('/prestasi/hapus/' . $u->id) ?>">
                            <i class="mdi mdi-delete"></i>
                          </a>
                        <?php } ?>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Data IPK Ormawa Micro IT</h4><br>
            <div class="card-body">
              <div id="chartContainer" style="height: 300px; width: 100%;" class=""></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <?php
  $this->db->select('tahun, nilai');
  $data_ipk = $this->db->get('ormawa_proker')->result();
  $dataPoints = $data_ipk;
  foreach ($dataPoints as $k => $v) {
    $arr[] = ['label' => $v->tahun, 'y' => $v->nilai];
  };
  // print_r(json_encode($arr, JSON_NUMERIC_CHECK));
  ?>
  <script type="text/javascript">
    window.onload = function() {

      var chart = new CanvasJS.Chart("chartContainer", {
        theme: "light1", // "light2", "dark1", "dark2"
        animationEnabled: false, // change to true
        title: {
          text: ""
        },
        data: [{
          // Change type to "bar", "area", "spline", "pie",etc.
          type: "area",
          dataPoints: <?= json_encode($arr, JSON_NUMERIC_CHECK); ?>

        }]
      });
      chart.render();

    }
  </script>


  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
</div>
</div>