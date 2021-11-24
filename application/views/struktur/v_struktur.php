<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Struktur Organisasi</h4><br>
            <?php if ($this->session->userdata('status') == 'Ormawa') { ?>
              <a href="<?php echo site_url(); ?>/struktur/tambah" class="btn btn-primary">Tambah Data</a>
            <?php } ?>
            <hr>
            <!-- <?php echo $this->session->flashdata('pesan') ?> -->
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm" id="tbl_login" width="100%" cellspacing="0" style="text-align: center">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Jenis kelamin</th>
                    <th>Nama Ormawa</th>
                    <th>Jabatan</th>
                    <th>Prodi</th>
                    <th>Angkatan</th>
                    <th>Status</th>
                    <?php if ($this->session->userdata('status') == 'Ormawa') { ?>
                      <th>Aksi</th>
                    <?php } ?>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($data_struktur as $u) {
                  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $u->nim ?></td>
                      <td><?php echo $u->nama ?></td>
                      <td><?php echo $u->jenis_kelamin ?></td>
                      <td><?php echo $u->nama_ormawa ?></td>
                      <td><?php echo $u->jabatan ?></td>
                      <td><?php echo $u->prodi ?></td>
                      <td><?php echo $u->angkatan ?></td>
                      <td><?php echo $u->status ?></td>
                      <td>
                        <?php if ($this->session->userdata('status') == 'Ormawa') { ?>
                          <a class="btn btn-sm btn-primary" href="<?php echo site_url('/struktur/edit/' . $u->id) ?>">
                            <i class="mdi mdi-lead-pencil"></i>
                          </a> |
                          <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo site_url('/struktur/hapus/' . $u->id) ?>">
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
      </div>
    </div>
  </div>
</div>
</div>