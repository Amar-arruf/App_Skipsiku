<?php

namespace App\Controllers;

use App\Models\PeopleValueModel;

class Home extends BaseController
{
    public function index()
    {
        // instance model db
        $model = new PeopleValueModel();


        $performance = new Performance();
        $perform = $performance->index();
        
        $count = [
            'jumlah_lansia' => $model->where('Lansia', 'Ada')->countAllResults(),
            'jumlah_tanggungan' => $model->where('Jml_Tanggungan_Anak >=', 1)->countAllResults(),
            'jumlah_ibu_Hamil' => $model->where('Ibu_Hamil_/_Menyusui', 'Ada')->countAllResults()
        ];

        $perform_metodc45 = $perform['perform'];
        $perform_metodekmeans = $perform['performKmeans'];

        $data = [
            'active' => "Dashboard",
            'metod_c45' => $perform_metodc45,
            'metod_kmeans' => $perform_metodekmeans,
            'count_Category_Main' => $count
        ];
        view('layout/navbar',$data);
  
        return view('welcome_message', $data);
    }
}
