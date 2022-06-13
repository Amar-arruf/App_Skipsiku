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
    'criteria_id', 'user_id', 'name', 'Tanggal_Lahir', 'Type', 'dibuat', 'diupdate'
  ];

  public function getData() 
  {
    return $this->findAll();
  }
  public function create() 
    {
      $this->ignore(true)->insert([
        'criteria_id' => $_POST['criteriaid'],
        'user_id' => $_POST['userid'],
        'name' => $_POST['nama'],
        'Type' => $_POST['type'],
      ]);
    }

    public function edit($id) 
    {

      $data = [
        'user_id' => $_POST['userid'],
        'name' => $_POST['nama'],
        'Type' => $_POST['type'],
      ];
      $this->update($id,$data );
    }

}