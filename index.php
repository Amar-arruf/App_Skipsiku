<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <!-- font and icons -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/nucleo-icons.css" />
    <link rel="stylesheet" href="./assets/css/nucleo-svg.css" />
    <!-- font Awesome Icons -->
    <script
      src="https://kit.fontawesome.com/17bdaf7867.js"
      crossorigin="anonymous"
    ></script>
    <!-- material Icons -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Round"
      rel="stylesheet"
    />
    <!-- CSS Files -->
    <link
      id="pagestyle"
      href="./assets/css/material-dashboard.css?v=3.0.2"
      rel="stylesheet"
    />
    <title>Halaman Dashboard | PKH C.45 dengan K - Means</title>
  </head>
  <body class="g-sidenav-show bg-gray-300">
    <!-- menu dashboard -->
    <aside
      class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
      id="sidenav-main"
    >
      <div class="sidenav-header">
        <i
          class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
          aria-hidden="true"
          id="iconSidenav"
        ></i>
        <a
          class="navbar-brand m-0"
          href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
          target="_blank"
        >
          <img
            src="./assets/img/logo-ct.png"
            class="navbar-brand-img h-100"
            alt="main_logo"
          />
          <span class="ms-1 font-weight-bold text-white">PKH BANSOS</span>
        </a>
      </div>
      <hr class="horizontal light mt-0 mb-2" />
      <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white active bg-gradient-primary" href="">
              <div
                class="text-white text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="fa-brands fa-delicious fa-lg"></i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="">
              <div
                class="text-white text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="fa-solid fa-database fa-lg"></i>
              </div>
              <span class="nav-link-text ms-1">Data Penduduk</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="">
              <div
                class="text-white text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="fa-solid fa-table fa-lg"></i>
              </div>
              <span class="nav-link-text ms-1">Data Criteria</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="">
              <div
                class="text-white text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="fa-solid fa-layer-group fa-lg"></i>
              </div>
              <span class="nav-link-text ms-1">Metode C4.5</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="">
              <div
                class="text-white text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="fa-solid fa-layer-group fa-lg"></i>
              </div>
              <span class="nav-link-text ms-1">Metode K - Means</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="">
              <div
                class="text-white text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="fa-solid fa-square-poll-vertical fa-lg"></i>
              </div>
              <span class="nav-link-text ms-1">Performance</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <!-- Akhir menu dashboard -->
    <main
      class="main-content positive-relative max-height-vh-100 border-radius-lg"
    >
      <!-- Navbar -->
      <nav
        class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
        id="navbarBlur"
        navbar-scroll="true"
      >
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol
              class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5"
            >
              <li class="breadcrumb-item text-sm">
                <a class="opacity-5 text-dark" href="">Pages</a>
              </li>
              <li
                class="breadcrumb-item text-sm text-dark active"
                aria-current="page"
              >
                Dashboard
              </li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Dashboard</h6>
          </nav>
          <div
            class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 justify-content-end align-items-center"
            id="navbar"
          >
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item">
                <a
                  href=""
                  class="nav-link text-body px-0 font-weight-bold d-flex align-items-center"
                >
                  <i class="material-icons me-sm-1 fs-3"> account_circle </i>
                  <span class="d-sm-inline d-none">Account Name</span>
                </a>
              </li>
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a
                  href="javascript:;"
                  class="nav-link text-body p-0"
                  id="iconNavbarSidenav"
                >
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item px-3 d-flex align-items-center">
                <a href="" class="nav-link text-body p-0">
                  <i
                    class="fa fa-cog fs-4 fixed-plugin-button-nav cursor-pointer"
                  ></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Akhir Navbar -->
      <div class="container-fluid py-4">
        <!-- Card recap -->
        <div class="row">
          <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div
                  class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute"
                >
                  <i class="material-icons opacity-10">elderly_woman</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">lansia</p>
                  <h4 class="mb-0">4</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <a class="text-dark text-sm font-weight-bold cursor-pointer">
                  <div class="d-flex align-items-center">
                    <span>Selengkapnya</span>
                    <span class="material-icons ps-2">arrow_forward</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div
                  class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute"
                >
                  <i class="material-icons opacity-10">family_restroom</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">
                    Jumlah Tanggungan Anak
                  </p>
                  <h4 class="mb-0">9</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <a class="text-dark text-sm font-weight-bold cursor-pointer">
                  <div class="d-flex align-items-center">
                    <span>Selengkapnya</span>
                    <span class="material-icons ps-2">arrow_forward</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div
                  class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute"
                >
                  <i class="material-icons opacity-10">pregnant_woman</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Ibu Hamil</p>
                  <h4 class="mb-0">0</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <a class="text-dark text-sm font-weight-bold cursor-pointer">
                  <div class="d-flex align-items-center">
                    <span>Selengkapnya</span>
                    <span class="material-icons ps-2">arrow_forward</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Akhir card Recap -->
        <!-- About -->
        <section id="about" class="card p-3 mt-5 w-100">
          <div class="d-flex align-items-center">
            <i class="material-icons pe-2 text-dark fs-2">info</i>
            <span class="card-title text-dark font-weight-bold mb-0"
              >Tentang aplikasi PKH BANSOS</span
            >
          </div>
          <hr />
          <div class="card-body mt-1 p-0">
            <p class="text-dark mb-0 text-sm">
              <b>Sistem Informasi Pengelolaan Data Bantuan Sosial</b> yaitu
              <i>PKH BANSOS</i>. Merupakan Sistem Informasi yang digunakan untuk
              mengolah data khususnya untuk menentukan yang layak menerima
              Bantuan PKH menggunakan metode C4.5 dengan metode K - Means.
              Selain itu aplikasi ini digunakan laporan penelitian skripsi. dimana data yang akan ditampilkan dalam aplikasi ini yaitu terdiri dari beberapa pengelolaan data antara lain : <br>
              <div class="ps-3 mt-2 text-dark text-sm">
                <li><i>Data penduduk yang menerima Program Keluarga Harapan (PKH) 2022</i></li>
                <li><i>Data criteria yang menunjang penerima program PKH</i></li>
                <li><i>Data hasil perhitungan yang layak menerima program PKH menggunakan teknik klasifikasi</i></li>
                <li><i>Data hasil perhitungan yang layak menerima Program PKH menggunakan teknik clustering</i></li>
                <li><i>Pengolahan dari perhitungan kedua Metode akan menampilkan hasil performa dari kedua metode</i></li>
              </div>
            </p>
          </div>
        </section>
        <!-- Akhir About -->
      </div>
    </main>

    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>

    <!-- Control Center for Material Dashboard:  -->
    <script src="./assets/js/material-dashboard.min.js?v=3.0.2"></script>
  </body>
</html>
