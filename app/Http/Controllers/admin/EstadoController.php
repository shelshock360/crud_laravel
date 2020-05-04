<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estado;

class EstadoController extends Controller
{
    //

     public function index()
    {
        $estados=Estado::all();
        return view('admin.estados.index',compact('estados'));
    }

    public function adicionar(){


        return view('admin.estados.adicionar');
    }

    public function salvar(Request $req){

        $dados= $req->all();

        Estado::create($dados); 
        return redirect()->route('admin.estados');

    }

    public function atualizar(Request $req,$id){

        $dados= $req->all();

         Estado::find($id)->update($dados); 
        return redirect()->route('admin.estados');

    }
   
    
    public function editar($id){

        $estados = Estado::find($id);
        return view('admin.estados.editar',compact('estados'));

    }


   

    public function excluir($id){

        Estado::find($id)->delete();
     
        return redirect()->route('admin.estados');

    }


}
