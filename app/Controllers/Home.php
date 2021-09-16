<?php

namespace App\Controllers;

use App\Models\Contact;

class Home extends BaseController
{
    public function index()
    {
        $data = Contact::getContact();
        return view('welcome_message', $data);
    }
}
