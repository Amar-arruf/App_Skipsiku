<?php

use App\Models\PeopleModel;
?>
<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
  <?php $model = new PeopleModel(); ?>
  <?php $getQuery = $model->getData()  ?>

<div class="container-fluid py-4">
  <!-- Form Tambah  -->
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 mx-3 mb-0">
          <h5 class="text-dark text-capitalize ps-3 my-3">Tambah Data Criteria Penduduk</h5>
        </div>
        <hr class="my-0"/>
        <div class="card-body px-0 pb-2">
          <form  class="mt-2 ms-3" method="POST">
            <div class="row mb-3">
              <Label class="col-sm-2 col-form-label text-dark font-weight-bold"> Data Penduduk Id</Label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <label class="form-label">PendudukID</label>
                  <input type="text" class="form-control" name="pendudukid">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label text-dark font-weight-bold">Alternatif id</label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <select class="form-control" id="exampleFormControlSelect1" name="alternatifid">
                    <?php $i = 1; ?>
                    <?php foreach($getQuery as $get) : ?>
                    <option value="<?= $get["Alternatif_id"]; ?>"><?= $get["Alternatif_id"]; ?></option>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Penghasilan</Label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <label class="form-label">Penghasilan</label>
                  <input type="text" class="form-control" name="penghasilan">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Luas Rumah</Label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <label class="form-label">Luas Rumah</label>
                  <input type="text" class="form-control" name="luasrumah">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Sts. Kepemilikan rumah</Label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <label class="form-label">Sta. Kepemilikan rumah</label>
                  <input type="text" class="form-control" name="stsrumah">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Sumber Air</Label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <label class="form-label">Sumber air</label>
                  <input type="text" class="form-control" name="sumberair">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Ibu Hamil / Menyusui</Label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <label class="form-label">Ibu Hamil / Menyusui</label>
                  <input type="text" class="form-control" name="ibuhamil">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Lansia</Label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <label class="form-label">Lansia</label>
                  <input type="text" class="form-control" name="lansia">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Jml Tanggungan Anak</Label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <label class="form-label">Jml Tanggungan Anak</label>
                  <input type="text" class="form-control" name="jmltanggungananak">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Jenis Dinding</Label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <label class="form-label">Jenis Dinding</label>
                  <input type="text" class="form-control" name="jenisdinding">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Jenis Lantai</Label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <label class="form-label">Jenis Lantai</label>
                  <input type="text" class="form-control" name="jenislantai">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Jenis Atap</Label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <label class="form-label">Jenis Atap</label>
                  <input type="text" class="form-control" name="jenisatap">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label text-dark font-weight-bold">kelas keputusan</label>
              <div class="col-sm-8">
                <div class="input-group input-group-outline">
                  <select class="form-control" id="exampleFormControlSelect1" name="kelaskeputusan">
                    <option value=""></option>
                    <option value="Layak (chair)">Layak (chair)</option>
                    <option value="Layak (tidak chairr)">Layak (tidak chair)</option>
                  </select>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Form Tambah -->
</div>

<?= $this->endSection() ?>