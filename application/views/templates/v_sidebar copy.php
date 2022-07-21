<?php if ($this->session->userdata('id_jenis_user') == 'admin') { ?>
    <ul class="navbar-nav  sidebar sidebar-light accordion" style="background-color:#F7F5E6;" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href=<?= base_url('Home'); ?>>
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin</div>
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
                <i class="fa fa-map-marker"></i>
                <span>Akta</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href=<?= base_url('Aktanotaris'); ?>>
                        <i class="fa fa-map-marker"></i>
                        <span>Aktanotaris</span>
                    </a>
                    <a class="collapse-item" href="<?= base_url('Aktappat') ?>">
                        <i class="fa fa-map-marker"></i>
                        <span>Aktappat</span>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Surat</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href=<?= base_url('Suratmasuk'); ?>>
                        <i class="fa fa-map-marker"></i>
                        <span>Surat Masuk</span>
                    </a>
                    <a class="collapse-item" href="<?= base_url('Suratkeluar') ?>">
                        <i class="fa fa-map-marker"></i>
                        <span>Surat Keluar</span>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=<?= base_url('Laporan'); ?>>
                <i class="fas fa-fw fa-table"></i>
                <span>Laporan</span></a>

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </li>
    </ul>
<?php } elseif ($this->session->userdata('id_jenis_user') == 'owner') { ?>
    <ul class="navbar-nav  sidebar sidebar-dark accordion" style="background-color:#52658f;" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href=<?= base_url('Home'); ?>>
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Owner</div>
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
            <a class="nav-link" href=<?= base_url('laporan'); ?>>
                <i class="fas fa-fw fa-table"></i>
                <span>Laporan</span></a>

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </li>
    </ul>

<?php } elseif ($this->session->userdata('id_jenis_user') == 'staff aktanotaris') { ?>
    <ul class="navbar-nav  sidebar sidebar-dark accordion" style="background-color:#52658f;" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href=<?= base_url('Home'); ?>>
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Staff Aktanotaris</div>
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
                <span>Aktanotaris</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Surat</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href=<?= base_url('Suratmasuk'); ?>>
                        <i class="fas fa-fw fa-table"></i>
                        <span>Surat Masuk</span>
                    </a>
                    <a class="collapse-item" href="<?= base_url('Suratkeluar') ?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Surat Keluar</span>
                    </a>
                </div>
            </div>
        </li>
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
<?php } elseif ($this->session->userdata('id_jenis_user') == 'staff aktappat') { ?>
    <ul class="navbar-nav  sidebar sidebar-dark accordion" style="background-color:#52658f;" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href=<?= base_url('Home'); ?>>
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
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
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Surat</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href=<?= base_url('Suratmasuk'); ?>>
                        <i class="fas fa-fw fa-table"></i>
                        <span>Surat Masuk</span>
                    </a>
                    <a class="collapse-item" href="<?= base_url('Suratkeluar') ?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Surat Keluar</span>
                    </a>
                </div>
            </div>
        </li>
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>

<?php } ?>