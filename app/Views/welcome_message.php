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
            <h4 class="mb-0"><?= $count_Category_Main['jumlah_lansia']; ?></h4>
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
            <h4 class="mb-0"><?= $count_Category_Main['jumlah_tanggungan']; ?></h4>
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
            <h4 class="mb-0"><?= $count_Category_Main['jumlah_ibu_Hamil']; ?></h4>
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

  <!-- data Vizualisation -->
  <div class="row justify-content-around mt-4">
    <div class="col-lg-5 col-md-6 mt-4 mb-4">
      <div class="card z-index-2">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
          <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
            <div class="chart">
              <canvas id="chart-bars" class="chart-canvas" height="190"></canvas>
            </div>
          </div>
        </div>
        <div class="card-body">
          <h6 class="mb-0">Metode C45</h6>
          <p class="text-sm">Performance Terbaru Metode C45</p>
          <hr class="dark horizontal">
          <div class="d-flex">
            <i class="material-icons text-sm my-auto me-1">schedule</i>
            <p class="mb-0 text-sm">update Terbaru</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-5 col-md-6 mt-4 mb-4">
      <div class="card z-index-2">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
          <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
            <div class="chart">
              <canvas id="chart-line" class="chart-canvas" height="190"></canvas>
            </div>
          </div>
        </div>
        <div class="card-body">
          <h6 class="mb-0">Metode kmeans</h6>
          <p class="text-sm">Performance Terbaru Metode K-means</p>
          <hr class="dark horizontal">
          <div class="d-flex">
            <i class="material-icons text-sm my-auto me-1">schedule</i>
            <p class="mb-0 text-sm">update Terbaru</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir data Vizualization -->

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

<script src="<?= base_url('assets/js/plugins/chartjs.min.js') ?>"></script>

<script>
    var ctx = document.getElementById("chart-bars").getContext("2d");
    var getDataC45 = [];
    var getDataKmeans = [];

    <?php foreach ($metod_c45 as $getc45) :?>
      getDataC45.push(<?= $getc45 ?>);
    <?php endforeach ?>

    <?php foreach ($metod_kmeans as $getkmeans) :?>
      getDataKmeans.push(<?= $getkmeans ?>);
    <?php endforeach ?>

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Acurracy", "Error", "Precision", "Recall",],
        datasets: [{
          label: "Metode C45",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data:getDataC45,
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Acurracy", "Error", "Precision", "Recall",],
        datasets: [{
          label: "Metode Kmeans",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: getDataKmeans,
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>

<?= $this->endSection() ?>