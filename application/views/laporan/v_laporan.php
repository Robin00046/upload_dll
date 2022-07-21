<?php if ($this->session->userdata('id_jenis_user') == '1') { ?>

    <body>
        <div class="container-fluid">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="table-responsive">
                        <div class="container">
                            <div class="row">

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                                        Cetak Laporan Aktanotaris</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?php echo base_url() . 'aktanotaris/filter'  ?>" class="btn btn-success"'><i class="fa fa-table"></i>Aktanotaris</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Annual) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                                    Cetak Laporan Akta PPAT</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?php echo base_url() . 'aktappat/filter'  ?>" class="btn btn-success"'><i class="fa fa-table"></i>Akta PPAT</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tasks Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                                        Cetak Laporan Surat </div><br>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?php echo base_url() . 'surat/filter'  ?>" class="btn btn-success"'><i class="fa fa-table"></i>Surat </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
</body>
<?php } elseif ($this->session->userdata('id_jenis_user') == '2') { ?>
    <body>
        <div class="container-fluid">
            <div class="card shadow mb-4">
    
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="container">
                            <div class="row">
    
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                                        Cetak Laporan Aktanotaris</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?php echo base_url() . 'aktanotaris/filter'  ?>" class="btn btn-success"'><i class="fa fa-table"></i>Aktanotaris</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tasks Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                                        Cetak Laporan Surat </div><br>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?php echo base_url() . 'surat/filter'  ?>" class="btn btn-success"'><i class="fa fa-table"></i>Surat </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php } elseif ($this->session->userdata('id_jenis_user') == '3') { ?>

    <body>
        <div class="container-fluid">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="table-responsive">
                        <div class="container">
                            <div class="row">

                                <!-- Earnings (Annual) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                                        Cetak Laporan Akta PPAT</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?php echo base_url() . 'aktappat/filter'  ?>" class="btn btn-success"'><i class="fa fa-table"></i>Akta PPAT</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tasks Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                                        Cetak Laporan Surat </div><br>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?php echo base_url() . 'surat/filter'  ?>" class="btn btn-success"'><i class="fa fa-table"></i>Surat </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php } ?>