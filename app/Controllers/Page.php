<?php 

namespace App\Controllers;

use App\Models\PeopleModel;
use App\Models\PeopleValueModel;
use App\Models\CriteriaAtributModel;

class Page extends BaseController 
{
  public function datapenduduk() 
  {
    $data['active'] = "Data Penduduk";
    view('layout/navbar',$data);

    $model = model(PeopleModel::class);
    $record ['get'] = $model->getData();

    echo view('pages/dataPenduduk',$record);
  }
  public function datacriteriatribut() 
  {
    $data['active'] = "Data Criteria Atribut";
    view('layout/navbar',$data);

    $model = model(CriteriaAtributModel::class);
    $record = [
      'get' => $model->getData()
      
    ];
    
    echo view('pages/dataCriteriaAtribut', $record);
  }
  public function datacriteriapenduduk() 
  {
    $data['active'] = "Data Criteria Penduduk";
    view('layout/navbar',$data);

    $model = model(PeopleValueModel::class);
    $record ['get'] = $model->getData();

    echo view('pages/dataCriteriaPenduduk', $record);
  }
}