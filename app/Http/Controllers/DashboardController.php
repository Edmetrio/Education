<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function teacher()
    {
        return view('teacher');
    }

    public function aplicar()
    {
        return view('aplicar');
    }

    public function curso()
    {
        return view('curso');
    }

    public function inscricao()
    {
        return view('inscricao');
    }

    public function bolsa()
    {
        return view('bolsa');
    }

    public function online()
    {
        return view('online');
    }

    public function fundacao()
    {
        return view('fundacao');
    }
}
