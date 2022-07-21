<?php if ($this->session->userdata('id_jenis_user') == '1') { ?>

    <body>
        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <div class="text-center">
                                <h4 class="text-gray-900 mb-4"><b>Selamat datang Notaris/PPAT</b></h4>
                                <h5 class="text-gray-900 mb-4"><b>
                                        Sistem informasi Arsip Digital Kantor Notaris dan PPAT Soraya Isnaini, SH., M.Kn. !
                                        Aplikasi ini merupakan aplikasi yang digunakan untuk membantu mengarsipkan berkas akta notaris, akta PPAT, surat masuk dan surat keluar.</b></h5>
                                <img src=" <?php echo base_url(); ?>assets/images/home.png" style="width:500px;height:500px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </div>

        </div>

    </body>

<?php } elseif ($this->session->userdata('id_jenis_user') == '2') { ?>

    <body>
        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <div class="text-center">
                                <h4 class="text-gray-900 mb-4"><b>Selamat datang Staff Notaris</b></h4>
                                <h5 class="text-gray-900 mb-4"><b>
                                        Sistem informasi Arsip Digital Kantor Notaris dan PPAT Soraya Isnaini, SH., M.Kn. !
                                        Aplikasi ini merupakan aplikasi yang digunakan untuk membantu mengarsipkan berkas akta notaris, akta PPAT, surat masuk dan surat keluar.</b></h5>
                                <img src=" <?php echo base_url(); ?>assets/images/home.png" style="width:500px;height:500px;">
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
        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <div class="text-center">
                                <h4 class="text-gray-900 mb-4"><b>Selamat datang Staff PPAT</b></h4>
                                <h5 class="text-gray-900 mb-4"><b>
                                        Sistem informasi Arsip Digital Kantor Notaris dan PPAT Soraya Isnaini, SH., M.Kn. !
                                        Aplikasi ini merupakan aplikasi yang digunakan untuk membantu mengarsipkan berkas akta notaris, akta PPAT, surat masuk dan surat keluar.</b></h5>
                                <img src=" <?php echo base_url(); ?>assets/images/home.png" style="width:500px;height:500px;">
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