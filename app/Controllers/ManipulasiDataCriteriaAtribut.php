<?php

namespace App\Controllers;

use App\Models\CriteriaAtributModel;



class ManipulasiDataCriteriaAtribut extends BaseController
{
  public function create()
  {
    $db = \Config\Database::connect();
    $data  =[
      'active' => "Data Criteria Atribut",
      'value' => $db->table('user/admin')->get(),
    ];
    view('layout/navbar',$data);
    
 
    // melakukan validation
    $validation =  \Config\Services::validation();
    $validation->setRules([
      'criteriaid' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form  Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'userid' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'nama' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'type' => [
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
      $model = new CriteriaAtributModel();
      $model->create();

      if ($model->affectedRows() > 0 ) {
        $session = \Config\Services::session();
        $session->setFlashdata('successs', 'data berhasil disimpan');
        return redirect()->to('/datacriteriaatribut');
      }
    }

    // tampilkan form create
    echo view('CRUD/tambahDataCriteriaAtribut',$data);
  }

  public function edit($id)
  {
    $data['active'] = "Data Criteria Atribut";
    view('layout/navbar',$data);

    // ambil data yang akan diedit
    $record = new CriteriaAtributModel();
    $values['get'] = $record->where('criteria_id', $id)->first();

    // melakukan validation
    $validation =  \Config\Services::validation();
    $validation->setRules([
    'userid' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'form Harus diisi dan tidak Boleh Kosong'
        ]
    ],
    'nama' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'form Harus diisi dan tidak Boleh Kosong'
        ]
    ],
    'type' => [
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
      $model = new CriteriaAtributModel();
      $model->edit($id);

      if ($model->affectedRows() > 0 ) {
        $session = \Config\Services::session();
        $session->setFlashdata('successs', 'data berhasil disimpan');
        return redirect()->to('/datacriteriaatribut');
      }
    }

    // tampilkan form edit
    echo view('CRUD/ubahDataCriteriaAtribut', $values);
  }

  public function delete($id)
  {
    // instance Object
    $model = new CriteriaAtributModel();
    $model->delete($id);
    return redirect()->to('/datacriteriaatribut');
  }

}
