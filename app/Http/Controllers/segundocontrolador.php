<?php

namespace App\Http\Controllers;
use Iluminate\Http\Request;
class SegundoControlador extends Controller{
    
    function index(){
        return view ('contact',['name' => 'Leydy martinez']);
    }
}