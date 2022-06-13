<?php

namespace App\Controllers;

use App\Models\CriteriaOptionAtributModel;



class ManipulasiDataCriteriaAtributOption extends BaseController
{
  public function create($id)
  {
    $db = \Config\Database::connect();
    $data  =[
      'active' => "Data Criteria Atribut",
      'value' => $db->table('criteias')->where('criteria_id',$id)->get(),
    ];
    view('layout/navbar',$data);
    
 
    // melakukan validation
    $validation =  \Config\Services::validation();
    $validation->setRules([
      'criteriaoptionid' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form  Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'CriteriaID' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'kriteria' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'klasifikasi' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'value' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ]
    ]);

    $isDataValid = $validation->withRequest($this->request)->run();
    
    // jika data valid, simpan ke database 
    if($isDataValid) {
      // instance Object
      $model = new CriteriaOptionAtributModel();
      $model->create($id);

      if ($model->affectedRows() > 0 ) {
        $session = \Config\Services::session();
        $session->setFlashdata('successs', 'data berhasil disimpan');
        return redirect()->to('/datacriteriaatribut');
      }
    }

    // tampilkan form create
    echo view('CRUD/tambahDataCriteriaValue',$data);
  }

  public function edit($id)
  {
    $data['active'] = "Data Criteria Atribut";
    view('layout/navbar',$data);

    // ambil data yang akan diedit
    $record = new CriteriaOptionAtributModel();
    $values['get'] = $record->where('criteria_option_id', $id)->first();

    // melakukan validation
    $validation =  \Config\Services::validation();
    $validation->setRules([
      'CriteriaID' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'kriteria' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'klasifikasi' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'value' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ]
    ]);

    $isDataValid = $validation->withRequest($this->request)->run();

     // jika data valid, simpan ke database 
     if($isDataValid) {
      // instance Object
      $model = new CriteriaOptionAtributModel();
      $model->edit($id);

      if ($model->affectedRows() > 0 ) {
        $session = \Config\Services::session();
        $session->setFlashdata('successs', 'data berhasil disimpan');
        return redirect()->to('/datacriteriaatribut');
      }
    }

    // tampilkan form edit
    echo view('CRUD/ubahCriteriaValue', $values);
  }

  public function delete($id)
  {
    // instance Object
    $model = new CriteriaOptionAtributModel();
    $model->delete($id);
    return redirect()->to('/datacriteriaatribut');
  }

}
