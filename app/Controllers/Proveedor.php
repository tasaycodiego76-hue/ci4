<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Proveedor extends BaseController{
    public function index(): string{

       $data = [
            'header' => view(name: 'Partials/header'),
            'footer' => view(name: 'Partials/footer'),
        ];
        return view(name: "Modulos/proveedores",data: $data);
    }
}