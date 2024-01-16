<?php

namespace App\Http\Controllers;

use App\Models\Contatos;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

class ContatosController extends Controller
{
    Public function show(){
        $contatos=DB::select('select* from Contatos');
        return view('contatos.show')->with('rosario',$contatos);
    }

    Public function create(){
         
        return view('contatos.create');
    }

    Public function store(){
         $nome=Request::input('nome');
         $contato=Request::input('contato');
         $email=Request::input('email');
         

         $resposta=DB::insert('insert into Contatos(nome, contato,email) values(?,?,?)',array($nome,$contato,$email));
         return redirect()->route('listar_contatos')->with('success', 'Contato cadastrado com sucesso'); 
            
    }

    Public function destroy($id){
        
        $resposta=DB::delete('delete from Contatos where id=?', [$id]);
        return redirect()->route('listar_contatos')->with('success', 'Produtos eliminados com sucesso'); 
        
   }

   Public function edit($id){
        
    $resposta=DB::select('select* from Contatos where id=?', [$id]);
    if(empty($resposta)){
        return 'contato inexistente';
    }
    return view('contatos.editar', ['contato'=>$resposta[0]]);
    
}

Public function update($id){
    $nome=Request::input('nome');
    $contato=Request::input('contato');
    $email=Request::input('email');
    

    DB::update('update Contatos set nome=?, contato=?, email=? where id=?',[$nome,$contato,$email,$id]);
    return redirect()->route('listar_contatos')->with('success', 'Produtos actualizado  com sucesso'); 
       
}

}
