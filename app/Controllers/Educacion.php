<?php

namespace App\Controllers;

class Educacion extends BaseController
{
    public function index()
    {
        return view('includes/head')
        .view('includes/navbar')
        .view('educacion/index')
        .view('includes/footer');
    }

}