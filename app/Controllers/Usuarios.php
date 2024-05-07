<?php

namespace App\Controllers;


class Usuarios extends BaseController
{
    
    public function index()
    {
        // busca todos los usuarios del modelo UsuariosModel
        $usuarios = model('UsuariosModel')->findAll();

        //da un estaus a la respuesta
        $this->response->setStatusCode(200, 'OK');

        // cuerpo de la respuesta
        return $this->response->setJSON(
            [
                'message' => 'busqueda existosa',
                'data' => $usuarios
            ]
        );
    }
}