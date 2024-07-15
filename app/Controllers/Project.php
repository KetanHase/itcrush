<?php

namespace App\Controllers;

class Project extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'ItCrush | Project Page';
        return view('project', $data);
    }
}
