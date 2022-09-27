<?php

namespace App\Http\Controllers;

use App\Models\Parametros;
use Illuminate\Http\Request;

class InserirDadosController extends Controller
{
    public function index(){
        return view('inserir');
    }

    public function store(){

        Parametros::create(
            request()->validate([
            'chave' => 'required',
            'valor' => 'required',
            'valor2' => 'required',
            ])
        );

        return back()->with('sucesso','Dados inseridos com sucesso');

    }

}
