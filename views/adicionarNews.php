<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Adicionar News</title>
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
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->


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
              <a class="dropdown-item d-flex align-items-center" href="perfilAdmin">
                <i class="bi bi-person"></i>
                <span>Meu perfil</span>
              </a>
            </li>


            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
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
        <a class="nav-link" href="adicionarNews">
          <i class="bi bi-journal-text"></i>
          <span>News</span></i>
        </a>
      </li><!-- End News Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="cadastrarEditor">
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
      <h1>Adicionar Noticias</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Editors</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Administrador</h5>

              <form action="addNews" method="post">
                <div class="input-group input-group-sm mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Tittle</span>
                  <input type="text" name="tittle" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="form-floating">
                  <textarea name="news" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                  <label for="floatingTextarea2">Escreva</label>
                </div>
                <div class="form-floating m-4">
                  <select name="category" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected value="Politica">Politica</option>
                    <option value="Mundo">Mundo</option>
                    <option value="Desporto">Desporto</option>
                    <option value="Economia">Economia</option>
                    <option value="Saude">Saude</option>
                    <option value="Politica">Politica</option>
                  </select>
                  <label for="floatingSelect">Categoria</label>
                </div>
                <button type="submit"  class="btn btn-outline-primary m-4 href="visualizarNews"">Adicionar Noticias</button>
              </form>
              <!-- TinyMCE Editor -->

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