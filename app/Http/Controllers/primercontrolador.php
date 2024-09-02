<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class primercontrolador extends Controller
{
    function index(){
        return view('contact',['name' => 'leydy']);
    }
    function otro($post=23,$otro=-79){
        echo $post;
        echo $otro;
    }
}