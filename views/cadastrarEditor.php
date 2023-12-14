<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cadastrar Editor</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="views/support/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="views/support/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="views/support/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="views/support/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="views/support/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="views/support/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="views/support/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="views/support/css/styles.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="visualizarNews" class="logo d-flex align-items-center">
                <img src="views/support/img/lerenews287x87.png" alt="">
                <span class="d-none d-lg-block">Admin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->



        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">



                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Leticia Reepson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Leticia Reepson</h6>
                        </li>


                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="loginAdmin">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->


    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="visualizarNews">
                    <i class="bi bi-grid"></i>
                    <span>Menu</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="adicionarNews">
                    <i class="bi bi-journal-text"></i>
                    <span>News</span></i>
                </a>
            </li><!-- End News Nav -->

            <li class="nav-item">
                <a class="nav-link " href="listarEditor">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Cadastrar Editores</span>
                </a>
            </li><!-- End Cadastrar Editores Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="listarEditor">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Listar Editores</span>
                </a>
            </li><!-- End Editores Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="listarUsuario">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Listar Usuários</span>
                </a>
            </li><!-- End User Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Cadastrar Editores</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="visualizarNews">Home</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vertical Form</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" method="post" action="cadastrarEditores">
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Nome</label>
                                <input type="text" name="nome" class="form-control" id="inputNanme4">
                            </div>
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" name="senha" class="form-control" id="inputPassword4">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>

            </div>
            </div>
        </section>

    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="views/support/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="views/support/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="views/support/vendor/chart.js/chart.umd.js"></script>
    <script src="views/support/vendor/echarts/echarts.min.js"></script>
    <script src="views/support/vendor/quill/quill.min.js"></script>
    <script src="views/support/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="views/support/vendor/tinymce/tinymce.min.js"></script>
    <script src="views/support/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="views/support/js/admin.js"></script>
</body>

</html>