<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold">Selamat Datang</h2>
            <h6 class="font-weight-normal mb-0">di Sistem Informasi <span class="text-primary">Ormawa Sekolah Vokasi IPB</span></h6>
          </div>
          <div class="col-12 col-xl-4">
            <div class="justify-content-end d-flex">
              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                <button class="btn btn-sm btn-light bg-white">
                  <i class="mdi mdi-calendar">
                    <p id="date"></p>
                    <script>
                      document.getElementById("date").innerHTML = Date();
                    </script>

                  </i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg card-body">
          <img src="<?= base_url('assets'); ?>/images/svipb.jpg">
        </div>
      </div>
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <h4 class="mb-4">Akun</h4>
                <a class="btn btn-light " href="<?php echo base_url('akun') ?> "><b>Detail</b></a>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <h4 class="mb-4">Profil</h4>
                <a class="btn btn-light " href="<?php echo base_url('profil') ?> "><b>Detail</b></a>
                <p></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">Jumlah Program Kerja yang sedang berlangsung</p>
                <p class="fs-30 mb-2">3</p>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">Jumlah Program Kerja yang akan datang</p>
                <p class="fs-30 mb-2">7</p>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<!-- content-wrapper ends -->