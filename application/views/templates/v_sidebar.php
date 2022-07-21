<?php if ($this->session->userdata('id_jenis_user') == '1') { ?>
    <ul class="navbar-nav  sidebar sidebar-light accordion" style="background-color:#F7F5E6;" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href=<?= base_url('Home'); ?>>
            <div class="sidebar-brand-icon">
                <i class="fas fa-user"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Notaris/PPAT</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href=<?= base_url('Home'); ?>>
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Interface
        </div>


        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa fa-file"></i>
                <span>Akta</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href=<?= base_url('Aktanotaris'); ?>>
                        <i class="fa fa-file"></i>
                        <span>Akta Notaris</span>
                    </a>
                    <a class="collapse-item" href="<?= base_url('Aktappat') ?>">
                        <i class="fa fa-file"></i>
                        <span>Akta PPAT</span>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=<?= base_url('Surat'); ?>>
                <i class="fas fa-fw fa-table"></i>
                <span>Surat</span></a>

        </li>
        <li class="nav-item">
            <a class="nav-link" href=<?= base_url('Laporan'); ?>>
                <i class="fas fa-fw fa-table"></i>
                <span>Laporan</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=<?= base_url('user'); ?>>
                <i class="fas fa-fw fa-user"></i>
                <span>User</span></a>

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </li>
    </ul>


<?php } elseif ($this->session->userdata('id_jenis_user') == '2') { ?>
    <ul class="navbar-nav  sidebar sidebar-light accordion" style="background-color:#F7F5E6;" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href=<?= base_url('Home'); ?>>
            <div class="sidebar-brand-icon">
                <i class="fas fa-user"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Staff Notaris</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href=<?= base_url('Home'); ?>>
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Interface
        </div>

        <li class="nav-item">
            <a class="nav-link" href=<?= base_url('aktanotaris'); ?>>
                <i class="fas fa-fw fa-table"></i>
                <span>Akta Notaris</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=<?= base_url('surat'); ?>>
                <i class="fas fa-fw fa-table"></i>
                <span>Surat</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=<?= base_url('Laporan'); ?>>
                <i class="fas fa-fw fa-table"></i>
                <span>Laporan</span></a>
        </li>
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
<?php } elseif ($this->session->userdata('id_jenis_user') == '3') { ?>
    <ul class="navbar-nav  sidebar sidebar-light accordion" style="background-color:#F7F5E6;" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href=<?= base_url('Home'); ?>>
            <div class="sidebar-brand-icon">
                <i class="fas fa-user"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Staff PPAT</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href=<?= base_url('Home'); ?>>
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Interface
        </div>

        <li class="nav-item">
            <a class="nav-link" href=<?= base_url('aktappat'); ?>>
                <i class="fas fa-fw fa-table"></i>
                <span>Akta PPAT</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=<?= base_url('Surat'); ?>>
                <i class="fas fa-fw fa-table"></i>
                <span>Surat</span></a>

        </li>
        <li class="nav-item">
            <a class="nav-link" href=<?= base_url('Laporan'); ?>>
                <i class="fas fa-fw fa-table"></i>
                <span>Laporan</span></a>
        </li>
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>

<?php } ?>