@extends('layout.base')
@section('titulo','Estados')
@section('conteudo')
    
 

<div class="container"> 
    <h4 class="center">Lista  De Cursos</h4>
    <div class="row">
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sigla</th>
                <th>Opções</th>
            </tr> 
            </thead>
            <tbody>
                @foreach($estados as $estado)
                <tr>
                    <td>{{$estado->idest}}</td> 
                    <td>{{$estado->nome}}</td>
                    <td>{{$estado->sigla}}</td>
                   <td>
                       <a class="btn grey darken-4" href="{{route('admin.estados.editar',$estado->id)}}">editar</a>
                   </td>

                   <td>
                    <a class="btn red" href="{{route('admin.estados.excluir',$estado->id)}}">excluir</a>
                </td>
                   
                  

                 
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    <div class="row">
        <a class="btn blue" href="{{route('admin.estados.adicionar')}}">Adicionar</a>

    </div>
 
    
</div>
  

@endsection    