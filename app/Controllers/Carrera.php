<?php

namespace App\Controllers;
class Carrera extends BaseController{


public function showIngenieria(): string 
{
    return view('ingenieria');
} 



public function showDesign(): string 
{
    return view('design');
}


}