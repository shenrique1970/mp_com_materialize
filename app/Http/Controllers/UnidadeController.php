<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    public function unidade()
    {
        return view('site.unidade', ['titulo' => 'Unidade']);
    }
}
