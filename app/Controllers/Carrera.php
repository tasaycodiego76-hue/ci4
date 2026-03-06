<?php

namespace App\Controllers;
class Carrera extends BaseController
{


    public function showIngenieria(): string
    {
        //Los métodos en los controladores pueden realizar operaciones complejas
        //una de estas tareas es enviar datos al frontend (vista)
        $lista = array("Javascript", "Python", "Java", "PHP", "SQL");
        return view('ingenieria', ["desarrollador" => "Diego Alonso Tasayco", "lenguajes" => $lista]);
    }



    public function showDesign(): string
    {
        $aplicaciones = ["Photoshop", "Premier", "Corel Draw", "Figma", "SoundBox"];
        return view('design', data: ["aplicaciones" => $aplicaciones]);
    }


}