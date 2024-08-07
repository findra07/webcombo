<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Combo Putra - Login</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <!-- <link rel="shortcut icon" href="<?php echo base_url('assets_admin/') ?> images/favicon.svg" /> -->

    <link href="<?php echo base_url('assets/') ?>img/combo-logo.png" rel="icon">
    <link href="<?php echo base_url('assets/') ?>img/combo-logo.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- *************
			************ CSS Files *************
		************* -->
    <link rel="stylesheet" href="<?php echo base_url('assets_admin/') ?>fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets_admin/') ?>css/main.min.css" />

    <!-- <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet"> -->
</head>

<style>
    .login_image {
        background: url(<?php echo base_url('assets/') ?>img/banner-login2.png) center center no-repeat;
        background-size: cover;
        height: 100%;
        position: relative;
        border-radius: 0 7px 7px 0 !important;
    }

    .rounded-login {
        border-radius: 7px 0 0 7px !important;
        background-color: white;
    }

    .form-control {
        border-radius: 3px;
        width: 80%;
        padding: 0.5rem 0.75rem;
    }

    .input-group {
        width: 80%;
    }

    .mb-3 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .mb-4 {
        width: 80%;
        margin-bottom: 0 !important;
        margin-top: 8%;
    }

    .input-group-text {
        border-radius: 3px;
    }

    .py-3 {
        width: 80%;
        display: flex !important;
        justify-content: flex-end;
    }

    .or {
        margin: 20px auto;
        width: 80%;
        text-align: center;
        position: relative;
        height: 1px;
        background: #e1e5f1;
    }

    .or:before {
        position: absolute;
        content: "or";
        background: #fff;
        width: 20px;
        height: 20px;
        color: #179978;
        top: 50%;
        left: 50%;
        margin-top: -10px;
        margin-left: -10px;
        line-height: 15px;
    }
</style>

<body class="bg-white" style="margin-top: 3%; background: url(<?php echo base_url('assets/') ?>img/login-bg.jpg ); background-size: auto; background-position: center center;">
    <!-- Container start -->
    <div class="container">
        <div class="row justify-content-center" style="box-shadow: 0px 25px 15px -15px #d3d7e9;">
            <div class="col-xl-4 col-lg-5 col-sm-6 col-12" style="padding-left: 0; padding-right:0">
                <form action="<?php echo base_url('Administrator/auth') ?>" method="post" class="">
                    <div class="border border-light rounded-2 rounded-login p-4 mt-5">
                        <div class="login-form">
                            <div class="mb-3">
                                <a href="index.html" class="mb-4 d-flex">
                                    <img style="width: 200px;" src="<?php echo base_url('assets/') ?>img/login-logo.png" class="img-fluid login-logo" alt="Venus Admin" />
                                </a>
                            </div>
                            <!-- <h4 class="fw-semibold mb-4">Login</h4> -->
                            <div class="mb-3">
                                <!-- <label class="form-label">Email</label> -->
                                <div class="input-group">
                                    <a href="#" class="input-group-text">
                                        <i class="bi bi-person-circle"></i>
                                    </a>
                                    <input style="font-family: lato; font-weight:400" type="text" id="username" name="username" class="form-control" placeholder="Username" required />
                                </div>
                            </div>
                            <div class="mb-3">
                                <!-- <label class="form-label">Password</label> -->
                                <div class="input-group">
                                    <a href="#" class="input-group-text">
                                        <i class="bi bi-shield-fill-check"></i>
                                    </a>
                                    <input style="font-family: lato; font-weight:400" type="password" id="password" name="password" class="form-control" placeholder="Password" required />
                                    <a href="#" class="input-group-text" id="togglePassword">
                                        <i class="bi bi-eye-slash-fill"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-grid py-3 mt-2">
                                    <button style="width: 30%; background: #337ab7; font-family: lato; font-weight:500" type="submit" class="btn btn-lg btn-primary">
                                        Login
                                    </button>
                                </div>
                            </div>
                            <div class="or"></div>
                            <div class="text-center pt-4">
                                <span style="font-family: lato; font-weight:400">Belum Terdaftar ?</span>
                                <a style="font-family: lato; font-weight:700" href="<?php echo base_url('Administrator/signup') ?>" class="text-blue text-decoration-underline ms-2">
                                    Register</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-8 col-lg-7 col-sm-6 col-12 mt-5" style="padding-left: 0; padding-right:0">
                <div class="login_image"></div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function(e) {
            e.preventDefault();
            const passwordField = document.getElementById('password');
            const eyeIcon = this.querySelector('i');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            eyeIcon.classList.toggle('bi-eye-fill');
            eyeIcon.classList.toggle('bi-eye-slash-fill');
        });
    </script>
</body>

</html>