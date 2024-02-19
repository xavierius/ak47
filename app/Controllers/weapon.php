<?php

namespace App\Controllers;

class weapon extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'weapon list'
        ];

        return view('weapon/index', $data);
    }
}