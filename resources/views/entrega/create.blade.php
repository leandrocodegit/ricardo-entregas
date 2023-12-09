@extends('entrega/layout')

@section('title', 'Lista de Entregas')

@section('content')
<div class="container mt-3"> 
<form action="{{ url('/entrega/store') }}" method="post">
    @csrf
    <label for="produto">Produto:</label>
    <input type="text" class="form-control" name="produto" required> 

    <label for="cliente">Cliente:</label>
    <input type="text" class="form-control" name="cliente" required> 

    <label for="quantidade">Quantidade:</label>
    <input type="tel" class="form-control" name="quantidade" required> 

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>

<style>
    input{
        margin: 0 0 15px;
    }
</style>

<style>
    button{
        border: none
    }
</style>

@endsection

 