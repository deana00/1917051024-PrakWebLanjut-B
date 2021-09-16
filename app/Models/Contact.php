<?php

namespace App\Models;

use CodeIgniter\Model;

class Contact extends Model
{
    public static function getContact()
    {
        return [
            'nama' => 'Nabil',
            'nohp' => '08123456789'
        ];
    }
}
