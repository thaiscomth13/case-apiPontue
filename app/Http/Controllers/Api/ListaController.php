<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lista;

class ListaController extends Controller
{
    public function status(){
        return ['status' => 'ok'];
    }

    //create
    public function adicionar(Request $request){
        try {
            $lista = new Lista();
            $lista->nome = $request->nome;

            $lista->save();

            return ['retorno'=>'ok'];
        } catch(\Exception $erro){
            return ['retorno'=>'erro', 'details'=>$erro];
        }
    }

    //read
    public function list(){
        $lista = Lista::all();

        return $lista;
    }

    public function select($id){
        $lista = Lista::find($id);

        return $lista;
    }

    //update
    public function update(Request $request, $id){
        try{
            $lista = Lista::find($id);
            $lista->nome = $request->nome;

            $lista->save();

            return ['retorno'=>'ok', 'data'=>$request->all()];
        } catch(\Exception $erro){
            return ['retorno'=>'erro', 'details'=>$erro];
        }
    }

    //delete
    public function delete($id){
        try{
            $lista = Lista::find($id);
            $lista->delete();

            return ['retorno'=>'ok'];
        } catch(\Exception $erro){
            return ['retorno'=>'erro', 'details'=>$erro];
        }
    }
}
