<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('content') ?>

<?php $session = \Config\Services::session(); ?>

<div class="container-fluid py-4">
<div id="flash" data-flash="<?= $session->getFlashdata('success') ?>"></div>
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-4">Import Data uji K-means</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <!-- Import data -->
          <div class="d-flex">
            <button type="button" class="btn btn-info btn-sm ms-4 mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">import csv</button>
            <a class="btn btn-danger btn-sm ms-4 mb-4" href="<?= base_url('prosesmetodekmeans/delete/3')?>">delete</a>
            <button type="button" class="btn btn-success btn-sm ms-4 mb-4 " data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Prediksi
            </button>
          </div>
          <div class="table-responsive p-0">
            <table class="table align-intems-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">ID</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Penghasilan</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Luas <br>Rumah</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Sta <br> Kepemilikan <br>rumah </th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Sumber <br> Air</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Ibu Hamil / <br>Menyusui</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Lansia</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Jml <br> Tanggungan <br>Anak</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Jenis <br>Dinding</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Jenis <br>Lantai</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Jenis <br>Atap</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Kelas <br>Keputusan</th>
                </tr>
              </thead>
              <tbody>
                
                <?php $i = 1; ?>
                <?php foreach($dataKmeans as $row) : ?>
                <tr>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["ID"]; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["Penghasilan"]; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["Luas_Rumah"]; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["Sts_Rumah"]; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["Sumber_air"]; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["Ibu_Hamil"]; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["Lansia"]; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["Jml_Tanggungan_Anak"]; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["Jenis_Dinding"]; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["Jenis_Lantai"]; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["Jenis_Atap"]; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["kelas_Keputusan"] === "0" ? "Layak (chair)" : "Layak (tidak chair)" ?></p>
                  </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- collapse proses -->
  <?php if (isset($proseskmeans)): ?>
  <div class="collapse" id="collapseExample">
    <div class="row justify-content-center">
      <div class="col-5">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-4">Prekdisi Data Uji</h6>
            </div>
          </div>
          <div class="card-body px-3 pb-2">
            <div class="table-responsive p-0">
              <table class="table-align-items-center d-flex flex-column align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder p-3">ID Alternatif</th>
                    <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder p-3">Kelas Keputusan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach($proseskmeans['testing'] as $row) : ?>
                    <tr>
                      <td>
                        <div class="align-middle text-center text-sm">
                          <p class="text-xs font-weight-bold mb-0 me-3 p-3"><?= "D".$i ?></p>
                        </div>
                      </td>
                      <td>
                        <div class="align-middle text-center text-sm">
                          <p class="text-xs font-weight-bold mb-0 ms-3 p-3"><?= $row == 0 ? "Layak (chair)" : "Layak (tidak chair)"?></p>
                        </div>
                      </td>
                    </tr>
                  <?php  $i++; ?>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
</div>

<!-- Modal import Data Latih -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Form Upload CSV</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('prosesmetodekmeans/uploadcsv') ?>"  class="mt-2" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <label class="form-label">Upload File CSV </label>
          <div class=" input-group input-group-outline mb-3">
            <input class="form-control" type="file" name="FileCSV">
          </div>
        </div>
        <div class="modal-footer">
          <button type="Submit" class="btn bg-gradient-success" data-bs-dismiss="modal">Simpan</button>
          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  var flash = document.getElementById('flash');
  var data = flash.getAttribute('data-flash');

  if (data) {
    swal({
      title: "Good job!",
      text:  data,
      icon: "success",
    });
  }
</script>

<?= $this->endSection() ?>