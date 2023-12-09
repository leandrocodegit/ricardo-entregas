@extends('entrega/layout')

@section('title', 'Lista de Entregas')

@section('content')
<div class="mt-3"> 
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

<div class="mt-3">
  <h2 class="mb-4">Entregas de hoje</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Produto</th>
        <th>Cliente</th>
        <th>Qtd.</th>
        <th>Data</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($entregas as $entrega)
      <tr>
            <td>{{ $entrega->produto }}</td>
            <td>{{ $entrega->cliente }}</td>
            <td>{{ $entrega->quantidade }}</td> 
            <td>{{ $entrega->created_at }}</td>
            <td>
            <form action="{{ url('/entrega/create/' . $entrega->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" style="background:none;width: 10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg>
                    </button>
                </form>

</td>
</tr>
    @endforeach
    </tbody>
  </table>
</div>

<style>
    input{
        margin: 0 0 15px;
        max-width: 400px;
    }
</style>

<style>
    button{
        border: none;
        width: 200px;
    }
    @media (max-width: 600px) {
        button{
        width: 100%;
    } 
}
</style>

@endsection

 