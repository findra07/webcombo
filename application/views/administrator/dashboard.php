<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Combo Putra - Dashbord</title>

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
                <?php $this->load->view('administrator/topmenu') ?>


                <!-- App Hero header ends -->

                <!-- App body starts -->
                <div class="app-body">

                    <!-- Row starts -->
                    <div class="row">
                        <div class="col-xxl-3 col-sm-6 col-12">
                            <div class="card mb-4">
                                <div class="card-body d-flex align-items-center p-0">
                                    <div class="p-4">
                                        <i class="bi bi-pie-chart fs-1 lh-1 text-primary"></i>
                                    </div>
                                    <div class="py-4">
                                        <h5 class="text-secondary fw-light m-0">Visitors</h5>
                                        <h1 class="m-0">675</h1>
                                    </div>
                                    <span class="badge bg-info position-absolute top-0 end-0 m-3 bg-opacity-50"><i class="bi bi-caret-up-fill"></i>18%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-sm-6 col-12">
                            <div class="card mb-4">
                                <div class="card-body d-flex align-items-center p-0">
                                    <div class="p-4">
                                        <i class="bi bi-sticky fs-1 lh-1 text-primary"></i>
                                    </div>
                                    <div class="py-4">
                                        <h5 class="text-secondary fw-light m-0">Sales</h5>
                                        <h1 class="m-0">450</h1>
                                    </div>
                                    <span class="badge bg-info position-absolute top-0 end-0 m-3 bg-opacity-50"><i class="bi bi-caret-up-fill"></i>15%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-sm-6 col-12">
                            <div class="card mb-4">
                                <div class="card-body d-flex align-items-center p-0">
                                    <div class="p-4">
                                        <i class="bi bi-emoji-smile fs-1 lh-1 text-primary"></i>
                                    </div>
                                    <div class="py-4">
                                        <h5 class="text-secondary fw-light m-0">Income</h5>
                                        <h1 class="m-0">75k</h1>
                                    </div>
                                    <span class="badge bg-info position-absolute top-0 end-0 m-3 bg-opacity-50"><i class="bi bi-caret-up-fill"></i>11%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-sm-6 col-12">
                            <div class="card mb-4">
                                <div class="card-body d-flex align-items-center p-0">
                                    <div class="p-4">
                                        <i class="bi bi-star fs-1 lh-1 text-danger"></i>
                                    </div>
                                    <div class="py-4">
                                        <h5 class="text-secondary fw-light m-0">Reviews</h5>
                                        <h1 class="m-0 text-danger">98%</h1>
                                    </div>
                                    <span class="badge bg-danger position-absolute top-0 end-0 m-3 bg-opacity-50"><i class="bi bi-caret-down-fill"></i>9%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row ends -->

                    <!-- Row starts -->
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Activity Report</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div id="activityReport"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->

                    <!-- Row start -->
                    <div class="row">
                        <div class="col-sm-3 col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Sales</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div id="revenue"></div>
                                    <div class="text-center my-4">
                                        <h1>
                                            689
                                            <i class="bi bi-arrow-up-right-circle-fill text-success"></i>
                                        </h1>
                                        <p class="fw-light m-0">18% higher than last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Revenue</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div id="revenue2"></div>
                                    <div class="text-center my-4">
                                        <h1>
                                            992
                                            <i class="bi bi-arrow-up-right-circle-fill text-success"></i>
                                        </h1>
                                        <p class="fw-light m-0">21% higher than last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Payments</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div id="revenue3"></div>
                                    <div class="text-center my-4">
                                        <h1>
                                            864
                                            <i class="bi bi-arrow-up-right-circle-fill text-success"></i>
                                        </h1>
                                        <p class="fw-light m-0">16% higher than last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Income</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div id="revenue4"></div>
                                    <div class="text-center my-4">
                                        <h1>
                                            598
                                            <i class="bi bi-arrow-down-right-circle-fill text-danger"></i>
                                        </h1>
                                        <p class="fw-light m-0">24% higher than last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->

                    <!-- Row start -->
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Recent Buyers</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped align-middle">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Link</th>
                                                    <th>Customer</th>
                                                    <th>Category</th>
                                                    <th>Price</th>
                                                    <th>Popularity</th>
                                                    <th>Views</th>
                                                    <th>Engagement</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex flex-row align-items-center">
                                                            <img src="<?php echo base_url('assets_admin/') ?>images/mobiles/mob1.jpg" class="img-5x" alt="Google Admin" />
                                                            <div class="d-flex flex-column ms-3">
                                                                <p class="m-0">Apple iPhone 12</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-danger">#L10010021</a>
                                                    </td>
                                                    <td>Rickey Singleton</td>
                                                    <td>
                                                        <span class="badge bg-danger">Mobiles</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info me-2">$250.00</span>
                                                    </td>
                                                    <td>
                                                        <div class="rate2 rating-stars"></div>
                                                    </td>
                                                    <td>
                                                        <div id="sparkline1"></div>
                                                    </td>
                                                    <td>
                                                        <p class="m-0 text-danger">
                                                            Higher than last week
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex flex-row align-items-center">
                                                            <img src="<?php echo base_url('assets_admin/') ?>images/mobiles/mob2.jpg" class="img-5x" alt="Bootstrap Gallery" />
                                                            <div class="d-flex flex-column ms-3">
                                                                <p class="m-0">Apple iPhone 13</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-danger">#L10010065</a>
                                                    </td>
                                                    <td>Warren Alvarez</td>
                                                    <td>
                                                        <span class="badge bg-danger">Mobiles</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info me-2">$250.00</span>
                                                    </td>
                                                    <td>
                                                        <div class="rate5 rating-stars"></div>
                                                    </td>
                                                    <td>
                                                        <div id="sparkline2"></div>
                                                    </td>
                                                    <td>
                                                        <p class="m-0 text-danger">
                                                            Higher than last week
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex flex-row align-items-center">
                                                            <img src="<?php echo base_url('assets_admin/') ?>images/mobiles/mob3.jpg" class="img-5x" alt="Bootstrap Gallery" />
                                                            <div class="d-flex flex-column ms-3">
                                                                <p class="m-0">Apple iPhone 12</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-danger">#L10010098</a>
                                                    </td>
                                                    <td>Christian Franklin</td>
                                                    <td>
                                                        <span class="badge bg-danger">Mobiles</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info me-2">$250.00</span>
                                                    </td>
                                                    <td>
                                                        <div class="rate4 rating-stars"></div>
                                                    </td>
                                                    <td>
                                                        <div id="sparkline3"></div>
                                                    </td>
                                                    <td>
                                                        <p class="m-0 text-danger">
                                                            Higher than last week
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->

                    <!-- Row start -->
                    <div class="row">
                        <div class="col-xl-4 col-sm-6 col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Messages</h5>
                                </div>
                                <div class="card-body">
                                    <div class="scroll350">
                                        <div class="d-flex align-items-center mb-4">
                                            <img src="<?php echo base_url('assets_admin/') ?>images/user4.svg" class="img-5x me-3 rounded-4" alt="Admin Dashboard" />
                                            <div class="m-0">
                                                <h6 class="fw-bold">Roseann Talmai</h6>
                                                <p class="mb-2">
                                                    New contract web template design and web development
                                                    including testing and bug fixes.
                                                </p>
                                                <p class="small mb-2 text-secondary">3 day ago</p>
                                            </div>
                                            <span class="badge bg-success ms-auto">Completed</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-4">
                                            <img src="<?php echo base_url('assets_admin/') ?>images/user3.svg" class="img-5x me-3 rounded-4" alt="Admin Dashboard" />
                                            <div class="m-0">
                                                <h6 class="fw-bold">Clyde Theodora</h6>
                                                <p class="mb-2">
                                                    Quarter budget analysis planned review and approved
                                                    by team.
                                                </p>
                                                <p class="small mb-2 text-secondary">2 days ago</p>
                                            </div>
                                            <span class="badge bg-info ms-auto">Completed</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-4">
                                            <img src="<?php echo base_url('assets_admin/') ?>images/user1.svg" class="img-5x me-3 rounded-4" alt="Admin Themes" />
                                            <div class="m-0">
                                                <h6 class="fw-bold">Ilyana Maes</h6>
                                                <p class="mb-2">
                                                    Adobe creative cloud new plan approved for Alex's
                                                    team.
                                                </p>
                                                <p class="small mb-2 text-secondary">1 day ago</p>
                                            </div>
                                            <span class="badge bg-danger ms-auto">Completed</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-4">
                                            <img src="<?php echo base_url('assets_admin/') ?>images/user5.svg" class="img-5x me-3 rounded-4" alt="Admin Themes" />
                                            <div class="m-0">
                                                <h6 class="fw-bold">Zahra Brigitte</h6>
                                                <p class="mb-2">
                                                    Create user journey and flows for Zia's product .
                                                </p>
                                                <p class="small mb-2 text-secondary">1 day ago</p>
                                            </div>
                                            <span class="badge bg-warning ms-auto">Completed</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-4">
                                            <img src="<?php echo base_url('assets_admin/') ?>images/user2.svg" class="img-5x me-3 rounded-4" alt="Admin Dashboard" />
                                            <div class="m-0">
                                                <h6 class="fw-bold">Mayrbek Kiana</h6>
                                                <p class="mb-2">Report a bug to infinity support</p>
                                                <p class="small mb-2 text-secondary">8 hours ago</p>
                                            </div>
                                            <span class="badge bg-info ms-auto">Completed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Deals</h5>
                                </div>
                                <div class="card-body">
                                    <div id="deals" class="mb-4"></div>
                                    <!-- Row start -->
                                    <div class="row">
                                        <div class="col-sm-6 col-6">
                                            <div class="text-center">
                                                <h6>Claimed</h6>
                                                <h1>3200</h1>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <div class="text-center">
                                                <h6>Expired</h6>
                                                <h1>1500</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row end -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-12 col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Transactions</h5>
                                </div>
                                <div class="card-body">
                                    <div class="scroll350">
                                        <div class="d-grid gap-4 mt-4">
                                            <div class="d-flex align-items-center">
                                                <div class="p-3 bg-info bg-opacity-10 me-3 rounded-3">
                                                    <i class="bi bi-credit-card text-info fs-2 lh-1"></i>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h5>Visa Card</h5>
                                                    <p class="m-0 text-secondary">Laptop Ordered</p>
                                                </div>
                                                <h3 class="m-0 ms-auto text-danger">$500.00</h3>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="p-3 bg-danger bg-opacity-10 me-3 rounded-3">
                                                    <i class="bi bi-paypal text-danger fs-2 lh-1"></i>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h5>Paypal</h5>
                                                    <p class="m-0 text-secondary">Payment Received</p>
                                                </div>
                                                <h3 class="m-0 ms-auto text-success">$350.00</h3>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="p-3 bg-success bg-opacity-10 me-3 rounded-3">
                                                    <i class="bi bi-pin-map text-success fs-2 lh-1"></i>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h5>Travel</h5>
                                                    <p class="m-0 text-secondary">Yosemite Trip</p>
                                                </div>
                                                <h3 class="m-0 ms-auto text-success">$700.00</h3>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="p-3 bg-warning bg-opacity-10 me-3 rounded-3">
                                                    <i class="bi bi-bag-check text-warning fs-2 lh-1"></i>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h5>Shopping</h5>
                                                    <p class="m-0 text-secondary">Bills Paid</p>
                                                </div>
                                                <h3 class="m-0 ms-auto text-danger">$285.00</h3>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="p-3 bg-info bg-opacity-10 me-3 rounded-3">
                                                    <i class="bi bi-credit-card-2-front text-info fs-2"></i>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h5>Credit Card</h5>
                                                    <p class="m-0 text-secondary">Online Shopping</p>
                                                </div>
                                                <h3 class="m-0 ms-auto text-success">$510.00</h3>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="p-3 bg-danger bg-opacity-10 me-3 rounded-3">
                                                    <i class="bi bi-boxes text-danger fs-2 lh-1"></i>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h5>Bank</h5>
                                                    <p class="m-0 text-secondary">Investment</p>
                                                </div>
                                                <h3 class="m-0 ms-auto text-danger">$150.00</h3>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="p-3 bg-success bg-opacity-10 me-3 rounded-3">
                                                    <i class="bi bi-paypal text-success fs-2 lh-1"></i>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h5>Paypal</h5>
                                                    <p class="m-0 text-secondary">Payment Received</p>
                                                </div>
                                                <h3 class="m-0 ms-auto text-success">$790.00</h3>
                                            </div>
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

    <!-- Apex Charts -->
    <script src="<?php echo base_url('assets_admin/') ?>vendor/apex/apexcharts.min.js"></script>
    <script src="<?php echo base_url('assets_admin/') ?>vendor/apex/custom/dash1/activity-report.js"></script>
    <script src="<?php echo base_url('assets_admin/') ?>vendor/apex/custom/dash1/deals.js"></script>
    <script src="<?php echo base_url('assets_admin/') ?>vendor/apex/custom/dash1/sparkline.js"></script>
    <script src="<?php echo base_url('assets_admin/') ?>vendor/apex/custom/dash1/sparkline2.js"></script>

    <!-- Rating -->
    <script src="<?php echo base_url('assets_admin/') ?>vendor/rating/raty.js"></script>
    <script src="<?php echo base_url('assets_admin/') ?>vendor/rating/raty-custom.js"></script>

    <!-- Custom JS files -->
    <script src="<?php echo base_url('assets_admin/') ?>js/custom.js"></script>

</body>

</html>