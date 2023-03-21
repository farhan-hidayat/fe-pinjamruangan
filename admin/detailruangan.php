<!-- Header -->
<?php
$page = "Data Ruangan";
include "layout/header.php";
?>

<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- Sidebar -->
            <?php include "layout/sidebar.php" ?>

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <!-- Navbar -->
                <?php include "layout/navbar.php" ?>

                <!-- Section Content -->
                <div class="section-content section-dashboard-home" data-aos="fade-up">
                    <div class="container-fluid">
                        <div class="dashboard-heading">
                            <h2 class="dashboard-title">Sofa Ternyaman</h2>
                            <p class="dashboard-subtitle">Product Details</p>
                        </div>
                        <div class="dashboard-content">
                            <div class="row">
                                <div class="col-12">
                                    <form action="">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Nama Ruangan</label>
                                                            <input type="text" class="form-control" value="Ruangan A" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Kapasitas</label>
                                                            <input type="number" class="form-control" value="20" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Harga Sewa</label>
                                                            <input type="number" class="form-control" value="500" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea name="editor"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col text-right">
                                                        <button type="submit" class="btn btn-success px-5 btn-block">
                                                            Update Product
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="gallery-container">
                                                        <img src="/images/product-card-1.png" alt="" class="w-100" />
                                                        <a href="#" class="delete-gallery">
                                                            <img src="/images/icon-delete.svg" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="gallery-container">
                                                        <img src="/images/product-card-2.png" alt="" class="w-100" />
                                                        <a href="#" class="delete-gallery">
                                                            <img src="/images/icon-delete.svg" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="gallery-container">
                                                        <img src="/images/product-card-3.png" alt="" class="w-100" />
                                                        <a href="#" class="delete-gallery">
                                                            <img src="/images/icon-delete.svg" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <input type="file" name="" id="file" style="display: none" multiple />
                                                    <button class="btn btn-secondary btn-block mt-3" onclick="thisFileUpload()">
                                                        Add Photo
                                                    </button>
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
    </div>

    <!-- Bootstrap core JavaScript -->
    <?php include "layout/footer.php" ?>

    <!-- Script Page-->
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        function thisFileUpload() {
            document.getElementById("file").click();
        }
    </script>
    <script>
        CKEDITOR.replace('editor');
    </script>

</body>

</html>