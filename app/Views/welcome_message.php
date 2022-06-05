<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

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

<?= $this->endSection() ?>