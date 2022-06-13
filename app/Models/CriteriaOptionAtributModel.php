<?php 

namespace App\Models;

use CodeIgniter\Model;

class CriteriaOptionAtributModel extends Model 
{
  protected $table = 'criterias_option';
  protected $primaryKey = 'criteria_option_id';

  protected $createdField  = 'dibuat';
  protected $updatedField  = 'diupdate';

  protected $useTimestamps = true;


  protected $allowedFields = [
    'criteria_option_id', 'criteria_id', 'Kriteria', 'classification', 'value', 'dibuat', 'diupdate'
  ];

  public function getData($id) 
  {
    return $this->where('criteria_id', $id)->findAll();
  }

  public function create($id) 
    {
      $this->where('criteria_option_id', $id)->ignore(true)->insert([
        'criteria_option_id' => $_POST['criteriaoptionid'],
        'criteria_id' => $_POST['CriteriaID'],
        'Kriteria' => $_POST['kriteria'],
        'classification' => $_POST['klasifikasi'],
        'value' => $_POST['value']
      ]);
    }

    public function edit($id) 
    {

      $data = [
        'criteria_id' => $_POST['CriteriaID'],
        'Kriteria' => $_POST['kriteria'],
        'classification' => $_POST['klasifikasi'],
        'value' => $_POST['value']
      ];
      $this->update($id,$data );
    }

} 