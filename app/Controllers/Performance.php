<?php

namespace App\Controllers;


class Performance extends BaseController
{
  public function index()
  {
    // metode C45
    $object = new Proses();
    $metodeC45 = $object->perhitungan_metode_c45();
    // Confusion Matrix
    $TP = $metodeC45['report']['Layak (chair)']['Layak (chair)'];
    $FP = $metodeC45['report']['Layak (chair)']['Layak (tidak chair)'];
    $FN = $metodeC45['report']['Layak (tidak chair)']['Layak (chair)'];
    $TN = $metodeC45['report']['Layak (tidak chair)']['Layak (tidak chair)'];

    $accuracy = floatval((($TP + $TN) / ($TP + $TN + $FP + $FN)) * 100);
    $error = floatval(100 - $accuracy);
    $precision = floatval(($TP / ($TP + $FP)) *100);
    $recall = floatval(($TP / ($TP+$FN)) * 100);

    $perform = [
      "accuracy" => $accuracy,
      "error" => $error,
      "precision" => $precision,
      "recall" => $recall
    ];

    // metode k-means
    $object2 = new Proseskmeans();
    $metodeKmeans = $object2->perhitungan_metode_kmeans();
    
    // Confusion Matrix
    $TP_1 = $metodeKmeans['report'][0][0];
    $FP_1 = $metodeKmeans['report'][0][1];
    $FN_1 = $metodeKmeans['report'][1][0];
    $TN_1 = $metodeKmeans['report'][1][1];

    $accuracy_1 = floatval((($TP_1 + $TN_1) / ($TP_1 + $TN_1 + $FP_1 + $FN_1)) * 100);
    $error_1 = floatval(100 - $accuracy_1);
    $precision_1 = floatval(($TP_1 / ($TP_1 + $FP_1)) *100);
    $recall_1 = floatval(($TP_1 / ($TP_1+$FN_1)) * 100);

    $perform_kmeans = [
      "accuracy_1" => round($accuracy_1,2),
      "error_1" => round($error_1,2),
      "precision_1" => round($precision_1,2),
      "recall_1" => round($recall_1,2)
    ];


    $data = [
      'active' => "Performance",
      'metodeC45' => $metodeC45,
      'perform' => $perform,
      'metodeKmeans' => $metodeKmeans,
      'performKmeans' => $perform_kmeans
    ];
    return view('pages/performance', $data);
  }
}
