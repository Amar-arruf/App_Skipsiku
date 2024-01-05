<?php

namespace App\Controllers;

class Auth extends BaseController
{
  public $db;
  public $session;
  public function index()
  {
    return redirect('login');
  }

  public function login()
  {
    if (session('id_user')) {
      return redirect()->to(site_url('dashboard'));
    }
    return view('Auth/Login');
  }

  public function proseslogin()
  {
    $this->session = \Config\Services::session();
    $this->db = \Config\Database::connect();
    $post = $this->request->getPost();
    $query = $this->db->table('user/admin')->getWhere(['username' => $post['username']]);
    $user = $query->getRow();
    if ($user) {
      if ($post['Password'] === $user->password) {
        $params = ['id_user' => $user->user_id];
        $this->session->set($params);
        return redirect('dashboard');
      } else {
        return redirect()->to('/')->with('gagal', 'Password Salah');
      }
    } else {
      return redirect()->to('/')->with('gagal', 'login gagal');
    }
  }

  public function logout()
  {
    session()->remove('id_user');
    return redirect()->to(site_url('/'));
  }
}
