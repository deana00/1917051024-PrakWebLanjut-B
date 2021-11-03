<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\Request;
use App\Models\UserModel;

class Templating extends BaseController
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Blog - Posts'
        ];
        // echo view('layouts/header', $data);
        // echo view('layouts/navbar');
        // echo view('v_posts');
        // echo view('layouts/footer');
        return view('v_admin', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Register'
        ];
        return view('v_register', $data);
    }

    public function saveRegister()
    {
        $request = service('request');
        $data = [
            // 'key_in_migration' => $request->getVar('name_Attr'),
            'fullname'  => $request->getVar('fullname'),
            'email'     => $request->getVar('email'),
            'password'  => $request->getVar('password')
        ];
        // dd($data);
        $this->UserModel->insert($data);
        return redirect()->to('register');
    }
}
 