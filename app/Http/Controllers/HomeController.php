<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return View('layout.index');
    }

    public function perfil(){
        return View('perfil');
    }

    public function post(){
        return View('post');
    }
}
