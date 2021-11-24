<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>beranda/komdisma" aria-expanded="false">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Beranda</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>akun" aria-expanded="false">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Akun</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>profil">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>proker" aria-expanded="false">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Program Kerja</span>
            </a>
        </li>
    </ul>
</nav>

<div class="menu-box"><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-no-bordered">
                    <tr>
                        <th>Profil</th>
                        <td><?php echo $detail->nama_ormawa ?></td>
                    </tr>
                    <tr>
                        <th>Sejarah</th>
                        <td><?php echo $detail->sejarah ?></td>
                    </tr>
                    <tr>
                        <th>Visi Misi</th>
                        <td><?php echo $detail->visi_misi ?></td>
                    </tr>
                    <tr>
                        <th>Sekretariat</th>
                        <td><?php echo $detail->sekretariat ?></td>
                    </tr>
                    <tr>
                        <th>Kontak</th>
                        <td><?php echo $detail->kontak ?></td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-light" href="<?php echo base_url(); ?>profil">
                                <i class="fa fa-arrow-left " aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Back
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</div>