<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio FSBR</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class='container'>
   <!-- cabeçalho -->
      <div class="card text-center">
        <div class="card-header">
           <h2>Lista do Cadastros</h2>
        </div>
        <div class="card-body">
          <a href="/novo" class="btn btn-primary">Adicionar Cadastro</a>
        </div>
        
      </div>   
      
   <!-- lista -->
   <div class='row'>
      <div class='col-lg-12'>
        <div class="list-group">
        @foreach($resultado['data'] as $item)
          <a href="/alteracao?id={{$item->codigo_cadastro}}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">{{$item->nome_cadastro}}</h5>
              <i class="fas fa-trash-alt"></i>
            </div>
            <p class="mb-1">Número: {{$item->codigo_cadastro}}</p>
            <small class="text-muted">Situação: {{$item->situacao}}</small>
          </a>
        @endforeach  
        </div>
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