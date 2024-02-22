<?php

namespace App\Controllers;

class landing extends BaseController
{
    public function index(): string
    {
        return view('Landingpage');
    }
}
