<?php

namespace App\Controllers;

class Habilidades extends BaseController
{
    public function index()
    {
        return view('includes/head')
        .view('includes/navbar')
        .view('habilidades/index')
        .view('includes/footer');
    }

    public function modeloscreados()
    {
        $M_usuario = new M_usuario(); 
        
        $id = $M_usuario->insert(
            [
                "name" => "Aitor",
                "username" => "aitor.ruicar",
                "password" => "1234",
                "role" => "1",
            ]
        );
    }

}
