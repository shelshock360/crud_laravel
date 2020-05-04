@extends('layout.base')
@section('titulo','Estados')
@section('conteudo')

<div class="container">
    <div class="row">
        <h4 class="center">editar  Estados</h4> 
        <form action ="{{route('admin.estados.atualizar',$estados->id)}}" method="POST">
            {{ @csrf_field() }}
            <input type="hidden" name="_method" value="put">
           @include('admin.estados.form_estados')
            <button class="btn deep-orange">Atualizar</button>
        </form>
    </div>
</div>
@endsection 
