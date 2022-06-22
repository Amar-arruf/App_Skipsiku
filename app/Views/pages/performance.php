<?= $this->extend('layout/page_layout')?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-ralative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-4">Performance Metode C45</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2 mt-2">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Confusion Matrix</th>
                <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Layak (chair)</th>
                <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Layak (tidak chair)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0">Pre. Layak (chair)</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0"><?= $metodeC45['report']['Layak (chair)']['Layak (chair)'] ?></p>
                </td>
                <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0"><?= $metodeC45['report']['Layak (chair)']['Layak (tidak chair)'] ?></p>
                </td>
              </tr>
              <tr>
                <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0">Pre Layak (tidak chair)</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0"><?= $metodeC45['report']['Layak (tidak chair)']['Layak (chair)'] ?></p>
                </td>
                <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0"><?= $metodeC45['report']['Layak (tidak chair)']['Layak (tidak chair)'] ?></p>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="mt-4 ms-5">
            <div class="p-3 text-sm">
              <div class="row align-items-center">
                <ul class="col-sm-2">
                  <li class="text-dark font-weight-bold">Accuracy</li>
                </ul>
                <div class="col-sm-5">
                  <p class="text-xs font-weight-bold">: <?= $perform["accuracy"] ?> %</p>
                </div>
              </div>
              <div class="row align-items-center">
                <ul class="col-sm-2">
                  <li class="text-dark font-weight-bold">Error</li>
                </ul>
                <div class="col-sm-5">
                  <p class="text-xs font-weight-bold">: <?= $perform["error"] ?> %</p>
                </div>
              </div>
              <div class="row align-items-center">
                <ul class="col-sm-2">
                  <li class="text-dark font-weight-bold">Precision</li>
                </ul>
                <div class="col-sm-5">
                  <p class="text-xs font-weight-bold">: <?= $perform["precision"] ?> %</p>
                </div>
              </div>
              <div class="row align-items-center">
                <ul class="col-sm-2">
                  <li class="text-dark font-weight-bold">Recall</li>
                </ul>
                <div class="col-sm-5">
                  <p class="text-xs font-weight-bold">: <?= $perform["recall"] ?> %</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-ralative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-4">Performance Metode K-means</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2 mt-2">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Confusion Matrix</th>
                <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Layak (chair)</th>
                <th class="text-uppercase align-middle text-dark text-xs text-center font-weight-bolder">Layak (tidak chair)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0">Pre. Layak (chair)</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0"><?= $metodeKmeans['report'][0][0] ?></p>
                </td>
                <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0"><?= $metodeKmeans['report'][0][1] ?></p>
                </td>
              </tr>
              <tr>
                <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0">Pre Layak (tidak chair)</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0"><?=  $metodeKmeans['report'][1][0] ?></p>
                </td>
                <td class="align-middle text-center text-sm">
                  <p class="text-xs font-weight-bold mb-0"><?= $metodeKmeans['report'][1][1] ?></p>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="mt-4 ms-5">
            <div class="p-3 text-sm">
              <div class="row align-items-center">
                <ul class="col-sm-2">
                  <li class="text-dark font-weight-bold">Accuracy</li>
                </ul>
                <div class="col-sm-5">
                  <p class="text-xs font-weight-bold">: <?= $performKmeans["accuracy_1"] ?> %</p>
                </div>
              </div>
              <div class="row align-items-center">
                <ul class="col-sm-2">
                  <li class="text-dark font-weight-bold">Error</li>
                </ul>
                <div class="col-sm-5">
                  <p class="text-xs font-weight-bold">: <?= $performKmeans["error_1"] ?> %</p>
                </div>
              </div>
              <div class="row align-items-center">
                <ul class="col-sm-2">
                  <li class="text-dark font-weight-bold">Precision</li>
                </ul>
                <div class="col-sm-5">
                  <p class="text-xs font-weight-bold">: <?= $performKmeans["precision_1"] ?> %</p>
                </div>
              </div>
              <div class="row align-items-center">
                <ul class="col-sm-2">
                  <li class="text-dark font-weight-bold">Recall</li>
                </ul>
                <div class="col-sm-5">
                  <p class="text-xs font-weight-bold">: <?= $performKmeans["recall_1"] ?> %</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>