<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<?php $CriteriaOptionAtributModel = model(CriteriaOptionAtributModel::class) ?>

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

<?= $this->endSection() ?>