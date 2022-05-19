<?php 
require '../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  <link rel="stylesheet" href="../assets/css/nucleo-icons.css" />
  <link rel="stylesheet" href="../assets/css/nucleo-svg.css" />
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
    href="../assets/css/material-dashboard.css?v=3.0.2"
    rel="stylesheet"
  />
  <title>Halaman Dashboard | Tambah Data Pendduduk</title>
</head>
<body class="g-sidenav-show bg-gray-300">
  <!-- menu dashboard -->
  <aside 
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main"
  >
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true"
      id="iconSidenav"></i>
      <a 
        class="navbar-brand m-0"
        href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
        target="_blank"
      >
        <img 
          src="../assets/img/logo-ct.png"
          class="navbar-brand-img h-100"
          alt="main_logo"
          >
          <span class="ms-1 font-weight-bold text-white">PKH BANSOS</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2"/>
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
          <a class="nav-link text-white active bg-gradient-primary" href="../pages/dataPenduduk.php">
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
    class="main-content position-relative max-height-vh-100 h-100 border-radius-lg"
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
              Data Penduduk
            </li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Data Penduduk</h6>
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
      <!-- Form Tambah -->
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 mx-3 mb-0">
              <h5 class="text-dark text-capitalize ps-3 my-3">Tambah Data Penduduk</h5>
            </div>
            <hr class="my-0"/>
            <div class="card-body px-0 pb-2">
              <form action="" class="mt-2 ms-3" method="POST">
                <div class="row mb-3">
                  <label for="alternatifID" class="col-sm-2 col-form-label text-dark font-weight-bold">Alternatif ID</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-outline">
                      <label class="form-label">Alternatif ID</label>
                      <input type="text" class="form-control" name="alternatifID">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="userID" class="col-sm-2 col-form-label text-dark font-weight-bold">user ID</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-static">
                      <label class="form-label"></label>
                      <input type="text" class="form-control" readonly value="A1" name="userID">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="alternatifID" class="col-sm-2 col-form-label text-dark font-weight-bold">nama</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-outline">
                      <label class="form-label">nama</label>
                      <input type="text" class="form-control" name="nama">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="alternatifID" class="col-sm-2 col-form-label text-dark font-weight-bold">Tanggal Lahir</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-outline">
                      <label class="form-label">Tanggal Lahir</label>
                      <input type="text" class="form-control" name="ttl">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="jenisKelamin" class="col-sm-2 col-form-label text-dark font-weight-bold">Jenis Kelamin</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-outline">
                      <label for="exampleFormControlSelect1" class="ms-0"></label>
                      <select class="form-control" id="exampleFormControlSelect1" name="JK">
                        <option value="Laki-Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="jenisKelamin" class="col-sm-2 col-form-label text-dark font-weight-bold">Alamat</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-outline">
                      <textarea class="form-control" rows="4" placeholder="Alamat" spellcheck="false" name="alamat"></textarea>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-success" name="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir form Tambah -->
  </main>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/sweetalert.min.js"></script>
    <!-- Control Center for Material Dashboard:  -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>
</html>

<?php 
// cek apakah tombol submit ditekan atau tidak
if(isset($_POST["submit"])) {
  // cek Apakah data berhasil ditambah atau tidak
  if (tambah($_POST) > 0) {
    echo "
    <script>
      swal('Bagus!', 'data Berhasil Ditambahkan!', 'success')
      .then(() => {
        document.location.href = '../pages/dataPenduduk.php';
      });
    </script>
    ";
  } else {
    echo "
    <script>
      swal('OOPS!', 'data Gagal ditambahkan!', 'error');
    </script>
    ";
  }
}

?>