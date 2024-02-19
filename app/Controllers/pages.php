<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home', 'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Weapon'
        ];

        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'contact us',
            'alamat'=> [
                [
                    'tipe' => 'aya',
                    'alamat' => 'jln.hamburgh no.505',
                    'kota' => 'jerman'
                ],
                [
                    'tipe' => 'adolf',
                    'alamat' => 'jln.berlin no.605',
                    'kota' => 'jerman'
                ],
            ]
        ];
        return view('pages/contact', $data);
    }
}
