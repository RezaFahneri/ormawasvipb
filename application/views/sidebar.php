<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>beranda">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Beranda</span>
            </a>
        </li>
        <?php if ($this->session->userdata('status') == "DPM") { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>akun" aria-expanded="false">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Akun</span>
                </a>
            </li>
        <?php } else if ($this->session->userdata('status') == "Komdisma") { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>akun" aria-expanded="false">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Akun</span>
                </a>
            </li>
        <?php } ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>profil" aria-expanded="false">
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