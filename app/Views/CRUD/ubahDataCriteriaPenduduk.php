<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('content') ?>

<?php

use App\Models\PeopleModel;

 $model = new PeopleModel(); 
 $Get = $model->getData();
 
 ?>
    <div class="container-fluid py-4">
      <!-- Form Ubah Data  -->
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 mx-3 mb-0">
              <h5 class="text-dark text-capitalize ps-3 my-3">Ubah Data Criteria Penduduk</h5>
            </div>
            <hr class="my-0"/>
            <div class="card-body px-0 pb-2">
              <form  class="mt-2 ms-3" method="POST">
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold"> Data Penduduk Id</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="pendudukid" readonly value="<?= $get['Data_Pendudukid']; ?>"/>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label text-dark font-weight-bold">Alternatif id</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <select class="form-control" id="exampleFormControlSelect1" name="alternatifid">
                        <option value="<?= $get["Alternatif_id"]; ?>" selected><?= $get["Alternatif_id"]; ?></option>
                        <?php foreach ($Get as $value) : ?>
                          <option value="<?= $value["Alternatif_id"]; ?>"><?= $value["Alternatif_id"]; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Penghasilan</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="penghasilan" value="<?= $get['Penghasilan']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Luas Rumah</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="luasrumah" value="<?= $get['Luas_Rumah']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Sts. Kepemilikan rumah</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="stsrumah" value="<?= $get['Sts_Rumah']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Sumber Air</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="sumberair" value="<?= $get['Sumber_air']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Ibu Hamil / Menyusui</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="ibuhamil" value="<?= $get['Ibu_Hamil_/_Menyusui']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Lansia</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="lansia" value="<?= $get['Lansia']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Jml Tanggungan Anak</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="jmltanggungananak" value="<?= $get['Jml_Tanggungan_Anak']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Jenis Dinding</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="jenisdinding" value="<?= $get['Jenis_Dinding']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Jenis Lantai</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="jenislantai" value="<?= $get['Jenis_Lantai']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Jenis Atap</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="jenisatap" value="<?= $get['Jenis_Atap']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label text-dark font-weight-bold">kelas keputusan</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <select class="form-control" id="exampleFormControlSelect1" name="kelaskeputusan">
                        <option value="<?= $get['Kelas_Keputusan']; ?>"><?= $get['Kelas_Keputusan']; ?></option>
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