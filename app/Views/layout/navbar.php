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
                <?= $active; ?>
              </li>
            </ol>
            <h6 class="font-weight-bolder mb-0"><?= $active; ?></h6>
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
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center" id="humbugerMenu">
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