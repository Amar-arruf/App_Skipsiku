<?php 

namespace App\Models;

use CodeIgniter\Model;

class PeopleModel extends Model 
{
    protected $table      = 'penduduk';
    protected $primaryKey = 'Alternatif_id';

    protected $createdField  = 'dibuat';
    protected $updatedField  = 'diupdate';

    protected $allowedFields = [
      'Alternatif_id', 'user_id', 'name', 'Tanggal_Lahir', 'Jenis_Klamin', 'Alamat', 'diupdate'
    ];

    public function getData() 
    {
      return $this->findAll();
    }
}