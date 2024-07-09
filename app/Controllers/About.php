<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'ItCrush About Page';
        return view('about', $data);
    }
}
