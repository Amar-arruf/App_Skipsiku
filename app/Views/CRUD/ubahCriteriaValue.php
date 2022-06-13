<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content')?>
    <div class="container-fluid py-4">
      <!-- Form Ubah -->
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 mx-3 mb-0">
              <h5 class="text-dark text-capitalize ps-3 my-3">Ubah DataCriteria Value</h5>
            </div>
            <hr class="my-0" />
            <div class="card-body px-0 mx-3 mb-0">
              <form class="mt-2 ms-3" method="POST">
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Criteria Option ID</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" readonly name="criteriaoptionid" value="<?= $get["criteria_option_id"]; ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Criteria ID</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <select class="form-control" id="exampleFormControlSelect1" name="CriteriaID">
                          <option value="<?= $get["criteria_id"] ?>"><?= $get["criteria_id"] ?></option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Kriteria</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="kriteria" value="<?= $get["Kriteria"]; ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Klasifikasi</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="klasifikasi" value="<?= $get["classification"]; ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Value</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="value" value="<?= $get["value"]; ?>">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-success" name="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Form Akhir Ubah -->
    </div>
  
    <?= $this->endSection() ?> 