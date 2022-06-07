<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['active'] = "Dashboard";
        view('layout/navbar',$data);
  
        return view('welcome_message');
    }
}
