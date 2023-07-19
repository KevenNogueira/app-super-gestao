<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LogAcessesoMiddleware;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{

    public function sobreNos()
    {
        return view('site.sobre-nos');
    }
}
