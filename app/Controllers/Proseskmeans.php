<?php

namespace App\Controllers;

use Rubix\ML\Datasets\Unlabeled;
use Rubix\ML\Clusterers\KMeans;
use Rubix\ML\Kernels\Distance\Euclidean;
use Rubix\ML\Clusterers\Seeders\Preset;
use Rubix\ML\CrossValidation\Reports\ConfusionMatrix;

class Proseskmeans extends BaseController 
{
  public function index() 
  {
    $db = \Config\Database::connect();
    $datakmeans = $db->table('data_latih_kmeans')->get()->getResultArray();

    $data = [
      "dataKmeans" => $datakmeans,
      "active" => "Proses data mining metode K-means"
    ];

    if (count($datakmeans) > 0 ) {
      $proses = $this->perhitungan_metode_kmeans();
      $data['proseskmeans'] = $proses; 
    }

    view('layout/navbar',$data);
    return view('pages/ProsesmetodeKmeans', $data);

  }

  public function importcsv() 
  {
    if ($this->request->getMethod(true) == "POST") {
      $file = $this->request->getFile("FileCSV");
      $file_name = $file->getTempName();
      $dataset = [];
      $csv_data = array_map('str_getcsv', file($file_name));
      if (count($csv_data) > 0) {
          $index = 0;
          foreach ($csv_data as $data) {
              if ($index > 0) {
                  $dataset[]= array(
                      "ID" => $data[1],
                      "Penghasilan" => $data[2],
                      "Luas_Rumah" => $data[3],
                      "Sts_Rumah" => $data[4],
                      "Sumber_Air" => $data[5],
                      "Ibu_Hamil" => $data[6],
                      "Lansia" => $data[7],
                      "Jml_Tanggungan_Anak" => $data[8],
                      "Jenis_Dinding" => $data[9],
                      "Jenis_Lantai" => $data[10],
                      "Jenis_Atap" => $data[11],
                      "kelas_Keputusan" => $data[12],
                  );
              }
              $index++;
          }
          $db = \Config\Database::connect();
          $builder = $db->table('data_latih_kmeans');
          $builder->insertBatch($dataset);
          $session = session();
          $session->setFlashdata("success", "data csv berhasil diupload");
          return redirect('prosesmetodekmeans');
      }
    }
    $db = \Config\Database::connect();
    $data = $db->table('data_latih_kmeans')->get()->getResultArray();
    view('layout/navbar',['active' => 'Proses Data Mining Metode C45']);
    return view('pages/ProsesmetodeKmeans', [
      "dataKmeans" => $data,
    ]);
  }

  public function Delete($id)
  {
    $session = session();
    if ($id == 1) {
      $db = \Config\Database::connect();
      $builder = $db->table('data_latih_kmeans');
      $result = $builder->truncate();

      if($result) {
        $session->setFlashdata("success", "data latih berhasil dihapus");
        return redirect('prosesmetodekmeans');
      }
      $session->setFlashdata("success", "data latih gagal dihapus");
      return redirect('prosesmetodekmeans');
    }
  }

  public function perhitungan_metode_kmeans() 
  {
    $samples = [];
    $lables_Actual = [];

    $db = \Config\Database::connect();
    $builder= $db->table('data_latih_kmeans'); 
    $record = $builder->get()->getResultArray();
    
    foreach ($record as $data ) {
      $samples[$data["ID"]] = [
          floatval($data['Penghasilan']),
          floatval($data['Luas_Rumah']),
          floatval($data["Sts_Rumah"]),
          floatval($data["Sumber_air"]),
          floatval($data["Ibu_Hamil"]),
          floatval($data["Lansia"]),
          floatval($data["Jml_Tanggungan_Anak"]),
          floatval($data["Jenis_Dinding"]),
          floatval($data["Jenis_Lantai"]),
          floatval($data["Jenis_Atap"])
      ];
      $lables_Actual[] = $data["kelas_Keputusan"];
    };


    $dataset = new Unlabeled($samples);

    $minPenghasilan = $builder->selectMin("Penghasilan")->get()->getResult();
    $minLuasRumah = $builder->selectMin("Luas_Rumah")->get()->getResult();
    $minStsRumah = $builder->selectMin("Sts_Rumah")->get()->getResult();
    $minSumberAir = $builder->selectMin("Sumber_air")->get()->getResult();
    $minIbuHamil = $builder->selectMin("Ibu_Hamil")->get()->getResult();
    $minLansia = $builder->selectMin("Lansia")->get()->getResult();
    $minJmlTanggunganAnak = $builder->selectMin("Jml_Tanggungan_Anak")->get()->getResult();
    $minJenis_Dinding = $builder->selectMin("Jenis_Dinding")->get()->getResult();
    $minJenis_Lantai = $builder->selectMin("Jenis_Lantai")->get()->getResult();
    $minJenis_Atap = $builder->selectMin("Jenis_Atap")->get()->getResult();

    $maxPenghasilan = $builder->selectMax("Penghasilan")->get()->getResult();
    $maxLuasRumah = $builder->selectMax("Luas_Rumah")->get()->getResult();
    $maxStsRumah = $builder->selectMax("Sts_Rumah")->get()->getResult();
    $maxSumberAir = $builder->selectMax("Sumber_air")->get()->getResult();
    $maxIbuHamil = $builder->selectMax("Ibu_Hamil")->get()->getResult();
    $maxLansia = $builder->selectMax("Lansia")->get()->getResult();
    $maxJmlTanggunganAnak = $builder->selectMax("Jml_Tanggungan_Anak")->get()->getResult();
    $maxJenis_Dinding = $builder->selectMax("Jenis_Dinding")->get()->getResult();
    $maxJenis_Lantai = $builder->selectMax("Jenis_Lantai")->get()->getResult();
    $maxJenis_Atap = $builder->selectMax("Jenis_Atap")->get()->getResult();


    // intelize centroid 
    $centroid = [
        [
          floatval($minPenghasilan[0]->Penghasilan), 
          floatval($minLuasRumah[0]->Luas_Rumah), 
          floatval($minStsRumah[0]->Sts_Rumah), 
          floatval($minSumberAir[0]->Sumber_air), 
          floatval($minIbuHamil[0]->Ibu_Hamil), 
          floatval($minLansia[0]->Lansia), 
          floatval($minJmlTanggunganAnak[0]->Jml_Tanggungan_Anak), 
          floatval($minJenis_Dinding[0]->Jenis_Dinding), 
          floatval($minJenis_Lantai[0]->Jenis_Lantai),
          floatval($minJenis_Atap[0]->Jenis_Atap)
        ],
        [
          floatval($maxPenghasilan[0]->Penghasilan), 
          floatval($maxLuasRumah[0]->Luas_Rumah), 
          floatval($maxStsRumah[0]->Sts_Rumah), 
          floatval($maxSumberAir[0]->Sumber_air), 
          floatval($maxIbuHamil[0]->Ibu_Hamil), 
          floatval($maxLansia[0]->Lansia), 
          floatval($maxJmlTanggunganAnak[0]->Jml_Tanggungan_Anak), 
          floatval($maxJenis_Dinding[0]->Jenis_Dinding), 
          floatval($maxJenis_Lantai[0]->Jenis_Lantai),
          floatval($maxJenis_Atap[0]->Jenis_Atap)
        ],
    ];



    $estimator = new KMeans(2, 100, 5, 1.0, 3, new Euclidean(), new Preset($centroid));

    $training = $estimator->train($dataset);

    $trained = $estimator->trained();
    
    $testing = $estimator->predict($dataset);
    $new_predictions = [];
    $new_testing =[];

    foreach ($testing as $row) {
      $new_predictions[] = strval($row);
    }

    $i = 0;
    foreach ($record as $value) {
      $new_testing[] = [
        $value["ID"],
        strval($new_predictions[$i])
      ];
      $i++;
    }


    $report = new ConfusionMatrix();
    $result = $report->generate($new_predictions,$lables_Actual);
    
    $new_result = iterator_to_array($result,true);


    return $data = [
      "samples" => $samples,
      "data_training" => $training,
      "trained" => $trained,
      "testing" =>  $new_testing,
      "report" => $new_result
    ];

  }

}