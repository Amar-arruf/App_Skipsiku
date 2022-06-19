<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<?php $session = \Config\Services::session(); ?>

<div class="container-fluid py-4">
  <div id="flash" data-flash="<?= $session->getFlashdata('successs') ?>"></div>
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-4"> Data Penduduk</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <!-- Tombol Tambah -->
          <a href="<?= base_url('datapenduduk/data/new') ?>" class="btn btn-success btn btn-sm ms-4 mb-4">Tambah</a>
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Alternatif <br> ID</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">user ID</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">nama</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Tanggal Lahir</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Alamat</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach($get as $row) : ?>
                <tr>
                  <td>
                    <div class=" px-2 py-1">
                      <h6 class="mb-0 text-sm text-center"><?= $row["Alternatif_id"]; ?></h6>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["user_id"]; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["name"]; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["Tanggal_Lahir"]; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= substr($row["Alamat"],0,49); ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <a href="<?= base_url('datapenduduk/data/'.$row['Alternatif_id'].'/edit') ?>" class="btn btn-info btn-sm mb-0">
                      Ubah 
                    </a>
                    <a href="<?= base_url('datapenduduk/data/'.$row['Alternatif_id'].'/delete') ?>"  class="btn btn-primary btn-sm mb-0 btn-hapus" >
                      Hapus
                    </a>
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
