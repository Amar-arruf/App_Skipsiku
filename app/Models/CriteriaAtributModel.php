<?php 

namespace App\Models;

use CodeIgniter\Model;

class CriteriaAtributModel extends Model 
{
  protected $table = 'criteias';
  protected $primaryKey = 'criteria_id';

  protected $createdField  = 'dibuat';
  protected $updatedField  = 'diupdate';

  protected $allowedFields = [
    'criteria_id', 'user_id', 'name', 'Tanggal_Lahir', 'Type', 'diupdate'
  ];

  public function getData() 
  {
    return $this->findAll();
  }
} 