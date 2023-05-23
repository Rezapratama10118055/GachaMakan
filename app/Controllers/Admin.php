<?php

namespace App\Controllers;

class Admin extends BaseController
{
     protected $session;
    
    public function __construct()
    {
        $this->session = session();
        $this->session->start();
    }
    
    public function index()
    {
        // Cek apakah session isLogin sudah ter-set
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        
        // Cek role dari session
       if ($this->session->get('role') != 1) {
       return redirect()->to('/user');
      }
        
        return view('admin/index');
    }
}
