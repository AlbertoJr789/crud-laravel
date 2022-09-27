<?php

namespace App\Http\Controllers;

use App\Models\Parametros;
use Illuminate\Http\Request;


class PrincipalController extends Controller
{
    public function index(){

        return view('principal',[
            'registros' => Parametros::paginate(5),
        ]);
    }


}
