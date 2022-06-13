<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

    <div class="container-fluid py-4">
      <!-- Form Tambah  -->
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 mx-3 mb-0">
              <h5 class="text-dark text-capitalize ps-3 my-3">Ubah Data Criteria Atribut</h5>
            </div>
            <hr class="my-0"/>
            <div class="card-body px-0 pb-2">
              <form  class="mt-2 ms-3" method="POST">
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Criteria id</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="criteriaid" readonly value="<?= $get["criteria_id"] ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label text-dark font-weight-bold">User ID</label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <select class="form-control" id="exampleFormControlSelect1" name="userid">
                        <option value="<?= $get["user_id"]; ?>"><?= $get["user_id"]; ?></option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Nama</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-dynamic">
                      <input type="text" class="form-control" name="nama" value="<?= $get["name"] ?>">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <Label class="col-sm-2 col-form-label text-dark font-weight-bold">Type</Label>
                  <div class="col-sm-8">
                    <div class="input-group input-group-Dynamic">
                      <input type="text" class="form-control" name="type" value="<?= $get["type"] ?>">
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

<?= $this-> endSection() ?>