<?php 

namespace App\Models;

use CodeIgniter\Model;

class PeopleValueModel extends Model 
{
    protected $table      = 'data_penduduk_value';
    protected $primaryKey = 'Data Pendudukid`';

    protected $allowedFields = [
      'Data PendudukId', 
      'Alternatif id', 
      'Penghasilan', 
      'Luas Rumah', 
      'Sta. Kepemilikian rumah', 
      'Sumber air', 
      'Ibu Hamil / Menyusui', 
      'Lansia', 
      'Jml Tanggunngan Anak', 
      'Jenis Dinding', 
      'Jenis Lantai', 
      'Jenis Atap',
      'Kelas Keputusan ',
    ];

    public function getData() 
    {
      return $this->findAll();
    }
}