<?php

namespace App\Controllers;

class Solution extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'ItCrush Solution Page';
        return view('solution', $data);
    }
}
