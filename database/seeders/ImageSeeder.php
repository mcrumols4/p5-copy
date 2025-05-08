<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ImageSeeder extends Seeder
{
    public function run(): void
    {
        Image::create([
            'image' => '/images/pell_grasa_occ.png',
            'page_id' => 4,
        ]);

        Image::create([
            'image' => '/images/Pell_normal.png',
            'page_id' => 5,
        ]);

        Image::create([
            'image' => '/images/Pell_grassa.png',
            'page_id' => 5,
        ]);

        Image::create([
            'image' => '/images/Pell_mixta.png',
            'page_id' => 5,
        ]);

        Image::create([
            'image' => '/images/Pell_sensible.png',
            'page_id' => 5,
        ]);

        Image::create([
            'image' => '/images/Pell_seca.png',
            'page_id' => 5,
        ]);

        Image::create([
            'image' => '/images/Pell_grassa_deshidratada.png',
            'page_id' => 5,
        ]);

        Image::create([
            'image' => '/images/Pell_grassa_ocluida.png',
            'page_id' => 5,
        ]);

        Image::create([
            'image' => '/images/Pell_desvitalitzada_madura.png',
            'page_id' => 5,
        ]);

        Image::create([
            'image' => '/images/Pell_seca_alípica.png',
            'page_id' => 6,
        ]);

        Image::create([
            'image' => '/images/Pell_alípica.png',
            'page_id' => 6,
        ]);

        Image::create([
            'image' => '/images/Pell_grassa.png',
            'page_id' => 9,
        ]);

        Image::create([
            'image' => '/images/Dehydrated-aliptic-skin.png',
            'page_id' => 11,
        ]);

        Image::create([
            'image' => '/images/Dehydrated-oily-skin.png',
            'page_id' => 12,
        ]);

        Image::create([
            'image' => '/images/Pell_mixta.png',
            'page_id' => 14,
        ]);
        
        Image::create([
            'image' => '/images/PellDesvitalitzada.png',
            'page_id' => 15,
        ]);


        Image::create([
            'image' => '/images/acne.png',
            'page_id' => 17,
        ]);

        Image::create([
            'image' => '/images/questionnaricapil·lar.png',
            'page_id' => 18,
        ]);

        Image::create([
            'image' => '/images/sensitive-skin.png',
            'page_id' => 20,
        ]);

        Image::create([
            'image' => '/images/questionaripell.png',
            'page_id' => 21,
        ]);

        Image::create([
            'image' => '/images/questionaripell1.png',
            'page_id' => 21,
        ]);
        
        Image::create([
            'image' => '/images/questionaripell2.png',
            'page_id' => 21,
        ]);

        Image::create([
            'image' => '/images/PellNormal.png',
            'page_id' => 23,
        ]);
    }
}