<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'ItCrush | Home Page';
        return view('index', $data);
    }
}
 