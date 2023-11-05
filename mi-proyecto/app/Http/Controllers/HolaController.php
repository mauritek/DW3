<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function index()
    {
        $masculino = 'Masculino';
        $femenino = 'Femenino';
        $otros = 'Otros';

        $edad = 18;

        // return view ('pruebas.index') -> with('masculino', $masculino) -> with('femenino', $femenino) -> with('otros', $otros);

        return view('pruebas.index', compact('masculino', 'femenino', 'otros', 'edad'));
    }
}
