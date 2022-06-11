<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<?php $session = \Config\Services::session(); ?>

<div class="container-fluid py-4">
  <div id="flash" data-flash="<?= $session->getFlashdata('successs')?>"></div>
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-4"> Data Criteria Penduduk</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <!-- Tombol Tambah -->
          <a href="<?= base_url('datacriteriapenduduk/data/new')?>" class="btn btn-success btn btn-sm ms-4 mb-4">Tambah</a>
          <div class="table-responsive p-0">
            <table class="table align-intems-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Data <br> Penduduk <br> ID</th>
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Alternatif <br> ID</th>
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
                  <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach($get as $row) : ?>
                <tr>
                  <td>
                    <div class=" px-2 py-1">
                      <h6 class="mb-0 text-sm"><?= $row["Data_Pendudukid"]; ?></h6>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0"><?= $row["Alternatif_id"]; ?></p>
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
                    <p class="text-xs font-weight-bold mb-0"><?= $row["Ibu_Hamil_/_Menyusui"]; ?></p>
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
                    <p class="text-xs font-weight-bold mb-0"><?= $row["Kelas_Keputusan"]; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <a href="<?= base_url('datacriteriapenduduk/data/'.$row["Data_Pendudukid"].'/edit')?>" class="btn btn-info btn-sm mb-0">
                      Ubah 
                    </a>
                    <a href="<?= base_url('datacriteriapenduduk/data/'.$row["Data_Pendudukid"].'/delete')?>"  class="btn btn-primary btn-sm mb-0 btn-hapus">
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