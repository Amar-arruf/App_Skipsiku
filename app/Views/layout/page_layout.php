<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link
    rel="apple-touch-icon"
    sizes="76x76"
    href="<?= base_url('assets/img/apple-icon.png') ?>"
  />
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>" />
  <!-- font and icons -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
    rel="stylesheet"
  />
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
    href="<?= base_url('assets/css/material-dashboard.css?v=3.0.2') ?>"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>">
  <title>Halaman Dashboard | PKH C.45 dengan K - Means</title>
</head>
<body class="g-sidenav-show bg-gray-300 g-sidenav-pinned">
  <!-- dashboard Menu -->
    <?= $this->include('layout/dashboardMenu') ?>
  <!-- Akhir Dashboard Menu -->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!-- navbar -->
      <?= $this->include('layout/navbar') ?>
    <!-- Akhir navbar -->
    <!-- Contain -->
      <?= $this->renderSection('content') ?>
    <!-- Akhir Contain -->
  </main>

  <!--   Core JS Files   -->
  <script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>

    <!-- Control Center for Material Dashboard:  -->
    <script src="<?= base_url('assets/js/material-dashboard.min.js?v=3.0.2') ?>"></script>
    <script>
      var Main = document.getElementsByClassName("main-content")[0];
      var humbergerMenu = document.getElementById("humbugerMenu");

      humbergerMenu.addEventListener("click", () => {
        Main.classList.toggle("notactive");
      })
    </script>
</body>
</html>