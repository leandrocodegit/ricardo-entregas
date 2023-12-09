<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Produto</th>
        <th>Cliente</th>
        <th>Quantidade</th>
        <th>Data</th>
      </tr>
    </thead>
    <tbody>
      @foreach($entregas as $entrega)
      <tr>
            <td>{{ $entrega->produto }}</td>
            <td>{{ $entrega->cliente }}</td>
            <td>{{ $entrega->quantidade }}</td> 
            <td>{{ $entrega->created_at }}</td>
</tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
