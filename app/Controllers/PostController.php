<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PostController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Blog - Posts'
        ];
        echo view('layout/header', $data);
        echo view('layout/navbar');
        echo view('v_posts');
        echo view('layout/footer');
    }
}
