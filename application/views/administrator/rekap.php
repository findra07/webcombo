<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Combo Putra - Rekap Data</title>

	<!-- Meta -->
	<meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
	<meta name="author" content="Bootstrap Gallery" />
	<link rel="canonical" href="https://www.bootstrap.gallery/">
	<meta property="og:url" content="https://www.bootstrap.gallery">
	<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
	<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
	<meta property="og:type" content="Website">
	<meta property="og:site_name" content="Bootstrap Gallery">

	<link href="<?php echo base_url('assets/') ?>img/combo-logo.png" rel="icon">
	<link href="<?php echo base_url('assets/') ?>img/combo-logo.png" rel="apple-touch-icon">

	<!-- *************
			************ CSS Files *************
		************* -->
	<link rel="stylesheet" href="<?php echo base_url('assets_admin/') ?>fonts/bootstrap/bootstrap-icons.css" />
	<link rel="stylesheet" href="<?php echo base_url('assets_admin/') ?>css/main.min.css" />

	<!-- *************
			************ Vendor Css Files *************
		************ -->

	<!-- Scrollbar CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets_admin/') ?>vendor/overlay-scroll/OverlayScrollbars.min.css" />
</head>

<style>
	.app-container {
		border-radius: 5px 0 0 5px;
	}

	.btn-info {
		--bs-btn-bg: none;
		--bs-btn-color: none;
	}

	.btn-sm,
	.btn-group-sm>.btn {
		--bs-btn-padding-y: 0.1rem;
		--bs-btn-padding-x: 0.35rem;
		--bs-btn-font-size: 0.8rem;
	}

	.justify-content-center {
		justify-content: right !important;
		margin-top: 20px;
	}
</style>

<body>

	<!-- Page wrapper start -->
	<div class="page-wrapper">

		<!-- Main container start -->
		<div class="main-container">

			<!-- Sidebar wrapper start -->
			<?php $this->load->view('administrator/sidemenu'); ?>
			<!-- Sidebar wrapper end -->

			<!-- App container starts -->
			<div class="app-container">

				<!-- App header starts -->
				<?php $this->load->view('administrator/topmenu'); ?>

				<!-- App Hero header ends -->

				<!-- App body starts -->
				<div class="app-body">

					<!-- Row start -->
					<div class="row">


						<div class="col-xxl-12">
							<div class="card mb-4">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped m-0">
											<thead>
												<tr>
													<th>No.</th>
													<th>ID</th>
													<th>Pengunjung</th>
													<th>Email</th>
													<th>Subjek</th>
													<th>Pesan</th>
													<th>Tanggal Input</th>
													<th>Action</th>

												</tr>
											</thead>
											<tbody>
												<?php
												$no = 1;
												foreach ($sendmail as $mail) { ?>
													<tr>
														<td><?php echo $start_number++; ?></td>
														<td>(<?php echo $mail->id ?>)</td>
														<td><a href="#" class="text-red"><?php echo $mail->name ?></a></td>
														<td><?php echo $mail->email ?></td>
														<td><?php echo $mail->subject ?></td>
														<td><?php echo $mail->message ?></td>
														<td><?php echo DATE('d-m-Y / H:i:s', strtotime($mail->submitted_at)) ?></td>
														<td>
															<a class="btn btn-info btn-sm" href="<?php echo base_url('Administrator/rekap?idmail=') . $mail->id ?> "><i class="bi bi-trash"></i>
															</a>
														</td>
													</tr>
												<?php
													// $no++;
												} ?>


											</tbody>
										</table>
										<div class="pagination_links">
											<?php echo $this->pagination->create_links(); ?>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

				</div>
				<!-- App body ends -->

				<!-- App footer start -->
				<div class="app-footer">
					<span>© Bootstrap Gallery 2023</span>
				</div>
				<!-- App footer end -->

			</div>
			<!-- App container ends -->

		</div>
		<!-- Main container end -->

	</div>
	<!-- Page wrapper end -->

	<!-- *************
			************ JavaScript Files *************
		************* -->
	<!-- Required jQuery first, then Bootstrap Bundle JS -->
	<script src="<?php echo base_url('assets_admin/') ?>js/jquery.min.js"></script>
	<script src="<?php echo base_url('assets_admin/') ?>js/bootstrap.bundle.min.js"></script>

	<!-- *************
			************ Vendor Js Files *************
		************* -->

	<!-- Overlay Scroll JS -->
	<script src="<?php echo base_url('assets_admin/') ?>vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
	<script src="<?php echo base_url('assets_admin/') ?>vendor/overlay-scroll/custom-scrollbar.js"></script>

	<!-- Custom JS files -->
	<script src="<?php echo base_url('assets_admin/') ?>js/custom.js"></script>
</body>

</html>