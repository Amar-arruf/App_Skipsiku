<?php

namespace App\Controllers;

use App\Models\PeopleModel;

class ManipulasiDataPenduduk extends BaseController
{
  public function create()
  {
    $data['active'] = "Data Penduduk";
    view('layout/navbar',$data);
 
    // melakukan validation
    $validation =  \Config\Services::validation();
    $validation->setRules([
      'alternatif_id' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form  Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'userID' => [
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
      'ttl' => [
          'rules' => 'required|',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'alamat' => [
          'rules' => 'required|min_length[3]',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
            'min_length[3]' => 'Masukan Minimal tiga Character'
          ]
      ],
    ]);

    $isDataValid = $validation->withRequest($this->request)->run();
    
    // jika data valid, simpan ke database 
    if($isDataValid) {
      // instance Object
      $model = new PeopleModel();
      $model->create();

      if ($model->affectedRows() > 0 ) {
        $session = \Config\Services::session();
        $session->setFlashdata('successs', 'data berhasil disimpan');
        return redirect()->to('/datapenduduk');
      }
    }

    // tampilkan form create
    echo view('CRUD/tambahDataPenduduk');
  }

  public function edit($id)
  {
    $data['active'] = "Data Penduduk";
    view('layout/navbar',$data);

    // ambil data yang akan diedit
    $record = new PeopleModel();
    $values['get'] = $record->where('Alternatif_id', $id)->first();

    // melakukan validation
    $validation =  \Config\Services::validation();
    $validation->setRules([
      'nama' => [
          'rules' => 'required|',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'ttl' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'alamat' => [
          'rules' => 'required|min_length[3]',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
            'min_length[3]' => 'Masukan Minimal tiga Character'
          ]
      ],
    ]);

    $isDataValid = $validation->withRequest($this->request)->run();

     // jika data valid, simpan ke database 
     if($isDataValid) {
      // instance Object
      $model = new PeopleModel();
      $model->edit($id);

      if ($model->affectedRows() > 0 ) {
        $session = \Config\Services::session();
        $session->setFlashdata('successs', 'data berhasil disimpan');
        return redirect()->to('/datapenduduk');
      }
    }

    // tampilkan form edit
    echo view('CRUD/ubahdataPenduduk', $values);
  }

  public function delete($id)
  {
    // instance Object
    $model = new PeopleModel();
    $model->delete($id);
    return redirect()->to('/datapenduduk');
  }

}
