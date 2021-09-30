<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        $model = model('PostModel');

        $kategori = ['nature', 'programming', 'machine-learning', 'sport', 'volunteer', 'life'];

        $model->insert([
            'judul'    => static::faker()->sentence(),
            'slug'     => static::faker()->unique()->slug(3),
            'author'   => static::faker()->name(),
            'gambar'   => null,
            'kategori' => $kategori[0],
            'deskripsi' => static::faker()->text()
        ]);
    }
}
