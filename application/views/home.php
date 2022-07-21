<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Login</title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color:#52658f;">

	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-10 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body">
						<div class="text-center">
							<h2 class="text-gray-900 mb-4"><b> Sistem informasi Arsip Digital</b></h2>
							<h2 class="text-gray-900 mb-4"><b> Kantor Notaris dan PPAT
									Soraya Isnaini, SH., M.Kn.</b></h2>
						</div>
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block"> <img src="<?php echo base_url(); ?>assets/images/login.png" style="width:500px;height:500px;"> </div>
							<div class="col-lg-6">
								<div class="p-5">

									<div class="text-center">
										<h4 class="text-gray-900 mb-4"> Masukan Username dan Password</h4>
									</div>
									<form action="<?php echo site_url('login/masuk'); ?>" method="post">
										<div class="form-group">
											<input type="text" name="username" class="form-control form-control-user" id="username" placeholder="Username" required>
										</div>
										<div class="form-group">
											<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required>
										</div>
										<button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
										<?php
										if ($this->session->flashdata('pesan') <> '') {
										?>
											<div class="alert alert-dismissible alert-danger">
												<?php echo $this->session->flashdata('pesan'); ?>
											</div>
										<?php
										}
										?>
									</form>
									<hr>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

</body>

</html>