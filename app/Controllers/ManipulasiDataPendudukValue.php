<?php

namespace App\Controllers;

use App\Models\PeopleValueModel;

class ManipulasiDataPendudukValue extends BaseController
{
  public function create()
  {
    $data['active'] = "Data Penduduk Value";
    view('layout/navbar',$data);
 
    // melakukan validation
    $validation =  \Config\Services::validation();
    $validation->setRules([
      'pendudukid' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form  Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'alternatifid' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form  Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'penghasilan' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'luasrumah' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'stsrumah' => [
          'rules' => 'required|',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'sumberair' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'ibuhamil' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'lansia' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'jmltanggungananak' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'jenisdinding' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'jenislantai' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'jenisatap' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'kelaskeputusan' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
    ]);

    $isDataValid = $validation->withRequest($this->request)->run();
    
    // jika data valid, simpan ke database 
    if($isDataValid) {
      // instance Object
      $model = new PeopleValueModel();
      $model->create();

      if ($model->affectedRows() > 0 ) {
        $session = \Config\Services::session();
        $session->setFlashdata('successs', 'data berhasil disimpan');
        return redirect()->to('/datacriteriapenduduk');
      }
    }

    // tampilkan form create
    echo view('CRUD/tambahDataCriteriaPenduduk');
  }

  public function edit($id)
  {
    $data['active'] = "Data Penduduk Value";
    view('layout/navbar',$data);

    // ambil data yang akan diedit
    $record = new PeopleValueModel();
    $values['get'] = $record->where('Data_Pendudukid', $id)->first();

    // melakukan validation
    $validation =  \Config\Services::validation();
    $validation->setRules([
      'alternatifid' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'form Harus diisi dan tidak Boleh Kosong'
        ]
      ],
      'penghasilan' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'form Harus diisi dan tidak Boleh Kosong'
        ]
      ],
      'luasrumah' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong'
          ]
      ],
      'stsrumah' => [
          'rules' => 'required|',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'sumberair' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'ibuhamil' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'lansia' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'jmltanggungananak' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'jenisdinding' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'jenislantai' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'jenisatap' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
      'kelaskeputusan' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'form Harus diisi dan tidak Boleh Kosong',
          ]
      ],
    ]);

    $isDataValid = $validation->withRequest($this->request)->run();

     // jika data valid, simpan ke database 
     if($isDataValid) {
      // instance Object
      $model = new PeopleValueModel();
      $model->edit($id);

      if ($model->affectedRows() > 0 ) {
        $session = \Config\Services::session();
        $session->setFlashdata('successs', 'data berhasil disimpan');
        return redirect()->to('/datacriteriapenduduk');
      }
    }

    // tampilkan form edit
    echo view('CRUD/ubahDataCriteriaPenduduk', $values);
  }

  public function delete($id)
  {
    // instance Object
    $model = new PeopleValueModel();
    $model->delete($id);
    return redirect()->to('/datacriteriapenduduk');
  }

}
