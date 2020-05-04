@extends('layout.base')
@section('titulo','Estados')
@section('conteudo')

<div class="container">
    <div class="row">
        <h4 class="center">Adicionar  Estados</h4> 
        <form action ="{{route('admin.estados.salvar')}}" method="POST">
            {{ @csrf_field() }}
           @include('admin.estados.form_estados')
            <button class="btn deep-orange">salvar</button>
        </form>
    </div>
</div>
@endsection
