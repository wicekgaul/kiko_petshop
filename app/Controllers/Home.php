<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => "PETHSOP | Dashboard"
        ];
        return view('auth/home', $data);
    }
}
