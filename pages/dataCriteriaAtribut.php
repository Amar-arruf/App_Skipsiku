<?php 
  // koneksi ke database
  require '../config/config.php';

  // ambil data / query
  $sql = "SELECT * FROM `criteias`";
  $data = query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta 
    name="viewport" 
    content="width=device-width, initial-scale=1, shrink-to-fit=no" 
  />
  <link 
    rel="apple-touch-icon" 
    sizes="76x76"
    href="../assets/img/apple-icon.png" 
  />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
  <!-- font and icons -->
  <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
      rel="stylesheet"
  />
  <!-- font Awesome ICons -->
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
    href="../assets/css/material-dashboard.css?v=3.0.2"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>Halaman Dashboard | data Criteria Atribut</title>
</head>
<body class="g-sidenav-show bg-gray-300 g-sidenav-pinned">
  <!-- menu dahsboard -->
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
            src="../assets/img/logo-ct.png"
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
            <a class="nav-link text-white" href="">
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
            <a class="nav-link text-white active bg-gradient-primary" href="">
              <div
                class="text-white text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="fa-solid fa-table fa-lg"></i>
              </div>
              <span class="nav-link-text ms-1">Data Criteria Atribut</span>
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

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
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
              <a class="opacity-5 text-dark">Pages</a>
            </li>
            <li 
              class="breadcrumb-item text-sm text-dark active"
              aria-current="page"
              >
              Data Criteria Atribut
            </li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Data Criteria Atribut</h6>
        </nav
          class="Collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 justify-content-end align-items-center"
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
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center" id=humbugerMenu>
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
    </nav>
    <!-- Akhir Navbar -->
    <div class="container-fluid py-4">
      <div class="row mb-4">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 m,x-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-4">Data Criteria Atribut</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <!-- Tambol Tambah -->
              <a href="../CRUD/tambahDataCriteriaAtribut.php" class="btn btn-success btn btn-sm ms-4 mb-4">Tambah</a>
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Criteria Id</th>
                      <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">user id</th>
                      <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">nama</th>
                      <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">type</th>
                      <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($data as $row): ?>
                    <tr>
                      <td>
                        <div class="px-2 py-1">
                          <h6 class="mb-0 text-sm text-center"><?= $row["criteria_id"]; ?></h6>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $row["user_id"]; ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $row["name"]; ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $row["type"]; ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <a href="../CRUD/ubahDataCriteriaAtribut.php?id=<?= $row["criteria_id"]; ?>" class="btn btn-info btn-sm mb-0">
                          Ubah
                        </a>
                        <a href="../CRUD/hapusDataCriteriaAtribut.php?id=<?= $row["criteria_id"]; ?>&table=criteias&Attr=criteria_id" class="btn btn-primary btn-sm mb-0">
                          Hapus
                        </a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach ;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $i = 1 ; ?>
      <?php foreach($data as $Row) : ?>
      <?php  $Query = "SELECT * FROM `criterias_option` WHERE criteria_id = '{$Row["criteria_id"]}'" ;
             $data1 = query($Query); ?>
      <div class="row mb-4">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 m,x-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-4">Data Criteria Atribut <?= $Row["name"] ?></h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <!-- Tambol Tambah -->
              <a href="../CRUD/tambahDataCriteriaValue.php?id=<?= $Row["criteria_id"] ?>" class="btn btn-success btn btn-sm ms-4 mb-4">Tambah</a>
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Criteria Option id</th>
                      <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Criteria id</th>
                      <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Kriteria</th>
                      <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">klasifikasi</th>
                      <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">value</th>
                      <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($data1 as $row): ?>
                    <tr>
                      <td>
                        <div class="px-2 py-1">
                          <h6 class="mb-0 text-sm text-center"><?= $row["criteria_option_id"]; ?></h6>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $row["criteria_id"]; ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $row["Kriteria"]; ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $row["classification"]; ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $row["value"]; ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <a href="../CRUD/ubahCriteriaValue.php?id=<?= $row["criteria_option_id"]; ?>"  class="btn btn-info btn-sm mb-0">
                          Ubah
                        </a>
                        <a href="../CRUD/hapusDataCriteriaValue.php?id=<?= $row["criteria_option_id"]; ?>&table=criterias_option&Attr=criteria_option_id" class="btn btn-primary btn-sm mb-0">
                          Hapus
                        </a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach ;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $i++ ; ?>
      <?php endforeach; ?>
    </div>
  </main>  

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>

    <!-- Control Center for Material Dashboard:  -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
    <script>
      var Main = document.getElementsByClassName("main-content")[0];
      var humbergerMenu = document.getElementById("humbugerMenu");

      humbergerMenu.addEventListener("click", () => {
        Main.classList.toggle("notactive");
      })
    </script>
</body>
</html>