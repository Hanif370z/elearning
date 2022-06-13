<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return view('user/index');
    }
    public function materi_tugas()
    {
        return view('user/materi');
    }
    public function account_setting()
    {
        return view('user/account_setting');
    }
    
    
 
   
}
