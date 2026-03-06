<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductoModel;

class Producto extends BaseController
{
    public function index(): string
    {
        $producto = new ProductoModel();
        $data = [
            'header' => view(name: 'Partials/header'),
            'productos' => $producto->findAll(),
            'footer' => view(name: 'Partials/footer'),
        ];

        return view("Modulos/productos/index", $data);
    }

    public function create(): string
    {
        $data = [
            'header' => view(name: 'Partials/header'),
            'footer' => view(name: 'Partials/footer'),
        ];

        return view('Modulos/productos/registrar', $data);
    }

    public function registrarProducto()
    {
        $producto = new ProductoModel();

        $producto->insert([
            'tipo' => $this->request->getPost('tipo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'stock' => $this->request->getPost('stock'),
        ]);

        return redirect()->to('/productos');
    }

        /**
         * 
         * 
         * @param mixed $id
         * @return \CodeIgniter\HTTP\RedirectResponse
         */
        public function eliminar($id = null)
    {
        $cliente = new ProductoModel();
        $cliente->delete($id);
        return redirect()->to('/productos');
    }
}