<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parametros;
use Session;

class EditarDadosController extends Controller
{

    public function index($id){
        return view('principal',['registros' => Parametros::where('deleted_at','=',null)->paginate(5),'registroEdit' => Parametros::findOrFail($id)]);      
    }

    public function edit(Request $request,$id){
        
        $registro = Parametros::findOrFail($id);
        
        $registro->chave = $request->chave;
        $registro->valor = $request->valor;
        $registro->valor2 = $request->valor2;
        $registro->user_editou_id = 1;
        $registro->update();
        
        return redirect('/principal')->with('mensagem','Registro editado com sucesso !');

    }
}
