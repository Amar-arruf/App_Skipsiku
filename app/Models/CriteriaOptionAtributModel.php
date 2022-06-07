<?php 

namespace App\Models;

use CodeIgniter\Model;

class CriteriaOptionAtributModel extends Model 
{
  protected $table = 'criterias_option';
  protected $primaryKey = 'criteria_option_id';

  protected $createdField  = 'dibuat';
  protected $updatedField  = 'diupdate';

  protected $allowedFields = [
    'criteria_option_id', 'criteria_id', 'Kriteria', 'classifixcation', 'value', 'dibuat', 'diupdate'
  ];

  public function getData($id) 
  {
    return $this->where('criteria_id', $id)->findAll();
  }
} 