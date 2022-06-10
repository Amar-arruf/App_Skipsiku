<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">
  <!-- Form Tambah -->
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 mx-3 mb-0">
          <h5 class="text-dark text-capitalize ps-3 my-3">Tambah Data Penduduk</h5>
        </div>
        <hr class="my-0"/>
        <div class="card-body px-0 pb-2">
          <form action="" class="mt-2 ms-3" method="POST">
            <div class="row mb-3">
              <label for="alternatifID" class="col-sm-2 col-form-label text-dark font-weight-bold">Alternatif ID</label>
              <div class="col-sm-8">
              <div class="input-group input-group-outline">
                  <label class="form-label">Alternatif_id</label>
                  <input type="text" class="form-control" name="alternatif_id">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label for="userID" class="col-sm-2 col-form-label text-dark font-weight-bold">user ID</label>
              <div class="col-sm-8">
                <div class="input-group input-group-static">
                  <label class="form-label"></label>
                  <input type="text" class="form-control" readonly value="A1" name="userID">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label for="nama" class="col-sm-2 col-form-label text-dark font-weight-bold">nama</label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <label class="form-label">nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label for="alternatifID" class="col-sm-2 col-form-label text-dark font-weight-bold">Tanggal Lahir</label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <label class="form-label">Tanggal Lahir</label>
                  <input type="text" class="form-control" name="ttl">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label for="jenisKelamin" class="col-sm-2 col-form-label text-dark font-weight-bold">Jenis Kelamin</label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <label for="exampleFormControlSelect1" class="ms-0"></label>
                  <select class="form-control" id="exampleFormControlSelect1" name="JK">
                    <option value="Laki-Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label for="jenisKelamin" class="col-sm-2 col-form-label text-dark font-weight-bold">Alamat</label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <textarea class="form-control" rows="4" placeholder="Alamat" spellcheck="false" name="alamat"></textarea>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Akhir form Tambah -->

<script src="../assets/js/plugins/sweetalert.min.js"></script>

<?php 
// $db = \Config\Database::connect();
// $db->table('penduduk');
// cek apakah tombol submit ditekan atau tidak
// if(isset($_POST["submit"])) {
//   // cek Apakah data berhasil ditambah atau tidak
//   if ($db->affectedRows() > 0) {
//     echo "
//     <script>
//       swal('Bagus!', 'data Berhasil Ditambahkan!', 'success')
//       .then(() => {
//         document.location.href = '/dataPenduduk.php';
//       });
//     </script>
//     ";
//   } else {
//     echo "
//     <script>
//       swal('OOPS!', 'data Gagal ditambahkan!', 'error');
//     </script>
//     ";
//   }
// }

?>

<?= $this->endSection() ?>