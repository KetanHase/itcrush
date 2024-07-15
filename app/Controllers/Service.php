<?php

namespace App\Controllers;

class Service extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'ItCrush | Service Page';
        return view('service', $data);
    }
}
