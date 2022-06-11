<?php 

namespace App\Models;

use CodeIgniter\Model;

class PeopleModel extends Model 
{
    protected $table      = 'penduduk';
    protected $primaryKey = 'Alternatif_id';

    protected $createdField  = 'dibuat';
    protected $updatedField = 'diupdate';

    protected $allowedFields = [
       'Alternatif_id','user_id', 'name', 'Tanggal_Lahir', 'Jenis_Kelamin', 'Alamat', 'dibuat', 'diupdate'
    ];

    public function getData() 
    {
      return $this->findAll();
    }

    public function create() 
    {
      $this->ignore(true)->insert([
        'Alternatif_id' => $_POST['alternatif_id'],
        'user_id' => $_POST['userID'],
        'name' => $_POST['nama'],
        'Tanggal_Lahir' => $_POST['ttl'],
        'Jenis_Kelamin' => $_POST['JK'],
        'Alamat' => $_POST['alamat'],
      ]);
    }

    public function edit($id) 
    {

      $data = [
        'name' => $_POST['nama'],
        'Tanggal_Lahir' => $_POST['ttl'],
        'Jenis_Kelamin' => $_POST['JK'],
        'Alamat' => $_POST['alamat']
      ];
      $this->update($id,$data );
    }

}