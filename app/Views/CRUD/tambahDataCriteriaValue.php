<?= $this->extend('layout/page_layout');?>

<?= $this->section('content')?>

    <div class="container-fluid py-4">
      <!-- Form Tambah -->
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 mx-3 mb-0">
              <h5 class="text-dark text-capitalize ps-3 my-3">Tambah Data Criteria Atribut</h5>
            </div>
            <hr class="my-0" />
            <div class="card-body px-0 pb-2">
              <form class="mt-2 ms-3" method="POST">
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Criteria Option ID</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-outline">
                      <label class="form-label">Criteria Option Id</label>
                      <input type="text" class="form-control" name="criteriaoptionid">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Criteria ID</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-outline">
                      <select class="form-control" id="exampleFormControlSelect1" name="CriteriaID">
                        <?php $i = 1; ?>
                        <?php  foreach($value->getResultArray() as $get):?>
                          <option value="<?= $get["criteria_id"] ?>"><?= $get["criteria_id"] ?></option>
                        <?php  endforeach; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Kriteria</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-outline">
                      <label class="form-label">Kriteria</label>
                      <input type="text" class="form-control" name="kriteria">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Klasifikasi</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-outline">
                      <label class="form-label">Klasifikasi</label>
                      <input type="text" class="form-control" name="klasifikasi">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Value</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-outline">
                      <label class="form-label">Value</label>
                      <input type="text" class="form-control" name="value">
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

<?= $this->endSection() ?>