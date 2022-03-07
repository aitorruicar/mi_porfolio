<?php

namespace App\Controllers;

class Experiencia extends BaseController
{
    public function index()
    {
        return view('includes/head')
        .view('includes/navbar')
        .view('experiencia/index')
        .view('includes/footer');
    }

}