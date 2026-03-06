<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "apellidos"  =>"Tasayco Huaccamayta",
                "nombres"    =>"Diego Alonso",
                "dni"        => "74890089",
                "telefono"   => "987654321"
            ],
             [
                "apellidos"  =>"Juan Gabriel",
                "nombres"    =>"Lopez torres",
                "dni"        => "84758865",
                "telefono"   => "963524132"
            ],
           [
                "apellidos"  =>"Ricales Cordova",
                "nombres"    =>"Maria Isabel",
                "dni"        => "74392284",
                "telefono"   => "986253421"
            ]
        ];
        $this->db->table("clientes")->insertBatch($data);
    }
}
