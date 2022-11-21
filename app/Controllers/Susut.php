<?php

namespace App\Controllers;

class susut extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tabel Susut'
        ];

        return view('Susut/index', $data);
    }

    public function maps()
    {
        $data = [
            'title' => 'maps'
        ];

        return view('Susut/maps', $data);
    }
}
