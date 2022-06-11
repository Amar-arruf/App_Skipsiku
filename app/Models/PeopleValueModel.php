<?php 

namespace App\Models;

use CodeIgniter\Model;

class PeopleValueModel extends Model 
{
    protected $table      = 'data_penduduk_value';
    protected $primaryKey = 'Data_Pendudukid';

    protected $allowedFields = [
      'Data_Pendudukid', 
      'Alternatif_id', 
      'Penghasilan', 
      'Luas_Rumah', 
      'Sts_Rumah', 
      'Sumber_air', 
      'Ibu_Hamil_/_Menyusui', 
      'Lansia', 
      'Jml_Tanggungan_Anak', 
      'Jenis_Dinding', 
      'Jenis_Lantai', 
      'Jenis_Atap',
      'Kelas_Keputusan',
    ];

    public function getData() 
    {
      return $this->findAll();
    }

    public function create() 
    {
      $this->ignore(true)->insert([
        'Data_Pendudukid' => $_POST['pendudukid'],
        'Alternatif_id' => $_POST['alternatifid'],
        'Penghasilan' => $_POST['penghasilan'],
        'Luas_Rumah' => $_POST['luasrumah'],
        'Sts_Rumah' => $_POST['stsrumah'],
        'Sumber_air' => $_POST['sumberair'],
        'Ibu_Hamil_/_Menyusui' => $_POST['ibuhamil'],
        'Lansia' => $_POST['lansia'],
        'Jml_Tanggungan_Anak' => $_POST['jmltanggungananak'],
        'Jenis_Dinding' => $_POST['jenisdinding'],
        'Jenis_Lantai' => $_POST['jenislantai'],
        'Jenis_Atap' => $_POST['jenisatap'],
        'Kelas_Keputusan' => $_POST['kelaskeputusan'],
      ]);
    }

    public function edit($id) 
    {

      $data = [
        'Alternatif_id' => $_POST['alternatifid'],
        'Penghasilan' => $_POST['penghasilan'],
        'Luas Rumah' => $_POST['luasrumah'],
        'Sta. Kepemilikian rumah' => $_POST['stsrumah'],
        'Sumber air' => $_POST['sumberair'],
        'Ibu Hamil / Menyusui' => $_POST['ibuhamil'],
        'Lansia' => $_POST['lansia'],
        'Jml Tanggunngan Anak' => $_POST['jmltanggungananak'],
        'Jenis Dinding' => $_POST['jenisdinding'],
        'Jenis Lantai' => $_POST['jenislantai'],
        'Jenis Atap' => $_POST['jenisatap'],
        'Kelas Keputusan' => $_POST['kelaskeputusan'],
      ];
      $this->update($id,$data );
    }
}