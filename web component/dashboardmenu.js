const template = document.createElement("template");
template.innerHTML = `
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
`;

class dashboardMenu extends HTMLElement {
  connectedCallback() {
    this.append(template.content.cloneNode(true));
  }
}

window.customElements.define("dashboard-menu", dashboardMenu);
