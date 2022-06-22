<?php

namespace App\Controllers;

use Rubix\ML\Datasets\Labeled;
use Rubix\ML\Classifiers\ClassificationTree;
use Rubix\ML\CrossValidation\Reports\ConfusionMatrix;
use Rubix\ML\Datasets\Unlabeled;

class Proses extends BaseController
{
  public function index()
  {
    $db = \Config\Database::connect();
    $data1 = $db->table('data_latih_c45')->get()->getResultArray();
    $datauji = $db->table('data_uji_c45')->get()->getResultArray();

    $data = [
      "datasetslist" => $data1,
      "datauji" => $datauji,
    ];

    if (count($data1) > 0 && count($datauji) > 0) {
      $proses = $this->perhitungan_metode_c45();
      $data['prosesc45'] = $proses; 
    }
    view('layout/navbar',['active' => 'Proses Data Mining Metode C45']);
    return view('pages/ProsesmetodeC45', $data);

    
  }

  public function uploadcsv() 
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
          $builder = $db->table('data_latih_c45');
          $builder->insertBatch($dataset);
          $session = session();
          $session->setFlashdata("success", "data csv berhasil diupload");
          return redirect('prosesmetodec45');
      }
  }
    $db = \Config\Database::connect();
    $data = $db->table('data_latih_c45')->get()->getResultArray();
    $datauji = $db->table('data_uji_c45')->get()->getResultArray();
    view('layout/navbar',['active' => 'Proses Data Mining Metode C45']);
    return view('pages/ProsesmetodeC45', [
      "datasetslist" => $data,
      "datauji" => $datauji,
      "datasets" =>$dataset,
    ]);
}

public function uploadcsvdatauji()
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
        $builder = $db->table('data_uji_c45');
        $builder->insertBatch($dataset);
        $session = session();
        $session->setFlashdata("success", "data csv uji berhasil diupload");
        return redirect('prosesmetodec45');
    }
  }
  $db = \Config\Database::connect();
  $data = $db->table('data_latih_c45')->get()->getResultArray();
  $datauji = $db->table('data_uji_c45')->get()->getResultArray();
  view('layout/navbar',['active' => 'Proses Data Mining Metode C45']);
  return view('pages/ProsesmetodeC45', [
    "datasetslist" => $data,
    "datauji" => $datauji,
    "datasets" =>$dataset
  ]);
}

public function delete( $id) 
{
  $session = session();
  if ($id === 1) {
    $db = \Config\Database::connect();
    $data = $db->table('data_uji_c45');
    $result = $data->truncate();

    if($result) {
      $session->setFlashdata("success", "data latih berhasil dihapus");
      return redirect('prosesmetodec45');
    }
    $session->setFlashdata("success", "data latih gagal dihapus");
    return redirect('prosesmetodec45');
  } else {
    $db = \Config\Database::connect();
    $data = $db->table('data_latih_c45');
    $result = $data->truncate();

    if($result) {
      $session->setFlashdata("success", "data latih berhasil dihapus");
      return redirect('prosesmetodec45');
    }
    $session->setFlashdata("success", "data latih gagal dihapus");
    return redirect('prosesmetodec45');
  }
  
}

  public function perhitungan_metode_c45() 
  {

    $samples =[];
    $labels = [];
    $sampelsUji =[];
    $labelsUji=[];

    $db = \Config\Database::connect();
    $record = $db->table('data_latih_c45')->get()->getResultArray();
    $datauji = $db->table('data_uji_C45')->get()->getResultArray();
 
    foreach ($record as $data ) {
      $samples[$data["ID"]] = [
          $data["Penghasilan"],
          $data["Luas_Rumah"],
          $data["Sts_Rumah"],
          $data["Sumber_air"],
          $data["Ibu_Hamil"],
          $data["Lansia"],
          $data["Jml_Tanggungan_Anak"],
          $data["Jenis_Dinding"],
          $data["Jenis_Lantai"],
          $data["Jenis_Atap"]
      ];
      $labels[] = $data["kelas_Keputusan"];
    };

    foreach ($datauji as $data ) {
      $sampelsUji[$data["ID"]] = [
          $data["Penghasilan"],
          $data["Luas_Rumah"],
          $data["Sts_Rumah"],
          $data["Sumber_air"],
          $data["Ibu_Hamil"],
          $data["Lansia"],
          $data["Jml_Tanggungan_Anak"],
          $data["Jenis_Dinding"],
          $data["Jenis_Lantai"],
          $data["Jenis_Atap"]
      ];
      $labelsUji[] = $data["Kelas_Keputusan"];
    };
    

    $dataset = new Labeled($samples, $labels);
    $datatest = new Unlabeled($sampelsUji);

    $estimator = new ClassificationTree(10, 5, 0.0, null, null);
    
    $training =  $estimator->train($dataset);
    // mengecheck data dilatih atau belum yang mengembalikan type data boolean

    $trained = $estimator->trained();

    $height = $estimator->height();

    // Testing
    $predictions= $estimator->predict($datatest);
    $new_predictions = [];
    
    foreach($predictions as $row) {
        $new_predictions[] = $row;
    }

    // validation 
    $report = new ConfusionMatrix();
    $result = $report->generate($new_predictions, $labelsUji);

    $new_result = iterator_to_array($result,true);

    $data = [
      'active' => 'Proses Data Mining Metode C45',
      'trained' => $trained,
      'prediksi' => $predictions,
      'samples' =>$samples,
      'samplesUji' => $sampelsUji,
      'datatesting' => $datatest,
      'heighttree' => $height,
      'report' => $new_result
    ];

    return $data;
  }
}