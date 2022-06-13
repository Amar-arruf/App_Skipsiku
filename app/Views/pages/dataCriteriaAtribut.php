<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<?php $CriteriaOptionAtributModel = model(CriteriaOptionAtributModel::class) ?>

<?php $session = \Config\Services::session(); ?>

<div class="container-fluid py-4">
  <div id="flash" data-flash="<?= $session->getFlashdata('successs') ?>"></div>
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
          <a href="<?= base_url('datacriteriaatribut/data/new') ?>" class="btn btn-success btn btn-sm ms-4 mb-4">Tambah</a>
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
                <?php foreach($get as $row): ?>
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
                    <a href="<?= base_url('datacriteriaatribut/data/'.$row["criteria_id"].'/edit') ?>"  class="btn btn-info btn-sm mb-0">
                      Ubah
                    </a>
                    <a href="<?= base_url('datacriteriaatribut/data/'.$row["criteria_id"].'/delete') ?>" class="btn btn-primary btn-sm mb-0 btn-hapus">
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
  <?php foreach($get as $Row) : ?>
  <?php $get2 = $CriteriaOptionAtributModel->getData($Row['criteria_id']);   ?>
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
          <a href="<?= base_url('datacriteriaatribut/dataoption/'.$Row['criteria_id'].'/new') ?>"  class="btn btn-success btn btn-sm ms-4 mb-4">Tambah</a>
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
                <?php foreach($get2 as $row): ?>
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
                    <a href="<?= base_url('datacriteriaatribut/dataoption/'.$row["criteria_option_id"].'/edit') ?>"   class="btn btn-info btn-sm mb-0">
                      Ubah
                    </a>
                    <a href="<?= base_url('datacriteriaatribut/dataoption/'.$row["criteria_option_id"].'/delete') ?>" class="btn btn-primary btn-sm mb-0 btn-hapus">
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