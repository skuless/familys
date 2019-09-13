<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(auth()->check() === false)
        {
            return view('auth.login');

        }else {

            return view('welcome');

        }
    }

    public function carnet() {
        if(auth()->check() === false)
        {
            return view('auth.login');
            
        }else {

            return view('table.carnet');

        }

    }
    
    public function formTel() {
        if(auth()->check() === false)
        {
            return view('auth.login');
            
        }else {

            return view('form.tel');

        }
    }

    public function formRegistre() {
        if(auth()->check() === false)
        {
            return view('auth.login');
            
        }else {
            
            return view('form.registre');
        }
    }

    public function formComptabilite() {
        if(auth()->check() === false)
        {
            return view('auth.login');

        }else {
            return view('form.comptabilite');
        }
    }

}
