<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parametros;

class ExcluirDadosController extends Controller
{
    public function delete($id){

        $registro = Parametros::findOrFail($id);
     
        $registro->deleted_at = date('Y-m-d H:i:s');
        $registro->update();
        
        return redirect('/principal');
    }
}
