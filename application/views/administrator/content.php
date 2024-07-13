<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Combo Putra - Content</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <!-- <link rel="shortcut icon" href="assets/images/favicon.svg" /> -->

    <link href="<?php echo base_url('assets/') ?>img/combo-logo.png" rel="icon">
    <link href="<?php echo base_url('assets/') ?>img/combo-logo.png" rel="apple-touch-icon">

    <!-- *************
			************ CSS Files *************
		************* -->
    <link rel="stylesheet" href="<?php echo base_url('assets_admin/') ?>fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets_admin/') ?>css/main.min.css" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

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

    .preview-image-container {
        display: inline-block;
        position: relative;
        /* margin: 5px; */
    }

    .delete-btn {
        position: absolute;
        top: -10px;
        right: 15px;
        background: transparent;
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        /* padding: 5px; */
        font-size: 40px;

    }

    .preview-image {
        /* width: 475px; */
        width: 513px;
        /* Maksimum lebar gambar */
        /* height: 220px; */
        height: 238px;
        /* Biarkan tinggi gambar disesuaikan secara otomatis untuk menjaga aspek ratio */
        display: inline-block;
        /* Menampilkan gambar sebagai inline-block agar berjejer ke samping */
        margin-right: 10px;
        margin-bottom: 10px;
        /* Tambahkan margin kanan untuk memisahkan gambar */
        vertical-align: top;
        /* Menjaga konsistensi posisi atas gambar */
        /* border: 0.5px solid rgba(82, 86, 94, 0.3); */
        object-fit: cover;
        max-width: 100%;
        max-height: 100%;
        aspect-ratio: 513 px/238 px;

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
                                <div id="uploadedImagesContainer" style="margin-top: 20px;"></div>
                                <div class="card-header">
                                    <h5 class="card-title">Foto Background</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Row start -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="alertContainer"></div>
                                            <form id="uploadForm" action="<?php echo base_url('Administrator/do_upload') ?>" method="post" enctype="multipart/form-data">
                                                <label style="margin-bottom: 20px;" for="photos">Pilih 5 Foto :</label>
                                                <input type="file" name="photos[]" id="photos" multiple required onchange="previewImages()" accept="image/*">
                                                <div id="fileInfo" style="margin-top: 10px;"></div>
                                                <br>
                                                <div id="previewContainer"></div>
                                                <br>
                                                <button class="btn btn-success" type="submit" name="submit">Upload</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                        </div>
                        <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="messageModalLabel">Pesan</h5>
                                        <!-- <button type="" class="" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                    </div>
                                    <div class="modal-body">
                                        <?php if ($this->session->flashdata('success')) : ?>
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <?php echo $this->session->flashdata('success'); ?>
                                                <!-- <button type="button" class="" data-bs-dismiss="alert" aria-label="Close"></button> -->
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($this->session->flashdata('error')) : ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <?php echo $this->session->flashdata('error'); ?>
                                                <!-- <button type="button" class="" data-bs-dismiss="alert" aria-label="Close"></button> -->
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->

                <!-- Row start -->

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

    <script>
        var storedFiles = [];

        function previewImages() {
            var previewContainer = document.getElementById('previewContainer');
            var files = document.getElementById('photos').files;
            var alertContainer = document.getElementById('alertContainer');
            alertContainer.innerHTML = ''; // Bersihkan alert sebelumnya

            if (files.length + storedFiles.length > 5) {
                var alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-primary alert-dismissible d-flex align-items-center fade show';
                alertDiv.setAttribute('role', 'alert');

                var alertIcon = document.createElement('i');
                alertIcon.className = 'bi bi-megaphone fs-2 me-2 lh-1';
                alertDiv.appendChild(alertIcon);

                var alertText = document.createTextNode('Maaf, Maksimal upload 5 Foto');
                alertDiv.appendChild(alertText);

                var alertButton = document.createElement('button');
                alertButton.type = 'button';
                alertButton.className = 'btn-close';
                alertButton.setAttribute('data-bs-dismiss', 'alert');
                alertButton.setAttribute('aria-label', 'Close');
                alertDiv.appendChild(alertButton);

                alertContainer.appendChild(alertDiv);
                document.getElementById('photos').value = ''; // Reset input file
                return;
            }

            for (var i = 0; i < files.length; i++) {
                storedFiles.push(files[i]);
            }

            renderPreview();
        }


        function renderPreview() {
            var previewContainer = document.getElementById('previewContainer');
            previewContainer.innerHTML = '';

            var fileInfo = document.getElementById('fileInfo'); // Ambil elemen untuk keterangan
            fileInfo.innerHTML = ''; // Bersihkan keterangan sebelumnya

            storedFiles.forEach(function(file, index) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var previewImageContainer = document.createElement('div');
                    previewImageContainer.className = 'preview-image-container';

                    var img = document.createElement('img');
                    img.className = 'preview-image';
                    img.src = e.target.result;
                    previewImageContainer.appendChild(img);

                    var deleteBtn = document.createElement('button');
                    deleteBtn.className = 'delete-btn';
                    deleteBtn.innerHTML = '&times;';
                    deleteBtn.onclick = function() {
                        storedFiles.splice(index, 1);
                        renderPreview(); // Panggil renderPreview saat foto dihapus
                    };
                    previewImageContainer.appendChild(deleteBtn);
                    previewContainer.appendChild(previewImageContainer);
                };

                reader.readAsDataURL(file);
            });

            // Update keterangan nama dan jumlah foto yang dipilih
            var totalFiles = storedFiles.length;
            var fileNames = storedFiles.map(file => file.name).join(', ');
            fileInfo.innerHTML = `<strong>Jumlah foto dipilih:</strong> ${totalFiles}<br><strong>Nama foto:</strong> ${fileNames}`;
        }

        document.getElementById('uploadForm').onsubmit = function(e) {
            if (storedFiles.length !== 5) {
                var alertContainer = document.getElementById('alertContainer');
                alertContainer.innerHTML = ''; // Bersihkan alert sebelumnya

                var alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-warning alert-dismissible d-flex align-items-center fade show';
                alertDiv.setAttribute('role', 'alert');

                var alertIcon = document.createElement('i');
                alertIcon.className = 'bi bi-exclamation-triangle fs-2 me-2 lh-1';
                alertDiv.appendChild(alertIcon);

                var alertText = document.createTextNode('Harap unggah 5 foto.');
                alertDiv.appendChild(alertText);

                var alertButton = document.createElement('button');
                alertButton.type = 'button';
                alertButton.className = 'btn-close';
                alertButton.setAttribute('data-bs-dismiss', 'alert');
                alertButton.setAttribute('aria-label', 'Close');
                alertDiv.appendChild(alertButton);

                alertContainer.appendChild(alertDiv);
                e.preventDefault(); // Mencegah submit form jika kurang dari 5
                return;
            }

            var formData = new FormData();
            storedFiles.forEach(function(file) {
                formData.append('photos[]', file);
            });

            var xhr = new XMLHttpRequest();
            xhr.open('POST', document.getElementById('uploadForm').action, true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    var modal = new bootstrap.Modal(document.getElementById('messageModal'));
                    var modalBody = document.getElementById('messageModal').querySelector('.modal-body');

                    if (response.success) {
                        modalBody.innerHTML = '<div class="alert alert-success alert-dismissible fade show" role="alert">' + response.message + '</div>';
                        modal.show();

                        document.getElementById('messageModal').addEventListener('hidden.bs.modal', function() {
                            storedFiles = []; // Kosongkan array storedFiles
                            // renderPreview(); // Perbarui tampilan
                            location.reload(); // Segarkan halaman
                        });
                    } else {
                        modalBody.innerHTML = '<div class="alert alert-danger alert-dismissible fade show" role="alert">' + response.error + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        modal.show();
                    }
                } else {
                    alert('Terjadi kesalahan pada server');
                }
            };
            xhr.send(formData);

            e.preventDefault(); // Mencegah submit form secara default
        };

        document.addEventListener("DOMContentLoaded", function() {
            var uploadedImagesContainer = document.getElementById('uploadedImagesContainer');

            fetch('<?php echo base_url('Administrator/get_uploaded_images'); ?>')
                .then(response => response.json())
                .then(data => {
                    data.images.forEach(image => {
                        var img = document.createElement('img');
                        img.src = '<?php echo base_url('assets/img/uploads/'); ?>' + image;
                        img.className = 'uploaded-image';
                        img.style.margin = '10px';
                        img.style.width = '100px'; // Ubah sesuai kebutuhan
                        img.style.height = '100px'; // Ubah sesuai kebutuhan
                        uploadedImagesContainer.appendChild(img);
                    });
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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