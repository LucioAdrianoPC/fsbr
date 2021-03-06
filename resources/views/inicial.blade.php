<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class='container'>
   <!-- cabeçalho -->
   <div class='row'>
      <div class='col-lg-12'>
         <button type="button" class="btn btn-primary">Adicionar</button>
      </div> 
   </div>
   <!-- lista -->
   <div class='row'>
      <div class='col-lg-12'>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Situação</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  {{--}
      "codigo_cadastro":1,
      "nome_cadastro":"Cadastro 1 Edtado",
      "situacao":"Excluido",
      "data_criacao":null,
      "data_atualizacao":"2021-02-25 11:49:28",
      "data_exclusao":"2021-02-25 11:49:45"
     --}}
      
  <tbody>
  @foreach($resultado['data'] as $item)
    <tr>
      <td>{{$item->codigo_cadastro}}</td>
      <td>{{$item->nome_cadastro}}</td>
      <td>{{$item->situacao}}</td>
      <td>@mdo</td>
    </tr>
  @endforeach
  </tbody>
  
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    
    @foreach($resultado['data'] as $item)
    
    <li class="page-item"><a class="page-link" href="?page=1">1</a></li>

    @endforeach
    
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
      </div> 
   </div>


</div>
</body>
</html>